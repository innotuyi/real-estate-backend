<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StatatisticsController extends Controller
{
    

    public function allProperties() {

         $response = DB::select('SELECT COUNT(*) AS total FROM Property');

         return $response;
    }

    public function message() {

        $response = DB::select('SELECT COUNT(*) AS total FROM Request');

        return $response;
    }

    public function forSale() {

        $response = DB::select('SELECT COUNT(*)  AS total FROM Property WHERE status=?', ['For Sale']);

        return $response;
    }

    public function forRent() {

        $response = DB::select('SELECT COUTN(*) AS total FROM Property WHERE status=?', ['For Rent']);

        return $response;
    }

}
