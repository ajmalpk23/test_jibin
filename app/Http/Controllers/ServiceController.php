<?php

namespace App\Http\Controllers;

use App\Models\ServiceModel;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    //
    //add edit Service
    public function addEditServices(Request $request)
    {

        $serviceData = ServiceModel::updateOrCreate([
            'service_id' => $request->service_id
        ], [
            "icon" => $request->icon,
            "service_name" => $request->service_name,
            "description" => $request->description,
            "status" => $request->status,

        ]);

        $response = [];
        if (isset($serviceData)) {
            $response['errormessage'] = $request->service_id > 0 ? 'Service Data Updated Successfully.' : 'Service Data Created Successfully.';
            $response['errorcode'] = 0;
            return response()->json($response);
        } else {
            $response['errormessage'] = 'Failed';
            $response['errorcode'] = 15;
            return response()->json($response);
        }
    }

    public function getAllServiceDataList()
    {
        $serviceDataList = ServiceModel::where('status', 1)->get();
        $res = null;
        if ($serviceDataList != null) {
            $res['data'] = $serviceDataList;
            $res['errorCode'] = 200;
            $res['errorMessage'] = "loaded successfully";
            return response()->json($res);
        } else {
            $res['data'] = $serviceDataList;
            $res['errorCode'] = 300;
            $res['errorMessage'] = "loaded faild";
            return response()->json($res);
        }
    }
}
