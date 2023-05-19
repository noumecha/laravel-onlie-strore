<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function about() {
        $about_data = [];
        $about_data['title'] = "About us - Online Store";
        $about_data['subtitle'] = "About us ";
        $about_data['description'] = "This is an about page ...";
        $about_data['author'] = "Dev by Noumel - from byt3lab";
        return view('home.about')->with('title', $about_data);
    }
    public function index() {
        $viewData = [];
        $viewData['title'] = "Home Page - Online Store";
        return view('home.index')->with('viewData', $viewData);
    }
}
