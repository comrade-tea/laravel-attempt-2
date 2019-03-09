<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function Home()
    {
        $tasks = [
            "wash cock",
            "share this cock with gf"
        ];

        request("title");

        return view('welcome', [
            'tasks' => $tasks
        ]);
    }
    public function Contact()
    {
        return view('contact');
    }
}
