<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubscribeEmail extends Model
{
    protected $fillable = ['full_name', 'email', 'phone'];
}
