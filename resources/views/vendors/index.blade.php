@extends('adminlte::page')

@section('title','Vendors')

@section('content_header')

<div class="d-flex justify-content-between">

<h1>Vendor List</h1>

<a href="{{ route('vendors.create') }}" class="btn btn-success">
<i class="fas fa-plus"></i> Add Vendor
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
<th>Vendor</th>
<th>Contact</th>
<th>Mobile</th>
<th>Email</th>
<th width="170">Action</th>

</tr>

</thead>

<tbody>

@foreach($vendors as $vendor)

<tr>

<td>{{ $vendor->id }}</td>

<td>{{ $vendor->vendor_name }}</td>

<td>{{ $vendor->contact_person }}</td>

<td>{{ $vendor->mobile }}</td>

<td>{{ $vendor->email }}</td>

<td>

<a href="{{ route('vendors.edit',$vendor->id) }}"
class="btn btn-primary btn-sm">
Edit
</a>

<form action="{{ route('vendors.destroy',$vendor->id) }}"
method="POST"
style="display:inline">

@csrf
@method('DELETE')

<button class="btn btn-danger btn-sm"
onclick="return confirm('Delete Vendor?')">

Delete

</button>

</form>

</td>

</tr>

@endforeach

</tbody>

</table>

{{ $vendors->links() }}

</div>

</div>

@stop