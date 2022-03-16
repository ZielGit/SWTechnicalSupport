<x-guest-layout>            
    <x-jet-authentication-card>
        <div class="card-body p-6">
            <div class="mb-4">
                <a href="#"><img src="{{ asset('dash-ui/images/brand/logo/logo-primary.svg') }}" class="mb-2" alt=""></a>
                <p class="mb-6">{{ __('Please enter your user information.') }}</p>
            </div>

            <x-jet-validation-errors class="mb-3 rounded-0" />

            @if (session('status'))
                <div class="alert alert-success mb-3 rounded-0" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-3">
                    <x-jet-label class="form-label" value="{{ __('Email') }}" />

                    <x-jet-input class="{{ $errors->has('email') ? 'is-invalid' : '' }}" type="email"
                                name="email" :value="old('email')" placeholder="{{ __('Enter your email') }}" required />
                    <x-jet-input-error for="email"></x-jet-input-error>
                </div>

                <div class="mb-3">
                    <x-jet-label class="form-label" value="{{ __('Password') }}" />

                    <x-jet-input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password"
                                name="password" placeholder="{{ __('Enter your password') }}" required autocomplete="current-password" />
                    <x-jet-input-error for="password"></x-jet-input-error>
                </div>

                <div class="mb-3">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="custom-control custom-checkbox">
                                <x-jet-checkbox id="remember_me" name="remember" />
                                <label class="custom-control-label" for="remember_me">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex justify-content-end align-items-baseline">
                                @if (Route::has('password.request'))
                                    <a class="text-inherit fs-5" href="{{ route('password.request') }}">
                                        {{ __('Forgot your password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-0 d-grid">
                    <x-jet-button>
                        {{ __('Log in') }}
                    </x-jet-button>
                </div>
            </form>
        </div>
    </x-jet-authentication-card>
</x-guest-layout>