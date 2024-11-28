<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * Doldurula bilən sahələr.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'phone',
        'avatar',
        'role',
        'password',
    ];

    /**
     * Gizli sahələr.
     *
     * Bu sahələr JSON cavabında göstərilməyəcək.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Type-casting.
     *
     * Bu sahələr avtomatik olaraq təyin olunan verilən tipinə çevriləcək.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * İstifadəçinin admin olub-olmadığını yoxlamaq üçün əlavə edilmiş metod.
     *
     * @return bool
     */
    public function isAdmin()
    {
        return $this->role === 'admin';
    }
}
