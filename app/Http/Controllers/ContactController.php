<?php

namespace App\Http\Controllers;

use App\Models\ContactModel;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function addEditContact(Request $request)
    {

        $contactData = ContactModel::updateOrCreate([
            'id' => $request->id
        ], [
            "name" => $request->name,
            "email" => $request->email,
            "subject" => $request->subject,
            "message" => $request->message,
        ]);

        // $response = [];
        if (isset($contactData)) {
            $response = $request->id > 0 ? 'Contact Data Updated Successfully.' : 'Contact Data Sended Successfully.';
            // $response['errorcode'] = 0;
            return response()->json($response);
        } else {
            // $response['errormessage'] = 'Failed';
            $response = 'Failed';
            // $response['errorcode'] = 15;
            return response()->json($response);
        }
    }

    public function getSendedContactData()
    {
        $contactSendData = ContactModel::orderBy('id', 'DESC')->get();
        $res = null;
        if ($contactSendData != null) {
            $res['data'] = $contactSendData;
            $res['errorCode'] = 200;
            $res['errorMessage'] = "loaded successfully";
            return response()->json($res);
        } else {
            $res['data'] = $contactSendData;
            $res['errorCode'] = 300;
            $res['errorMessage'] = "loaded faild";
            return response()->json($res);
        }
    }
}
