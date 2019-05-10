<?php

namespace App\Http\Controllers;

use App\Post;
use App\Product;
use App\SlideShow;
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
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['slider'] = SlideShow::all ();

        $product = new Product();
        $data['SpecialProduct'] = $product->IsSpecialProduct();
        $data['Product'] = Product::orderBy('id', 'DESC')->limit(10)->get();
        $data['Articles'] = Post::where('type','article')->orderBy('id', 'DESC')->limit(3)->get();

        return view('welcome',compact ('data'));
    }
}
