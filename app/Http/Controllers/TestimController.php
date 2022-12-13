<?php

namespace App\Http\Controllers;

use App\Models\TestimModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimController extends Controller
{
    // generate and update skills
    public function generateTestimonials(Request $request)
    {
        $image_name = "";
        if ($request->image != null) {
            $Image = $request->image;
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

        $testimoData = TestimModel::updateOrCreate([
            'testimonials_id' => $request->testimonials_id
        ], [
            "image" => $image_name,
            "position" => $request->position,
            "name" => $request->name,
            "description" => $request->description,
            "status" => $request->status
        ]);

        $response = [];
        if (isset($testimoData)) {
            $response['errormessage'] = $request->testimonials_id > 0 ? 'Testimonials Data Updated Successfully.' : 'Testimonials Data Created Successfully.';
            $response['errorcode'] = 0;
            return response()->json($response);
        } else {
            $response['errormessage'] = 'Failed';
            $response['errorcode'] = 15;
            return response()->json($response);
        }
    }

    public function getAllTestimDataList()
    {
        $testimDataList = TestimModel::where('status', 1)->get();
        $res = null;
        if ($testimDataList != null) {
            $res['data'] = $testimDataList;
            $res['errorCode'] = 200;
            $res['errorMessage'] = "loaded successfully";
            return response()->json($res);
        } else {
            $res['data'] = $testimDataList;
            $res['errorCode'] = 300;
            $res['errorMessage'] = "loaded faild";
            return response()->json($res);
        }
    }
}
