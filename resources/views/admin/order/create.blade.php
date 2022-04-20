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
                        {{ __('Customer Information') }} <button type="button" class="btn btn-success float-end">{{ __('Create New Customer') }}</button>
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
                    <h4 class="card-title mb-4">{{ __('Equipments') }}</h4>
                    
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

@push('scripts')
    <script src="{{ asset('dash-ui/plugins/select2/js/select2.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $(".select2").select2({
                theme: "bootstrap-5",
                width: $( this ).data( 'width' ) ? $( this ).data( 'width' ) : $( this ).hasClass( 'w-100' ) ? '100%' : 'style',
                placeholder: $( this ).data( 'placeholder' ),
            });

            var customer_id = $('#customer_id');
        });
    </script>
@endpush