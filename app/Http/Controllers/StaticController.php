<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{

   public function index () {
        return view('welcome');
    }

    public function cars($category = null, $items=null ){
        if(isset($category)){
           if(isset($items)){
             // C'est obliger pour ecrire {$var} vous devez la faire entre double quotes
             return "<h1>{$items}</h1>";
         }
         return  "<h1>{$category}</h1>";
        }

        return view("cars");
     }
    public function about() {
        return view('about');
    }

public   function store() {
    $filter = request("style");
    if(isset($filter)){
       return 'ce style est pour <span style="color:red">'.strip_tags($filter ).'</span>';
    }else{
        return 'ce style est pour <span style="color:red">Tous les genres des personnes </span>';
    }

}
}
