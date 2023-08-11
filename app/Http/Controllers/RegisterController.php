<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Utama;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{

    public function daftarlinked()
    {
        return view('pendaftaran/daftarlinked');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nik' => ['required', 'min:1', 'max:255'],
            'ktp' => ['required', 'min:1', 'max:255'],
            'nama' => 'required|max:255',
            'tglLahir' => 'required|max:255',
            'password' => 'required|min:1|max:255',
            'nik_id' => ['required', 'min:1', 'max:255'],
            'nama_id' => 'required|max:255',
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);

        $p = random_int(10000, 500000);
        return redirect('autentikasi')->with('success', 'Kode: HK-3'. $p);
        // return redirect('/masuk')->with('success', 'Pendaftaran Berhasil Silahkan Login!');
    }

    public function isi()
    {
        return view('pendaftaran/isi');
    }

}
