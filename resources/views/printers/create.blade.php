@extends('adminlte::page')

@section('title', 'Add Printer')

@section('content_header')
    <h1>Add Printer</h1>
@stop

@section('content')

<div class="card">
    <div class="card-body">

        <form action="{{ route('printers.store') }}" method="POST">
            @csrf

            <div class="form-group mb-3">
                <label>Printer Name</label>
                <input type="text" name="printer_name" class="form-control" required>
            </div>

            <div class="form-group mb-3">
                <label>Printer Model</label>
                <input type="text" name="model" class="form-control" required>
            </div>

            <div class="form-group mb-3">
                <label>Serial Number</label>
                <input type="text" name="serial_no" class="form-control" required>
            </div>

            <div class="form-group mb-3">
                <label>Department</label>
                <input type="text" name="department" class="form-control" required>
            </div>

            <div class="form-group mb-3">
                <label>User Name</label>
                <input type="text" name="user_name" class="form-control">
            </div>

            <div class="form-group mb-3">
                <label>Status</label>
                <select name="status" class="form-control">
                    <option value="Active">Active</option>
                    <option value="Repair">Repair</option>
                    <option value="Inactive">Inactive</option>
                </select>
            </div>

            <button type="submit" class="btn btn-success">
                Save Printer
            </button>

            <a href="{{ route('printers.index') }}" class="btn btn-secondary">
                Cancel
            </a>

        </form>

    </div>
</div>

@stop