<?php

namespace App\Controllers;

use App\Controllers\Controller;
use App\Models\Contact;


class ContactController extends Controller
{
    public function index()
    {
        $valide = $this->verifFormContact();

        //return view('pages.home', ['users' => $users]);
        return view('pages.contact',compact('valide'));

    }

    private function verifFormContact(){
        if (!empty($_POST)) {
            if ($_POST['lastname'] != "" &&
                $_POST['firstname'] != "" &&
                $_POST['subject'] != "" &&
                $_POST['email'] != "" &&
                filter_var($_POST['email'],FILTER_VALIDATE_EMAIL) &&
                $_POST['message'] != "" ){
                    $valide = True;
                    return Contact::sendMail($_POST);
            }
        }
    }
}