<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'short_desc',
        'image',
        'sign_img',
        'phone',
        'adress',
        'birth'
    ];
}
