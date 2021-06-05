<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dokter;
use App\Models\kamar;
use App\Models\pasien;
use App\Models\user;

class dokterController extends Controller
{
    public function index(){
        $pasien = kamar::all();
        dd($pasien);
        return view('welcome',[
            'pasien' => $pasien
        ]);
    }

    public function search($key){
        $kamar = kamar::where('');
        return view('kamar0162',[
            'kamar' => $kamar
        ]);
        }
    public function tambah(){
        $kamar = kamar::all();
        $pasien = pasien::all();
        return view('tambah-dokter0142',[
            'kamar' => $kamar,
            'pasien' => $pasien
        ]);
    }
    public function edit ($id){
        $kamar = kamar::all();
        $pasien = pasien::all();
        $dokter = dokter::all();
        return view('edit-dokter0142',[
            'dokter' => $dokter,
            'kamar' => $kamar,
            'pasien' => $pasien
        ]);
    }
    public function update(Request $request, $id){
        Transaksi::where('id',$id)->update([
            'id_pasien'=>$request->id_pasien,
            'id_kamar'=>$request->id_kamar

        ]);
    }

    public function destroy($id){
        $dokter = dokter::where('id',$id)->first();
        $dokter->delete();
        return redirect()->route('');
    }
}