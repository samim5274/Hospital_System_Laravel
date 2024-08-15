<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $fillable = [
        'doctName',
        'doctDesignation',
        'doctPhone',
        'doctFee',
        'created_at',
        'updated_at',
    ];
}
