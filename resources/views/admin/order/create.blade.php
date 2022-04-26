@extends('layouts.app')
@section('content')
<div class="container-fluid px-6 py-4">
    <div class="row">
        <div class="col-lg-12">
            <!-- Page header -->
            <div class="border-bottom pb-4 mb-4">
                <div class="mb-2 mb-lg-0">
                    <h3 class="mb-0 fw-bold">{{ __('Create Order') }}</h3>
                </div>
            </div>
        </div>
    </div>
    <form action="{{ route('orders.store') }}" class="row" method="post">
        @csrf
        <div class="col-lg-6 mb-3">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">
                        {{ __('Customer Information') }}
                        <button type="button" class="btn btn-success float-end" data-bs-toggle="modal" data-bs-target="#customerModal">{{ __('Create New Customer') }}</button>
                    </h4>
                    <div class="row">
                        <div class="col-lg-6 mb-3">
                            <label for="customer_id" class="form-label">{{ __('Customer') }}</label>
                            <select class="form-select select2" name="customer_id" id="customer_id" data-placeholder="{{ __('Choose the customer') }}">
                                <option value=""></option>
                                @foreach ($customers as $customer)
                                    <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                                @endforeach
                            </select>
                            @error('customer_id')
                                <div class="alert alert-danger mt-2 mb-0" role="alert">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label for="phone" class="form-label">{{ __('Phone') }}</label>
                            <input type="number" name="phone" id="phone" class="form-control" value="{{ old('phone') }}" disabled>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label for="document_type" class="form-label">{{ __('Document Type') }}</label>
                            <select class="form-control" name="" id="" disabled>
                                <option></option>
                                <option></option>
                                <option></option>
                            </select>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label for="document_number" class="form-label">{{ __('Document Number') }}</label>
                            <input type="number" name="document_number" id="document_number" class="form-control" value="{{ old('document_number') }}" disabled>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 mb-3">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">{{ __('Order Information') }}</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="" class="form-label">{{ __('Type of service') }}</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="RadioDefault" id="RadioDefault2" checked>
                                    <label class="form-check-label" for="RadioDefault2">
                                        {{ __('Workshop service') }}
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="RadioDefault" id="RadioDefault1">
                                    <label class="form-check-label" for="RadioDefault1">
                                        {{ __('Home service') }}
                                    </label>
                                </div>
                            </div>
                            <label for="" class="form-label">{{ __('Cost of service') }}</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    {{ __('Fixed cost') }}
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    {{ __('Quoting the service') }}
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 mb-3">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">
                        {{ __('Equipments') }}
                        <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#equipmentModal">{{ __('Add Equipment') }}</button>
                    </h4>
                    <table class="table text-nowrap mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>{{ __('ID') }}</th>
                                <th>{{ __('Product') }}</th>
                                <th>{{ __('Brand') }}</th>
                                <th>{{ __('Model') }}</th>
                                <th>{{ __('Services') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-12 mb-3">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6 mb-3">
                            <label for="" class="form-label">{{ __('Faults/Problems') }}</label>
                            <textarea class="form-control" name="" id="" rows="3"></textarea>
                        </div>
                        <div class="col-lg-6  mb-3">
                            <label for="" class="form-label">{{ __('Solutions') }}</label>
                            <textarea class="form-control" name="" id="" rows="3"></textarea>
                        </div>
                        <div class="col-lg-6  mb-3">
                            <label for="" class="form-label">{{ __('Observations') }}</label>
                            <textarea class="form-control" name="" id="" rows="3"></textarea>
                        </div>
                        <div class="col-lg-6  mb-3">
                            <label for="" class="form-label">{{ __('Accessories included') }}</label>
                            <textarea class="form-control" name="" id="" rows="3"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <button type="submit" class="btn btn-primary">{{ __('Create') }}</button>
            <a href="{{ route('orders.index') }}" class="btn btn-light">{{ __('Cancel') }}</a>
        </div>
    </form>
</div>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('dash-ui/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dash-ui/plugins/select2-bootstrap-5-theme/select2-bootstrap-5-theme.min.css') }}">
@endpush

