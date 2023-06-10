<?php

namespace App\Http\Controllers;

use App\Models\Kk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Helpers\formatAPI;
use App\Models\Passport;
use App\Models\Permohonan;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Facades\Redis;

class AdminController extends Controller
{
    public function getData(){
        $data = DB::table('kk')
        ->join('permohonan', 'permohonan.nik', '=', 'kk.nik')
        ->join('document', 'document.nik', '=', 'permohonan.nik')
        ->get();
        //dd($data);
        if($data){
            if($data){
                return formatAPI::createAPI(200,'Success',$data);
            }else{
                return formatAPI::createAPI(400,'Failed');
            }   
        }
    }

    public function getDataDetail($nik){
         $data = DB::table('kk')
        ->join('permohonan', 'permohonan.nik', '=', 'kk.nik')
        ->join('document', 'document.nik', '=', 'permohonan.nik')
        ->select('kk.*','kk.nama','permohonan.jenis_passpor','permohonan.kepentingan','permohonan.negara_tujuan','permohonan.keberangkatan','permohonan.kepulangan','document.kk','document.pathkk','document.ktp','document.pathktp','document.akta','document.pathakta','document.dokumen_tambahan','document.pathdoc')
        ->where('permohonan.nik',$nik)
        ->get();

        if($data){
            if($data){
                return formatAPI::createAPI(200,'Success',$data);
            }else{
                return formatAPI::createAPI(400,'Failed');
            }
        }
    }

    public function approve(Request $request){
        $nik = $request->nik;
        Permohonan::where('nik',$nik)->update(['status_permohonan'=>'disetujui']);
    }

    public function disapprove(Request $request){
        $nik = $request->nik;
        Permohonan::where('nik',$nik)->update(['status_permohonan'=>'ditolak']);
    }

    public function insert(Request $request){
       
        try{
            $data = Passport::create([
                'no_passport' =>bcrypt($request->nik),
                'nik' => $request->nik,
                'foto' => $request->foto,
                'pathfoto' => $request->pathfoto,
                'kode_negara' => $request->kode_negara,
                'tgl_pengeluaran' => Carbon::now(),
                'batas_tgl' => Carbon::tomorrow(),
                'kantor' => $request->kantor
            ]);

            if($data){
                return formatAPI::createAPI(200,'Success',$data);
            }else{
                return formatAPI::createAPI(400,'Failed');
            }

        }catch(Exception $error){
            return formatAPI::createAPI(400,'Failed',$error->getMessage());
        }
    }
}
