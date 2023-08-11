<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RelasiController extends Controller
{
    public function view1()
    {
        return view('relasi/view1');
    }

    public function view2()
    {
        return view('relasi/view2');
    }

    public function view3()
    {
        return view('relasi/view3');
    }

    public function autentikasi()
    {
        return view('relasi/autentikasi');
    }


}
