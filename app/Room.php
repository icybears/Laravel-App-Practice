<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = ['user_id'];

    public function user () 
    {
        return $this->belongsTo(User::class);
    }

    public function posts () 
    {
        return $this->hasMany(Post::class);
    }
}
