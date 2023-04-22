<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedirectionController extends Controller
{
    public function blog() {
        return view('blog.blog');
    }

    public function blogCreate() {
        return view('blog.create');
    }

    public function index() {
        return view('welcome');
    }

    public function contact() {
        return view('contact');
    }

}
