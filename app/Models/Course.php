<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    // fillable- specify what columns can put data
    // $guarded opposite of fillable == all field 
    protected $guarded = '';
}
