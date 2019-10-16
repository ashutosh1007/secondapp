<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function register(){
        return view('pages.register');
    }
    
    /*****DISPLAY SHOP*****/
    public function showShop(){
        return view('pages.shop');
    }
}
