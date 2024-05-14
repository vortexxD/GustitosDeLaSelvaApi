<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\OrderDetail;

class orderDetailController extends Controller
{
    public function index(){
        $orderDetails = OrderDetail::all();
        if($orderDetails->isEmpty()){
            $data = [
                'message' => 'No existen detalles de pedido',
                'status' => 200
            ];
        }else{
            $data = [
                'orderDetails' => $orderDetails,
                'status' => 200
            ];
        }
        return response()->json($data, 200);
    }
}
