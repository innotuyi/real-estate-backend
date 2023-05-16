<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    use HasFactory;

    protected $table = 'Request';

    protected $fillable = [
        'name', 'email', 'subject', 'arrivalDate', 'dapartureDate','message'
    ];
}
