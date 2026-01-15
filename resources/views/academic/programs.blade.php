@extends('partials.layouts')
@section('title', 'SHCHS | Our-Programs')
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
@section('content')
<div class="position-relative bg-info mt-3 mb-1 text-white">
    <img src="{{ asset('assets/images/ckr.jpg') }}" class="img-fluid w-100 opacity-75"
        style="height:auto; object-fit:cover;max-height: 300px;" alt="">

    <div
        class="class-name position-absolute top-50 bg-dark bg-opacity-50 p-3 rounded start-40 ms-5 
              fs-1 fw-bold text-start text-light">
        Courses offered
    </div>
</div>

    <main class="container fw-normal pt-3 fs-5 fst-italic">
        <div class="row g-4">

            <!-- Orthopedics -->
            <div class="column col-md-4">
                <div class="rounded border shadow-sm bg-white h-100">
                    <img src="{{ asset('assets/images/orth.png') }}" class="img-fluid w-100 rounded-top">
                    <h5 class="fw-bold p-2 mb-1">
                        Orthopedics & Trauma Medicine
                    </h5>
                    <p class="text-muted p-2 mb-0">
                        A program focusing on musculoskeletal injuries, trauma care, orthopedic conditions, and
                        rehabilitation techniques.
                    </p>
                    <div class="mt-3 text-center mb-3 gap-2">
                        <a href="{{ route('academic.application') }}"
                            class="btn btn-outline-success btn-sm px-3">Enroll</a>

                        <a href="{{ route('academic.orthopedics') }}" class="btn btn-outline-primary btn-sm px-3">
                            Read More
                        </a>
                    </div>
                </div>
            </div>

            <!-- Nursing -->
            <div class="column col-md-4">
                <div class="border  rounded shadow-sm bg-white h-100">
                    <img src="{{ asset('assets/images/Nursing.jpg') }}" class="img-fluid rounded-top w-100">
                    <h5 class="fw-bold p-2 mb-1 text-center">
                        <a class="text-decoration-none text-dark">
                            Nursing
                    </h5>
                    <p class="text-muted p-2 mb-0">
                        Provides essential nursing knowledge and practical skills including patient care, basic anatomy and
                        physiology, vital signs monitoring, infection control, first aid, and ethical practices in
                        healthcare.
                    <div class="mt-3 text-center mb-3 gap-2">
                        <a href="{{ route('academic.application') }}"
                            class="btn btn-outline-success btn-sm px-3">Enroll</a>

                        <a href="{{ route('academic.nursing') }}" class="btn btn-outline-primary btn-sm px-3">
                            Read More
                        </a>
                    </div>
                </div>
            </div>

            <!-- CNA -->
            <div class="column col-md-4">
                <div class="border rounded shadow-sm bg-white h-100">
                    <img src="{{ asset('assets/images/cna.jpg') }}" class="img-fluid w-80 rounded-top">
                    <h5 class="fw-bold p-2 mb-1">
                        Certified Nurse Assistant
                    </h5>
                    <p class="text-muted mb-0 p-2">
                        Trains students in essential patient care skills, basic nursing procedures, and professional
                        healthcare support.
                    </p>
                    <div class="mt-3 text-center mb-3 gap-2">
                        <a href="{{ route('academic.application') }}"
                            class="btn btn-outline-success btn-sm px-3">Enroll</a>

                        <a href="{{ route('academic.cna') }}" class="btn btn-outline-primary btn-sm px-3">
                            Read More
                        </a>
                    </div>
                </div>
            </div>

            <!-- PPTT -->
            <div class="column col-md-4">
                <div class="border rounded shadow-sm bg-white h-100">
                    <img src="{{ asset('assets/images/PERIP.jpg') }}" class="img-fluid w-100 rounded-top ">
                    <h5 class="fw-bold mb-1 text-center">
                        Perioperative Theatre Technology
                    </h5>
                    <p class="text-muted mb-0 p-2 ms-2">
                        Covers surgical procedures, theatre management, sterilization, and assisting surgeons in the
                        operating room.
                    </p>
                    <div class="mt-3 text-center mb-3 gap-2">
                        <a href="{{ route('academic.application') }}"
                            class="btn btn-outline-success btn-sm px-3">Enroll</a>

                        <a href="{{ route('academic.pptt') }}" class="btn btn-outline-primary btn-sm px-3">
                            Read More
                        </a>
                    </div>
                </div>
            </div>
            <!-- Computer Packages -->
            <div class="column col-md-4">
                <div class="border  rounded shadow-sm bg-white h-100">
                    <img src="{{ asset('assets/images/Laptop.jpg') }}" class="img-fluid rounded-top w-100">
                    <h5 class="fw-bold p-2 mb-1 text-center">
                        <a class="text-decoration-none text-dark">
                            Computer Packages
                    </h5>
                    <p class="text-muted p-2 mb-0 ms-2">
                        Offers essential computer skills including MS Office, internet use, data entry, and digital
                        literacy.
                    </p>
                    <div class="mt-3 text-center mb-3 gap-2">
                        <a href="{{ route('academic.application') }}"
                            class="btn btn-outline-success btn-sm px-3">Enroll</a>

                        <a href="{{ route('academic.packages') }}" class="btn btn-outline-primary btn-sm px-3">
                            Read More
                        </a>
                    </div>
                </div>
            </div>

        </div>

    </main>

@endsection
