<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Access\Response;
use App\User;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Facades\JWTAuth;

class UserController extends Controller
{
    public function signUp(Request $request){
        $this->validate($request ,[
            'name' => 'required',
            'email' =>'required|email|unique:users',
            'password' => 'required'
        ]);
        $user = new User([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password'))

        ]);
        $user->save() ;
        return response()->json([
            'message' => 'Successfully created user'
        ],201);
    }
    public function signIn( Request $request){
        $this->validate($request ,[

            'email' =>'required|email',
            'password' => 'required'
        ]);

        $credentials = $request->only('email' , 'password') ;
        try{
            if (!$token = JWTAuth::attempt($credentials)){ // Checking for user credentials and retreiving the token
                return response()->json([
                    'erreur' => 'Invalide credentials !'
                ],500);
            }
        }catch (JWTException $e){
            return response()->json([
                'erreur' => 'Token could not be created !'
            ],500);
        }
        return response()->json([
            'token' => $token
        ],200) ;

    }
    public function getUsers(){
        return response()->json([
            'users' => $users = User::all()
        ],201);
    }

}
