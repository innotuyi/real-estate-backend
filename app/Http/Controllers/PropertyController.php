<?php

namespace App\Http\Controllers;

use App\Http\Requests\createPropertyRequest;
use App\Models\Property;
use App\Services\PropertyService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PropertyController extends Controller
{

    public function createProperty(Request $request)
    {

        // $mainPath = $request->file('mainPhoto')->store('public');
        // $path1 = $request->file('photo1')->store('public');
        // $path2 = $request->file('photo2')->store('public');
        // $path3 = $request->file('photo3')->store('public');
        // $path4 = $request->file('photo4')->store('public');
        // $path5 = $request->file('photo5')->store('public');
        // $path6 = $request->file('photo6')->store('public');
        // $path7 = $request->file('photo7')->store('public');
        // $path8 = $request->file('photo8')->store('public');
        // $path9 = $request->file('photo9')->store('public');
        // $path10 = $request->file('photo10')->store('public');
        // $path11 = $request->file('photo11')->store('public');
        // $path12 = $request->file('photo12')->store('public');
        // $path13 = $request->file('photo13')->store('public');
        // $path14 = $request->file('photo14')->store('public');
        // $path15 = $request->file('photo15')->store('public');
        // $path16 = $request->file('photo16')->store('public');
        // $path17 = $request->file('photo17')->store('public');
        // $path18 = $request->file('photo18')->store('public');
        // $path19 = $request->file('photo19')->store('public');

//         $paths = [];
//             for ($i = 1; $i <= 19; $i++) {
//     $file = $request->file('photo' . $i);
//     if ($file) {
//         $path = $file->store('public');
//         $paths[] = $path;
//     }
// }

$paths = [];

for ($i = 1; $i <= 19; $i++) {
    $file = $request->file('photo' . $i);

    if ($file) {
        $originalName = $file->getClientOriginalName();
        $path = $file->storeAs('public', $originalName);
        $paths[] = $path;
    }
}

$paths = [];

// for ($i = 1; $i <= 19; $i++) {
//     $file = $request->file('photo' . $i);

//     if ($file) {
//         $filename = time() . '-' . $file->getClientOriginalName();
//         $path = $file->storeAs('public', $filename);
//         $paths[] = $path;
//     }
// }




        $response = Property::create([
            'name' => $request->name,
            'title' => $request->title,
            'status' => $request->status,
            'type' => $request->type,
            'location' => $request->location,
            'price' => $request->price,
            'currency' => $request->currency,
            'beds' => $request->beds,
            'bath' => $request->bath,
            'parking' => $request->parking,
            'size' => $request->size,
            'plotSize' => $request->plotSize,
            'hasWifi' => $request->hasWifi,
            'hasCloset' => $request->hasclosest,
            'hasPet' => $request->hasPet,
            'hasTv' => $request->hasTv,
            'hasGarden' => $request->hasGarden,
            'hasMaid' => $request->hasMaid,
            'hasSecurity' => $request->hasSecurity,
            'hasWasher' => $request->hasWasher,
            'propertyDate' => $request->propertyDate,
            'descriptionTitleOne' => $request->descriptionTitleOne,
            'descriptionOne' => $request->descriptionOne,
            'descriptionTitleTwo' => $request->descriptionTitleTwo,
            'descriptionTwo' => $request->descriptionTwo,
            'mainPhoto' =>$request->file('mainPhoto')->getClientOriginalName(),
            'photo1' => $request->file('photo1')->getClientOriginalName(),
            'photo2' => $request->file('photo2')->getClientOriginalName(),
            'photo3' => $request->file('photo3')->getClientOriginalName(),
            'photo4' => $request->file('photo4')->getClientOriginalName(),
            'photo5' => $request->file('photo5')->getClientOriginalName(),
            'photo6' => $request->file('photo6')->getClientOriginalName(),
            'photo7' => $request->file('photo7')->getClientOriginalName(),
            'photo8' => $request->file('photo8')->getClientOriginalName(),
            'photo9' => $request->file('photo9')->getClientOriginalName(),
            'photo10' => $request->file('photo10')->getClientOriginalName(),
            'photo11' => $request->file('photo11')->getClientOriginalName(),
            'photo12' => $request->file('photo12')->getClientOriginalName(),
            'photo13' => $request->file('photo13')->getClientOriginalName(),
            'photo14' => $request->file('photo14')->getClientOriginalName(),
            'photo15' => $request->file('photo15')->getClientOriginalName(),
            'photo16' => $request->file('photo16')->getClientOriginalName(),
            'photo17' => $request->file('photo17')->getClientOriginalName(),
            'photo18' => $request->file('photo18')->getClientOriginalName(),
            'photo19' => $request->file('photo19')->getClientOriginalName(),
        ]);

        if ($response) {

            return response()->json($response);
        }
    }

    public  function getProperties(PropertyService $propertyService)
    {

        $response = $propertyService->getProperties();

        return response()->json($response);
    }

    public function propertyDetails(PropertyService $propertyService, $id)
    {

        $response = $propertyService->propertyDetails($id);

        return $response;

    }


    // public function updateProperty(Request $request, $id)
    // {

    //     $property = Property::find($id);

    //     $mainPath = null;
    //     $path1 = null;
    //     $path2 = null;
    //     $path3 = null;
    //     $path4 = null;
    //     $path5 = null;
    //     $path6 = null;
    //     $path7 = null;
    //     $path9 = null;
    //     $path8 = null;
    //     $path10 = null;
    //     $path11 = null;
    //     $path12 = null;
    //     $path13 = null;
    //     $path14 = null;
    //     $path15 = null;
    //     $path16 = null;
    //     $path17 = null;
    //     $path18 = null;
    //     $path19 = null;

    //     if (!$property) {

    //         return response()->json(['msg' => 'property does not exist'], Response::HTTP_NOT_FOUND);
    //     }

    //     if ($request->hasFile('mainPhoto')) {
    //         $mainPath = $request->file('mainPhoto')->store('public');
    //     }

    //     if ($request->hasFile('photo1')) {
    //         $path1 = $request->file('photo1')->store('images');
    //     }

    //     if ($request->hasFile('photo2')) {
    //         $path2 = $request->file('photo2')->store('images');
    //     }

    //     if ($request->hasFile('photo3')) {
    //         $path3 = $request->file('photo3')->store('images');
    //     }

    //     if ($request->hasFile('photo4')) {
    //         $path4 = $request->file('photo4')->store('images');
    //     }

    //     if ($request->hasFile('photo5')) {
    //         $path5 = $request->file('photo5')->store('images');
    //     }

    //     if ($request->hasFile('photo6')) {
    //         $path6 = $request->file('photo6')->store('images');
    //     }

    //     if ($request->hasFile('photo7')) {
    //         $path7 = $request->file('photo7')->store('images');
    //     }

    //     if ($request->hasFile('photo8')) {
    //         $path8 = $request->file('photo8')->store('images');
    //     }

    //     if ($request->hasFile('photo9')) {
    //         $path9 = $request->file('photo9')->store('images');
    //     }

    //     if ($request->hasFile('photo10')) {
    //         $path10 = $request->file('photo10')->store('images');
    //     }

    //     if ($request->hasFile('photo11')) {
    //         $path11 = $request->file('photo11')->store('images');
    //     }

    //     if ($request->hasFile('photo12')) {
    //         $path12 = $request->file('photo12')->store('images');
    //     }

    //     if ($request->hasFile('photo13')) {
    //         $path13 = $request->file('photo13')->store('images');
    //     }

    //     if ($request->hasFile('photo14')) {
    //         $path14 = $request->file('photo14')->store('images');
    //     }

    //     if ($request->hasFile('photo15')) {
    //         $path15 = $request->file('photo15')->store('images');
    //     }

    //     if ($request->hasFile('photo16')) {
    //         $path16 = $request->file('photo16')->store('images');
    //     }

    //     if ($request->hasFile('photo17')) {
    //         $path17 = $request->file('photo17')->store('images');
    //     }

    //     if ($request->hasFile('photo18')) {
    //         $path18 = $request->file('photo18')->store('images');
    //     }

    //     if ($request->hasFile('photo19')) {
    //         $path19 = $request->file('photo19')->store('images');
    //     }

    //     return $property->photo19;

    //     Storage::delete([
    //         $property->mainPhoto,
    //         $property->photo1,
    //         $property->photo2,
    //         $property->photo3,
    //         $property->photo4,
    //         $property->photo5,
    //         $property->photo6,
    //         $property->photo7,
    //         $property->photo8,
    //         $property->photo9,
    //         $property->photo10,
    //         $property->photo11,
    //         $property->photo12,
    //         $property->photo13,
    //         $property->photo14,
    //         $property->photo15,
    //         $property->photo16,
    //         $property->photo17,
    //         $property->photo18,
    //         $property->photo19,
          
    //     ]);

    //     $property->name = $request->name;
    //     $property->title = $request->title;
    //     $property->status = $request->status;
    //     $property->type = $request->type;
    //     $property->location = $request->location;
    //     $property->price = $request->price;
    //     $property->currency = $request->currency;
    //     $property->beds = $request->beds;
    //     $property->bath = $request->bath;
    //     $property->parking = $request->parking;
    //     $property->size = $request->size;
    //     $property->plotSize = $request->plotSize;
    //     $property->hasWifi = $request->hasWifi;
    //     $property->hasCloset = $request->hasCloset;
    //     $property->hasPet = $request->hasPet;
    //     $property->hasTv = $request->hasTv;
    //     $property->hasGarden = $request->hasGarden;
    //     $property->hasMaid = $request->hasMaid;
    //     $property->hasSecurity = $request->hasSecurity;
    //     $property->hasWasher = $request->hasWasher;
    //     $property->propertyDate = $request->propertyDate;
    //     $property->descriptionTitleOne  = $request->descriptionTitleOne;
    //     $property->descriptionOne = $request->descriptionOne;
    //     $property->descriptionTitleTwo = $request->descriptionTitleTwo;
    //     $property->descriptionTwo = $request->descriptionTwo;
    //     $property->mainPhoto = $mainPath;
    //     $property->photo1 = $path1;
    //     $property->photo2 = $path2;
    //     $property->photo3 = $path3;
    //     $property->photo4 = $path4;
    //     $property->photo5 = $path5;
    //     $property->photo6 = $path6;
    //     $property->photo7 = $path7;
    //     $property->photo8 = $path8;
    //     $property->photo9 = $path9;
    //     $property->photo10 = $path10;
    //     $property->photo11 = $path11;
    //     $property->photo12 = $path12;
    //     $property->photo13 = $path13;
    //     $property->photo14 = $path14;
    //     $property->photo15 = $path15;
    //     $property->photo16 = $path16;
    //     $property->photo17 = $path17;
    //     $property->photo18 = $path18;
    //     $property->photo19 = $path19;
    //     $property->save();
        


    //     return $property;


    //     //     Property::where($id)->update([
    //     //         'name'=>$request->name,
    //     //         'title'=> $request->title,
    //     //         'status'=> $request->status,
    //     //         'type'=>$request->type,
    //     //         'location'=>$request->location,
    //     //         'price'=>$request->price,
    //     //         'currency'=>$request->currency,
    //     //         'beds'=>$request->beds,
    //     //         'bath'=>$request->bath,
    //     //         'parking'=>$request->parking,
    //     //         'size'=>$request->size,
    //     //         'plotSize'=>$request->plotSize,
    //     //         'hasWifi'=>$request->hasWifi,
    //     //         'hasCloset'=>$request->hasclosest,
    //     //         'hasPet'=>$request->hasPet,
    //     //         'hasTv' =>$request->hasTv,
    //     //         'hasGarden'=>$request->hasGarden,
    //     //         'hasMaid'=>$request->hasMaid,
    //     //         'hasSecurity'=>$request->hasSecurity,
    //     //         'hasWasher'=>$request->hasWasher,
    //     //         'propertyDate'=>$request->propertyDate,
    //     //         'descriptionTitleOne'=>$request->descriptionTitleOne,
    //     //         'descriptionOne'=>$request->descriptionOne,
    //     //         'descriptionTitleTwo'=>$request->descriptionTitleTwo,
    //     //         'descriptionTwo'=>$request->descriptionTwo,    
    //     //         'mainPhoto'=>$mainPath,
    //     //         'photo1'=>$path1,
    //     //         'photo2'=>$path2,
    //     //         'photo3'=>$path3,
    //     //         'photo4'=>$path4,
    //     //         'photo5'=>$path5,
    //     //         'photo6'=>$path6,
    //     //         'photo7'=>$path7,
    //     //         'photo8'=>$path8,
    //     //         'photo9'=>$path9,
    //     //         'photo10'=>$path10,
    //     //         'photo11'=>$path11,
    //     //         'photo12'=>$path12,
    //     //         'photo13'=>$path13,
    //     //         'photo14'=>$path14,
    //     //         'photo15'=>$path15,
    //     //         'photo16'=>$path16,
    //     //         'photo17'=>$path17,
    //     //         'photo18'=>$path18,
    //     //         'photo19'=>$path19, 
    //     //    ]);



    // }



    public function updateProperty(Request $request, $id)
{
    $property = Property::find($id);

    if (!$property) {
        return response()->json(['msg' => 'property does not exist'], Response::HTTP_NOT_FOUND);
    }

    $mainPath = null;
    $paths = [];

    if ($request->hasFile('mainPhoto')) {
        // delete old main photo if it exists
        if ($property->mainPhoto) {
            Storage::delete($property->mainPhoto);
        }
        $mainPath = $request->file('mainPhoto')->store('images');
        $property->mainPhoto = $mainPath;
    }

    // loop through all photo input fields
    for ($i = 1; $i <= 19; $i++) {
        $fieldName = "photo$i";
        if ($request->hasFile($fieldName)) {
            // delete old photo if it exists
            if ($property->{$fieldName}) {
                Storage::delete($property->{$fieldName});
            }
            $path = $request->file($fieldName)->store('images');
            $property->{$fieldName} = $path; // set new path
        }
    }

    // update property object with new values
    $property->name = $request->name;
    $property->title = $request->title;
    $property->status = $request->status;
    $property->type = $request->type;
    $property->location = $request->location;
    $property->price = $request->price;
    $property->currency = $request->currency;
    $property->beds = $request->beds;
    $property->bath = $request->bath;
    $property->parking = $request->parking;
    $property->size = $request->size;
    $property->plotSize = $request->plotSize;
    $property->hasWifi = $request->hasWifi;
    $property->hasCloset = $request->hasCloset;
    $property->hasPet = $request->hasPet;
    $property->hasTv = $request->hasTv;
    $property->hasGarden = $request->hasGarden;
    $property->hasMaid = $request->hasMaid;

    $property->save();

    return response()->json(['msg' => 'property updated successfully'], Response::HTTP_OK);
}

public function deleteProperty($id) {

      DB::select('DELETE  FROM Property WHERE id=?', [$id]);
}


public function getLatestProperty()
{
   $response = DB::select('SELECT * FROM Property WHERE DATE(created_at) = CURDATE()', []);

   return $response;
}


}
