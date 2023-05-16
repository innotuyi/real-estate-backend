<?php

namespace App\Http\Controllers;

use App\Services\PropertyFilterService;
use Illuminate\Http\Request;

class Filtercontroller extends Controller
{
    
    public function getSaleApartments(PropertyFilterService $propertyFilterService) {

        $response = $propertyFilterService->getSaleApartments();

         return response()->json($response);

    }
    
    public function getSaleHouse(PropertyFilterService $propertyFilterService) {
        
        $response = $propertyFilterService->getSaleHouse();

        return response()->json($response);

        
    }

    public function getSaleCar(PropertyFilterService $propertyFilterService) {
         
        $response = $propertyFilterService->getSaleCar();

        return response()->json($response);


    }

    public function getSaleLand(PropertyFilterService $propertyFilterService) {

        $response = $propertyFilterService->getSaleLand();

        return response()->json($response);

        
    }

    public function getRentApartments(PropertyFilterService $propertyFilterService) {

        $response = $propertyFilterService->getRentApartments();

        return response()->json($response);

    }

    public function getRentOffice(PropertyFilterService $propertyFilterService){

        $response = $propertyFilterService->getRentOffice();

        return response()->json($response);


    }

    public function getRentHouse(PropertyFilterService $propertyFilterService){

        $response = $propertyFilterService->getRentHouse();

        return response()->json($response);
        
    }

    public function getRentCar(PropertyFilterService $propertyFilterService){

        $response = $propertyFilterService->getRentCar();

        return response()->json($response);
        
    }

    public function getLatestProperties(PropertyFilterService $propertyFilterService){

        $response = $propertyFilterService->getLatestProperties();

        return response()->json($response);
        
    }



}
