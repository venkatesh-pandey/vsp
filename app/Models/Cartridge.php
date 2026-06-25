<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cartridge extends Model
{
    protected $fillable = [
        'cartridge_name',
        'model',
        'printer_name',
        'vendor',
        'purchase_date',
        'refill_count',
        'status',
        'remarks'
    ];
}