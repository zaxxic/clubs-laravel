<?php

namespace App\Http\Controllers;

use App\Models\pemain;
use App\Models\ticket;
use App\Models\club;
use Illuminate\Http\Request;

class PemainCntroller extends Controller
{

    public function tampil()
    {
        $data=pemain::all();
        return view ('pemain.pemain',['data'=>$data]);
    }

    
    public function tambahpemain()
    {
        $data = club::all();
        return view('pemain.create',['data' => $data]);
    }

    public function perbaruip($id){
        $data = pemain::Find($id);
        $data2 = club::all();
        return view('pemain.edit',['data' => $data,
        'data2' => $data2
    ]);
        
    }

    public function updatep(Request $request){
        $data = pemain::Find($request->id);

        $data->name = $request->name;
        $data->date = $request->date;
        $data->nopung = $request->nopung;
        $data->nickname = $request->nickname;
        
        $data->save();
        return redirect('pemain');

    }


    public function savepemain(Request $request)
    {
        $data = new pemain;
        $data->name = $request->name;
        $data->date = $request->date;
        $data->nopung = $request->nopung;
        $data->club_id =$request->club_id;
        $data->nickname = $request->nickname;

        $data->save();

        return redirect('pemain');
    }

    public function hapusp($id)
    {
        
        $data = pemain::Find($id);
        $data->delete();
        return redirect('pemain');
    }


}
