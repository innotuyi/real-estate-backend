<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;

class RequestService 
{

    public function createaRequest() {

    }

    public function getRequest() {

        $requests = DB::select('SELECT * FROM Request');

        return $requests;
    }

    public function singleRequest($id) {

        $request = DB::select('SELECT * FROM Request WHERE id=?', [$id]);
        
        return $request;

    }
}