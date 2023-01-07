<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppUsers extends Model
{
    public $timestamps = false;
    protected $table = 'app_users';

    protected $fillable = [
    'userId',
    'username',
    'yearOfBirth',
    'gender',
    'country',
    ];

}
