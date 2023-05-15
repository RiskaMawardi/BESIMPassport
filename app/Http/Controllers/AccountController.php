<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;
use Illuminate\Support\Facades\Hash;
use App\Helpers\ApiFormatter;
use Exception;

class AccountController extends Controller
{

    public function data(){
        $data = Account::all();
        if($data){
            return ApiFormatter::createAPI(200,'success',$data);
        }else{
            return ApiFormatter::createAPI(400,'failed');
        }
    }

    public function register(Request $request){

        return csrf_token();
        try{
            $request->validate([
                'id_akun' => 'required',
                'username' => 'required',
                'password' => 'required',
                'no_hp' => 'required',
                'role' => 'required'
            ]);
    
            $akun = Account::create([
                'id_akun' => $request->id_akun,
                'username' => $request->username,
                'password' => $request->password,
                'no_hp' => $request->no_hp,
                'role' => $request->role,
            ]);
    
            $data = Account::where('id_akun','=',$akun->id_akun)->get();
            if($data){
                return ApiFormatter::createAPI(200,'success register',$data);
            }else{
                return ApiFormatter::createAPI(400,'failed register');
            }
    
        }catch(Exception $error){
            return ApiFormatter::createAPI(400,'failed register',$error);
        }

        
    }
}
