<?php

namespace App\Controllers;

use App\Controllers\Controller;


class SecretController extends Controller
{
    public function index()
    {
        //return view('pages.home', ['users' => $users]);
        return view('pages.secret');

    }
}