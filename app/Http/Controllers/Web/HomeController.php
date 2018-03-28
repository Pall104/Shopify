<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function getHomePage(){
        return view('ShopifyWeb.portfolio');
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
    public function getJsClock(){
        return view('ShopifyWeb.jsClock');
    }
    public function getDragNDrop(){
        return view('ShopifyWeb.dragndrop');
    }
    public function getCssUpdate(){
        return view('ShopifyWeb.cssupdate');
    }
}
