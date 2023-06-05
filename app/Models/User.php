<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use HasFactory;

    // Описывает отношение между пользователем и заказами
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
