<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'category_id',
        'tag_id',
        'title_arabic',
        'title_english',
        'slug_arabic',
        'slug_english',
        'short_description_arabic',
        'short_description_english',
        'long_description_arabic',
        'long_description_english',
        'image',
        'status',
    ];
}
