<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Hospital extends Model
{
    /** @use HasFactory<\Database\Factories\HospitalFactory> */
    use HasFactory, Notifiable;

    protected $fillable = [
        'hospital_name',
        'license_number',
        'contact_person',
        'phone_number',
        'email',
        'password',
        'verified',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
