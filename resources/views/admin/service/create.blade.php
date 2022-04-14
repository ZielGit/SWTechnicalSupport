@extends('layouts.app')
@section('content')
<div class="container-fluid px-6 py-4">
    <div class="row">
        <div class="col-lg-12">
            <!-- Page header -->
            <div class="border-bottom pb-4 mb-4">
                <div class="mb-2 mb-lg-0">
                    <h3 class="mb-0 fw-bold">{{ __('Create Service') }}</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('services.store') }}" class="row g-3" method="post">
                        @csrf
                        <div class="col-lg-6">
                            <label for="name">{{ __('Name') }}</label>
                            <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
                            @error('name')
                                <div class="alert alert-danger mt-2 mb-0" role="alert">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-lg-12">
                            <button type="submit" class="btn btn-primary">{{ __('Create') }}</button>
                            <a href="{{ route('services.index') }}" class="btn btn-light">{{ __('Cancel') }}</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection