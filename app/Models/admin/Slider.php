<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'title_arabic',
        'title_english',
        'link',
        'image',
        'status',
    ];
}
