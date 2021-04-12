<?php

namespace App\Models;

use GuzzleHttp\Promise\Create;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'fullacces',
        'password',
        'matricula'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // Evento que se ejecuta cuando un usuario es creado

    protected static function boot()
    {
        parent::boot();

        // Asignar el perfil una vez se haya creado un usuario nuevo
        static::created(function ($user) {
            if ($user->fullacces != 'yes')
                $user->alumno()->create();
            else
                $user->administrador()->create();
        });
    }


    // Relacion 1:1 de Usuario y Perfil
    public function alumno()
    {
        return $this->hasOne(Alumno::class);
    }

    // Relacion 1:1 de Usuario y Perfil
    public function administrador()
    {
        return $this->hasOne(Administrador::class);
    }
}