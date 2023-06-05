<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    // Указывает, какие поля могут быть заполнены массовым назначением
    protected $fillable = ['client', 'amount', 'payment_method', 'delivery'];

    // Описывает отношение между заказом и продуктами
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

    // Описывает отношение между заказом и пользователем
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
