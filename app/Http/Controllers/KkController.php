<?php

namespace App\Http\Controllers;

use App\Helpers\ApiFormatter;
use App\Models\Kk;
use Exception;
use Illuminate\Http\Request;

class KkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Kk::all();
        if($data){
            return ApiFormatter::createAPI(200,'success',$data);
        }else{
            return ApiFormatter::createAPI(400,'Failed');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            $kk = Kk::create($request->all());

            $data = Kk::where('no_kk','=',$kk->no_kk)->get();
            if($data){
                return ApiFormatter::createAPI(200,'success',$data);
            }else{
                return ApiFormatter::createAPI(400,'Failed');
            }
        }catch(Exception $error){
            return ApiFormatter::createAPI(400,'Failed',$error);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kk  $kk
     * @return \Illuminate\Http\Response
     */
    public function show(Kk $kk)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kk  $kk
     * @return \Illuminate\Http\Response
     */
    public function edit(Kk $kk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kk  $kk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kk $kk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kk  $kk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kk $kk)
    {
        //
    }
}
