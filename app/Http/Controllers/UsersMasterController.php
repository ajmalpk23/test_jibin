<?php

namespace App\Http\Controllers;

use App\Models\UsersAuth;
use App\Models\UsersAuthInfo;
use App\Models\UsersMaster;
use Illuminate\Http\Request;

class UsersMasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

    //admin login testing

    public function login()
    {
        return view('auth.login');
    }


    public function adminLogout(Request $request)
    {

        $request->session()->flush();
        return view('auth.login');
    }
    public function adminLogin(Request $request)
    {
// dd($request);
        // Validate the form data
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);


        $userAuthInfo = UsersAuthInfo::where('value', $request->email)->get();
//         print_r($userAuthInfo);
// die();

        $userAuth = UsersAuth::where('auth_id', $userAuthInfo[0]->auth_id)->where('password', $request->password)->get();


        // Attempt to log the user in
        if (!empty($userAuth) && count($userAuth)>0) {
            $userMasterInfo = UsersMaster::where('user_id', $userAuth[0]->user_id)->where('account_no', $userAuth[0]->account_no)->get();
            if (!empty($userMasterInfo)) {
// dd($userMasterInfo);

                // $request->session()->put('auth', $userMasterInfo);
                $a=$request->session()->put('user', $userMasterInfo);
                // dd($a);
// return view('turf_management.turf_management');
                // return redirect()->intended(route('/admin'));
                return redirect()->route('home');
            }
            // if successful, then redirect to their intended location
        }
        // if unsuccessful, then redirect back to the login with the form data



    }
}
