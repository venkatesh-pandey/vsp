@extends('adminlte::page')

@section('title','Add Department')

@section('content_header')
<h1>Add Department</h1>
@stop

@section('content')

<div class="card">
<div class="card-body">

<form action="{{ route('departments.store') }}" method="POST">

@csrf

<div class="form-group">
<label>Department Name</label>
<input type="text" name="department_name" class="form-control" required>
</div>

<div class="form-group">
<label>Department Code</label>
<input type="text" name="department_code" class="form-control" required>
</div>

<div class="form-group">
<label>Manager</label>
<input type="text" name="manager" class="form-control">
</div>

<div class="form-group">
<label>Location</label>
<input type="text" name="location" class="form-control">
</div>

<br>

<button class="btn btn-success">
Save Department
</button>

<a href="{{ route('departments.index') }}" class="btn btn-secondary">
Cancel
</a>

</form>

</div>
</div>

@stop