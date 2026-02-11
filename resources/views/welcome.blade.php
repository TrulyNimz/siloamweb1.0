<div class="hero-wrapper position-relative">
    {{-- Carousel --}}
    <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">

        {{-- Indicators --}}
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
        </div>

        <div class="carousel-inner">
            {{-- First slide loads eagerly (above the fold) --}}
            <div class="carousel-item active">
                <img src="{{ asset('assets/images/bd.jpg') }}" class="d-block w-100 hero-image"
                    alt="Siloam College Campus" loading="eager">
            </div>

            {{-- Other slides lazy load --}}
            <div class="carousel-item">
                <img src="{{ asset('assets/img/ADM.jpg') }}" class="d-block w-100 hero-image"
                    alt="Administration Building" loading="lazy">
            </div>

            <div class="carousel-item">
                <img src="{{ asset('assets/img/22.jpg') }}" class="d-block w-100 hero-image"
                    alt="Student Activities" loading="lazy">
            </div>

            <div class="carousel-item">
                <img src="{{ asset('assets/img/54.jpg') }}" class="d-block w-100 hero-image"
                    alt="College Facilities" loading="lazy">
            </div>

            <div class="carousel-item">
                <img src="{{ asset('assets/img/ST6.jpg') }}" class="d-block w-100 hero-image"
                    alt="Student Life" loading="lazy">
            </div>
        </div>
    </div>

    {{-- Overlay --}}
    <div class="hero-overlay text-center">
        <h1 class="hero-title">
            Welcome to Siloam Hospital College of Health Sciences
        </h1>

        <div class="hero-buttons mt-3">
            <a href="{{ route('academic.programs') }}" class="btn btn-primary btn-lg px-4">Apply Now</a>
            <a href="#academic-section" class="btn btn-outline-light btn-lg px-4 ms-2">Learn More</a>
        </div>
    </div>

    {{-- Slider controls --}}
    <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>

    <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
