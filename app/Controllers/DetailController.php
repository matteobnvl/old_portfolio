<?php

namespace App\Controllers;

use App\Controllers\Controller;


class DetailController extends Controller
{
    public function index()
    {
        $data_json = file_get_contents('resources/js/data.json');
        $data_json = json_decode($data_json,true);

        foreach ($data_json['projet'] as $projet) {
            if ($_GET['projet'] == $projet['title']){
                $data_projet = $projet; 
            }
        }
        //return view('pages.home', ['users' => $users]);
        return view('pages.detail', compact('data_projet'));

    }
}