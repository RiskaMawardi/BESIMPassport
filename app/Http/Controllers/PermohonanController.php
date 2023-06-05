<?php

namespace App\Http\Controllers;

use App\Models\Kk;
use App\Models\Document;
use App\Models\Permohonan;
use Exception;
use App\Http\Controllers\API\BaseController;
use Illuminate\Http\Request;
use App\Helpers\formatAPI;

class PermohonanController extends Controller
{
    /**
     * Display are listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Kk::all();
        if($data){
            return formatAPI::createAPI(200,'Success',$data);
        }else{
            return formatAPI::createAPI(400,'Failed');
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        try{
            $permohonan = Kk::create($request->except([
                'kk',
                'ktp',
                'akta',
                'dokumen_tambahan',
                'jenis_passpor',
                'kepentingan',
                'negara_tujuan',
                'keberangkatan',
                'kepulangan'
            ]));
            
            Document::create([
                'nik' => $request->nik,
                'kk' => $request->kk,
                'pathkk' => $request->pathkk,
                'ktp' => $request->ktp,
                'pathktp' => $request->pathktp,
                'akta' => $request->akta,
                'pathakta' => $request->pathakta,
                'dokumen_tambahan' => $request->dokumen_tambahan,
                'pathdoc' => $request->pathdoc,
                'id_user'=>$request->id_user
            ]);
        
            Permohonan::create([
                'nik' => $request->nik,
                'jenis_passpor' => $request->jenis_passpor,
                'kepentingan' => $request->kepentingan,
                'negara_tujuan' => $request->negara_tujuan,
                'keberangkatan' => $request->keberangkatan,
                'kepulangan' => $request->kepulangan,
                'status_permohonan'=> 'pending',
                'id_user'=>$request->id_user
            ]);

            $data = Kk::where('nik','=',$request->nik)->get();
            if($data){
                return formatAPI::createAPI(200,'Success',$data);
            }else{
                return formatAPI::createAPI(400,'Failed');
            }

        }catch(Exception $error){
            return formatAPI::createAPI(400,'Failed',$error->getMessage());
        }
    }

    public function getData(){
        $di = Auth::user();
        $data = DB::table('kk')
       ->join('permohonan', 'permohonan.nik', '=', 'kk.nik')
       ->join('document', 'document.nik', '=', 'permohonan.nik')
       ->join('user', 'user.id_user', '=', 'kk.id_user')
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Permohonan  $permohonan
     * @return \Illuminate\Http\Response
     */
    public function show(Permohonan $permohonan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Permohonan  $permohonan
     * @return \Illuminate\Http\Response
     */
    public function edit(Permohonan $permohonan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Permohonan  $permohonan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Permohonan $permohonan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Permohonan  $permohonan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Permohonan $permohonan)
    {
        //
    }
}
