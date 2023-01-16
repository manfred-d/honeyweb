<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;


class ProductsController extends Controller
{
    //
    public function index()
    {
        return view('welcome', [
            'products' => Product::latest()->simplePaginate(6)
        ]); 
    }
    // view products
    public function view(request $request){
        return view('products.shop',[
            'products' => Product::latest()->simplePaginate(6)
        ]);
    }
    public function more(request $request, Product $product){
        return view('products.more-about',[
            'product'=>$product
        ]);
    }

    /**
     * Create New Product
     * @param str $title
     * @return
     */
    public function dashboard(request $request){
        return view('admin.dashboard',[
            'products' => Product::latest()->simplePaginate(10)
        ]);
    }

    /**
     * Create New Product
     * @param str $title
     * @return
     */
    public function create(request $request){
        return view('products.create');
    }

    // store newly created resources
    // @param \Illuminate\Http\Request $request
    
    public function store(Request $request){
        $formFields = $request->validate([
            'title' => 'required',
            'body' => 'required',
            'price' => 'required',
            'quantity' => 'required',
            'benefits' => 'required',
            'usage' => 'required',
            'image' => 'required'
        ]);
        // dd($formFields);
        if ($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store('images','public');
        }
        Product::create($formFields);

        return redirect('/admin/dashboard')->with('message','Product created successful');
    }
    /**
     * edit form
     * @param str $name
     * @return
     */
    // update products
    public function edit(product $product){
        return view('products.edit',[
            'product' => $product
        ]); 
    }

    /**
     * update for Product 
     * @param str $name
     * @return
     */
    // update products
    public function update(request $request,Product $product){
        // if ($product->user_id != auth()->id()) {
        //     # code...
        //     abort(403, 'Unauthorised action');
        // }

        $formFields = $request->validate([
            'title' => 'required',
            'body' => 'required',
            'price' => 'required',
            'quantity' =>'required',
            'benefits' => 'required',
            'usage' => 'required',
            'image' => 'required'
        ]);
        // dd($formFields);
        if ($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store('images','public');
        }
        $product->update($formFields);

        return redirect('/admin/dashboard')->with('message','Product updated successful');
    }

    Public function destroy(Product $product){
        $product->delete();

        return redirect('/admin/dashboard')->with('success','product deleted successfull');
    }
    


}
