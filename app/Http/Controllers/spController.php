<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DateTime;

class spController extends Controller
{
    
    private $bln;
    private $ho;
    private $cbg;
    
    public function sp01() {
        return view ('admin.sparepart.sp01');
    }
    

    public function sp01filter(Request $request) {
        $validated = $request->validate([
        'cari' => 'required|max:20'
        ]);
        
        
        $user = Auth::user();

        if($request->ho=="on"||$request->ho=="2"){
            $ho="2";
        }else{
            $ho="";
        }

        if($request->has('cbg')){
            if($request->cbg=="on"||$request->cbg=="") { $cbg=""; }
            else{ $cbg=$user->cabang; } 
        } else { $cbg=$user->cabang; }
        
        $smg=$user->smg;

       
        $api = "https://smg.ptsis.my.id/sj/blank/andro/SLO_API_SP01.PHP?ho=".$ho."&smg=".$smg."&cbg=".$cbg."&partno=".$request->cari;

        $result = file_get_contents($api);
        $data = json_decode($result);
        $partno= $request->cari;
        
        return view ('admin.sparepart.sp01data', ['data'=>$data, 'partno'=>$partno, 'ho'=>$ho, 'cbg'=>$cbg,]);  
    }


    public function sp02() {
        return view('admin.sparepart.sp02');
    }

    public function sp03() {
        return view('admin.sparepart.sp03');
    }

    public function sp03proses(Request $request) {       
        $user = Auth::user();
        $bln = $request->bulan;
        $tahun = $request->tahun;
        $smg=$user->smg; 
       
        $api = "https://smg.ptsis.my.id/sj/blank/andro/SLO_API_SP03.PHP?smg=".$smg."&thn=".$tahun."&bln=".$bln."";

        $result = file_get_contents($api);
        $data = json_decode($result);
        
        return view ('admin.sparepart.sp03data', ['data'=>$data, 'tahun'=>$tahun, 'bln'=>$bln]);  
    }
}
