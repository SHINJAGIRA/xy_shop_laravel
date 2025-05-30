<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\ProductIn;
use App\Models\ProductOut;

class productController extends Controller
{
    
    public function index()
    {
        return view('product.create');
    }
    public function home()
    {
        $productOut=ProductOut::count();
        $productIn=ProductIn::count();
        $product=ProductIn::count();
        
        return view('product.home',compact('productOut','productIn','product'));
    }

        public function create(Request $request)
    {
        product::create([
            'productname'=>$request->productname
        ]);
        return redirect('/read');
    }

   
    public function products()
    {
        $products=product::all();
        return view('product.read',compact('products'));
    }

    
    public function showStockIn(Request $request,$id)
    {
        $product=product::find($id);
        return view('stock.insert',compact('product'));
    }

   
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
        return redirect('/stocks');
    }

   
    public function stock()
    {
        $products=ProductIn::all();
        $stockout=ProductOut::all();
        return view('stock.stockIn',compact('products','stockout'));
    }
    
    

    public function stockOut(Request $request,$id)
    {
        $product=ProductIn::find($id);
        return view('stock.out',compact('product'));
    }
    public function stockOutIn(Request $request)
    {
        $productIn = ProductIn::findOrFail($request->product_in_id);
    
        if ($productIn->quantity < $request->quantity) {
            return redirect()->back()->with('msg', 'Your quantity exceeds what you have in stock.');
        }
    
        // Decrease quantity
        $productIn->quantity -= $request->quantity;
        //calculate again the totalprice
        $productIn->totalprice = $productIn->unitprice * $productIn->quantity;
        $productIn->save();
        $totalprice = $request->unitprice * $request->quantity;
        //save the data
        ProductOut::create([
            'product_in_id' => $request->product_in_id,
            'datetime'      => $request->datetime,
            'quantity'      => $request->quantity,
            'unitprice'     => $request->unitprice,
            'totalprice'    => $totalprice,
        ]);
    
        return redirect('/stocks')->with('msg', 'Stock out recorded and product updated.');
    }
    //update on stockIn
    public function updateStockIn(Request $request){
        $productIn = ProductIn::find($request->product_id);
        $totalprice = $request->unitprice * $request->quantity;
        $productIn->update([
            'datetime'      => $request->datetime,
            'quantity'      => $request->quantity,
            'unitprice'     => $request->unitprice,
            'totalprice'    => $totalprice,
        ]);
        return redirect('/stocks')->with('msg', 'Product updated.');
    }
    //delete on stockIn
    public function deleteStockIn($id){
        $productIn = ProductIn::findOrFail($id);
        $productIn->delete();
        return redirect('/stocks')->with('msg', 'Product deleted.');
    }
    //update on stockOut
    public function updateStockOut(Request $request){
        $productOut = ProductOut::find($request->product_id);
        $totalprice = $request->unitprice * $request->quantity;
        $productOut->update([
            'datetime'      => $request->datetime,
            'quantity'      => $request->quantity,
            'unitprice'     => $request->unitprice,
            'totalprice'    => $totalprice,
        ]);
        return redirect('/stocks')->with('msg', 'Product updated.');
    }
    //delete on stockOut
    public function deleteStockOut($id){
        $productOut = ProductOut::findOrFail($id);
        $productOut->delete();
        return redirect('/stocks')->with('msg', 'Product deleted.');
    }

    //update on product
    public function updateProduct(Request $request, $id){
        $product = Product::find($id);
        $product->update($request->all());
        return redirect('/read')->with('msg', 'Product updated.');
    }
    //delete on product
    public function deleteProduct($id){
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect('/read')->with('msg', 'Product deleted.');
    }
    public function showUpdateProduct($id){
        $product = Product::findOrFail($id);
        return view('product.update', compact('product'));
    }
    public function showUpdateStockIn($id){
        $product = ProductIn::findOrFail($id);
        return view('stock.update', compact('product'));
    }
    public function showUpdateStockOut($id){
        $product = ProductOut::findOrFail($id);
        return view('stock.updateout', compact('product'));
    }

}    