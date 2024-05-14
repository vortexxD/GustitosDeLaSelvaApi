<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class productController extends Controller
{
    public function index(){
        $products = Product::all();
        if($products->isEmpty()){
            $data = [
                'message' => 'No existen productos',
                'status' => 200
            ];
        }else{
            $data = [
                'products' => $products,
                'status' => 200
            ];
        }
        return response()->json($data, 200);
    }
}
