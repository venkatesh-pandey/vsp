@extends('adminlte::page')

@section('title','Add Cartridge')

@section('content_header')
<h1>Add Cartridge</h1>
@stop

@section('content')

<div class="card">
<div class="card-body">

<form action="{{ route('cartridges.store') }}" method="POST">
@csrf

<div class="form-group">
<label>Cartridge Name</label>
<input type="text" name="cartridge_name" class="form-control" required>
</div>

<div class="form-group">
<label>Model</label>
<input type="text" name="model" class="form-control" required>
</div>

<div class="form-group">
<label>Printer Name</label>
<input type="text" name="printer_name" class="form-control" required>
</div>

<div class="form-group">
<label>Vendor</label>
<input type="text" name="vendor" class="form-control" required>
</div>

<div class="form-group">
<label>Purchase Date</label>
<input type="date" name="purchase_date" class="form-control">
</div>

<div class="form-group">
<label>Refill Count</label>
<input type="number" name="refill_count" value="0" class="form-control">
</div>

<div class="form-group">
<label>Status</label>

<select name="status" class="form-control">

<option>In Stock</option>
<option>Installed</option>
<option>Empty</option>
<option>Repair</option>

</select>

</div>

<div class="form-group">
<label>Remarks</label>
<textarea name="remarks" class="form-control"></textarea>
</div>

<br>

<button class="btn btn-success">
Save Cartridge
</button>

<a href="{{ route('cartridges.index') }}" class="btn btn-secondary">
Cancel
</a>

</form>

</div>
</div>

@stop