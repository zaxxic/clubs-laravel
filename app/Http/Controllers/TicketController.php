<?php

namespace App\Http\Controllers;

use App\Models\ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TicketController extends Controller
{
    
    public function tampil()
    {
        $data=ticket::all();
        return view('tiket.tickets',['data'=>$data]);
    }

    public function tambahtiket()
    {
        return view('tiket.create');
    }

    public function savetiket(Request $request)
    {
        $data = new ticket();
        $data->name = $request->name;
        $data->jenist = $request->jenist;
        $data->jenisk = $request->jenisk;
        $data->tanggal = $request->tanggal;
        
        $data->save();
        return redirect('tiket');
    }

    public function deletet($id){
        $data = ticket::Find($id);
        $data->delete();
        return redirect('tiket');
    }

    public function editt($id){
        $data = ticket::Find($id);
        return view('tiket.edit',['data' => $data]);
    }

    public function updates(Request $request){
        $data = ticket::Find($request->id);
        
        $data->name = $request->name;
        $data->jenist = $request->jenist;
        $data->jenisk = $request->jenisk;
        $data->tanggal = $request->tanggal;
        $data->save();
        return redirect('tiket');

    }


    public function filter($jenist){
        $data = ticket::all()->where('jenist',$jenist);
        
        return view('tiket.tickets',['data' => $data]);
    }



}
