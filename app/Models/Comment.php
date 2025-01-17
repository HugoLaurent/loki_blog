<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';
    protected $fillable = ['article_id', 'name', 'email', 'message'];
    public $timestamps = true;

    public function article()
    {
        return $this->belongsTo(Article::class, 'article_id');
    }
}
