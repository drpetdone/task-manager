<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //without this, Laravel wont'save data
    protected $fillable = ['title'];
}
