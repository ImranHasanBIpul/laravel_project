<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BlogCategory extends Model
{
    use HasFactory;
    use SoftDeletes;
    // use SoftDeletes;
    protected $fillable = [
        'name', 'valid'
    ];
}
