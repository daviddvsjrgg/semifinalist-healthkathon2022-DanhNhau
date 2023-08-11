<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{

	public function login()
	{
		return view('pendaftaran/masuk');
	}


    public function logout(Request $request)
    {
        return redirect('/');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'ktp' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt(['ktp' => $request->ktp, 'password' => $request->password])) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return redirect('masuk');
    }

}
