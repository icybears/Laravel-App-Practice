<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Post extends Model
{
    protected $fillable = ['body','user_id','room_id'];

    
    public function user () 
    {
        return $this->belongsTo(User::class);
    }

    public function comments ()
    {
        return $this->hasMany(Comment::class);
    }

    public function room () 
    {
        return $this->belongsTo(Room::class);
    }

    public function incrementCommentsCount()
    {
        $this->comments_count++;
        $this->save();
    }

    public function decrementCommentsCount()
    {
        $this->comments_count--;
        $this->save();
    }

    public function deleteComments()
    {
        foreach( $this->comments as $comment)
        {
            $comment->user->decrementCommentsCount();
            
            DB::table('comments')->where('id', $comment->id)
            ->delete();        
        }
    }

    public function getShortBody($max_chars = 120)
    {
        return str_limit($this->body, $max_chars, ' (...)');
    }
}
