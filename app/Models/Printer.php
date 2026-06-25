<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Printer extends Model
{
    protected $fillable = [
        'printer_name',
        'model',
        'serial_no',
        'department',
        'user_name',
        'status'
    ];
}