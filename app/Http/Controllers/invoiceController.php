<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Invoice;

class invoiceController extends Controller
{
    public function index(){
        $invoices = Invoice::all();
        if($invoices->isEmpty()){
            $data = [
                'message' => 'No existen facturas',
                'status' => 200
            ];
        }else{
            $data = [
                'invoices' => $invoices,
                'status' => 200
            ];
        }
        return response()->json($data, 200);
    }
}
