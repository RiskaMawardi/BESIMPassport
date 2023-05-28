<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function index(){
        $user = User::all();
        return BaseController::sendResponse($user,'Displaying data');
    }

    public function indexRegister(){
        return view('auth.register');
    }

    public function register(Request $request){
        $validate = Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8',
            'no_hp' => 'required',
            'role' => 'required',
        ]);

        if($validate->fails()){
            return BaseController::sendError('Validation Error.', $validate->errors());
        }

        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
 
        $user = User::create($input);

        $success['token'] = $user->createToken('MyApp')->plainTextToken;
        $success['name'] = $user->name;
        return BaseController::sendResponse($success,'User register successfully.');
        //return redirect('/login')->with('success', 'User registers successfully!');
    }

    public function login(){
        return view('auth.login');
    }

    public function loginAccount(Request $request){
        if(Auth::attempt(['email'=>$request->email, 'password'=>$request->password])){
            $user = Auth::user();
            $success['token'] = $user->createToken('MyApp')->plainTextToken;
            $success['name'] = $user->name;
            $success['data'] = $user;
            return BaseController::sendResponse($success,'User Login SuccessFully.');
        }else{
            return BaseController::sendError('Unauthorized.',['error'=>'Unauthorized']);
        }
    }

    public function logout(Request $request){
        
        $request->user()->currentAccessToken()->delete();
    }

}
