<?php

namespace App\Http\Controllers;

use App\Http\Requests\createPropertyRequest;
use App\Models\Request as ModelsRequest;
use App\Services\RequestService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class RequestController extends Controller
{
    

    public function createaRequest(Request $request, RequestService $requestService) {

             $response = ModelsRequest::create([
                'name'=>$request->name,
                'email'=>$request->email,
                'subject'=>$request->subject,
                'arrivalDate'=>$request->arrivalDate,
                'dapartureDate'=>$request->dapartureDate,
                'message'=>$request->message

             ]);

             return $response;

             return response()->json(['data'=>$response], Response::HTTP_OK);

    }

    public function getRequest(RequestService $requestService) {

        $response = $requestService->getRequest();

        return response()->json(['data'=>$response], Response::HTTP_OK);

     }

    public function singleRequest(RequestService $requestService, $id) {

        $response = $requestService->singleRequest($id);

        return response()->json(['data'=>$response], Response::HTTP_OK);

    }
}
