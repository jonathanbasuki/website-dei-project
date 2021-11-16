<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('index');
    }

    public function shop()
    {
    	return view('shop/index');
    }

    public function blog()
    {
    	return view('blog/index');
    }
}
