<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property-read string $name ФИО
 * @property-read string $text Сообщение
 * @property-read string $email Почта
 */
class Feedback extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'text'
    ];

}
