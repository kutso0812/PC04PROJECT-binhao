<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('header').view('home').view('footer');
        
    }

    public function product()
    {
        return view('header').view('product1').view('footer');
        
    }


}
