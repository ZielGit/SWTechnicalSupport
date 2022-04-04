@extends('layouts.app')
@section('content')
<div class="container-fluid px-6 py-4">
    <div class="row">
        <div class="col-lg-12">
            <!-- Page header -->
            <div class="border-bottom pb-4 mb-4">
                <div class="mb-2 mb-lg-0">
                    <h3 class="mb-0 fw-bold">{{ __('Edit Customer') }}</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('customers.update', $customer) }}" class="row g-3" method="post">
                        @csrf
                        @method('put')
                        <div class="col-lg-6">
                            <label for="name">{{ __('Name') }}</label>
                            <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $customer->name) }}">
                            @error('name')
                                <div class="alert alert-danger mt-2 mb-0" role="alert">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-lg-6">
                            <label for="email">{{ __('Email') }}</label>
                            <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $customer->email) }}">
                            @error('email')
                                <div class="alert alert-danger mt-2 mb-0" role="alert">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-lg-6">
                            <label for="document_type" class="form-label">{{ __('Document Type') }}</label>
                            <select class="form-control" name="document_type" id="document_type">
                                <option value="DNI" {{ (($customer->document_type == 'DNI')? 'selected' : '') }}>{{ __('DNI') }}</option>
                                <option value="RUC" {{ (($customer->document_type == 'RUC')? 'selected' : '') }}>{{ __('RUC') }}</option>
                            </select>
                            @error('document_type')
                                <div class="alert alert-danger mt-2 mb-0" role="alert">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-lg-6">
                            <label for="document_number">{{ __('Document Number') }}</label>
                            <input type="number" name="document_number" id="document_number" class="form-control" value="{{ old('document_number', $customer->document_number) }}">
                            @error('document_number')
                                <div class="alert alert-danger mt-2 mb-0" role="alert">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-lg-6">
                            <label for="phone">{{ __('Phone') }}</label>
                            <input type="number" name="phone" id="phone" class="form-control" value="{{ old('phone', $customer->phone) }}">
                            @error('phone')
                                <div class="alert alert-danger mt-2 mb-0" role="alert">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-lg-6">
                            <label for="address">{{ __('Address') }}</label>
                            <input type="text" name="address" id="address" class="form-control" value="{{ old('address', $customer->address) }}">
                            @error('address')
                                <div class="alert alert-danger mt-2 mb-0" role="alert">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-lg-12">
                            <button type="submit" class="btn btn-primary">{{ __('Edit') }}</button>
                            <a href="{{ route('customers.index') }}" class="btn btn-light">{{ __('Cancel') }}</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection