<?php

namespace App\Http\Controllers;

use App\Http\Response;

class HomeController
{
    public function index()
    {
        return view(
            'index',
            [
                'title' => 'My page brooooo'
            ]
        );
    }

    public function services()
    {
        return view('services');
    }

    public function contact()
    {
        return view('contact');
    }

    public function about()
    {
        return 'About';
    }
}
