<?php

namespace App\Services;

use App\Models\Contact;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class ContactService 
{

    public function createContact(
        string $name,
        string $email,
        string $question,
        string $message,
    ) {

        $response = Contact::create([
            'name'=>$name,
            'email'=>$email,
            'question'=>$question,
            'message'=>$message
        ]);

        return $response;     
    }

    public function getContacts(){

        $response = DB::select('SELECT * FROM Contact');

        return $response;
         
    }

    public function getContactDetail($id){


        $response =DB::select('SELECT * FROM Contact WHERE id = ?', [$id]);

        return $response;

    }
}
       