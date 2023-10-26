<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class data extends Model
{
    use HasFactory;
        protected $fillable = [
         'lname',
         'fname',
         'sex', 
         'email',
          'post',
           'address',
           'building',
           'opinion'
     ];
     
}