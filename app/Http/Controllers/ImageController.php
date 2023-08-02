<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function uploadFoto(Request $request){

        //get file extension
        $extension1 = $request->file('foto1')->getClientOriginalExtension();
        $nameImage1 = $request->driver_id.'-cedula1-'.date('YmdHis').".".$extension1;
        $request->file('foto1')->storeAs('foto', $nameImage1);
        $cedula1 = Image::create([
            'driver_id' => $request->driver_id,
            'path' => $nameImage1
        ]);

        $extension2 = $request->file('foto2')->getClientOriginalExtension();
        $nameImage2 = $request->driver_id.'-cedula2-'.date('YmdHis').".".$extension2;
        $request->file('foto2')->storeAs('foto', $nameImage2);
        $cedula2 = Image::create([
            'driver_id' => $request->driver_id,
            'path' => $nameImage2
        ]);

        $extension3 = $request->file('foto3')->getClientOriginalExtension();
        $nameImage3 = $request->driver_id.'-registro1-'.date('YmdHis').".".$extension3;
        $request->file('foto3')->storeAs('foto', $nameImage3);
        $registro1 = Image::create([
            'driver_id' => $request->driver_id,
            'path' => $nameImage3
        ]);

        $extension4 = $request->file('foto4')->getClientOriginalExtension();
        $nameImage4 = $request->driver_id.'-registro2-'.date('YmdHis').".".$extension4;
        $request->file('foto4')->storeAs('foto', $nameImage4);
        $registro2 = Image::create([
            'driver_id' => $request->driver_id,
            'path' => $nameImage4
        ]);

        $extension5 = $request->file('foto5')->getClientOriginalExtension();
        $nameImage5 = $request->driver_id.'-cv1-'.date('YmdHis').".".$extension5;
        $request->file('foto5')->storeAs('foto', $nameImage5);
        $cv1 = Image::create([
            'driver_id' => $request->driver_id,
            'path' => $nameImage5
        ]);

        $extension6 = $request->file('foto6')->getClientOriginalExtension();
        $nameImage6 = $request->driver_id.'-cv2-'.date('YmdHis').".".$extension6;
        $request->file('foto6')->storeAs('foto', $nameImage6);
        $cv2 = Image::create([
            'driver_id' => $request->driver_id,
            'path' => $nameImage6
        ]);

        $extension7 = $request->file('foto7')->getClientOriginalExtension();
        $nameImage7 = $request->driver_id.'-habilitacion-'.date('YmdHis').".".$extension7;
        $request->file('foto7')->storeAs('foto', $nameImage7);
        $habi = Image::create([
            'driver_id' => $request->driver_id,
            'path' => $nameImage7
        ]);

        $extension8 = $request->file('foto8')->getClientOriginalExtension();
        $nameImage8 = $request->driver_id.'-seguro-'.date('YmdHis').".".$extension8;
        $request->file('foto8')->storeAs('foto', $nameImage8);
        $seguro = Image::create([
            'driver_id' => $request->driver_id,
            'path' => $nameImage8
        ]);

        $extension9 = $request->file('foto9')->getClientOriginalExtension();
        $nameImage9 = $request->driver_id.'-antejudiciales-'.date('YmdHis').".".$extension9;
        $request->file('foto9')->storeAs('foto', $nameImage9);
        $antejjdd = Image::create([
            'driver_id' => $request->driver_id,
            'path' => $nameImage9
        ]);

        $extension10 = $request->file('foto10')->getClientOriginalExtension();
        $nameImage10 = $request->driver_id.'-antepenales-'.date('YmdHis').".".$extension10;
        $request->file('foto10')->storeAs('foto', $nameImage10);
        $antepen = Image::create([
            'driver_id' => $request->driver_id,
            'path' => $nameImage10
        ]);

        return response()->json(['msg'=>'ok'], 200);
    }

    public function updateImage(Request $request){

        $extension1 = $request->file('archivo')->getClientOriginalExtension();
        $nameImage1 = $request->driver_id.'-'.$request->tipo_archivo.'-'.date('YmdHis').".".$extension1;
        $request->file('archivo')->storeAs('foto', $nameImage1);
        $cedula1 = Image::create([
            'driver_id' => $request->driver_id,
            'path' => $nameImage1
        ]);

        return response()->json(['msg'=>'ok'], 200);
    }

    public function deleteImage($id){
        $image = Image::find($id);
        if(!$image){
            return response()->json(['msg'=>'error','errors'=>'La imagen no existe'], 400);
        }
        $image->delete();
        unlink(public_path('storage/foto/'.$image->path));
        return response()->json(['msg'=>'ok'], 200);
    }
}
