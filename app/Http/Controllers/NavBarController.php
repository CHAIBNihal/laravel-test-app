<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavBarController extends Controller
{
    public function contact(){
        return view("contact");
    }
    public function Blog(){
        return view("blog");
    }
    public function historique(){
        return view("historique");
    }
}
