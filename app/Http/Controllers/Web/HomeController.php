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
    public function getArrayCardio(){
        return view('ShopifyWeb.arrayCardio1');
    }
    public function getTwinkle(){
        return view('ShopifyWeb.twinkle');
    }
    public function getFlexPanel(){
        return view('ShopifyWeb.flexPanel');
    }
    public function getAjaxStep(){
        return view('ShopifyWeb.ajaxStep');
    }
    public function getCardio(){
        return view('ShopifyWeb.cardio2');
    }
    public function getHtmlCanvas(){
        return view('ShopifyWeb.htmlCanvas');
    }


}
