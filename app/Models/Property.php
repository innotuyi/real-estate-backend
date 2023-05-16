<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $table = 'Property';

    protected $fillable = [
        'name',
        'title', 
        'status',
        'type',
        'location', 
        'price', 
        'currency',
        'beds', 
        'bath',
        'parking',
        'size', 
         'plotSize',
         'hasWifi',
        'hasCloset', 
          'hasPet', 
          'hasPet',
          'hasTv',
         'hasGarden',
         'hasMaid',
         'hasSecurity',
         'hasWasher',
         'propertyDate',
         'descriptionTitleOne',
         'descriptionOne',
         'descriptionTitleTwo',
         'descriptionTwo',
         'mainPhoto',
         'photo1',
         'photo2',
         'photo3',
         'photo4',
         'photo5',
         'photo6',
         'photo7',
         'photo8',
         'photo9',
         'photo10',
         'photo11',
         'photo12',
         'photo13',
         'photo14',
         'photo15',
         'photo16',
         'photo17',
         'photo18',
         'photo19',
         'photo20',
         

    ];
}
