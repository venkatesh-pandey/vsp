@extends('adminlte::page')

@section('title','Edit Department')

@section('content_header')
<h1>Edit Department</h1>
@stop

@section('content')

<div class="card">
<div class="card-body">

<form action="{{ route('departments.update',$department->id) }}" method="POST">

@csrf
@method('PUT')

<div class="form-group">
<label>Department Name</label>
<input type="text"
name="department_name"
value="{{ $department->department_name }}"
class="form-control" required>
</div>

<div class="form-group">
<label>Department Code</label>
<input type="text"
name="department_code"
value="{{ $department->department_code }}"
class="form-control" required>
</div>

<div class="form-group">
<label>Manager</label>
<input type="text"
name="manager"
value="{{ $department->manager }}"
class="form-control">
</div>

<div class="form-group">
<label>Location</label>
<input type="text"
name="location"
value="{{ $department->location }}"
class="form-control">
</div>

<br>

<button class="btn btn-primary">
Update Department
</button>

<a href="{{ route('departments.index') }}" class="btn btn-secondary">
Cancel
</a>

</form>

</div>
</div>

@stop