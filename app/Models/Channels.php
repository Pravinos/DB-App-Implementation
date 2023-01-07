<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Channels extends Model
{
    public $timestamps = false;
    protected $table = 'channels';

    protected $fillable = [
        'channelId',
        'channelName',
        'creationDate',
        'channelDescription',
        'User_userId',
    ];


}
