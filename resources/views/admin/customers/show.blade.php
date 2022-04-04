@extends('layouts.app')
@section('content')
<div class="container-fluid px-6 py-4">
    <div class="row">
        <div class="col-lg-12">
            <!-- Page header -->
            <div class="border-bottom pb-4 mb-4">
                <div class="mb-2 mb-lg-0">
                    <h3 class="mb-0 fw-bold">{{ __('Customer Information') }}</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="row align-items-center">
        <div class="col-lg-12">
            <!-- Bg -->
            <div class="pt-20 rounded-top" style="background:url(../dash-ui/images/background/profile-cover.jpg) no-repeat; background-size: cover;">
            </div>
            <div class="bg-white rounded-bottom smooth-shadow-sm">
                <div class="d-flex align-items-center justify-content-between pt-4 pb-6 px-4">
                    <div class="d-flex align-items-center">
                        <!-- text -->
                        <div class="lh-1">
                            <h2 class="mb-0">{{ $customer->name }}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content -->
    <div class="py-6">
        <div class="row">
            <div class="col-lg-12">
                <!-- card -->
                <div class="card">
                    <div class="card-body">
                        <!-- card title -->
                        <h4 class="card-title mb-4">{{ __('About the Customer') }}</h4>
                        <div class="row">
                            <div class="col-lg-6 mb-5">
                                <h6 class="fs-5">{{ __('Email') }}</h6>
                                <p class="mb-0">{{ $customer->email }}</p>
                            </div>
                            <div class="col-lg-6 mb-5">
                                <h6 class="fs-5">{{ __('Phone') }}</h6>
                                <p class="mb-0">{{ $customer->phone }}</p>
                            </div>
                            <div class="col-lg-6 mb-5">
                                <h6 class="fs-5">{{ __('Document Type') }}</h6>
                                <p class="mb-0">{{ $customer->document_type }}</p>
                            </div>
                            <div class="col-lg-6 mb-5">
                                <h6 class="fs-5">{{ __('Document Number') }}</h6>
                                <p class="mb-0">{{ $customer->document_number }}</p>
                            </div>
                            <div class="col-lg-6 mb-5">
                                <h6 class="fs-5">{{ __('Address') }}</h6>
                                <p class="mb-0">{{ $customer->address }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('customers.index') }}" class="btn btn-primary float-end">{{ __('Go back') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection