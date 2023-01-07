<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    public $timestamps = false;
    protected $table = 'categories';

    protected $fillable = [
    'category',
    'Post_postId',
    ];

}
