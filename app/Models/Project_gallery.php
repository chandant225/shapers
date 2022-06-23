<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project_gallery extends Model
{
    use HasFactory;

    protected $fillable = ['filename', 'project_id','project_slug'];
}
