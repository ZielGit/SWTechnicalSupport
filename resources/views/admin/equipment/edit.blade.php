@extends('layouts.app')
@section('content')
<div class="container-fluid px-6 py-4">
    <div class="row">
        <div class="col-lg-12">
            <!-- Page header -->
            <div class="border-bottom pb-4 mb-4">
                <div class="mb-2 mb-lg-0">
                    <h3 class="mb-0 fw-bold">{{ __('Edit Equipment') }}</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('equipments.update', $equipment) }}" class="row g-3" method="post">
                        @csrf
                        @method('put')
                        <div class="col-lg-6">
                            <label for="name" class="form-label">{{ __('Name') }}</label>
                            <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $equipment->name) }}">
                            @error('name')
                                <div class="alert alert-danger mt-2 mb-0" role="alert">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-lg-6">
                            <label for="brand_id" class="form-label">{{ __('Brand') }}</label>
                            <select class="form-control" name="brand_id" id="brand_id">
                                @foreach ($brands as $brand)
                                    <option value="{{ $brand->id }}" 
                                        @if ($brand->id == $equipment->brand_id)
                                            selected
                                        @endif
                                    >{{ $brand->name }}</option>
                                @endforeach
                            </select>
                            @error('brand_id')
                                <div class="alert alert-danger mt-2 mb-0" role="alert">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-lg-12">
                            <button type="submit" class="btn btn-primary">{{ __('Edit') }}</button>
                            <a href="{{ route('equipments.index') }}" class="btn btn-light">{{ __('Cancel') }}</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection