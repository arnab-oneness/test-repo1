<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TestController extends Controller
{
    //

    public function hello(Request $request)
    {
        // die('Hi');
        // dd($request->name);

        return response()->json(['status'=>true , 'req_data' => ($request->all()) ], Response::HTTP_OK);
    }
}
