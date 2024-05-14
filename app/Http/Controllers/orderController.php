<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Order;

class orderController extends Controller
{
    public function index(){
        $orders = Order::all();
        if($orders->isEmpty()){
            $data = [
                'message' => 'No existen pedidos',
                'status' => 200
            ];
        }else{
            $data = [
                'orders' => $orders,
                'status' => 200
            ];
        }
        return response()->json($data, 200);
    }
}
