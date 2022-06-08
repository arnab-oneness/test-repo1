<?php

namespace App\Http\Controllers\customers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\Models\Customer;

class LoginController extends Controller
{
    

    // protected function generate_api_token()
    // {
    //     $api_token = Str::random(60);
    //     return ['api_token'=>$api_token];
    // }

    public function index(Request $request)
    {
        $api_token = Str::random(60);
        $request->forceFill(['api-token' => hash('sha256', $api_token)])->save();
    }


}
