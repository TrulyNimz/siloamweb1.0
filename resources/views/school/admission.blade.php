@extends('partials.layouts')

@section('title', 'Siloam Admissions')

<link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<link rel="stylesheet" href="{{ asset('assets/css') }}">
    <link rel="icon" type="image/png/jpg" href="{{ asset('assets/images/LOGO.jpg') }}?v=1">
<!-- Hero Section -->
<div class="position-relative">
    <img src="{{ asset('assets/images/adm.jpg') }}"
         class="img-fluid w-100"
         style="height:500px; object-fit:cover;"
         alt="">
    <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark"
     style="opacity: 0.80;"></div>
<div class="position-absolute top-0 start-50 translate-middle-x text-white text-center w-100 pt-5">
    <a href="{{ route('academic.application') }}"
       class="btn ab px-4 py-2 rounded-pill">
        <i class="fas fa-pen-nib me-2 "></i> Apply Now
    </a>
</div>

</div>
@section('content')

<!-- Admission Content -->
<section class="container my-5 text-muted mt-0">

    <div class="card border-0">
        <div class="card-body">

            <h2 class="fw-bolder text-center mb-4">Admission</h2>

            <div class="row g-4 align-items-start">

                <!-- Left Column: Image -->
                <div class="col-md-4">
                    <img src="{{ asset('assets/images/admission.jpg') }}"
                         class="img-fluid w-100 rounded"
                         alt="Admission Image">
                </div>

                <!-- Right Column: Content -->
                <div class="col-md-8">

                    <h6 class="text-primary mb-3">
                        To join us, follow the steps below:
                    </h6>

                    <ol class="mb-4">
                        <li>Choose your preferred programme and ensure you meet the qualifications listed under <strong>Our Programmes</strong>.</li>
                        <li>Click on <strong>Apply Now</strong> at the top or bottom of this page.</li>
                        <li>Fill in all required information in each step.</li>
                        <li>Complete and submit your application.</li>
                        <li>You will receive a confirmation email once submitted successfully.</li>
                        <li>Pay a non-refundable application fee of <strong>Kshs. 1,000</strong>.</li>
                    </ol>

                    <h6 class="text-primary mb-3">
                        Applicants must present the following:
                    </h6>

                    <ol>
                        <li>Two recent passport-size photographs (name written on the back).</li>
                        <li>At least two academic certificates (e.g. KCPE & KCSE).</li>
                        <li>Copy of National ID or Birth Certificate.</li>
                        <li>Original certificates for verification on reporting date.</li>
                    </ol>

                </div>

            </div>

            <!-- Apply Button -->
<div class="text-center mt-4">
    <a href="{{ route('academic.application') }}"
       class="btn btn-success px-5 py-3 apply-btn rounded-pill text-bold">
        <i class="fas fa-user-graduate me-2"></i> Apply Now
    </a>
</div>

        </div>
    </div>

</section>

@endsection

