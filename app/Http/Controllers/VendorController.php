<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
use Illuminate\Http\Request;

class VendorController extends Controller
{
    public function index()
    {
        $vendors = Vendor::latest()->paginate(10);

        return view('vendors.index', compact('vendors'));
    }

    public function create()
    {
        return view('vendors.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'vendor_name' => 'required',
            'mobile' => 'nullable',
            'email' => 'nullable|email',
        ]);

        Vendor::create($request->all());

        return redirect()->route('vendors.index')
            ->with('success', 'Vendor Added Successfully');
    }

    public function edit(Vendor $vendor)
    {
        return view('vendors.edit', compact('vendor'));
    }

    public function update(Request $request, Vendor $vendor)
    {
        $request->validate([
            'vendor_name' => 'required',
            'mobile' => 'nullable',
            'email' => 'nullable|email',
        ]);

        $vendor->update($request->all());

        return redirect()->route('vendors.index')
            ->with('success', 'Vendor Updated Successfully');
    }

    public function destroy(Vendor $vendor)
    {
        $vendor->delete();

        return redirect()->route('vendors.index')
            ->with('success', 'Vendor Deleted Successfully');
    }
}