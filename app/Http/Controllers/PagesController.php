<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
    $name = "home";
    return view('home', ['name' => $name]);
}
public function about(){
    $name = "about";
    return view('about', ['name' => $name]);
}
public function contact(){
    $name = "contact";
    return view('contact', ['name' => $name]);
}
}
