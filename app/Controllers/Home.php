<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('header').view('home').view('footer');
    }

    public function about(): string
    {
        return view('header').view('about').view('footer');

    }

    public function contact(): string
    {
        return view('header').view('contact').view('footer');

    }

    public function product(): string
    {
        return view('header').view('product').view('footer');

    }

    public function home(): string
    {
        return view('header').view('home').view('footer');

    }

    public function tentang_onexox():string
    {
        return view('header').view('tentang_onexox').view('footer');

    }

}
