<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use DB;
class ProductController extends Controller
{
    public function viewcreate()
    {
        return view('products.create');
    }
    
    public function viewshow($id)
    {
        $product=product::find($id);
        return view('products.show')->with('product',$product);
    }
    public function viewedit($id){
        $product=product::find($id);
        return view('products.edit')->with('product',$product);
    }

    public function viewindex()
    {
        // $products=DB::select("SELECT * FROM products ");
        //  $products=product::all();
        $products=product::orderBy('id','desc')->paginate(5);
        return view('products.index')->with('products',$products);
    }

    public function savenewproduct()
    {
        
        $p = new product;
        
        $p->product_title = request('name');
        $p->product_desc = request('detail');
        $p->product_price = request('price');
        $p->save();
         return redirect('products/index');
        
    }

    public function deleteproduct()
    {
        $id=request('id');
        $product =product::find($id);
         $product->delete();
        
         return redirect('products/index');
    }

    public function editproduct($id)
    {
        
        $product =product::find($id);
        
        $product->product_title = request('name');
        $product->product_desc = request('detail');
        $product->product_price = request('price');
        $product->save();
        
        
        return view('products.show')->with('product',$product);
        
    }

    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
