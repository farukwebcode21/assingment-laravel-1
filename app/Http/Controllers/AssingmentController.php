<?php

namespace App\Http\Controllers;

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
}
