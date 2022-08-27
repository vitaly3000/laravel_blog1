<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    use HasFactory;

    // название таблицы
    protected $table = "posts";
    // Выключить защиту от добавления элементов
    protected $guarded = false;

    // Указать какие свойства могут добавить
    //protected $fillable = ['title'];
}
