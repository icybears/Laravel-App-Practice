<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password','room_id','bio','interests','location'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function room ()
    {
        return $this->hasOne(Room::class);
    }

    public function rooms ()
    {
        return $this->belongsToMany(Room::class);
    }

    public function isSubscribedTo(Room $room)
    {
       $rooms = DB::table('room_user')->where('user_id', $this->id)->pluck('room_id');
      
      return $rooms->contains($room->id);
       
     
    }
    public function posts ()
    {
        return $this->hasMany(Post::class);
    }
   
    public function getImage()
    {
        if( ! $this->image){
            return;
        }
        //  Storage::url($this->image));
        return Storage::url('users_profile_image/' . $this->image);
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
    public function resetPostsCount()
    {
        $this->posts_count = 0;
        $this->save();
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
    public function resetCommentsCount()
    {
        $this->comments_count = 0;
        $this->save();
    }

}
