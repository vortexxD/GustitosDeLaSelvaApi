<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ExtraOrder;

class extraOrderController extends Controller
{
    public function index(){
        $extraOrders = ExtraOrder::all();
        if($extraOrders->isEmpty()){
            $data = [
                'message' => 'No existen pedidos',
                'status' => 200
            ];
        }else{
            $data = [
                'extraOrders' => $extraOrders,
                'status' => 200
            ];
        }
        return response()->json($data, 200);
    }
}
