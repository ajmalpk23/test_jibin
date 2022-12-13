<?php

namespace App\Http\Controllers;

use App\Models\SkillsModel;
use Illuminate\Http\Request;

class SkillsController extends Controller
{
    // generate and update skills
    public function generateSkills(Request $request)
    {
        $skillData = SkillsModel::updateOrCreate([
            'skill_id' => $request->skill_id
        ], [
            "skill_name" => $request->skill_name,
            "skill_value" => $request->skill_value,
            "status" => $request->status,
        ]);

        $response = [];
        if (isset($skillData)) {
            $response['errormessage'] = $request->skill_id > 0 ? 'Skill Data Updated Successfully.' : 'Skill Data Created Successfully.';
            $response['errorcode'] = 0;
            return response()->json($response);
        } else {
            $response['errormessage'] = 'Failed';
            $response['errorcode'] = 15;
            return response()->json($response);
        }
    }


    public function getAllSkillsDataList()
    {
        $skillsDataList = SkillsModel::where('status', 1)->get();
        $res = null;
        if ($skillsDataList != null) {
            $res['data'] = $skillsDataList;
            $res['errorCode'] = 200;
            $res['errorMessage'] = "loaded successfully";
            return response()->json($res);
        } else {
            $res['data'] = $skillsDataList;
            $res['errorCode'] = 300;
            $res['errorMessage'] = "loaded faild";
            return response()->json($res);
        }
    }
}
