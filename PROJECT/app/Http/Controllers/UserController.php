<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function register(Request $request){
        $incomingFields = $request -> validate([
            'name' => ['required','min:3','max:10', Rule::unique('users','name')],
            'email' => ['required','email', Rule::unique('users','email')],
            'password' => ['required','min:4','max:10']
        ]);
        $incomingFields['password'] = bcrypt($incomingFields['password']);
        $user = User::create($incomingFields);
        auth() -> login($user);
        return redirect('/');
    }

    public function logout(){
        auth() -> logout();
        return redirect('/');
    }

    public function login(Request $request){
        $incomingFields = $request -> validate([
            'email_login' => 'required',
            'password_login' => 'required'
        ]);

        if (auth()->attempt(['email' => $incomingFields['email_login'], 'password' => $incomingFields['password_login']])) {
            // verification
            // if (auth()->check()) {
                $request->session()->regenerate();
            // }
        }
        
        return redirect('/');
    }

}
