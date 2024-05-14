<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\SupplierDetail;

class supplierDetailController extends Controller
{
    public function index(){
        $supplierDetails = SupplierDetail::all();
        if($customers->isEmpty()){
            $data = [
                'message' => 'No existe detalles de proveedor',
                'status' => 200
            ];
        }else{
            $data = [
                'supplierDetails' => $supplierDetails,
                'status' => 200
            ];
        }
        return response()->json($data, 200);
    }
}
