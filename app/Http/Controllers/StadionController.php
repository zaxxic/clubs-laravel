<?php

namespace App\Http\Controllers;

use App\Models\stadion;
use Illuminate\Http\Request;

class StadionController extends Controller
{
    public function tes()
    {
        $data=stadion::all();
        return view ('stadion.stadions',['data'=>$data]);
    }

    public function creates()
    {
        return view('stadion.create');
    }

    public function saves(Request $request)
    {
        $data = new stadion;
        $data->name = $request->name;
        $data->tempat = $request->tempat;
        $data->ukuran = $request->ukuran;
        $data->tanggal = $request->date;
        $data->lolos = $request->udin;

        $data->save();

        return redirect('stadions');
    }

    public function edits($id){
        $data = stadion::Find($id);
        return view('stadion.edit',['data' => $data]);
    }

    public function updates(Request $request){
        $data = stadion::Find($request->id);
        
        $data->name = $request->name;
        $data->tempat = $request->tempat;
        $data->ukuran = $request->ukuran;
        $data->tanggal = $request->date;
        $data->lolos = $request->udin;
        $data->save();
        return redirect('stadions');

    }


    public function delete($id){
        $data = stadion::Find($id);
        $data->delete();
        return redirect('stadions');
    }


}
