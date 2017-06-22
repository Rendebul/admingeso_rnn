<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

use App\ArchivoCarga;
use App\User;

use App\Notifications\StoreCsvDataNotification;
use Carbon\Carbon;

class ProcessCsvEvent implements ShouldBroadcast
{
    use InteractsWithSockets, SerializesModels;

    public $archivo;
    public $user;
    public $broadcastQueue = 'pusher_carga_archivos';

    public function __construct(ArchivoCarga $archivo, User $user)
    {
        $this->archivo = $archivo;
        $this->user = $user;
    }

    public function broadcastOn()
    {
        return new Channel('rrhh-minsal.' . $this->user->id);
    }

    public function broadcastWith()
    {
        $this->addUserToArchivo();
        $notificationData = $this->createMessage(true);
        $this->user->notify(new StoreCsvDataNotification($notificationData));
        return $this->createBroadcastMessage();
    }

    public function broadcastAs()
    {
        return 'carga-archivos';
    }

    private function createBroadcastMessage()
    {
        return [
            'mensaje' => $this->createMessage(false)['message'],
            'archivo' => $this->archivo,
            'tipo_archivo' => $this->tipoArchivo($this->archivo->tipo_archivo),
        ];
    }

    private function createMessage($isNotification)
    {
        if ($this->archivo->estado_carga == 'Completado') {
            return $this->successMessage();
        } elseif ($this->archivo->estado_carga == 'En proceso') {
            return $this->processingMessage();
        } else {
            return $this->failMessage($isNotification);
        }
    }

    private function failMessage($isNotification)
    {
        $message = 'La tabla ' . $this->tipoArchivo($this->archivo->tipo_archivo) .
            ' no ha podido ser ingresada al sistema. ';

        if ($isNotification) {
            $message .= 'Razón: ' . $this->archivo->mensaje;
        }

        return [
            'message' => $message,
            'icon' => 'fa-times',
        ];
    }

    private function addReason()
    {
        return 'Razón: ' . $this->archivo->mensaje;
    }

    private function successMessage()
    {
        $message = 'La tabla ' . $this->tipoArchivo($this->archivo->tipo_archivo) .
            ' ha sido ingresada exitosamente al sistema.';
        return [
            'message' => $message,
            'icon' => 'fa-check',
        ];
    }

    private function processingMessage()
    {
        $message = 'La tabla ' . $this->tipoArchivo($this->archivo->tipo_archivo) .
            ' está en proceso de ser leída por el sistema.';
        return [
            'message' => $message,
            'icon' => 'fa-eye',
        ];
    }

    private function tipoArchivo($tipo)
    {
        if ($tipo == 'datos') {
            return 'Datos';
        }
        return 'Otro';
    }

    private function addUserToArchivo()
    {
        $this->archivo['user'] = $this->user;
    }
}