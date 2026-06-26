@extends('adminlte::page')

@section('title','Edit Vendor')

@section('content_header')
<h1>Edit Vendor</h1>
@stop

@section('content')

<div class="card">
<div class="card-body">

<form action="{{ route('vendors.update', $vendor->id) }}" method="POST">

    @csrf
    @method('PUT')

    <div class="form-group">
        <label>Vendor Name</label>
        <input type="text" name="vendor_name" class="form-control"
               value="{{ $vendor->vendor_name }}" required>
    </div>

    <div class="form-group">
        <label>Contact Person</label>
        <input type="text" name="contact_person" class="form-control"
               value="{{ $vendor->contact_person }}">
    </div>

    <div class="form-group">
        <label>Mobile</label>
        <input type="text" name="mobile" class="form-control"
               value="{{ $vendor->mobile }}">
    </div>

    <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" class="form-control"
               value="{{ $vendor->email }}">
    </div>

    <div class="form-group">
        <label>Address</label>
        <textarea name="address" class="form-control">{{ $vendor->address }}</textarea>
    </div>

    <div class="form-group">
        <label>GST Number</label>
        <input type="text" name="gst_number" class="form-control"
               value="{{ $vendor->gst_number }}">
    </div>

    <br>

    <button type="submit" class="btn btn-primary">
        Update Vendor
    </button>

    <a href="{{ route('vendors.index') }}" class="btn btn-secondary">
        Cancel
    </a>

</form>

</div>
</div>

@stop