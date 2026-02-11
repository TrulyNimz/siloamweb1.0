@extends('partials.layouts')

@section('title', __('errors.page_not_found') . ' - Siloam College')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8 text-center">
            <div class="error-container">
                <h1 class="display-1 text-primary fw-bold">404</h1>
                <h2 class="mb-4">{{ __('errors.page_not_found') }}</h2>
                <p class="lead text-muted mb-4">
                    {{ __('errors.page_not_found_message') }}
                </p>
                <div class="d-flex justify-content-center gap-3 flex-wrap">
                    <a href="{{ route('home') }}" class="btn btn-primary btn-lg">
                        <i class="fas fa-home me-2"></i>{{ __('errors.go_home') }}
                    </a>
                    <a href="{{ route('partials.contacts') }}" class="btn btn-outline-secondary btn-lg">
                        <i class="fas fa-envelope me-2"></i>{{ __('errors.contact_us') }}
                    </a>
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
