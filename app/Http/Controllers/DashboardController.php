<?php

namespace App\Http\Controllers;

use App\Models\Printer;
use App\Models\Cartridge;
use App\Models\Department;
use App\Models\Vendor;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard', [
            'totalPrinters'    => Printer::count(),
            'totalCartridges'  => Cartridge::count(),
            'totalDepartments' => Department::count(),
            'totalVendors'     => Vendor::count(),

            'recentPrinters'   => Printer::latest()->take(5)->get(),
            'recentCartridges' => Cartridge::latest()->take(5)->get(),
        ]);
    }
}