<?php

namespace App\Http\Controllers;

use App\Models\LoginModel;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //

    public function userRegister(Request $request)
    {
        $registerData = LoginModel::create($request->all());
        $res = null;
        if ($registerData != null) {
            $res['data'] = $registerData;
            $res['errorCode'] = 200;
            $res['errorMessage'] = "Register Successful";
            return response()->json($res);
        } else {
            $res['data'] = $registerData;
            $res['errorCode'] = 404;
            $res['errorMessage'] = "Register faild";
            return response()->json($res);
        }
    }

    public function login(Request $request)
    {
        $loginData = LoginModel::where('email', $request->email)
            ->where('password', $request->password)->where('status', 1)
            ->get();
        $res = null;
        if (count($loginData) > 0) {
            $res['data'] = $loginData;
            $res['errorCode'] = 200;
            $res['errorMessage'] = "Login Successful";
            return response()->json($res);
        } else {
            $res['data'] = $loginData;
            $res['errorCode'] = 404;
            $res['errorMessage'] = "Login faild";
            return response()->json($res);
        }
    }
}
