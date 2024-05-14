<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\RawMaterial;

class rawMaterialController extends Controller
{
    public function index(){
        $rawMaterials = RawMaterial::all();
        if($rawMaterials->isEmpty()){
            $data = [
                'message' => 'No existe materia prima',
                'status' => 200
            ];
        }else{
            $data = [
                'rawMaterials' => $rawMaterials,
                'status' => 200
            ];
        }
        return response()->json($data, 200);
    }
}
