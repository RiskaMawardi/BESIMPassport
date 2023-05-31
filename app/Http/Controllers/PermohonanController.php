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
            // $request->validate([
            //     'nik' => 'required',
            //     'nama' => 'required',
            //     'tempat_lahir' => 'required',
            //     'tgl_lahir' => 'required',
            //     'jk' => 'required',
            //     'alamat' => 'required',
            //     'status_sipil' => 'required',
            //     'jenis_pekerjaan' => 'required',
            //     'kewarganegaraan' => 'required',
            //     'kk' => 'required',
            //     'ktp' => 'required',
            //     'akta' => 'required',
            //     'jenis_passpor' => 'required',
            //     'kepentingan' => 'required',
            //     'negara_tujuan' => 'required',
            //     'keberangkatan' => 'required',
            //     'kepulangan' => 'required',
            // ]);

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
            ]);

            // $id = Permohonan::count();
            // if ($id == 0) {
            //     $request['id_permohonan'] = 1;
            // }else {
            //     $request['id_permohonan'] = $id++;
            // }
            Permohonan::create([
                'nik' => $request->nik,
                'jenis_passpor' => $request->jenis_passpor,
                'kepentingan' => $request->kepentingan,
                'negara_tujuan' => $request->negara_tujuan,
                'keberangkatan' => $request->keberangkatan,
                'kepulangan' => $request->kepulangan,
                'status_permohonan'=> 'pending',
            ]);

            $data = Kk::where('nik','=',$request->nik)->get();
            if($data){
                return formatAPI::createAPI(200,'Success',$data);
            }else{
                return formatAPI::createAPI(400,'Failed');
            }

        }catch(Exception $error){
            return formatAPI::createAPI(400,'Failed',$error->getMessage());

<<<<<<< HEAD
        }
=======
            
>>>>>>> 6305c9a857b2a61c1c23e330c798ca4303c6fee9
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
