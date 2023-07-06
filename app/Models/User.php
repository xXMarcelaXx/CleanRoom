<?php

namespace App\Models;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticable
{
    use HasApiTokens,HasFactory,Notifiable;
    use HasRoles;

    protected $filliable =[
        'IBM',
        'firstname',
        'lastname',
        'email',
        'password'
    ];


    protected $hidden =[
        'password',
        'remember_token'
    ];
}
