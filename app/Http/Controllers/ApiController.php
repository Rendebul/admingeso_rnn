<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ApiController extends Controller
{
    protected $statusCode = Response::HTTP_OK;

    public function respond(array $data, array $headers = [])
    {
        return response()->json($data, $this->getStatusCode(), $headers);
    }

    public function respondIndex($query)
    {
        return request()->has('page') ? $query->paginate() : $query->get();
    }

    public function respondWithValidationErrors(array $errors)
    {
        return $this->setStatusCode(Response::HTTP_UNPROCESSABLE_ENTITY)->respond([
            'errors' => $errors
        ]);
    }

    public function respondStore($message = 'Creación exitosa!')
    {
        return $this->respond([
            'message' => $message
        ]);
    }

    public function respondUpdate($message = 'Edición exitosa!')
    {
        return $this->setStatusCode(Response::HTTP_ACCEPTED)->respond([
            'message' => $message
        ]);
    }

    public function respondDestroy($message = 'Eliminación exitosa!')
    {
        return $this->setStatusCode(Response::HTTP_ACCEPTED)->respond([
            'message' => $message
        ]);
    }

    public function respondWithInternalServerError($message = 'Internal Server Error')
    {
        return $this
            ->setStatusCode(Response::HTTP_INTERNAL_SERVER_ERROR)
            ->respond([
                'error' => $message
            ]);
    }

    public function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;
        return $this;
    }

    public function getStatusCode()
    {
        return $this->statusCode;
    }
}
