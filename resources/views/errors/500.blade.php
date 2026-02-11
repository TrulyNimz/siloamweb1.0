@extends('partials.layouts')

@section('title', __('errors.server_error') . ' - Siloam College')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8 text-center">
            <div class="error-container">
                <h1 class="display-1 text-danger fw-bold">500</h1>
                <h2 class="mb-4">{{ __('errors.server_error') }}</h2>
                <p class="lead text-muted mb-4">
                    {{ __('errors.server_error_message') }}
                </p>
                <div class="d-flex justify-content-center gap-3 flex-wrap">
                    <a href="{{ route('home') }}" class="btn btn-primary btn-lg">
                        <i class="fas fa-home me-2"></i>{{ __('errors.go_home') }}
                    </a>
                    <button onclick="location.reload()" class="btn btn-outline-secondary btn-lg">
                        <i class="fas fa-redo me-2"></i>{{ __('errors.try_again') }}
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.error-container {
    padding: 60px 20px;
}
.error-container h1 {
    font-size: 8rem;
    line-height: 1;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.1);
}
@media (max-width: 576px) {
    .error-container h1 {
        font-size: 5rem;
    }
}
</style>
@endsection
