<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use MongoDB\Laravel\Eloquent\Model; // Gunakan Model dari MongoDB Laravel

class User extends Model implements AuthenticatableContract // Implementasikan Authenticatable
{
    use Authenticatable, HasApiTokens, HasFactory, Notifiable;

    protected $collection = 'users'; // Nama collection di MongoDB Atlas

    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'no_hp',
        'alamat',
        'jenis_kelamin',
        'status'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    // Tambahkan metode yang diperlukan oleh Laravel Authentication
    public function getAuthIdentifierName()
    {
        return '_id'; // Gunakan _id karena MongoDB tidak pakai id seperti MySQL
    }

    public function getAuthIdentifier()
    {
        return $this->_id;
    }

    public function getAuthPassword()
    {
        return $this->password;
    }

    public function getRememberToken()
    {
        return $this->remember_token;
    }

    public function setRememberToken($value)
    {
        $this->remember_token = $value;
    }

    public function getRememberTokenName()
    {
        return 'remember_token';
    }
}
