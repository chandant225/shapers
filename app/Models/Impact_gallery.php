<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Impact_gallery extends Model
{
    use HasFactory;

    protected $fillable = ['filename', 'impact_id','impact_slug'];
}
