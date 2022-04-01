@extends('layouts.app')
@section('content')
<div class="container-fluid px-6 py-4">
    <div class="row">
        <div class="col-lg-12">
            <!-- Page header -->
            <div class="border-bottom pb-4 mb-4">
                <div class="mb-2 mb-lg-0">
                    <h3 class="mb-0 fw-bold">{{ __('Create User') }}</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('users.store') }}" class="row" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="name">{{ __('Name') }}</label>
                            <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
                            @error('name')
                                <div class="alert alert-danger mt-2 mb-0" role="alert">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="email">{{ __('Email') }}</label>
                            <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}">
                            @error('email')
                                <div class="alert alert-danger mt-2 mb-0" role="alert">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="password">{{ __('Password') }}</label>
                            <input type="password" name="password" id="password" class="form-control">
                            @error('password')
                                <div class="alert alert-danger mt-2 mb-0" role="alert">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>{{ __('Roles') }}</label>
                            @foreach ($roles as $role)
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="roles[]" value="{{ $role->id }}" id="role_{{ $role->id }}">
                                    <label class="form-check-label" for="role_{{ $role->id }}">
                                        {{ $role->name }}
                                    </label>
                                </div>
                            @endforeach
                            @error('roles')
                                <div class="alert alert-danger mt-2 mb-0" role="alert">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">{{ __('Create') }}</button>
                            <a href="{{ route('users.index') }}" class="btn btn-light">{{ __('Cancel') }}</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection