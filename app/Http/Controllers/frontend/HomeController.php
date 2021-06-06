<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;

class HomeController extends Controller
{
    public function index()
    {
    
        return view('frontend.index');
    }

    public function about()
    {
        return view('frontend.pages.about');
    }

    public function shop()
    {
        return view('frontend.pages.shop');
    }

    public function cart()
    {
        return view('frontend.pages.cart');
    }

    public function checkout()
    {
        return view('frontend.pages.checkout');
    }

    public function product_details()
    {
        return view('frontend.pages.product_details');
    }
    
    public function contact()
    {
        return view('frontend.pages.contact');
    }

    public function privacyPolicy()
    {
        return view('frontend.pages.privacy_policy');
    }

    public function termsCondition()
    {
        return view('frontend.pages.terms_condition');
    }
    
    public function terms()
    {
        return view('frontend.pages.terms');
    }
    
    public function blog()
    {
        return view('frontend.pages.blog');
    }
    
    public function blog_details()
    {
        return view('frontend.pages.blog_details');
    }
    
    public function faq()
    {
        return view('frontend.pages.faq');
    }
    
    public function typography()
    {
        return view('frontend.pages.typography');
    }
    
    public function icons()
    {
        return view('frontend.pages.icons');
    }
    
    public function coming_soon()
    {
        return view('frontend.pages.coming_soon');
    }
    
    public function alert()
    {
        return view('frontend.pages.alert');
    }

    public function postLimit(Request $request){

        return response()->json($request->all());
    }
    
    public function error_404()
    {
        return view('frontend.pages.error_404');
    }
}
