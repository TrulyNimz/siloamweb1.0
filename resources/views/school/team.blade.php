@extends('partials.layouts')
@section('title','Siloam-Team')
    <link rel="icon" type="image/png/jpg" href="{{ asset('assets/images/LOGO.jpg') }}?v=1">
<link rel="stylesheet" href="{{ asset('assets/css') }}">

<div class="position-relative">
    <img src="{{ asset('assets/img/29.jpg') }}"
         class="img-fluid w-100"
         style="height:400px; object-fit:cover;"
         alt="">
    <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark"
     style="opacity: 0.75;"></div>
<div class="position-absolute top-25 bottom-0 start-0 ps-5 translate-middle-y text-white">
    <h1 class="hero-title fw-bold  text-uppercase">Our Team</h1>
</div>

</div>
@section('content')
<div><h3 class="text-center text-uppercase text-primary">The Board</h3></div>
<span style="display:block; width:60px; height:2px; background:#fa0000; margin:5px auto 0;"></span>
<div class="container my-5">
    <div class="row g-4 justify-content-center">

        <!-- Card 1 -->
        <div class="col-md-5">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('assets/img/library.jpg') }}" class="card-img-top" alt="Siloam">
                <div class="card-body text-center">
                    <h4 class="card-title">Hon.</h4>
                    <p class="card-text">Chairman</p>
                    <a href="#" class="btn btn-primary"><i class="fas fa-user-graduate me-2"></i>See Profile</a>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="col-md-5">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('assets/img/lab.jpg') }}" class="card-img-top" alt="Siloam">
                <div class="card-body text-center">
                    <h4 class="card-title">Mercy</h4>
                    <p class="card-text">Director</p>
                    <a href="#" class="btn btn-primary"><i class="fas fa-user-graduate me-2"></i>See Profile</a>
                </div>
            </div>
        </div>
        </div>
        </div>
        <div class="mt-4"><h3 class="text-center text-uppercase text-primary">Administration</h3></div>
        <span style="display:block; width:60px; height:2px; background:#fa0000; margin:5px auto 0;"></span>
        <div class="container my-5">
    <div class="row g-4 justify-content-center">
        <!-- Card 3 -->
         <div class="col-md-4">
            <div class="card h-100 shadow-sm">
               <img src="{{ asset('assets/images/PR.jpg') }}" class="rounded-circle mx-auto mt-2 profile-img" alt="Siloam">

                <div class="card-body text-center">
                    <h4 class="card-title">Bernadette</h4>
                    <p class="card-text">Principal</p>
                    <a href="#" class="btn btn-primary"><i class="fas fa-user-graduate me-2"></i>See Profile</a>
                </div>
            </div>
        </div>
                <!-- Card 4 -->
         <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('assets/images/ref.jpg') }}" class="card-img-top rounded-circle mx-auto mt-2 profile-img" alt="Siloam">
                <div class="card-body text-center">
                    <h4 class="card-title">Vincent</h4>
                    <p class="card-text">Academics Registar</p>
                    <a href="#" class="btn btn-primary"><i class="fas fa-user-graduate me-2"></i>See Profile</a>
                </div>
            </div>
        </div>
                <!-- Card 5 -->
         <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('assets/images/admission.jpg') }}" class="rounded-circle mx-auto mt-2 profile-img" alt="Siloam">
                <div class="card-body text-center">
                    <h4 class="card-title">Ruth</h4>
                    <p class="card-text">Dean of students</p>
                    <a href="#" class="btn btn-primary"><i class="fas fa-user-graduate me-2"></i>See Profile</a>
                </div>
            </div>
        </div>
                <!-- Card 6 -->
         <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('assets/images/OM.jpg') }}" class="rounded-circle mx-auto mt-2 profile-img" alt="Siloam">
                <div class="card-body text-center">
                    <h4 class="card-title">Rena</h4>
                    <p class="card-text">Operations Manager</p>
                    <a href="#" class="btn btn-primary"><i class="fas fa-user-graduate me-2"></i>See Profile</a>
                </div>
            </div>
        </div>
        <!-- Card 7 -->
         <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('assets/images/Lovenda.jpg') }}" class="rounded-circle mx-auto mt-2 profile-img" alt="Siloam">
                <div class="card-body text-center">
                    <h4 class="card-title">Faith</h4>
                    <p class="card-text">Finance Officer</p>
                    <a href="#" class="btn btn-primary"><i class="fas fa-user-graduate me-2"></i>See Profile</a>
                </div>
            </div>
        </div>
        </div>
        </div>
  <div><h3 class="text-center text-uppercase text-primary">Staff</h3></div>
        <span style="display:block; width:60px; height:2px; background:#fa0000; margin:5px auto 0;"></span>
