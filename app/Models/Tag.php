<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tag extends Model
{
    use HasFactory;
    use SoftDeletes;

    // название таблицы
    protected $table = "tags";
    // Выключить защиту от добавления элементов
    protected $guarded = false;

    // Указать какие свойства могут добавить
    //protected $fillable = ['title'];
}
