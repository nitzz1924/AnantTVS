<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestRide extends Model
{
    protected $fillable = ['id','customername','customerphoneno','type','vehicle','randomno','verifystatus'] ;
}
