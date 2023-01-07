<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Views extends Model
{
    public $timestamps = false;
    protected $table = 'views';

    protected $fillable = [
        'viewId',
        'viewTimestamp',
        'viewDuration',
        'isLiked',
        'impression_impressionId',
        'impression_Post_postId',
    ];

}
