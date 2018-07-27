<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('profile')->except('show');
    }

    public function show (User $user) 
    {
        
        return view('profile.show', compact('user'));
    }

    public function edit(User $user)
    {
        return view('profile.edit', compact('user'));
    }

    public function update(User $user)
    {
        if(request('username') != $user->username)
        {
            $this->validate(request(),[
                'username' => 'unique:users|min:4|max:20',
                'bio' => 'max:120',
                'interests' => 'max:120',
                'location' => 'max:30'
            ]);
        } else {
            $this->validate(request(),[
                'bio' => 'max:120',
                'interests' => 'max:120',
                'location' => 'max:30',
                'image'=> 'mimes:jpeg,jpg,bmp,png|dimensions:min_width=100,min_height=100,max_width:500,max_height:500'
            ]);
        }

        if(request('image')){

            $uploadedImage = request('image');
            $imageName = $user->id . time() . "." . $uploadedImage->getClientOriginalExtension();
            Storage::disk('public')->put("users_profile_image/$imageName", file_get_contents($uploadedImage));
        }
        else {
            $imageName = null;
        }
        
        
        User::where('id', $user->id)
                ->update([
                    'username' => request('username'),
                    'bio' => request('bio'),
                    'interests' => request('interests'),
                    'location' => request('location'),
                    'image' => $imageName
                    
                ]);

        return redirect()->route('profile', $user->id)->with([
                        'message'=>'Profile updated',
                        'style' => 'success'
                ]);
    }
}
