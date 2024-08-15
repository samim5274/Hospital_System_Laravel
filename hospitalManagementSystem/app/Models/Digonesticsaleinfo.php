<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Digonesticsaleinfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'regNumber',
        'patientName',
        'dob',
        'gender',
        'phone',
        'address',
        'doctorid',
        'referid',
        'testSaleOfficerId',
        'totalAmount',
        'discount',
        'received',
        'receivedreminAmount',
        'testsalteDate',
        'dueStatus',
        'dueCollection',
        'dueDiscount',
        'dueCollectDate',
        'dueCollectOfficerId',
        'testReturnOfficerId',
        'testReturnStatus',
        'testReturnDate',
        'created_at',
        'updated_at',
    ];
}
