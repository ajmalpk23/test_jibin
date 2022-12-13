<?php

namespace App\Http\Controllers;

use App\Models\InterestesModel;
use Illuminate\Http\Request;

class InterestesController extends Controller
{
    //add edit interests data
    public function addEditInterestes(Request $request)
    {
        $InterestesData = InterestesModel::updateOrCreate([
            'interest_id' => $request->interest_id
        ], [
            "interest_title" => $request->interest_title,
            "status" => $request->status,
        ]);

        $response = [];
        if (isset($InterestesData)) {
            $response['errormessage'] = $request->interest_id > 0 ? 'Interestes Data Updated Successfully.' : 'Interestes Data Created Successfully.';
            $response['errorcode'] = 0;
            return response()->json($response);
        } else {
            $response['errormessage'] = 'Failed';
            $response['errorcode'] = 15;
            return response()->json($response);
        }
    }

    public function getInterestDataList()
    {
        $interestDataList = InterestesModel::where('status',1)->get();
        $res = null;
        if ($interestDataList != null) {
            $res['data'] = $interestDataList;
            $res['errorCode'] = 200;
            $res['errorMessage'] = "loaded successfully";
            return response()->json($res);
        } else {
            $res['data'] = $interestDataList;
            $res['errorCode'] = 300;
            $res['errorMessage'] = "loaded faild";
            return response()->json($res);
        }
    }
}
