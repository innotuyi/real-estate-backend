<?php

use App\Http\Controllers\Authcontroller;
use App\Http\Controllers\contactController;
use App\Http\Controllers\Filtercontroller;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\StatatisticsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::post('/create-property', [PropertyController::class,'createProperty']);

Route::get('/allProperties', [PropertyController::class, 'getProperties']);

Route::get('/propertyDetail/{id}',[PropertyController::class, 'propertyDetails']);

Route::post('/update-property/{id}', [PropertyController::class, 'updateProperty']);

Route::delete('/delete-property/{id}', [PropertyController::class, 'deleteProperty']);

Route::post('/create-contact', [contactController::class, 'createContact']);

Route::get('/get-contact', [contactController::class, 'getContacts']);

Route::get('/get-contact/{id}', [contactController::class, 'getContactDetail']);

Route::post('/create-request', [RequestController::class, 'createaRequest']);

Route::get('/get-request', [RequestController::class, 'getRequest']);

Route::post('/single-request/{id}', [RequestController::class, 'singleRequest']);

Route::get('properties/sale/apartments', [Filtercontroller::class, 'getSaleApartments']);

Route::get('properties/sale/car', [Filtercontroller::class, 'getSaleCar']);

Route::get('properties/sale/house', [Filtercontroller::class, 'getSaleHouse']);

Route::get('properties/sale/land', [Filtercontroller::class, 'getSaleLand']);

Route::get('properties/rent/apartments', [Filtercontroller::class, 'getRentApartments']);

Route::get('properties/rent/office', [Filtercontroller::class, 'getRentOffice']);

Route::get('properties/rent/house', [Filtercontroller::class, 'getRentHouse']);

Route::get('properties/rent/car', [Filtercontroller::class, 'getRentCar']);

Route::get('properties/latest', [Filtercontroller::class, 'getLatestProperties']);

Route::post('/register', [Authcontroller::class, 'register']);

Route::post('/login', [Authcontroller::class, 'login']);

Route::post('/logout', [Authcontroller::class, 'logout'])->middleware('auth:sanctum');

Route::get('/property/statistics',[StatatisticsController::class, 'allProperties']);

Route::get('/forsale/statistics',[StatatisticsController::class, 'forSale']);

Route::get('/forrent/statistics',[StatatisticsController::class, 'forRent']);

Route::get('/message/statistics',[StatatisticsController::class, 'message']);





Route::get('/test',function(){
    return 'test';
});















