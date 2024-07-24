<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasFactory, HasApiTokens, Notifiable;

//    /**
//     * The attributes that are mass assignable.
//     *
//     * @var array<int, string>
//     */
    protected $fillable = [
        'name',
        'email',
        'password'
    ];

    protected $hidden = [
        'passowrd',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at'=>'datetime',
    ];

}