<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $guarded = []; //разрешение на добавление объектов в бд
    // protected $guarded = false; //разрешение на добавление объектов в бд
    // protected $fillable = ['title', 'content'];
}
