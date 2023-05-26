<?php

namespace App\Http\Controllers;

class LoginController extends Controller
{
    public function index()
    {
        return view('usrs.login');
    }

    public function log()
    {
//        dump(request()->all());
        $data = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
//        dd($data);
        if (!auth()->attempt($data, true)) {
            return back()
                ->withErrors([
                    'email' => "Ne podhodit((("
                ]);
        }

        return redirect(route('main'));
    }

    public function logout()
    {
        auth()->logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect(route('main'));
    }
}
