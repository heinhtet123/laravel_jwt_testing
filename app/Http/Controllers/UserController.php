<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view('login.login');
    }


    public function authenticate(Request $request)
    {
       $credentials = $request->only(['email', 'password']);
       
      // $credentials = ['email' => 'chris@scotch.io', 'password' => 'secret'];
        try{
              if (! $token = JWTAuth::attempt($credentials)) {
                return response()->json(['error' => 'invalid_credentials'], 401);
              }




        }catch (Tymon\JWTAuth\Exceptions\TokenExpiredException $e) {

            return redirect()->route('api.user.login');
           // return response()->json(['token_expired'], $e->getStatusCode());

        }catch(JWTException $e){
              return response()->json(['error' => 'could_not_create_token'], 500);
        }

        // $token=response()->json(compact('token'));
        return redirect()->route('api.user.index',['token'=>$token]);
    }

    public function index(Request $request)
    {
        
      //  $token = JWTAuth::getToken();
  //      echo $token;
        return response()->json(User::get());
       // dd(JWTAuth::parseToken());
       // dd(JWTAuth::parseToken()->authenticate());
        //
       //$credentials = $request->only('email', 'password');

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
