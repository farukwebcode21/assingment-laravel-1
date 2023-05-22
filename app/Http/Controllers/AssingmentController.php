<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AssingmentController extends Controller
{

    // 
    function postUserName(Request $request){
        $name = $request->input('name');
        // return $name;
    }
    // 
    function postUserAgent(Request $request){
        $userAgent = $request->header('User-Agent');
        return $userAgent;

    }
    // 
    function getStore(Request $request){
        $page = $request->query('page');
        if($page === null){
            $page = null;
        }
    }

    // 

    function createJsonData(){
        $data =[
            "message" =>"Success",
            "data"=>[
                "name" =>"John Doe",
                "age"=>25
                ]
            ];
    }

    function uploadPhot(Request $request){
        $photo = $request->file('avata');
        $photo->move(public_path('uploads'), $photo->getClientOriginalName());
        return 1;
    }

    function  sendRemberToken(Request $request){
        $rememberToken = $request->cookie('remember_token');
        if(!$rememberToken){
            $rememberToken = null;
        }

    }
    function postEmail(Request $request, $email){
        $responseData =$request->input($email);
        // $responseData =[
        //     'success' =>true,
        //     'message' => 'Form submitted successfully.'
        // ];
        return $responseData;
    }
}
