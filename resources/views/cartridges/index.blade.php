@extends('adminlte::page')

@section('title', 'Cartridge List')

@section('content_header')
<div class="d-flex justify-content-between">
    <h1>Cartridge List</h1>

    <a href="{{ route('cartridges.create') }}" class="btn btn-success">
        <i class="fas fa-plus"></i> Add Cartridge
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

        <table class="table table-bordered table-striped">

            <thead class="bg-primary">

            <tr>
                <th>ID</th>
                <th>Cartridge</th>
                <th>Model</th>
                <th>Printer</th>
                <th>Vendor</th>
                <th>Refill</th>
                <th>Status</th>
                <th width="180">Action</th>
            </tr>

            </thead>

            <tbody>

            @forelse($cartridges as $cartridge)

            <tr>

                <td>{{ $cartridge->id }}</td>

                <td>{{ $cartridge->cartridge_name }}</td>

                <td>{{ $cartridge->model }}</td>

                <td>{{ $cartridge->printer_name }}</td>

                <td>{{ $cartridge->vendor }}</td>

                <td>{{ $cartridge->refill_count }}</td>

                <td>

                    @if($cartridge->status=='Installed')

                        <span class="badge badge-success">
                            Installed
                        </span>

                    @elseif($cartridge->status=='Repair')

                        <span class="badge badge-warning">
                            Repair
                        </span>

                    @elseif($cartridge->status=='Empty')

                        <span class="badge badge-danger">
                            Empty
                        </span>

                    @else

                        <span class="badge badge-primary">
                            In Stock
                        </span>

                    @endif

                </td>

                <td>

                    <a href="{{ route('cartridges.edit',$cartridge->id) }}"
                       class="btn btn-primary btn-sm">
                        Edit
                    </a>

                    <form action="{{ route('cartridges.destroy',$cartridge->id) }}"
                          method="POST"
                          style="display:inline">

                        @csrf
                        @method('DELETE')

                        <button class="btn btn-danger btn-sm"
                                onclick="return confirm('Delete this cartridge?')">

                            Delete

                        </button>

                    </form>

                </td>

            </tr>

            @empty

            <tr>

                <td colspan="8" class="text-center">

                    No Cartridge Found

                </td>

            </tr>

            @endforelse

            </tbody>

        </table>

        <br>

        {{ $cartridges->links() }}

    </div>
</div>

@stop