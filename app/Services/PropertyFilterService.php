<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;

class PropertyFilterService {


    public function getSaleApartments() {

        $response = DB::select('SELECT * FROM Property

         WHERE status=? AND type= ? ', ['For Sale','apartment']);

         return $response;

    }

    public function getSaleHouse() {

        $response = DB::select('SELECT * FROM Property

        WHERE status=? AND type= ? ', ['For Sale','house']);

        return $response;
        
    }

    public function getSaleCar() {


        $response = DB::select('SELECT * FROM Property

        WHERE status=? AND type= ? ', ['For Sale','car']);

        return $response;
    }

    public function getSaleLand() {

        $response = DB::select('SELECT * FROM Property

        WHERE status=? AND type= ? ', ['For Sale','land']);

        return $response;
        
    }

    public function getRentApartments() {

        $response = DB::select('SELECT * FROM Property

        WHERE status=? AND type= ? ', ['For Rent','apartments']);

        return $response;

    }

    public function getRentOffice(){

        $response = DB::select('SELECT * FROM Property

        WHERE status=? AND type= ? ', ['For Rent','office']);

        return $response;

    }

    public function getRentHouse(){
        $response = DB::select('SELECT * FROM Property

        WHERE status=? AND type= ? ', ['For Rent','house']);

        return $response;
        
    }

    public function getRentCar(){

        $response = DB::select('SELECT * FROM Property

        WHERE status=? AND type= ? ', ['For Rent','car']);

        return $response;
        
    }

    public function getLatestProperties(){

        $response = DB::select('SELECT * FROM Property ORDER BY ASC');

        return $response;
        
    }





}
