@extends('adminlte::page')

@section('title','Add Vendor')

@section('content_header')
<h1>Add Vendor</h1>
@stop

@section('content')

<div class="card">
<div class="card-body">

<form action="{{ route('vendors.store') }}" method="POST">

@csrf

<div class="form-group">
<label>Vendor Name</label>
<input type="text" name="vendor_name" class="form-control" required>
</div>

<div class="form-group">
<label>Contact Person</label>
<input type="text" name="contact_person" class="form-control">
</div>

<div class="form-group">
<label>Mobile</label>
<input type="text" name="mobile" class="form-control">
</div>

<div class="form-group">
<label>Email</label>
<input type="email" name="email" class="form-control">
</div>

<div class="form-group">
<label>Address</label>
<textarea name="address" class="form-control"></textarea>
</div>

<div class="form-group">
<label>GST Number</label>
<input type="text" name="gst_number" class="form-control">
</div>

<br>

<button class="btn btn-success">Save Vendor</button>

<a href="{{ route('vendors.index') }}" class="btn btn-secondary">
Cancel
</a>

</form>

</div>
</div>

@stop