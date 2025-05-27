<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\ProductIn;
class productController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('product.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        product::create([
            'productname'=>$request->productname
        ]);
        return redirect('/read');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function products()
    {
        $products=product::all();
        return view('product.read',compact('products'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showStockIn(Request $request,$id)
    {
        $product=product::find($id);
        return view('stock.insert',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function stockIn(Request $request)
    {
        $totalprice=$request->unitprice*$request->quantity;
        ProductIn::create([
            'product_id'=>$request->product_id,
            'datetime'=>$request->datetime,
            'quantity'=>$request->quantity,
            'unitprice'=>$request->unitprice,
            'totalprice'=>$totalprice
        ]);
        return redirect('/stocks-in');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function stock()
    {
        $products=ProductIn::all();
        return view('stock.all',compact('products'));
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
