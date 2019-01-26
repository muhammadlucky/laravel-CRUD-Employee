<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    //buat fungsi baru untuk index
    function index() {
        //echo "up";
        $product = Product::get(['product_id','name','price','image','description']);
        //var_dump($product);
        return view('product.index', compact('product'));

    }

    function create() {
        return view('product.create');
    }
    public function store (Request $request) {
        $txtId = $request->input('txt_id');
        $txtName = $request->input('txt_name');
        $txtPrice= $request->input('txt_price');
        $imagesImage= $request->input('images_image');
        $txtDescription= $request->input('txt_description');

        echo $txtId." <br />".
        $txtName." <br />".
        $txtPrice." <br />".
        $imagesImage." <br />".
        $txtDescription;

        Product::create([
            'product_id' => $txtId,
            'name' => $txtName,
            'price' => $txtPrice,
            'image' => $imagesImage,
            'description' => $txtDescription
        ]);

        return 
        redirect('/Product');
        
    }
}
