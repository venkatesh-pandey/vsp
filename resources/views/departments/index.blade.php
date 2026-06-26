@extends('adminlte::page')

@section('title', 'Departments')

@section('content_header')
<div class="d-flex justify-content-between">
    <h1>Department List</h1>

    <a href="{{ route('departments.create') }}" class="btn btn-success">
        <i class="fas fa-plus"></i> Add Department
    </a>
</div>
@stop

@section('content')

@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<div class="card">
<div class="card-body">

<table class="table table-bordered table-hover">

<thead class="bg-primary">

<tr>
<th>ID</th>
<th>Department</th>
<th>Code</th>
<th>Manager</th>
<th>Location</th>
<th width="180">Action</th>
</tr>

</thead>

<tbody>

@foreach($departments as $department)

<tr>

<td>{{ $department->id }}</td>
<td>{{ $department->department_name }}</td>
<td>{{ $department->department_code }}</td>
<td>{{ $department->manager }}</td>
<td>{{ $department->location }}</td>

<td>

<a href="{{ route('departments.edit',$department->id) }}" class="btn btn-primary btn-sm">
Edit
</a>

<form action="{{ route('departments.destroy',$department->id) }}" method="POST" style="display:inline;">
@csrf
@method('DELETE')

<button class="btn btn-danger btn-sm"
onclick="return confirm('Delete Department?')">
Delete
</button>

</form>

</td>

</tr>

@endforeach

</tbody>

</table>

</div>
</div>

@stop