<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\User_Purchased_Content;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AuthController extends Controller
{
    //
    public function store(Request $request){
        //Validate the request
        $fields =$request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'country' => ['required', 'string', 'max:255'],
            'birthday' => ['required', 'date'],
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'email' => ['required', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed'],
            'avatar' => ['file','nullable', 'mimes:jpeg,png,jpg,gif', 'max:2000'],
        ]);
        //store avatar
        if($request->hasFile('avatar')){
            $fields['avatar'] = Storage::disk('public')->put('avatars', $request->file('avatar'));
        }
        //Store the user in the database
        $user = User::create($fields);
        User_Purchased_Content::create([
            'user_id' => $user->id
        ]);


        //Login the user
        Auth::login($user);

        //Redirect the user
        return redirect()->route('profile');
    }
    
    public function login (Request $request){
        $fields = $request->validate([
            'email' => ['required', 'email', 'max:255'],
            'password' => ['required', 'max:20']
        ]);

        if(Auth::attempt($fields, $request->remember)){
            $request->session()->regenerate();
            return redirect()->intended(route('profile'));
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('landing');
    }
}
