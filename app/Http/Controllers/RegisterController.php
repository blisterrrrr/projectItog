<?php

namespace App\Http\Controllers;

use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('usrs.register');
    }

    public function save()
    {
        $validf = request()->validate([
            'email' => 'required|email|unique:users',
            'name' => 'required',
            'password' => 'required'
        ]);
        //dd(request()->all());

        $user = User::create($validf);
        if($user){
            auth()->login($user);
            return redirect(route('main'));
        }
        return redirect(route('register'))->withErrors([
            'formError' => "Ошибка при сохранении"
        ]);
    }
}
