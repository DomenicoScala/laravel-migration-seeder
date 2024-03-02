<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $firstName = 'Gino';
        $lastName = 'Paoli';


        return view('welcome', [
            'firstName' => $firstName,
            'lastName' => $lastName,
        ]);
        // return view('welcome', compact('firstName', 'lastName'));
    }

    public function about()
    {
        return view('about');
    }
}
