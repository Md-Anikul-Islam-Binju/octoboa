<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_arabic',
        'name_english',
        'slug_arabic',
        'slug_english',
        'designation_arabic',
        'designation_english',
        'description_arabic',
        'description_english',
        'image',
        'status',
    ];
}
