<?php

namespace App\Http\Controllers;

use App\Models\PortfolioModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PortFoController extends Controller
{
    //add edit portfolio
    public function addEditPortfolio(Request $request)
    {

        $image_name = "";
        if ($request->cover_image != null) {
            $Image = $request->cover_image;
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

        $slide_image_1 = "";
        if ($request->slide_image_1 != null) {
            $Image1 = $request->slide_image_1;
            $base64_str1 = substr($Image1, strpos($Image1, ",") + 1);
            $file1 = base64_decode($base64_str1);
            $safeName1 = time() . '.' . 'jpg';
            $path = Storage::disk('public')->put('images/' . $safeName1, $file1);
            if (env('APP_ENV') != 'staging') {
                $slide_image_1 = 'storage/images/' . $safeName1;
            } else {
                $slide_image_1 = 'public/storage/images/' . $safeName1;
            }
        }

        $slide_image_2 = "";
        if ($request->slide_image_2 != null) {
            $Image2 = $request->slide_image_2;
            $base64_str2 = substr($Image2, strpos($Image2, ",") + 1);
            $file2 = base64_decode($base64_str2);
            $safeName2 = time() . '.' . 'jpg';
            $path = Storage::disk('public')->put('images/' . $safeName2, $file2);
            if (env('APP_ENV') != 'staging') {
                $slide_image_2 = 'storage/images/' . $safeName2;
            } else {
                $slide_image_2 = 'public/storage/images/' . $safeName2;
            }
        }

        $slide_image_3 = "";
        if ($request->slide_image_1 != null) {
            $Image3 = $request->slide_image_1;
            $base64_str3 = substr($Image3, strpos($Image3, ",") + 1);
            $file3 = base64_decode($base64_str3);
            $safeName3 = time() . '.' . 'jpg';
            $path = Storage::disk('public')->put('images/' . $safeName3, $file3);
            if (env('APP_ENV') != 'staging') {
                $slide_image_3 = 'storage/images/' . $safeName3;
            } else {
                $slide_image_3 = 'public/storage/images/' . $safeName3;
            }
        }


        $portfolioData = PortfolioModel::updateOrCreate([
            'portfolio_id' => $request->portfolio_id
        ], [
            "app_title" => $request->app_title,
            "cover_image" => $image_name,
            "cat_id" => $request->cat_id,
            "client" => $request->client,
            "project_date" => $request->project_date,
            "project_url" => $request->project_url,
            "description" => $request->description,
            "slide_image_1" => $slide_image_1,
            "slide_image_2" => $slide_image_2,
            "slide_image_3" => $slide_image_3,
            "status" => $request->status,

        ]);

        $response = [];
        if (isset($portfolioData)) {
            $response['errormessage'] = $request->portfolio_id > 0 ? 'Portfolio Data Updated Successfully.' : 'Portfolio Data Created Successfully.';
            $response['errorcode'] = 0;
            return response()->json($response);
        } else {
            $response['errormessage'] = 'Failed';
            $response['errorcode'] = 15;
            return response()->json($response);
        }
    }

    public function getPortFolioDataList()
    {
        $portfolioDataList = PortfolioModel::where('status', 1)->get();
        $res = null;
        if ($portfolioDataList != null) {
            $res['data'] = $portfolioDataList;
            $res['errorCode'] = 200;
            $res['errorMessage'] = "loaded successfully";
            return response()->json($res);
        } else {
            $res['data'] = $portfolioDataList;
            $res['errorCode'] = 300;
            $res['errorMessage'] = "loaded faild";
            return response()->json($res);
        }
    }
}
