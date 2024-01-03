<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BuyVehicle extends Model
{
    protected $fillable = ['id','customer_id','vehicletype','vehiclename','chassisnumber','color','rcnumber','invoicenumber','insuranceid','rcimage','invoiceimage','insuranceimage'] ;
}
