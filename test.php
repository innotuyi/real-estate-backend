class test{


    $property = Property::find($id);

$mainPath = $request->file('mainPhoto')->store('images');
$path1 = $request->file('photo1')->store('images');
// and so on for the other images

Storage::delete([
    $property->main_photo,
    $property->photo1,
    // and so on for the other images
]);

$property->main_photo = $mainPath;
$property->photo1 = $path1;
// and so on for the other images
$property->save();

}