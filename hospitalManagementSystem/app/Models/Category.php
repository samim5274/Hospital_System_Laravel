<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Investigation;

class Category extends Model
{
    use HasFactory;

    protected $fillable=[
        'catname',
        'created_at',
        'updated_at',
    ];

    public function investigations()
    {
        return $this->hasMany(Investigation::class, 'catid', 'id');
    }
}
