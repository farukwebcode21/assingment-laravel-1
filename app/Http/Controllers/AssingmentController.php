<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AssingmentController extends Controller
{
    function postUserName(Request $request){
        $name = $request->input('name');
    }
}
