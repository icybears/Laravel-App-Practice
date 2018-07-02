<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class SessionsController extends Controller
{
    public function create () 
    {
      return view('/login');
    }
  
    public function store (Request $request) 
    {
        
        $credentials = $request->only('email', 'password');
        
                if (auth()->attempt($credentials)) {
                    
                    return redirect()->to('home');
                }

                return back()->with(['message' => 'Invalid email or password', 'style' => 'danger']);
    }
}
