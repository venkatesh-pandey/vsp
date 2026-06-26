<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index()
    {
        $departments = Department::latest()->paginate(10);

        return view('departments.index', compact('departments'));
    }

    public function create()
    {
        return view('departments.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'department_name' => 'required',
            'department_code' => 'required|unique:departments',
            'manager' => 'nullable',
            'location' => 'nullable',
        ]);

        Department::create($request->all());

        return redirect()->route('departments.index')
            ->with('success', 'Department Added Successfully');
    }

    public function edit(Department $department)
    {
        return view('departments.edit', compact('department'));
    }

    public function update(Request $request, Department $department)
    {
        $request->validate([
            'department_name' => 'required',
            'department_code' => 'required|unique:departments,department_code,' . $department->id,
            'manager' => 'nullable',
            'location' => 'nullable',
        ]);

        $department->update($request->all());

        return redirect()->route('departments.index')
            ->with('success', 'Department Updated Successfully');
    }

    public function destroy(Department $department)
    {
        $department->delete();

        return redirect()->route('departments.index')
            ->with('success', 'Department Deleted Successfully');
    }
}