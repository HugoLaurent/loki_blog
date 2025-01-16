<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = ['name', 'description'];
    public $timestamps = true;

    public function articles()
    {
        return $this->hasMany(Article::class);
    }
}
