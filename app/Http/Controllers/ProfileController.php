<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfileController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
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
                'location' => 'max:30'
            ]);
        }

        User::where('id', $user->id)
                ->update([
                    'username' => request('username'),
                    'bio' => request('bio'),
                    'interests' => request('interests'),
                    'location' => request('location')
                ]);

        return redirect()->route('profile', $user->id)->with('message','Profile updated');
    }
}
