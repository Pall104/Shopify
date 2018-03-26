<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function getHomePage(){
        return view('ShopifyWeb.home');
    }

    public function getSignUp(){
        return view('ShopifyWeb.signup');
    }
    public function getBalloons(){
        return view('ShopifyWeb.flyingBalloons');
    }
    public function getDrumKitPage(){
        return view('ShopifyWeb.drumKit');
    }
}
