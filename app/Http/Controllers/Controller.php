<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function sendResponse($result, $message){
        $response = [
            'success' => true,
            'message' => $message,
            'data'    => $result,
        ];
        return response()->json($response, 200);
    }

    public function sendError($error, $errorMassage = [], $code = 404){
        $response = [
            'success' => false,
            'message' => $error,
        ];
        if(!empty($errorMassage)){
            $response['data'] = $errorMassage;
        }
        return response()->json($response, $code);
    }
}
