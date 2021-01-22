<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        try {
            //code...
            $products = Product::orderBy('created_at', 'desc')->paginate(20);
            $posts = Post::orderBy('created_at', 'desc')->paginate(20);
            return view('index', compact(['products', $products, 'posts', $posts]));
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    /**
     * Cart
     */
    public function cart($uuid)
    {
        try {
            //code...
            $product = Product::where('uuid', $uuid)->first();
            return view('cart')->with('product', $product);
        } catch (\Throwable $th) {
            // throw $th;
            return back()->with('error ', 'Internal server error');
        }
    }

    /**
     * Checkout
     */
    public function checkout($uuid)
    {
        try {
            //code...
            $product = Product::where('uuid', $uuid)->first();
            return view('checkout')->with('product', $product);
        } catch (\Throwable $th) {
            //throw $th;
            return back()->with('error ', 'Internal server error');
        }
    }

    /**
     * Show post details by geting it uuid and get listing od posts too
     */
    public function single($uuid)
    {
        try {
            //code...
            $post = Post::where('uuid' ,$uuid)->first();
            $posts = Post::inRandomOrder()->paginate(20);
            return view('single', compact(['post', $post, 'posts', $posts]));
        } catch (\Throwable $th) {
            //throw $th;
            return back()->with('error ', 'Internal server error');
        }
    }
}
