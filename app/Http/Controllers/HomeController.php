<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function welcome()
    {
        return view('welcome');
    }
    public function index()
    {
        return view('index');
    }
    public function shop()
    {
        return view('shop');
    }
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
    public function blog()
    {
        return view('blog');
    }
    public function blog_details()
    {
        return view('blog_details');
    }
    public function product_details()
    {
        return view('product_details');
    }
    public function product_details_thumbnail()
    {
        return view('product_details_thumbnail');
    }
}
