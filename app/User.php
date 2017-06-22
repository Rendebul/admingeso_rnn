<?php

namespace App;

use App\Notifications\ResetPassword;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;
use App\Filters\Filterable;

class User extends Authenticatable
{
    use Notifiable, HasRoles, Filterable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'api_token',
        'cargo',
        'telefono'
    ];

    protected $hidden = [
        'password',
        'remember_token',
        'api_token',
    ];

    public function updateToken()
    {
        $this->attributes['api_token'] = str_random(60);

        return $this;
    }

    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPassword($token));
    }
}
