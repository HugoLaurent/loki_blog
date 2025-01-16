<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';
    protected $fillable = ['title', 'author', 'image', 'content', 'start_article', 'slug', 'category_id'];
    public $timestamps = true;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
