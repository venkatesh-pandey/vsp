<?php

namespace App\Http\Controllers;

use App\Models\Cartridge;
use Illuminate\Http\Request;

class CartridgeController extends Controller
{
    public function index()
    {
        $cartridges = Cartridge::latest()->paginate(10);

        return view('cartridges.index', compact('cartridges'));
    }

    public function create()
    {
        return view('cartridges.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'cartridge_name' => 'required',
            'model' => 'required',
            'printer_name' => 'required',
            'vendor' => 'required',
        ]);

        Cartridge::create($request->all());

        return redirect()->route('cartridges.index')
            ->with('success', 'Cartridge Added Successfully');
    }

    public function edit(Cartridge $cartridge)
    {
        return view('cartridges.edit', compact('cartridge'));
    }

    public function update(Request $request, Cartridge $cartridge)
    {
        $request->validate([
            'cartridge_name' => 'required',
            'model' => 'required',
            'printer_name' => 'required',
            'vendor' => 'required',
        ]);

        $cartridge->update($request->all());

        return redirect()->route('cartridges.index')
            ->with('success', 'Cartridge Updated Successfully');
    }

    public function destroy(Cartridge $cartridge)
    {
        $cartridge->delete();

        return redirect()->route('cartridges.index')
            ->with('success', 'Cartridge Deleted Successfully');
    }
}