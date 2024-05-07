<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index(){
        $product = new Product;
        $product->name = 'thit trau gac bep';
        $product->price = 10000;
        $product->description = 'rat ngon';
        $product->thumbnail_image = 'anh 1';
        $product->save();
    }
    public function add(){
        $insertData=[
            'name' => 'qua luu niem',
            'price' => 3000,
            'description' => 'rat dep',
            'thumbnail_image' => 'anh3'
        ];
        $product = Product::create($insertData);
        // dd($product);
        // $product = Product::firstOrCreate([
        //     'id' => 3
        // ],$insertData);
        // dd($product);
    }
    public function update(){
        // $product = Product::find(3);
        // $product->name ='qua luu niem';
        // $product->price = 3000;
        // $product->save();
        $product = Product::updateOrCreate(
            ['name' => 'qua luu niem', 'price' => 3000],
            ['description'=> 'doc dao','thumbnail_image'=>'anh3']
        );
    }
    public function delete(){
        $product = Product::find(4);
        $product->delete();
    }
}
