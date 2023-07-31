<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function uploadFoto(Request $request){
        $nameImage1 = $request->driver_id.'-cedula1-'.date('YmdHis').'.jpg';
        $request->file('foto1')->storeAs('foto', $nameImage1);
        $cedula1 = Image::create([
            'driver_id' => $request->driver_id,
            'path' => $nameImage1
        ]);

        $nameImage2 = $request->driver_id.'-cedula2-'.date('YmdHis').'.jpg';
        $request->file('foto2')->storeAs('foto', $nameImage2);
        $cedula2 = Image::create([
            'driver_id' => $request->driver_id,
            'path' => $nameImage2
        ]);

        $nameImage3 = $request->driver_id.'-registro1-'.date('YmdHis').'.jpg';
        $request->file('foto3')->storeAs('foto', $nameImage3);
        $registro1 = Image::create([
            'driver_id' => $request->driver_id,
            'path' => $nameImage3
        ]);

        $nameImage4 = $request->driver_id.'-registro2-'.date('YmdHis').'.jpg';
        $request->file('foto4')->storeAs('foto', $nameImage4);
        $registro2 = Image::create([
            'driver_id' => $request->driver_id,
            'path' => $nameImage4
        ]);

        $nameImage5 = $request->driver_id.'-cv1-'.date('YmdHis').'.jpg';
        $request->file('foto5')->storeAs('foto', $nameImage5);
        $cv1 = Image::create([
            'driver_id' => $request->driver_id,
            'path' => $nameImage5
        ]);

        $nameImage6 = $request->driver_id.'-cv2-'.date('YmdHis').'.jpg';
        $request->file('foto6')->storeAs('foto', $nameImage6);
        $cv2 = Image::create([
            'driver_id' => $request->driver_id,
            'path' => $nameImage6
        ]);

        $nameImage7 = $request->driver_id.'-habilitacion-'.date('YmdHis').'.jpg';
        $request->file('foto7')->storeAs('foto', $nameImage7);
        $habi = Image::create([
            'driver_id' => $request->driver_id,
            'path' => $nameImage7
        ]);

        $nameImage8 = $request->driver_id.'-seguro-'.date('YmdHis').'.jpg';
        $request->file('foto8')->storeAs('foto', $nameImage8);
        $seguro = Image::create([
            'driver_id' => $request->driver_id,
            'path' => $nameImage8
        ]);

        $nameImage9 = $request->driver_id.'-antejudiciales-'.date('YmdHis').'.jpg';
        $request->file('foto9')->storeAs('foto', $nameImage9);
        $antejjdd = Image::create([
            'driver_id' => $request->driver_id,
            'path' => $nameImage9
        ]);

        $nameImage10 = $request->driver_id.'-antepenales-'.date('YmdHis').'.jpg';
        $request->file('foto10')->storeAs('foto', $nameImage10);
        $antepen = Image::create([
            'driver_id' => $request->driver_id,
            'path' => $nameImage10
        ]);

        return response()->json(['msg'=>'ok'], 200);
    }
}
