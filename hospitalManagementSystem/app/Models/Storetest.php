<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Storetest extends Model
{
    use HasFactory;

    protected $fillable = [
        'regNum',
        'testid',
        'testprice',
        'catid',
        'room',
        'created_at',
        'updated_at',
    ];
}
