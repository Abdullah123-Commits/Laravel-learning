<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $title = 'Welcome To Laravel!';
        // first Way
        // return view('pages.index', compact('title'));

        // Another way to send variables to any view
        return view('pages.index')->with('title', $title);
    }
    public function about() {
        $title = 'About Us!';
        return view('pages.about')->with('title', $title);
    }
    public function services() {
        $data = array(
            'title' => 'Services',
            'services' => ['SEO', 'web design', 'programming']
        );
        return view('pages.services')->with($data);
    }
}
