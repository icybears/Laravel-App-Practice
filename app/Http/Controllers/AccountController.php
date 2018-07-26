<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Hash;
use App\User;

class AccountController extends Controller
{
    public function index ()
    {
        return view('account');
    }
    public function changeEmail()
    {
        $this->validate(request(),
        [
            'new-email' => 'unique:users,email',
        ]);

        if( Hash::check(request('password'), auth()->user()->password ) )
        {
            
            User::where('id', auth()->id())
                ->update(['email' => request('new-email')]);
            
            return back()->with(
                        ['message' =>'Email changed successfully',
                        'style' => 'success'
                        ]);
        
        } else {
            return back()->withErrors('Invalid Password');
        }


    }

    public function changePassword()
    {

        $this->validate(request(),
        [
            'newPassword' => 'required|min:8|max:30|confirmed',
        ]);

        if(Hash::check(request('password'), auth()->user()->password ))
        {
            User::where('id', auth()->id())
                ->update(['password' => bcrypt(request('newPassword'))]);
            
                return back()->with(
                    ['message' =>'Password changed successfully',
                    'style' => 'success'
                    ]);
        
        } else {

            return back()->withErrors('Invalid Password');

        }

    }
}
