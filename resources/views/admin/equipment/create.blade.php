@extends('layouts.app')
@section('content')
<div class="container-fluid px-6 py-4">
    <div class="row">
        <div class="col-lg-12">
            <!-- Page header -->
            <div class="border-bottom pb-4 mb-4">
                <div class="mb-2 mb-lg-0">
                    <h3 class="mb-0 fw-bold">{{ __('Create Equipment') }}</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('equipments.store') }}" class="row g-3" method="post">
                        @csrf
                        <div class="col-lg-6">
                            <label for="name" class="form-label">{{ __('Name') }}</label>
                            <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
                            @error('name')
                                <div class="alert alert-danger mt-2 mb-0" role="alert">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-lg-6">
                            <label for="brand_id" class="form-label">{{ __('Brand') }}</label>
                            <select class="form-select select2" name="brands[]" id="brand_id" data-placeholder="{{ __('Choose the brands') }}" multiple>
                                @foreach ($brands as $brand)
                                    <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                @endforeach
                            </select>
                            @error('brand_id')
                                <div class="alert alert-danger mt-2 mb-0" role="alert">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-lg-12">
                            <button type="submit" class="btn btn-primary">{{ __('Create') }}</button>
                            <a href="{{ route('equipments.index') }}" class="btn btn-light">{{ __('Cancel') }}</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
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
                placeholder: $( this ).data( 'placeholder' ),
                closeOnSelect: false,
            });
        });
    </script>
@endpush