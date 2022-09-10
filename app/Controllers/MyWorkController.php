<?php

namespace App\Controllers;

use App\Controllers\Controller;


class MyWorkController extends Controller
{
    public function index()
    {
        $data_json = file_get_contents('resources/js/data.json');
        //return view('pages.home', ['users' => $users]);
        return view('pages.work', compact('data_json'));

    }
}