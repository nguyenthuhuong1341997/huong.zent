<?php

namespace App\Http\Controllers;
use App\Http\Requests\CreateProductRequest;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{	
	// public $product;
	// public function __construct()
	// {
	// 	$this->product = new Product;
	// }
	//dung static thif khoong caanf khowir taoj

    public function index()
    {
    	$products= Product::getAll();
    	
    	return view('products.index',['productsx'=>$products]);
    }


    public function show($id){
        $products= Product::find($id);
    	return view('products.show',['productsx'=>$products]);
    }

    public function create(){
        return view('products.create');
    }

    public function store(CreateProductRequest $request){
        
        $data= $request->all();
        //c1: 
        $product= new Product;
        $product->name= $data['name'];
        $product->price= $data['price'];
        $product->save();

        return redirect('products')->with('flag','Them moi thanh cong');
    }
    public function destroy($id){
        $products= Product::find($id)->delete();
        return redirect('products')->with('flag','Xoa moi thanh cong');
    }
    public function edit($id){
        $products= Product::find($id);
        return view('products.edit',['products'=>$products]);
    }
    public function update(CreateProductRequest $request, $id)
    {
        
        $product=Product::find($id);
        $data= $request->all();
        $product->update($data);
        return redirect('products')->with('flag','Cap nhat thanh cong');
    }
}