<div class="container my-5">
    <div class="row g-4 justify-content-center">
        <!-- Card 8 -->
         <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('assets/images/Mercy.jpg') }}" class="rounded-circle mx-auto mt-2 profile-img" alt="Siloam">
                <div class="card-body text-center">
                    <h4 class="card-title">Mercy</h4>
                    <p class="card-text">Chaplain</p>
                    <a href="#" class="btn btn-primary"><i class="fas fa-user-graduate me-2"></i>See Profile</a>
                </div>
            </div>
        </div>
        <!-- Card 9 -->
         <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('assets/images/PPT.jpg') }}" class="rounded-circle mx-auto mt-2 profile-img" alt="Siloam">
                <div class="card-body text-center">
                    <h4 class="card-title">Purity</h4>
                    <p class="card-text">H.O.D Perioperative Theatre Technology</p>
                    <a href="#" class="btn btn-primary"><i class="fas fa-user-graduate me-2"></i>See Profile</a>
                </div>
            </div>
        </div>
        <!-- Card 10-->
         <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('assets/images/Doreen.jpg') }}" class="rounded-circle mx-auto mt-2 profile-img" alt="Siloam">
                <div class="card-body text-center">
                    <h4 class="card-title">Doreen</h4>
                    <p class="card-text">H.O.D Orthopedics & Trauma Medicine</p>
                    <a href="#" class="btn btn-primary"><i class="fas fa-user-graduate me-2"></i>See Profile</a>
                </div>
            </div>
        </div>
        <!-- Card 6 -->
         <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('assets/images/Magdalene.jpg') }}" class="rounded-circle mx-auto mt-2 profile-img" alt="Siloam">
                <div class="card-body text-center">
                    <h4 class="card-title">Magdalene</h4>
                    <p class="card-text">H.O.D Cerified Nursing Assistant</p>
                    <a href="#" class="btn btn-primary"><i class="fas fa-user-graduate me-2"></i>See Profile</a>
                </div>
            </div>
        </div>
        <!-- Card 6 -->
         <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('assets/img/lab.jpg') }}" class="rounded-circle mx-auto mt-2 profile-img" alt="Siloam">
                <div class="card-body text-center">
                    <h4 class="card-title">Lovenda</h4>
                    <p class="card-text">School Nurse</p>
                    <a href="#" class="btn btn-primary"><i class="fas fa-user-graduate me-2"></i>See Profile</a>
                </div>
            </div>
        </div>
        <!-- Card 6 -->
         <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('assets/images/Rency.jpg') }}" class="rounded-circle mx-auto mt-2 profile-img" alt="Siloam">
                <div class="card-body text-center">
                    <h4 class="card-title">Rency</h4>
                    <p class="card-text">Tutor</p>
                    <a href="#" class="btn btn-primary"><i class="fas fa-user-graduate me-2"></i>See Profile</a>
                </div>
            </div>
        </div>
        <!-- Card 6 -->
         <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('assets/images/Joan.jpg') }}" class="rounded-circle mx-auto mt-2 profile-img" alt="Siloam">
                <div class="card-body text-center">
                    <h4 class="card-title">Joan</h4>
                    <p class="card-text">Librarian</p>
                    <a href="#" class="btn btn-primary"><i class="fas fa-user-graduate me-2"></i>See Profile</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection