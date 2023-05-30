<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;
use App\Models\Kk;
use App\Helpers\formatAPI;
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
        
            $allowedfileExtension=['pdf','jpg','png'];
            $files = $request->file('fileName'); 
            $errors = [];
         
            foreach ($files as $file) {      
         
                $extension = $file->getClientOriginalExtension();
         
                $check = in_array($extension,$allowedfileExtension);
         
                if($check) {
                    foreach($request->fileName as $mediaFiles) {
         
                        $pathkk = $mediaFiles->store('public/document/KK');
                        $pathktp = $mediaFiles->store('public/document/KTP');
                        $pathakta = $mediaFiles->store('public/document/Akta');
                        // $pathbuku = $mediaFiles->store('public/document/Buku_nikah');
                        // $pathijazah = $mediaFiles->store('public/document/Ijazah');
                        // $pathsurat = $mediaFiles->store('public/document/Surat_baptis');
                        $pathdoc = $mediaFiles->store('public/document/Dokumen_Tambahan');
                        
                        
                        $id = 1;
                        Document::updateOrCreate([
                            'id_document' => $id++,
                        ],[
                            'kk' => $request->file('kk')->getClientOriginalName(),
                            'pathkk' => $pathkk,
                            'ktp' => $request->file('ktp')->getClientOriginalName(),
                            'pathktp' => $pathktp,
                            'akta' => $request->file('akta')->getClientOriginalName(),
                            'pathakta' => $pathakta,
                            'dokumen_tambahan' => $request->file('dokumen_tambahan')->getClientOriginalName(),
                            'pathdoc' => $pathdoc
                        ]);

                        $i = 1;

                        Permohonan::updateOrCreate([
                            'id_permohonan'=>$i++, 
                        ],[
                            'jenis_passpor' => $request->jenis_passpor,
                            'kepentingan' => $request->kepentingan,
                            'negara_tujuan' => $request->negara_tujuan,
                            'keberangkatan' => $request->keberangkatan,
                            'kepulangan' => $request->kepulangan,
                            'kepentingan' => $request->kepentingan,
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


                    }
                } else {
                    return response()->json(['invalid_file_format'], 422);
                }
         
                return response()->json(['file_uploaded'], 200);
         
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
