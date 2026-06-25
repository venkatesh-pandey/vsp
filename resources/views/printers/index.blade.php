@extends('adminlte::page')

@section('title', 'Printers')

@section('content_header')
<div class="d-flex justify-content-between">
    <h1>Printer List</h1>

    <a href="{{ route('printers.create') }}" class="btn btn-success">
        <i class="fas fa-plus"></i> Add Printer
    </a>
</div>
@stop

@section('content')

<div class="card">
    <div class="card-body">

        <form method="GET" action="{{ route('printers.index') }}" class="mb-3">
            <input type="text"
                   name="search"
                   value="{{ request('search') }}"
                   class="form-control"
                   placeholder="Search Printer...">
        </form>

        <table class="table table-bordered table-hover">
            <thead class="bg-primary">
            <tr>
                <th>ID</th>
                <th>Printer</th>
                <th>Model</th>
                <th>Serial</th>
                <th>Department</th>
                <th>User</th>
                <th>Status</th>
                <th width="170">Action</th>
            </tr>
            </thead>

            <tbody>

            @forelse($printers as $printer)

            <tr>

                <td>{{ $printer->id }}</td>
                <td>{{ $printer->printer_name }}</td>
                <td>{{ $printer->model }}</td>
                <td>{{ $printer->serial_no }}</td>
                <td>{{ $printer->department }}</td>
                <td>{{ $printer->user_name }}</td>

                <td>

                    @if($printer->status=="Active")
                        <span class="badge bg-success">Active</span>

                    @elseif($printer->status=="Repair")
                        <span class="badge bg-warning">Repair</span>

                    @else
                        <span class="badge bg-danger">Inactive</span>

                    @endif

                </td>

                <td>

                    <a href="{{ route('printers.edit',$printer->id) }}"
                       class="btn btn-primary btn-sm">
                        Edit
                    </a>

                    <form action="{{ route('printers.destroy',$printer->id) }}"
                          method="POST"
                          style="display:inline;">

                        @csrf
                        @method('DELETE')

                        <button class="btn btn-danger btn-sm"
                        onclick="return confirm('Delete this printer?')">
                            Delete
                        </button>

                    </form>

                </td>

            </tr>

            @empty

            <tr>
                <td colspan="8" class="text-center">
                    No Printer Found
                </td>
            </tr>

            @endforelse

            </tbody>

        </table>

        <br>

        {{ $printers->links() }}

    </div>
</div>

@stop