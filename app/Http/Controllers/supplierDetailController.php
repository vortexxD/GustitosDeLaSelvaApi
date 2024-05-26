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

    public function store(Request $request){
        $validator = Validator::make($request->all(),[
            'phone' => 'unique:customers|required|digits:9',
            'name' => 'max:255',
            'address' => 'required'
        ]);
        if($validator->fails()){
            $data = [
                'message' => 'Error in the data validation',
                'errors' => $validator->errors(),
                'status' => 400
            ];
            return response()->json($data, 400);
        }
        $customer = Customer::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'address' => $request->address
        ]);
        if(!$customer){
            $data = [
                'message' => 'Error to client store',
                'status' => 500
            ];
            return response()->json($data, 500);
        }
        $data = [
            'customer' => $customer,
            'status' => 201
        ];
        return response()->json($data, 201);
    }

    public function show($id){
        $customer = Customer::find($id);
        if(!$customer){
            $data = [
                'message' => 'Client not found',
                'status' => 404
            ];
            return response()->json($data, 404);
        }
        $data = [
            'customer' => $customer,
            'status' => 200
        ];
        return response()->json($data, 200);
    }

    public function update(Request $request, $id){
        $customer = Customer::find($id);
        if(!$customer || $customer->isEmpty()){
            $data = [
                'message' => 'Client not found',
                'status' => 404
            ];
            return response()->json($data, 404);
        }
        $validator = Validator::make($request->all(),[
            'name' => 'max:255',
            'phone' => 'required|digits:9',
            'address' => 'required'
        ]);
        if($validator->fails()){
            $data = [
                'message' => 'Error in the data validation',
                'errors' => $validator->errors(),
                'status' => 400
            ];
            return response()->json($data, 400);
        }
        $customer->name = $request->name;
        $customer->phone = $request->phone;
        $customer->address = $request->address;
        $data = [
            'message' => 'Customer update succesfull',
            'customer' => $customer,
            'status' => 200
        ];
        return response()->json($data, 200);
    }

    public function updatePartial(Request $request, $id){
        $customer = Customer::find($id);
        if(!$customer || $customer->isEmpty()){
            $data = [
                'message' => 'Client not found',
                'status' => 404
            ];
            return response()->json($data, 404);
        }
        $validator = Validator::make($request->all(),[
            'name' => 'max:255',
            'phone' => 'digits:9'
        ]);
        if($validator->fails()){
            $data = [
                'message' => 'Error in the data validation',
                'errors' => $validator->errors(),
                'status' => 400
            ];
            return response()->json($data, 400);
        }
        if($request->has('name')){
            $customer->name = $request->name;
        }
        if($request->has('phone')){
            $customer->phone = $request->phone;
        }
        if($request->has('address')){
            $customer->address = $request->address;
        }
        $customer->save();
        $data = [
            'message' => 'Customer update succesfull',
            'customer' => $customer,
            'status' => 200
        ];
        return response()->json($data, 200);
    }

    public function destroy($id){
        $customer = Customer::find($id);
        if(!$customer){
            $data = [
                'message' => 'Client not found',
                'status' => 404
            ];
            return response()->json($data, 404);
        }
        $customer->delete();
        $data = [
            'message' => 'Customer delete succesfull',
            'status' => 200
        ];
        return response()->json($data, 200);
    }

    public function search(Request $request){
        $customer = Customer::latest()->where('phone', $request->phone)->first();
        if(!$customer){
            $data = [
                'message' => 'Client not found',
                'status' => 404
            ];
            return response()->json($data, 404);
        }
        $data = [
            'customer' => $customer,
            'status' => 200
        ];
        return response()->json($data, 200);
    }
}
