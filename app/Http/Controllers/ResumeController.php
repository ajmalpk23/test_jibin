<?php

namespace App\Http\Controllers;

use App\Models\ResumeModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request as FacadesRequest;

class ResumeController extends Controller
{
    //add edit resume
    public function addEditResume(Request $request)
    {

        $resumeData = ResumeModel::updateOrCreate([
            'resume_id' => $request->resume_id
        ], [
            "resume_type" => $request->resume_type,
            "title" => $request->title,
            "start_year" => $request->start_year,
            "end_year" => $request->end_year,
            "company_name" => $request->company_name,
            "description" => $request->description,
            "priority" => $request->priority,
            "status" => $request->status,

        ]);

        $response = [];
        if (isset($resumeData)) {
            $response['errormessage'] = $request->resume_id > 0 ? 'Resume Data Updated Successfully.' : 'Resume Data Created Successfully.';
            $response['errorcode'] = 0;
            return response()->json($response);
        } else {
            $response['errormessage'] = 'Failed';
            $response['errorcode'] = 15;
            return response()->json($response);
        }
    }

    public function getAllResumeDataList()
    {
        $resumeDataList = ResumeModel::where('status', 1)->get();
        $res = null;
        if ($resumeDataList != null) {
            $res['data'] = $resumeDataList;
            $res['errorCode'] = 200;
            $res['errorMessage'] = "loaded successfully";
            return response()->json($res);
        } else {
            $res['data'] = $resumeDataList;
            $res['errorCode'] = 300;
            $res['errorMessage'] = "loaded faild";
            return response()->json($res);
        }
    }
}