@push('modals')
    <!-- Add Modal Customer -->
    <div class="modal fade" id="customerModal" tabindex="-1" role="dialog" aria-labelledby="customerModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{ __('Quick Customer Registration') }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="name" class="form-label">{{ __('Name') }}</label>
                            <input type="text" name="name" id="name" class="form-control">
                            @error('name')
                                <div class="alert alert-danger mt-2 mb-0" role="alert">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="document_type" class="form-label">{{ __('Document Type') }}</label>
                            <select class="form-control" name="document_type" id="document_type">
                                <option value="DNI">{{ __('DNI') }}</option>
                                <option value="RUC">{{ __('RUC') }}</option>
                            </select>
                            @error('document_type')
                                <div class="alert alert-danger mt-2 mb-0" role="alert">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="document_number">{{ __('Document Number') }}</label>
                            <input type="number" name="document_number" id="document_number" class="form-control" value="{{ old('document_number') }}">
                            @error('document_number')
                                <div class="alert alert-danger mt-2 mb-0" role="alert">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="phone">{{ __('Phone') }}</label>
                            <input type="number" name="phone" id="phone" class="form-control" value="{{ old('phone') }}">
                            @error('phone')
                                <div class="alert alert-danger mt-2 mb-0" role="alert">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('Close') }}</button>
                        <button type="button" class="btn btn-primary">{{ __('Save') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Equipment Modal -->
    <div class="modal fade" id="equipmentModal" tabindex="-1" role="dialog" aria-labelledby="equipmentModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{ __('Add Equipment') }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="product_id" class="form-label">{{ __('Product') }}</label>
                            <select class="form-select select2-product" name="product_id" id="product_id" data-placeholder="{{ __('Choose the product') }}">
                                <option value=""></option>
                                @foreach ($products as $product)
                                    <option value="{{ $product->id }}">{{ $product->name }}</option>
                                @endforeach
                            </select>
                            @error('product_id')
                                <div class="alert alert-danger mt-2 mb-0" role="alert">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="brand_id" class="form-label">{{ __('Brand') }}</label>
                            <select class="form-select select2-brand" name="brands[]" id="brand_id" data-placeholder="{{ __('Choose the brand') }}">
                                <option value=""></option>
                                @foreach ($brands as $brand)
                                    <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                @endforeach
                            </select>
                            @error('brand_id')
                                <div class="alert alert-danger mt-2 mb-0" role="alert">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">{{ __('Model') }}</label>
                            <input class="form-control" type="text" placeholder="{{ __('Enter the device model') }}">
                        </div>
                        <div class="mb-3">
                            <label for="service_id" class="form-label">{{ __('Services') }}</label>
                            <select class="form-select select2-services" name="services[]" id="service_id" data-placeholder="{{ __('Choose the service') }}" multiple>
                                @foreach ($services as $service_id)
                                    <option value="{{ $service_id->id }}">{{ $service_id->name }}</option>
                                @endforeach
                            </select>
                            @error('service_id')
                                <div class="alert alert-danger mt-2 mb-0" role="alert">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('Close') }}</button>
                        <button type="button" class="btn btn-primary">{{ __('Save') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endpush

@push('scripts')
    <script src="{{ asset('dash-ui/plugins/select2/js/select2.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $(".select2").select2({
                theme: "bootstrap-5",
                placeholder: $( this ).data( 'placeholder' ),
            });

            $(".select2-product").select2({
                theme: "bootstrap-5",
                placeholder: $( this ).data( 'placeholder' ),
                dropdownParent: $('#equipmentModal')
            });

            $(".select2-brand").select2({
                theme: "bootstrap-5",
                placeholder: $( this ).data( 'placeholder' ),
                dropdownParent: $('#equipmentModal')
            });

            $(".select2-services").select2({
                theme: "bootstrap-5",
                placeholder: $( this ).data( 'placeholder' ),
                dropdownParent: $('#equipmentModal')
            });

            var customer_id = $('#customer_id');
        });
    </script>
@endpush