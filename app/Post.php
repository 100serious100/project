<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;

    protected $table = 'posts';
    protected $guarded = []; //разрешение на добавление объектов в бд
    // protected $guarded = false; //разрешение на добавление объектов в бд
    // protected $fillable = ['title', 'content'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
