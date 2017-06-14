<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'article';
    protected $primaryKey = 'id_article';
    protected $fillable = ['title', 'content', 'author', 'image'];
}
