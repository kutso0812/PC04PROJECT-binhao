<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('header').view('home').view('footer');
    }
}
