<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bdlaravel10 extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'Description',
        'start_date',
        'end_date',
        'price',
    ];
}
