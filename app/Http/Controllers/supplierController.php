<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Supplier;

class supplierController extends Controller
{
    public function index(){
        $suppliers = Supplier::all();
        if($suppliers->isEmpty()){
            $data = [
                'message' => 'No existen proveedores',
                'status' => 200
            ];
        }else{
            $data = [
                'suppliers' => $suppliers,
                'status' => 200
            ];
        }
        return response()->json($data, 200);
    }
}
