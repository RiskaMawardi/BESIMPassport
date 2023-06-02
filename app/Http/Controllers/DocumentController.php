<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;
use App\Models\Kk;
use App\Models\Permohonan;
use App\Helpers\formatAPI;
use Illuminate\Support\Facades\Storage;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            $id = 1;
            $doc = Document::where('')([
                'id_document' => $id++,
            ],[
                'kk' => $request->kk,
                'ktp' => $request->ktp,
                'akta' => $request->akta,
                'dokumen_tambahan' => $request->dokumen_tambahan,
            ]);

            $i = 1;

            Permohonan::update([
                'id_permohonan'=>$i++, 
            ],[
                'jenis_passpor' => $request->jenis_passpor,
                'kepentingan' => $request->kepentingan,
                'negara_tujuan' => $request->negara_tujuan,
                'keberangkatan' => $request->keberangkatan,
                'kepulangan' => $request->kepulangan,
                'status_permohonan'=> 'pending',
            ]);


            // //store image file into directory and db
            // $save = new Document();
            // $save->kk = $kk;
            // $save->pathkk = $pathkk;
            // $save->ktp = $ktp;
            // $save->pathktp = $pathktp;
            // $save->akta = $akta;
            // $save->pathakta = $pathakta;
            // $save->buku_nikah = $buku_nikah;
            // $save->pathbuku = $pathbuku;
            // $save->ijazah = $ijazah;
            // $save->pathijazah = $pathijazah;
            // $save->surat_baptis = $surat;
            // $save->pathsurat = $pathsurat;
            // $save->save();

            $data = Document::where('id_document','=',$doc->id_document)->get();
            if($data){
                return formatAPI::createAPI(200,'Success',$data);
            }else{
                return formatAPI::createAPI(400,'Failed');
            }
            
        }catch (Exception $error){
            return formatAPI::createAPI(400,'Failed',$error->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function show(Document $document)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function edit(Document $document)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Document $document)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function destroy(Document $document)
    {
        //
    }
}
