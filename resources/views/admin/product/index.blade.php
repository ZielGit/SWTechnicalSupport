@extends('layouts.app')
@section('content')
<div class="container-fluid px-6 py-4">
    <div class="row">
        <div class="col-lg-12">
            <!-- Page header -->
            <div class="border-bottom pb-4 mb-4 d-flex align-items-center justify-content-between">
                <div class="mb-2 mb-lg-0">
                    <h3 class="mb-0 fw-bold">{{ __('Products') }}</h3>
                </div>
                <div>
                    <a href="{{ route('products.create') }}" class="btn btn-primary">{{ __('Create New Product') }}</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table text-nowrap mb-0" id="product-dataTable">
                            <thead class="table-light">
                                <tr>
                                    <th>{{ __('ID') }}</th>
                                    <th>{{ __('Name') }}</th>
                                    <th>{{ __('Brands') }}</th>
                                    <th>{{ __('Services') }}</th>
                                    <th>{{ __('Actions') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    <tr>
                                        <td>{{ $product->id }}</td>
                                        <td>{{ $product->name }}</td>
                                        <td>
                                            @foreach ($product->brands as $brand)
                                                {{ $brand->name }}
                                            @endforeach
                                        </td>
                                        <td>
                                            @foreach ($product->services as $service)
                                                {{ $service->name }}
                                            @endforeach
                                        </td>
                                        <td>
                                            <a href="{{ route('products.show', $product->id) }}" class="btn btn-info">{{ __('Show') }}</a>
                                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">{{ __('Edit') }}</a>
                                            <form action="{{ route('products.destroy', $product->id) }}" class="d-inline" method="post">
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
        let table = new DataTable('#product-dataTable', {
            // options
        });
    </script>
    @if (session('success') == 'ok')
        <script>
            Swal.fire({
                icon: "success",
                title: "{{ __('Product created successfully') }}",
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
                title: "{{ __('Product updated successfully') }}",
                showConfirmButton: false,
                timer: 2000
            })
        </script>
    @endif
    @if (session('delete') == 'ok')
        <script>
            Swal.fire(
                "{{ __('Deleted!') }}",
                "{{ __('Successfully deleted Product') }}",
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