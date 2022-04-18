@extends('layouts.app')
@section('content')
<div class="container-fluid px-6 py-4">
    <div class="row">
        <div class="col-lg-12">
            <!-- Page header -->
            <div class="border-bottom pb-4 mb-4 d-flex align-items-center justify-content-between">
                <div class="mb-2 mb-lg-0">
                    <h3 class="mb-0 fw-bold">{{ __('Orders') }}</h3>
                </div>
                <div>
                    <a href="{{ route('orders.create') }}" class="btn btn-primary">{{ __('Create New Order') }}</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table text-nowrap mb-0" id="Order-dataTable">
                            <thead class="table-light">
                                <tr>
                                    <th>{{ __('ID') }}</th>
                                    <th>{{ __('Actions') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order)
                                    <tr>
                                        <td>{{ $order->id }}</td>
                                        <td>
                                            <a href="{{ route('orders.show', $order->id) }}" class="btn btn-info">{{ __('Show') }}</a>
                                            <a href="{{ route('orders.edit', $order->id) }}" class="btn btn-warning">{{ __('Edit') }}</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('dash-ui/plugins/datatables/datatables.min.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('dash-ui/plugins/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('dash-ui/plugins/sweetalert2/sweetalert2.all.min.js') }}"></script>
    <script>
        let table = new DataTable('#order-dataTable', {
            // options
        });
    </script>
    @if (session('success') == 'ok')
        <script>
            Swal.fire({
                icon: "success",
                title: "{{ __('Order created successfully') }}",
                showConfirmButton: false,
                timer: 2000
            })
        </script>
    @endif
    @if (session('update') == 'ok')
        <script>
            Swal.fire({
                position: 'top-end',
                icon: "success",
                title: "{{ __('Order updated successfully') }}",
                showConfirmButton: false,
                timer: 2000
            })
        </script>
    @endif
    <script>
        $(document).ready( function(){
            
        })
    </script>
@endpush