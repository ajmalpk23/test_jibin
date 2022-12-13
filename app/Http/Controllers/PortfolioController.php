<?php

namespace App\Http\Controllers;

use App\Models\portfolioCatModel;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    //add edit portfolio Category
    public function addEditPortfolioCate(Request $request)
    {

        $portfolioCat = portfolioCatModel::updateOrCreate([
            'cat_id' => $request->cat_id
        ], [
            "cat_name" => $request->cat_name,
            "status" => $request->status,

        ]);

        $response = [];
        if (isset($portfolioCat)) {
            $response['errormessage'] = $request->cat_id > 0 ? 'Portfolio Category Data Updated Successfully.' : 'Portfolio Category Created Successfully.';
            $response['errorcode'] = 0;
            return response()->json($response);
        } else {
            $response['errormessage'] = 'Failed';
            $response['errorcode'] = 15;
            return response()->json($response);
        }
    }


    public function getPortfolioCatDataList()
    {
        $portfolioCatDataList = portfolioCatModel::where('status', 1)->get();
        $res = null;
        if ($portfolioCatDataList != null) {
            $res['data'] = $portfolioCatDataList;
            $res['errorCode'] = 200;
            $res['errorMessage'] = "loaded successfully";
            return response()->json($res);
        } else {
            $res['data'] = $portfolioCatDataList;
            $res['errorCode'] = 300;
            $res['errorMessage'] = "loaded faild";
            return response()->json($res);
        }
    }
}
