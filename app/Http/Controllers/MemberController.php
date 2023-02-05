<?php

namespace App\Http\Controllers;

use App\Models\ads;
use App\Models\club;
use App\Models\member;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class MemberController extends Controller
{
    public function tampil()
    {
        $data=member::all();
        return view ('member.member',['data'=>$data]);
    }

    public function tambahh()
    {
        $data1=club::all();
        return view('member.create',['data1'=>$data1]);
    }

    public function savemember(Request $request)
    {
        $request->validate(
            [
                'name'=>'required',
                'uid'=>'required|unique:members,uid',
                // 'uid'=>'required|unique:members,uid'
            ],[
                'name.required'=>'nama harus di isi',
                'uid.required'=>'7543ghfhgf'
                // 'uid.required'=>'uid sama'
            ]
        );

        $data = new member();
        $data->name = $request->name;
        $data->uid = $request->uid;
        $data->club_id =$request->club_id;
        $data->age = $request->age;
        $data->team = $request->team;

        $data->save();

        return redirect('membert');
    }

    public function editmember($id, Request $request){

        
        

        $data = member::Find($id);
        $data1 = club::all();
        return view('member.edit',['data' => $data,'data1'=>$data1]);
    }

    public function updatemember(Request $request){


        $data = member::Find($request->id);

        $request->validate(
            [
                'name'=>'required',
                'uid'=>'required|unique:members,uid',
                // 'uid'=>'required|unique:members,uid'
            ],[
                'name.required'=>'nama harus di isi',
                'uid.unique'=>'data ada yang sama'
                // 'uid.required'=>'uid sama'
            ]
        );

        $data->name = $request->name;
        $data->uid = $request->uid;
        $data->age = $request->age;
        $data->team = $request->team;
        $data->save();
        return redirect('membert');
    }

    public function delete($id){
        $data = member::Find($id);
        $data->delete();
        return redirect('membert');
    }
}
