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
                            <input type="text" id="name" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="email">{{ __('Email') }}</label>
                            <input type="email" id="email" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="password">{{ __('Password') }}</label>
                            <input type="password" id="password" class="form-control">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection