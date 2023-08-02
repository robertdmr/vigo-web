<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class VehicleController extends Controller
{
    public function store(Request $request){

        $validate = Validator::make($request->all(),[
            'license_plate'=>'required|unique:vehicles',
            'model' => 'required',
            'color' => 'required',
            'brand' => 'required',
            'fabrication_year'=>'required',
            'passengers_number'=>'required',
            'driver_id'=>'required'
        ],[
            'license_plate.required' => 'El N° de chapa es requerida',
            'license_plate.unique' => 'El N° de chapa ya existe',
            'model.required' => 'El modelo es requerido',
            'color.required' => 'El color es requerido',
            'brand.required' => 'La marca es requerida',
            'fabrication_year.required' => 'El año de fabricación es requerido',
            'passengers_number.required' => 'El número de pasajeros es requerido',
            'driver_id.required' => 'El conductor no ha sido creado'
        ]);
        if($validate->fails()){
            return response()->json(['msg'=>'error','errors'=>$validate->errors()], 400);
        }
        $vehicle = Vehicle::create($request->all());
        return response()->json(['msg'=>'ok','driver_id'=>$request->driver_id], 200);

    }

    public function update(Request $request, $id){

        $vehicle = Vehicle::find($id);
        if(!$vehicle){
            return response()->json(['msg'=>'error','errors'=>'El vehículo no existe'], 400);
        }
        $validate = Validator::make($request->all(),[
            'license_plate'=>'required|unique:vehicles,license_plate,'.$id,
            'model' => 'required',
            'color' => 'required',
            'brand' => 'required',
            'fabrication_year'=>'required',
            'passengers_number'=>'required',
            'driver_id'=>'required'
        ],[
            'license_plate.required' => 'El N° de chapa es requerida',
            'license_plate.unique' => 'El N° de chapa ya existe',
            'model.required' => 'El modelo es requerido',
            'color.required' => 'El color es requerido',
            'brand.required' => 'La marca es requerida',
            'fabrication_year.required' => 'El año de fabricación es requerido',
            'passengers_number.required' => 'El número de pasajeros es requerido',
            'driver_id.required' => 'El conductor no ha sido creado'
        ]);

        if($validate->fails()){
            return response()->json(['msg'=>'Error en los datos','errors'=>$validate->errors()], 400);
        }
        $vehicle->update($request->all());
        return response()->json(['msg'=>'ok'], 200);
    }
}
