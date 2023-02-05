<?php

namespace App\Http\Controllers;

use App\Models\club;
use App\Models\player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{

    public function players($id)
    {
        $item=club::find($id);

        $data=player::all();
        return view('player.players',['data'=> $data,'item'=>$item]);
    }

    public function tambahplayer()
    {
        return view('player.create');
    }

    public function savep(Request $request, $id)
    {
        $data = new player;
        $item=club::find($id);
        $data->name = $request->name;
        $data->posisi = $request->posisi;
        $data->number = $request->number;
        $data->asal = $request->asal;
        $data->save();
        return redirect('players');
    }

        
}
