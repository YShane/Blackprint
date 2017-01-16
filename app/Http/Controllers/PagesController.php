<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller {

    //



    public function home() {


        return view('welcome');
    }

    public function about() {

        
        return view('about');
    }

    public function databases(){

        return view('database');
    }
    public function test(){

        return view('test');
    }


    public function test2(){

        return view('test2');
    }

    public function menu(){

        return view('menu');
    }
    public function contacts(){

        return view('contact');
    }


    public function impressum() {
        
       return view('impressum');
       
    }


}
