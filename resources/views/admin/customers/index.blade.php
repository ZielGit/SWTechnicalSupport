@extends('layouts.app')
@section('content')
<div class="container-fluid px-6 py-4">
    <div class="row">
        <div class="col-lg-12">
            <!-- Page header -->
            <div class="border-bottom pb-4 mb-4 d-flex align-items-center justify-content-between">
                <div class="mb-2 mb-lg-0">
                    <h3 class="mb-0 fw-bold">{{ __('Customers') }}</h3>
                </div>
                <div>
                    <a href="{{ route('customers.create') }}" class="btn btn-primary">{{ __('Create New Customer') }}</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table text-nowrap mb-0" id="customer-dataTable">
                            <thead class="table-light">
                                <tr>
                                    <th>{{ __('ID') }}</th>
                                    <th>{{ __('Name') }}</th>
                                    <th>{{ __('Email') }}</th>
                                    <th>{{ __('Phone') }}</th>
                                    <th>{{ __('Actions') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($customers as $customer)
                                    <tr>
                                        <td>{{ $customer->id }}</td>
                                        <td>{{ $customer->name }}</td>
                                        <td>{{ $customer->email }}</td>
                                        <td>{{ $customer->phone }}</td>
                                        <td>
                                            <a href="{{ route('customers.show', $customer->id) }}" class="btn btn-info">{{ __('Show') }}</a>
                                            <a href="{{ route('customers.edit', $customer->id) }}" class="btn btn-warning">{{ __('Edit') }}</a>
                                            <form action="{{ route('customers.destroy', $customer->id) }}" class="d-inline" method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger deleteBtn">{{ __('Delete') }}</button>
                                            </form>
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
        let table = new DataTable('#customer-dataTable', {
            // options
        });
    </script>
    @if (session('success') == 'ok')
        <script>
            Swal.fire({
                icon: "success",
                title: "{{ __('Customer created successfully') }}",
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
                title: "{{ __('Customer updated successfully') }}",
                showConfirmButton: false,
                timer: 2000
            })
        </script>
    @endif
    @if (session('delete') == 'ok')
        <script>
            Swal.fire(
                "{{ __('Deleted!') }}",
                "{{ __('Successfully deleted customer') }}",
                'success'
            )
        </script>
    @endif
    <script>
        $(document).ready( function(){
            $(".table").on("click", ".deleteBtn", function (e){
                var form = $(this).closest('form');
                e.preventDefault();
                Swal.fire({
                    title: "{{ __('Are you sure?') }}",
                    text: "{{ __('You won\u0027t be able to revert this!') }}",
                    icon: 'warning',
                    showCancelButton:true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: "{{ __('Yes, delete it!') }}",
                    cancelButtonText: "{{ __('Cancel') }}"
                }).then((result) =>{
                    if (result.value) {
                        form.submit();
                    }
                })
            })
        })
    </script>
@endpush