@extends('partials.layouts')

@section('title', 'Student Login - Siloam College')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-5 col-lg-4">
        <div class="card shadow-sm">
            <div class="card-body p-4">
                <div class="text-center mb-4">
                    <img src="{{ asset('assets/images/web.png') }}" alt="Siloam College Logo"
                        style="height: 60px; object-fit: contain;" loading="eager">
                    <h1 class="h4 mt-3 fw-normal">{{ __('auth.login') }}</h1>
                </div>

                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput" name="email"
                            placeholder="name@example.com" required />
                        <label for="floatingInput">{{ __('auth.email_address') }}</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="floatingPassword" name="password"
                            placeholder="Password" required />
                        <label for="floatingPassword">{{ __('messages.password') }}</label>
                    </div>
                    <div class="form-check text-start my-3">
                        <input class="form-check-input" type="checkbox" name="remember" id="checkDefault" />
                        <label class="form-check-label" for="checkDefault">
                            {{ __('auth.remember_me') }}
                        </label>
                    </div>
                    <button class="btn btn-primary w-100 py-2" type="submit">
                        {{ __('auth.login') }}
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
