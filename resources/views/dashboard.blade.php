@extends('adminlte::page')

@section('title', 'VEN Dashboard')

@section('content_header')
<div class="d-flex justify-content-between align-items-center">
    <div>
        <h2 class="fw-bold mb-0">👋 Welcome, {{ Auth::user()->name }}</h2>
        <small class="text-muted">Printer & Cartridge Management Dashboard</small>
    </div>

    <button class="btn btn-success">
        <i class="fas fa-plus"></i> Add Printer
    </button>
</div>
@stop

@section('content')

<div class="row">

<div class="col-md-3">
<div class="small-box bg-primary">
<div class="inner">
<h3>125</h3>
<p>Total Printers</p>
</div>
<div class="icon">
<i class="fas fa-print"></i>
</div>
</div>
</div>

<div class="col-md-3">
<div class="small-box bg-success">
<div class="inner">
<h3>86</h3>
<p>Total Cartridges</p>
</div>
<div class="icon">
<i class="fas fa-box"></i>
</div>
</div>
</div>

<div class="col-md-3">
<div class="small-box bg-warning">
<div class="inner">
<h3>08</h3>
<p>Refill Due</p>
</div>
<div class="icon">
<i class="fas fa-exclamation-triangle"></i>
</div>
</div>
</div>

<div class="col-md-3">
<div class="small-box bg-danger">
<div class="inner">
<h3>₹42,500</h3>
<p>Monthly Cost</p>
</div>
<div class="icon">
<i class="fas fa-rupee-sign"></i>
</div>
</div>
</div>

</div>

<div class="row">

<div class="col-md-8">

<div class="card">

<div class="card-header bg-success text-white">
<b>Recent Printers</b>
</div>

<div class="card-body">

<table class="table table-hover">

<thead>

<tr>

<th>ID</th>
<th>Printer</th>
<th>Department</th>
<th>Status</th>

</tr>

</thead>

<tbody>

<tr>

<td>1</td>
<td>HP LaserJet M404</td>
<td>Accounts</td>
<td><span class="badge bg-success">Active</span></td>

</tr>

<tr>

<td>2</td>
<td>Canon LBP2900</td>
<td>HR</td>
<td><span class="badge bg-warning">Repair</span></td>

</tr>

<tr>

<td>3</td>
<td>Epson L3150</td>
<td>IT</td>
<td><span class="badge bg-success">Active</span></td>

</tr>

</tbody>

</table>

</div>

</div>

</div>

<div class="col-md-4">

<div class="card">

<div class="card-header bg-danger text-white">

<b>Refill Due</b>

</div>

<div class="card-body">

<ul class="list-group">

<li class="list-group-item">HP 88A - Today</li>

<li class="list-group-item">Canon 325 - Tomorrow</li>

<li class="list-group-item">HP 12A - Overdue</li>

</ul>

</div>

</div>

</div>

</div>

@stop