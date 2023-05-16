<?php

namespace App\Services;

use App\Models\Property;
use Illuminate\Support\Facades\DB;

class PropertyService
{


    public function createProperty(
        string $name,
        string $title,
        string $status,
        string $type,
        string $location,
        int $price,
        string $currency,
        int $beds,
        int $bath,
        int $parking,
        int $size,
        int $plotsize,
        bool $hasWifi,
        bool $hasCloset,
        bool $hasPet,
        bool $hasTv,
        bool $hasGarden,
        bool $hasMaid,
        bool $hasSecurity,
        bool $hasWasher,
        string  $propertyDate,
        string  $descriptionTitleOne,
        string $descriptionOne,
        string $descrptionTitleTwo,
        string $descriptionTwo,
        $mainPhoto,
        $photo1,
        $photo2,
        $photo3,
        $photo4,
        $photo5,
        $photo6,
        $photo7,
        $photo8,
        $photo9,
        $photo10,
        $photo11,
        $photo12,
        $photo13,
        $photo14,
        $photo15,
        $photo16,
        $photo17,
        $photo18,
        $photo19,
        $photo20,
    ) {


        $mainPath = $mainPhoto->store('images');
        $path1 = $photo1->store('images');
        $path2 = $photo2->store('images');
        $path3 = $photo3->store('images');
        $path4 = $photo4->store('images');
        $path5 = $photo5->store('images');
        $path6 = $photo6->store('images');
        $path7 = $photo7->store('images');
        $path8 = $photo8->store('images');
        $path9 = $photo9->store('images');
        $path10 = $photo10->store('images');
        $path11 = $photo11->store('images');
        $path12 = $photo12->store('images');
        $path13 = $photo13->store('images');
        $path14 = $photo14->store('images');
        $path15 = $photo15->store('images');
        $path16 = $photo16->store('images');
        $path17 = $photo17->store('images');
        $path18 = $photo18->store('images');
        $path19 = $photo19->store('images');
        $path20 = $photo20->store('images');

        Property::create([
            'name' => $name,
            'title' => $title,
            'status' => $status,
            'type' => $type,
            'location' => $location,
            'price' => $price,
            'currency' => $currency,
            'beds' => $beds,
            'bath' => $bath,
            'parking' => $parking,
            'size' => $size,
            'plotSize' => $plotsize,
            'hasWifi' => $hasWifi,
            'hasCloset' => $hasCloset,
            'hasPet' => $hasPet,
            'hasTv' => $hasTv,
            'hasGarden' => $hasGarden,
            'hasMaid' => $hasMaid,
            'hasSecurity' => $hasSecurity,
            'hasWasher' => $hasWasher,
            'propertyDate' => $propertyDate,
            'descriptionTitleOne' => $descriptionTitleOne,
            'descriptionOne' => $descriptionOne,
            'descriptionTitleTwo' => $descrptionTitleTwo,
            'descriptionTwo' => $descriptionTwo,
            'mainPhoto' => $mainPath,
            'photo1' => $path1,
            'photo2' => $path2,
            'photo3' => $path3,
            'photo4' => $path4,
            'photo5' => $path5,
            'photo6' => $path6,
            'photo7' => $path7,
            'photo8' => $path8,
            'photo9' => $path9,
            'photo10' => $path10,
            'photo11' => $path11,
            'photo12' => $path12,
            'photo13' => $path13,
            'photo14' => $path14,
            'photo15' => $path15,
            'photo16' => $path16,
            'photo17' => $path17,
            'photo18' => $path18,
            'photo19' => $path19,
            'photo20' => $path20,

        ]);
    }

    public function getProperties()
    {

        $properties = DB::select('SELECT * FROM Property');

        return $properties;
    }

    public function propertyDetails($id)
    {

        // $propertyDetail = DB::select('SELECT * FROM Property where id=?', [$id]);

        // if(!empty($propertyDetail)){
        //     $propertyDetail = json_decode(json_encode($propertyDetail), true);
        //     $propertyDetail = $propertyDetail[0];
        // }

        // return $propertyDetail;

        // $propertyDetail = DB::select('SELECT * FROM Property where id=?', [$id]);

        // if (!empty($propertyDetail)) {
        //     $propertyDetail = json_decode(json_encode($propertyDetail[0]), true);
        // }

        // return $propertyDetail;

        $propertyDetail = DB::selectOne('SELECT * FROM Property WHERE id = ?', [$id]);

        if (!empty($propertyDetail)) {

            $propertyDetail = json_decode(json_encode($propertyDetail), true);
        }

        return $propertyDetail;
    }
}
