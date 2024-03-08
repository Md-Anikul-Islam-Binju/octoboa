<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    protected $fillable = [
        'tag_name_arabic',
        'tag_name_english',
        'slug_tag_arabic',
        'slug_tag_english',
        'status',
    ];
}
