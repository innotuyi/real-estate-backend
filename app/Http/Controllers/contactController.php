<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateContactRequest;
use App\Services\ContactService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class contactController extends Controller
{
    

    public function createContact(Request $request, ContactService $contactService) {

        $response = $contactService->createContact(
            $request->name,
            $request->email,
            $request->question,
            $request->message
        );

        return response()->json(['data'=>$response], Response::HTTP_OK);

      
    }

    public function getContacts(ContactService $contactService){
         
        $response=$contactService->getContacts();

        return response()->json(['data'=>$response], Response::HTTP_OK);

    }

    public function getContactDetail(ContactService $contactService, $id){
        
        $response = $contactService->getContactDetail($id);

        return response()->json(['data'=>$response], Response::HTTP_OK);


    }



}
