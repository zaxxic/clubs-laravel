<?php

namespace App\Http\Controllers;

use App\Models\schedule as ModelsSchedule;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function tampil()
    {
        $data=ModelsSchedule::all();
        return view ('jadwal.jadwal',['data'=>$data]);
    }

    public function tambah()
    {
        return view('jadwal.create');
    }

    public function savejadwal(Request $request)
    {
        $data = new ModelsSchedule();
        $data->team1 = $request->team1;
        $data->date = $request->date;
        $data->jam = $request->jam;
        $data->team2 = $request->team2;
        
        $data->save();
        return redirect('jadwalt');
    }

    public function perbarui($id){
        $data = ModelsSchedule::Find($id);
        return view('jadwal.edit',['data' => $data]);
    }
    
    public function updatej(Request $request){
        $data = ModelsSchedule::Find($request->id);
        
        $data->team1 = $request->team1;
        $data->date = $request->date;
        $data->jam = $request->jam;
        $data->team2 = $request->team2;
        $data->save();
        return redirect('jadwalt');

    }

    
    public function hapusj($id){
        $data = ModelsSchedule::Find($id);
        $data->delete();
        return redirect('jadwalt');
    }

}
