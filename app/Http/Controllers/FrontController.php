<?php

namespace App\Http\Controllers;


class FrontController extends Controller
{
    public function index ()
    {
        return view('client/index');
    }
    public function home ()
    {
        return view('client/home');
    }

}
