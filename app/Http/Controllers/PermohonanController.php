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
            $request->validate([
                'nik' => 'required',
                'nama' => 'required',
                'tempat_lahir' => 'required',
                'tgl_lahir' => 'required',
                'jk' => 'required',
                'alamat' => 'required',
                'status_sipil' => 'required',
                'jenis_pekerjaan' => 'required',
                'pekerjaan' => 'required',
                'kewarganegaraan' => 'required',
            ]);

            $permohonan = Kk::create($request->all());

            $alldata = 1;
            $document = new Document;
            $document->nik = $request->nik;
            $document->id_document = $alldata++;
            $document->save();

            $count =1 ;
            $permohonan = new Permohonan;
            $permohonan->nik = $request->nik;
            $permohonan->id_permohonan = $count++;
            $permohonan->save();

            $data = Kk::where('nik','=',$permohonan->nik)->get();
            if($data){
                return formatAPI::createAPI(200,'Success',$data);
            }else{
                return formatAPI::createAPI(400,'Failed');
            }

        }catch(Exception $error){
            return formatAPI::createAPI(400,'Failed',$error->getMessage());
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
