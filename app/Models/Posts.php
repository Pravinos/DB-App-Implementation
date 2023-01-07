<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    public $timestamps = false;
    protected $table = 'posts';

    protected $fillable = [
        'postId',
        'title',
        'duration',
        'description',
        'resolution',
        #'postTimestamp',
        'Channel_channelId',
    ];

    public function scopeById($query, $postId)
    {
        return $query->where('postId', $postId);
    }

}
