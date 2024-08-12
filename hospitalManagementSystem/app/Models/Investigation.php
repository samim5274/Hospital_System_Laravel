<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Investigation extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'catid',
        'price',
        'room',
        'created_at',
        'updated_at',
    ];

    public function categorys()
    {
        return $this->belongsTo(Category::class);
    }
}
