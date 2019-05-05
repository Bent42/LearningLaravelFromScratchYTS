<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        //return view('index', compact('title'));
        $title = 'Welcome master!';
        return view('index')->with('title', $title);
    }
    public function about()
    {
        //return view('about');
        $title = 'About us';
        return view('about')->with('title', $title);
    }
    public function services()
    {
        //return view('services');
        $data = array(
            'title' => 'Our services', 
            'services' => ['Web dev', 'PHP', 'Laravel']
        );
        return view('services')->with($data);
    }
}
