<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DriverController extends Controller
{

    public function store(Request $request)
    {
        $validate = Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required|email|unique:drivers',
            'phone' => 'required|unique:drivers,phone',
            'document_number'=>'unique:drivers,document_number'
        ],[
            'name.required' => 'El nombre es requerido',
            'email.required' => 'El correo es requerido',
            'email.email' => 'El correo no es válido',
            'email.unique' => 'El correo ya existe',
            'phone.required' => 'El telefono es requerido',
            'phone.unique' => 'El telefono ya existe',
            'document_number.unique' => 'El documento ya existe'
        ]);
        if($validate->fails()){
            return response()->json(['msg'=>'error','errors'=>$validate->errors()], 400);
        }
        $driver = Driver::create($request->all());
        return response()->json(['msg'=>'ok','driver_id'=>$driver->id], 200);
    }


    public function control(Request $request){
        $busqueda = $request->dato;
        $driver = Driver::query();
        $errorMsg = "";
        if($busqueda == "documento"){
            $driver->where('document', $request->valor);
            $errorMsg = "El documento ya existe";
        }
        if($busqueda == "phone"){
            $driver->where('phone', $request->valor);
            $errorMsg = "El telefono ya existe";
        }
        if($busqueda == "email"){
            $driver->where('email', $request->valor);
        }

        return response()->json(['msg'=>'ok'], 200);
    }


}
