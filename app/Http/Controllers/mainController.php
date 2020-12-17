<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class mainController extends Controller
{
    public function widget() {
        $user = Auth::user();
        $smg=$user->smg; 
       
        $api = "https://smg.ptsis.my.id/sj/blank/andro/slo_api_dash01.php?tipe=0&smg=".$smg."&param1=s";
        $result = file_get_contents($api);
        $data_sales = json_decode($result);
        
        $api = "https://smg.ptsis.my.id/sj/blank/andro/slo_api_dash01.php?tipe=0&smg=".$smg."&param1=sct";
        $result = file_get_contents($api);
        $data_salesc = json_decode($result);
        
        $api = "https://smg.ptsis.my.id/sj/blank/andro/slo_api_dash01.php?tipe=1&smg=".$smg."";
        $result = file_get_contents($api);
        $data_mekanik = json_decode($result);
        
        $api = "https://smg.ptsis.my.id/sj/blank/andro/slo_api_dash01.php?tipe=2&smg=".$smg."";
        $result = file_get_contents($api);
        $data_sparepart = json_decode($result);
        
        $api = "https://smg.ptsis.my.id/sj/blank/andro/slo_api_dash01.php?tipe=11&smg=".$smg."";
        $result = file_get_contents($api);
        $data_invoice = json_decode($result);
        
        $api = "https://smg.ptsis.my.id/sj/blank/andro/slo_api_dash01.php?tipe=12&smg=".$smg."";
        $result = file_get_contents($api);
        $data_kdp = json_decode($result);
        
        $api = "https://smg.ptsis.my.id/sj/blank/andro/slo_api_dash01.php?tipe=13&smg=".$smg."";
        $result = file_get_contents($api);
        $data_service = json_decode($result);
        
        $api = "https://smg.ptsis.my.id/sj/blank/andro/slo_api_dash01.php?tipe=14&smg=".$smg."";
        $result = file_get_contents($api);
        $data_sp = json_decode($result);
        
        return view ('admin.pages.dashboard', ['data_sales'=>$data_sales,'data_salesc'=>$data_salesc, 'data_mekanik'=>$data_mekanik, 'data_sparepart'=>$data_sparepart, 'data_invoice'=>$data_invoice, 'data_kdp'=>$data_kdp, 'data_service'=>$data_service, 'data_sp'=>$data_sp]); 
    
    }
    
}
