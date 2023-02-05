<?php

namespace App\Http\Controllers;

use App\Models\club;
use App\Models\pemain;
use Illuminate\Http\Request;

class ClubController extends Controller
{
    public function tes()
    {
        $data=club::all();
        return view('club.clubs',['data'=> $data]);
    }
    public function save(Request $request)
    {
        $data = new club;
        if($request->hasFile('logo')){
            $request->file('logo')->move('img/',$request->file('logo')->getClientOriginalName());
            $data->logo=$request->file('logo')->getClientOriginalName();
        }
        $data->name_club = $request->name;
        $data->asal_club = $request->asal;

        $data->save();
        return redirect('clubs');
        }

    public function create()
    {
        return view('club.create');
    }



    
    public function deletec($id){

        $count = pemain::where('club_id',$id)->count();
        if($count>0){
            return back()->withErrors(['Sedang ada pemain yang di kontrak']);
        }


        $data = Club::Find($id);
        $data->delete();
        return redirect('clubs');
    }



    public function isii($id,$name){
        $data = Club::Find($id);
        $data1 = pemain::all()->where('club_id',$name);
        return view('club.isi',['data' => $data,'data1'=>$data1]);
    }


    public function edit($id){
        $data = Club::Find($id);
        return view('club.edit',['data' => $data]);
    }

    public function update(Request $request){
        $data = Club::Find($request->id);
        if($request->hasFile('logo')){
            $request->file('logo')->move('img/',$request->file('logo')->getClientOriginalName());
            $data->logo=$request->file('logo')->getClientOriginalName();
        }else{
            $data->logo=$request->default;
        }
        $data->name_club = $request->name;
        $data->asal_club = $request->asal;
        $data->save();
        return redirect('clubs');
    }
    
    public function data()
    {
        
    }

    }

    

