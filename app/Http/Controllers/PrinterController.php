<?php

namespace App\Http\Controllers;

use App\Models\Printer;
use Illuminate\Http\Request;

class PrinterController extends Controller
{
    public function index(Request $request)
{
    $search = $request->search;

    $printers = Printer::query()
        ->when($search, function ($query) use ($search) {
            $query->where('printer_name', 'like', "%{$search}%")
                  ->orWhere('model', 'like', "%{$search}%")
                  ->orWhere('serial_no', 'like', "%{$search}%")
                  ->orWhere('department', 'like', "%{$search}%");
        })
        ->latest()
        ->paginate(10)
        ->withQueryString();

    return view('printers.index', compact('printers'));
}

    public function create()
    {
        return view('printers.create');
    }

    public function store(Request $request)
    {
       $request->validate([
    'printer_name' => 'required',
    'model' => 'required',
    'serial_no' => 'required|unique:printers',
    'department' => 'required',
]); 

        Printer::create($request->all());

        return redirect()->route('printers.index')
            ->with('success','Printer Added Successfully');
    }

    public function edit(Printer $printer)
    {
        return view('printers.edit', compact('printer'));
    }

    public function update(Request $request, Printer $printer)
    {
        $request->validate([
            'model' => 'required',
            'serial_no' => 'required|unique:printers,serial_no,'.$printer->id,
            'department' => 'required',
        ]);

        $printer->update($request->all());

        return redirect()->route('printers.index')
            ->with('success','Printer Updated Successfully');
    }

    public function destroy(Printer $printer)
    {
        $printer->delete();

        return redirect()->route('printers.index')
            ->with('success','Printer Deleted Successfully');
    }
}