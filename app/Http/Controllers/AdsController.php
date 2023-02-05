<?php

namespace App\Http\Controllers;

use App\Models\ads;
use Illuminate\Http\Request;

class AdsController extends Controller
{
    
    public function tampil()
    {
        $data=ads::all();
        return view ('ads.ads',['data'=>$data]);
    }


    public function tambahh()
    {
        return view ('ads.create');
    }    

    public function saveads(Request $request)
    {
        $data = new ads;
        if($request->hasFile('gambar')){
            $request->file('gambar')->move('img/',$request->file('gambar')->getClientOriginalName());
            $data->gambar=$request->file('gambar')->getClientOriginalName();
        }
        $data->name = $request->name;
        $data->harga = $request->harga;

        $data->save();
        return redirect('adst');
        }

        public function editads($id){
            $data = ads::Find($id);
            return view('ads.edit',['data' => $data]);
        }

        
    public function updateads(Request $request){
        $data = ads::Find($request->id);
        if($request->hasFile('gambar')){
            $request->file('gambar')->move('img/',$request->file('gambar')->getClientOriginalName());
            $data->gambar=$request->file('gambar')->getClientOriginalName();
        }else{
            $data->gambar = $request->default;
        }
        $data->name = $request->name;
        $data->harga = $request->asal;
        $data->save();
        return redirect('adst');
    }

    public function deleteads($id){
        $data = ads::Find($id);
        $data->delete();
        return redirect('adst');
    }

}
