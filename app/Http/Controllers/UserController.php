<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function register(Request $request){
        $incomming=$request->validate([
            'name'  => ['required', 'min:3','max:18',Rule::unique('users','name')],
            'email' => ['required','email', Rule::unique('users','email')],
            'password'  => ['required','min:2','confirmed'],
            ]);
        User::create($incomming);
        return redirect('/register')->with('success', 'Registration sucess. Please Login.');
    }
    public function login(Request $request){
        $incomming=$request->validate([
            'name'=> 'required',
            'password'=> 'required',
        ]);
            
            if (auth()->attempt(['name' =>$incomming['name']],['password' =>$incomming['password'],]))
            {
                $request->session()->regenerate();
                return redirect()->intended('dashboard');
            }
            else
            {
                
            }

     
    }
}

