<?php

namespace App\Http\Controllers;

use App\Models\AboutModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{

    // add about us data
    public function addAboutUs(Request $request)
    {
        $image_name = "";
        if ($request->profile_image != null) {
            $Image = $request->profile_image;
            $base64_str = substr($Image, strpos($Image, ",") + 1);
            $file = base64_decode($base64_str);
            $safeName = time() . '.' . 'jpg';
            $path = Storage::disk('public')->put('images/' . $safeName, $file);
            if (env('APP_ENV') != 'staging') {
                $image_name = 'storage/images/' . $safeName;
            } else {
                $image_name = 'public/storage/images/' . $safeName;
            }
        }

        $AboutData = AboutModel::updateOrCreate([
            'about_id' => $request->about_id
        ], [
            "about_title" => $request->about_title,
            "profile_image" => $image_name,
            "short_description" => $request->short_description,
            "birth_day" => $request->birth_day,
            "age" => $request->age,
            "web_site" => $request->web_site,
            "Degree" => $request->Degree,
            "phone" => $request->phone,
            "email" => $request->email,
            "city" => $request->city,
            "freelance" => $request->freelance,
            "description" => $request->description,
            "happy_client" => $request->happy_client,
            "projects" => $request->projects,
            "hours_of_support" => $request->hours_of_support,
            "awards" => $request->awards,
            "status" => $request->status,

        ]);

        $response = [];
        if (isset($AboutData)) {
            $response['errormessage'] = $request->about_id > 0 ? 'Key People Data Updated Successfully.' : 'Key People Data Created Successfully.';
            $response['errorcode'] = 0;
            return response()->json($response);
        } else {
            $response['errormessage'] = 'Failed';
            $response['errorcode'] = 15;
            return response()->json($response);
        }
    }


    public function getAboutData()
    {
        $aboutData = AboutModel::where('status', 1)->first();
        $res = null;
        if ($aboutData != null) {
            $res['data'] = $aboutData;
            $res['errorCode'] = 200;
            $res['errorMessage'] = "loaded successfully";
            return response()->json($res);
        } else {
            $res['data'] = $aboutData;
            $res['errorCode'] = 300;
            $res['errorMessage'] = "loaded faild";
            return response()->json($res);
        }
    }
}
