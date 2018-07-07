<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showMessage($number = null)
    {
        return view('showMessage', ["num" => $number]);
    }

    public function showForm()
    {
        return view('showForm');
    }

    public function store(Request $request)
    {
        dump($request->all());
    }
}
