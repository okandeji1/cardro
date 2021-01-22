<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Auth;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::guest()) {
            //is a guest so redirect
            return redirect('/auth-login');
        }
        try {
            //code...
            $products = Product::orderBy('created_at', 'desc')->paginate(20);
            return view('pages.product.manage_product')->with('products', $products);
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->with(['error' => 'Internal server error']);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'price' => 'required|numeric',
            'image' => 'required|file|mimes:jpg,png,peg,svg,gif,jpeg|max:1028',
        ]);

        $name = $request->name;
        $price = $request->price;
        try {
            if(Product::where('name', $name)->exists()){
                return back()->with(['error' =>' This product already exist!']);
            }
            $newProduct = new Product();
            if($request->hasFile('image')){
                $image = request()->file('image')->store('uploads/products', 'public');
                $newProduct->image = $image; 
            }
            $newProduct->uuid = Uuid::uuid4();
            $newProduct->name = $name;
            $newProduct->price = $price;
            $newProduct->save();
            return redirect('/manage-products')->with('success', 'Product created successfully');
        } catch (\Throwable $th) {
            back()->with(['error' =>' Internal server error!']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
