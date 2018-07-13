<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = ['user_id','name','description'];

    public function user () 
    {
        return $this->belongsTo(User::class);
    }

    public function posts () 
    {
        return $this->hasMany(Post::class);
    }

    public function users ()
    {
        return $this->belongsToMany(User::class);
    }

   
    public function incrementPostsCount()
    {
        $this->posts_count++;
        $this->save();
    }

    public function decrementPostsCount()
    {
        $this->posts_count--;
        $this->save();
    }
}
