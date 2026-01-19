@extends('partials.layouts')
@section('title', 'Siloam-Team')

<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
<div class="position-relative">
    <img src="{{ asset('assets/img/29.jpg') }}" class="img-fluid w-100" style="height:400px; object-fit:cover;"
        alt="">
    <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark" style="opacity: 0.75;"></div>
    <div class="position-absolute top-25 bottom-0 start-0 ps-5 translate-middle-y text-white">
        <h1 class="hero-title fw-bold  text-uppercase">Our Team</h1>
    </div>

</div>
@section('content')
    <div>
        <h3 class="text-center text-uppercase text-primary">The Board</h3>
    </div>
    <span style="display:block; width:60px; height:2px; background:#fa0000; margin:5px auto 0;"></span>
    <div class="container my-5">
        <div class="row g-4 justify-content-center">

            <!-- Card 1 -->
            <div class="col-md-5">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('assets/images/Cha.jpg') }}" class="card-img-top" alt="Siloam">
                    <div class="card-body text-center">
                        <h4 class="card-title">Hon. Frankline Bett</h4>
                        <p class="card-text">Chairman</p>
                        <a href="#" class="btn btn-primary"><i class="fas fa-user-graduate me-2"></i>See Profile</a>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-5">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('assets/images/Dir.jpg') }}" class="card-img-top" alt="Siloam">
                    <div class="card-body text-center">
                        <h4 class="card-title">Miss Cheruto</h4>
                        <p class="card-text">Director</p>
                        <a href="#" class="btn btn-primary"><i class="fas fa-user-graduate me-2"></i>See Profile</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-4">
        <h3 class="text-center text-uppercase text-primary">The Executive Management</h3>
    </div>
    <span style="display:block; width:150px; height:2px; background:#fa0000; margin:5px auto 0;"></span>
    <div class="container my-5">
        <div class="row g-4 justify-content-center">
            <!-- Card 3 -->
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('assets/images/Prin.jpg') }}" class="rounded-circle mx-auto mt-2 profile-img"
                        alt="Siloam">

                    <div class="card-body text-center">
                        <h4 class="card-title">Bernadette Sang</h4>
                        <p class="card-text">Principal</p>
                        <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal"
                            data-bs-target="#profilePrincipal">
                            <i class="fas fa-user-graduate me-2"></i>See Profile
                        </button>
                        <div class="modal fade" id="profilePrincipal" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered modal-md">
                                <div class="modal-content p-3 text-center">

                                    <button type="button" class="btn-close position-absolute top-0 end-0 m-2"
                                        data-bs-dismiss="modal"></button>

                                    <h6 class="fw-bold mb-1">Bernadette Sang</h6>
                                    <p class="small text-muted mb-1">Principal</p>
                                    <p class="small mb-0">
                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                        doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                        veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card 4 -->
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('assets/images/Reg.jpg') }}"
                        class="card-img-top rounded-circle mx-auto mt-2 profile-img" alt="Siloam">
                    <div class="card-body text-center">
                        <h4 class="card-title">Mr. Vincent</h4>
                        <p class="card-text">Academics Registar</p>
                        <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal"
                            data-bs-target="#profileRegistrar">
                            <i class="fas fa-user-graduate me-2"></i>See Profile
                        </button>
                        <div class="modal fade" id="profileRegistrar" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered modal-md">
                                <div class="modal-content p-3 text-center">

                                    <button type="button" class="btn-close position-absolute top-0 end-0 m-2"
                                        data-bs-dismiss="modal"></button>

                                    <h6 class="fw-bold mb-1">Mr. Vincent</h6>
                                    <p class="small text-muted mb-1">Academic Registrar</p>
                                    <p class="small mb-0">
                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                        doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                        veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card 5 -->
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('assets/images/Dean.jpg') }}" class="rounded-circle mx-auto mt-2 profile-img"
                        alt="Siloam">
                    <div class="card-body text-center">
                        <h4 class="card-title">Ruth Orina</h4>
                        <p class="card-text">Dean of students</p>
                        <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal"
                            data-bs-target="#profileDean">
                            <i class="fas fa-user-graduate me-2"></i>See Profile
                        </button>
                        <div class="modal fade" id="profileDean" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered modal-md">
                                <div class="modal-content p-3 text-center">

                                    <button type="button" class="btn-close position-absolute top-0 end-0 m-2"
                                        data-bs-dismiss="modal"></button>

                                    <h6 class="fw-bold mb-1">Ruth Orina</h6>
                                    <p class="small text-muted mb-1">Dean of Students</p>
                                    <p class="small mb-0">
                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                        doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                        veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card 6 -->
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('assets/images/rena.jpeg') }}" class="rounded-circle mx-auto mt-2 profile-img"
                        alt="Siloam">
                    <div class="card-body text-center">
                        <h4 class="card-title">Renalda Riaga</h4>
                        <p class="card-text">Operations Manager</p>
                        <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal"
                            data-bs-target="#profileRenalda">
                            <i class="fas fa-user-graduate me-2"></i>See Profile
                        </button>
                        <div class="modal fade" id="profileRenalda" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered modal-md">
                                <div class="modal-content p-3 text-center">

                                    <button type="button" class="btn-close position-absolute top-0 end-0 m-2"
                                        data-bs-dismiss="modal"></button>

                                    <h6 class="fw-bold mb-1">Renalda Riaga</h6>
                                    <p class="small text-muted mb-1">Operations Manager</p>
                                    <p class="small mb-0">
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
                                        qui officia deserunt mollit anim id est laborum.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card 7 -->
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('assets/images/fai.jpeg') }}" class="rounded-circle mx-auto mt-2 profile-img"
                        alt="Siloam">
                    <div class="card-body text-center">
                        <h4 class="card-title">Faith Chepkorir</h4>
                        <p class="card-text">Finance Officer</p>
                        <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal"
                            data-bs-target="#profileFaith">
                            <i class="fas fa-user-graduate me-2"></i>See Profile
                        </button>
                        <div class="modal fade" id="profileFaith" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered modal-md">
                                <div class="modal-content p-3 text-center">

                                    <button type="button" class="btn-close position-absolute top-0 end-0 m-2"
                                        data-bs-dismiss="modal"></button>

                                    <h6 class="fw-bold mb-1">Faith Chepkorir</h6>
                                    <p class="small text-muted mb-1">Finance Officer</p>
                                    <p class="small mb-0">
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
                                        qui officia deserunt mollit anim id est laborum.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <h3 class="text-center text-uppercase text-primary">Academic Team</h3>
    </div>
    <span style="display:block; width:100px; height:2px; background:#fa0000; margin:5px auto 0;"></span>
    <div class="container my-5">
        <div class="row g-4 justify-content-center">
            <!-- Card 8 -->
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('assets/images/Mercy.jpg') }}" class="rounded-circle mx-auto mt-2 profile-img"
                        alt="Siloam">
                    <div class="card-body text-center">
                        <h4 class="card-title">Mercy Kitur</h4>
                        <p class="card-text">School Chaplain & Tutor</p>
                        <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal"
                            data-bs-target="#profileMercy">
                            <i class="fas fa-user-graduate me-2"></i>See Profile
                        </button>
                        <div class="modal fade" id="profileMercy" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered modal-md">
                                <div class="modal-content p-3 text-center">

                                    <button type="button" class="btn-close position-absolute top-0 end-0 m-2"
                                        data-bs-dismiss="modal"></button>

                                    <h6 class="fw-bold mb-1">Mercy Kitur</h6>
                                    <p class="small text-muted mb-1">School Chaplain & Tutor</p>
                                    <p class="small mb-0">
                                        I am a Tutor and Chaplain at Siloam, supporting students’ academic success and
                                        spiritual growth. I provide guidance, mentorship, and pastoral care, helping
                                        students build confidence, integrity, and resilience. My goal is to nurture the
                                        whole student—academically, morally, and spiritually—preparing them to face life’s
                                        challenges with faith and purpose.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card 9 -->
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('assets/images/PPT.jpg') }}" class="rounded-circle mx-auto mt-2 profile-img"
                        alt="Siloam">
                    <div class="card-body text-center">
                        <h4 class="card-title">Purity Ngeno</h4>
                        <p class="card-text">H.O.D Perioperative Theatre Technology</p>
                        <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal"
                            data-bs-target="#profilePurity">
                            <i class="fas fa-user-graduate me-2"></i>See Profile
                        </button>
                        <div class="modal fade" id="profilePurity" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered modal-md">
                                <div class="modal-content p-3 text-center">

                                    <button type="button" class="btn-close position-absolute top-0 end-0 m-2"
                                        data-bs-dismiss="modal"></button>

                                    <h6 class="fw-bold mb-1">Purity Ngeno</h6>
                                    <p class="small text-muted mb-1">H.O.D Perioperative Theatre Technology</p>
                                    <p class="small mb-0">
                                        As H.O.D for Perioperative Theatre Technology at Siloam Hospital College of Health
                                        Sciences, I lead the training of students to become skilled, professional, and
                                        compassionate theatre technologists. I oversee curriculum delivery, clinical skills
                                        training, and mentorship, while providing career guidance and psychological support.
                                        I work closely with the school registrar and clinical instructors to coordinate
                                        placements and academic progression. I am committed to evidence-based practice,
                                        professional development, and excellence in perioperative education, and I highly
                                        recommend Siloam Hospital College as a top institution for health sciences training.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card 10-->
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('assets/images/Doreen.jpg') }}" class="rounded-circle mx-auto mt-2 profile-img"
                        alt="Siloam">
                    <div class="card-body text-center">
                        <h4 class="card-title">Doreen Mageto</h4>
                        <p class="card-text">H.O.D Orthopedics & Trauma Medicine</p>
                        <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal"
                            data-bs-target="#profileDoreen">
                            <i class="fas fa-user-graduate me-2"></i>See Profile
                        </button>
                        <div class="modal fade" id="profileDoreen" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered modal-md">
                                <div class="modal-content p-3 text-center">

                                    <button type="button" class="btn-close position-absolute top-0 end-0 m-2"
                                        data-bs-dismiss="modal"></button>

                                    <h6 class="fw-bold mb-1">Doreen Mageto</h6>
                                    <p class="small text-muted mb-1">H.O.D Orthopedic &Trauma Medicine</p>
                                    <p class="small mb-0">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card 6 -->
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('assets/images/Magdalene.jpg') }}" class="rounded-circle mx-auto mt-2 profile-img"
                        alt="Siloam">
                    <div class="card-body text-center">
                        <h4 class="card-title">Magdalene Jerop</h4>
                        <p class="card-text">H.O.D Cerified Nursing Assistant</p>
                        <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal"
                            data-bs-target="#profile">
                            <i class="fas fa-user-graduate me-2"></i>See Profile
                        </button>
                        <div class="modal fade" id="profile" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered modal-md">
                                <div class="modal-content p-3 text-center">

                                    <button type="button" class="btn-close position-absolute top-0 end-0 m-2"
                                        data-bs-dismiss="modal"></button>

                                    <h6 class="fw-bold mb-1">Magdalene Jerop</h6>
                                    <p class="small text-muted mb-1">H.O.D Cerified Nursing Assistant</p>
                                    <p class="small mb-0">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card 6 -->
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('assets/img/lab.jpg') }}" class="rounded-circle mx-auto mt-2 profile-img"
                        alt="Siloam">
                    <div class="card-body text-center">
                        <h4 class="card-title">Lovenda Cherono</h4>
                        <p class="card-text">School Nurse</p>
                        <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal"
                            data-bs-target="#profileLovenda">
                            <i class="fas fa-user-graduate me-2"></i>See Profile
                        </button>
                        <div class="modal fade" id="profileLovenda" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered modal-md">
                                <div class="modal-content p-3 text-center">

                                    <button type="button" class="btn-close position-absolute top-0 end-0 m-2"
                                        data-bs-dismiss="modal"></button>

                                    <h6 class="fw-bold mb-1">Lovenda Cherono</h6>
                                    <p class="small text-muted mb-1">Trainer & Resident Clinical Officer</p>
                                    <p class="small mb-0">
                                        Trainer and Resident Clinical Officer at Siloam Hospital College of Health Sciences,
                                        I integrate comprehensive patient care with clinical education and mentorship.
                                        Guided by the institution’s mission to empower students with innovative healthcare
                                        education, I am committed to developing expertise, compassion, and leadership among
                                        trainees, while ensuring excellence and ethical practice in clinical service. I
                                        deliver structured classroom lectures, facilitate interactive discussions, conduct
                                        case-based learning sessions and supervise student projects and assignments to
                                        reinforce knowledge. I contribute to curriculum planning and quality improvement
                                        initiatives. My practice is grounded in the College’s core values of excellence,
                                        integrity, compassion, collaboration, innovation and lifelong learning. I am
                                        dedicated to nurturing competent, ethical and compassionate healthcare professionals
                                        while advancing the College’s vision of preparing world-class practitioners who
                                        transform healthcare locally and globally.
                                    </p>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Card 6 -->
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('assets/images/Rency.jpg') }}" class="rounded-circle mx-auto mt-2 profile-img"
                        alt="Siloam">
                    <div class="card-body text-center">
                        <h4 class="card-title">Rency Cherono</h4>
                        <p class="card-text">Tutor</p>
                        <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal"
                            data-bs-target="#profileRency">
                            <i class="fas fa-user-graduate me-2"></i>See Profile
                        </button>
                        <div class="modal fade" id="profileRency" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered modal-md">
                                <div class="modal-content p-3 text-center">

                                    <button type="button" class="btn-close position-absolute top-0 end-0 m-2"
                                        data-bs-dismiss="modal"></button>

                                    <h6 class="fw-bold mb-1">Rency Cherono</h6>
                                    <p class="small text-muted mb-1">Tutor</p>
                                    <p class="small mb-0">
                                        Dedicated tutor with experience in healthcare education and student mentorship. I
                                        specialize in bridging the gap between classroom instruction and clinical practice,
                                        I draw upon
                                        my direct healthcare experience to offer students relevant, real-world context. I
                                        consistently highlight the significance of therapeutic communication, patient
                                        advocacy, and precise attention to detail throughout my teaching. This applied
                                        approach prepares students not only for academic assessments but also equips them to
                                        deliver compassionate, evidence-based care across varied healthcare environments.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card 6 -->
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('assets/images/Joan.jpg') }}" class="rounded-circle mx-auto mt-2 profile-img"
                        alt="Siloam">
                    <div class="card-body text-center">
                        <h4 class="card-title">Joan Cheptoo</h4>
                        <p class="card-text">Librarian</p>
                        <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal"
                            data-bs-target="#profileJoan">
                            <i class="fas fa-user-graduate me-2"></i>See Profile
                        </button>
                        <div class="modal fade" id="profileJoan" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered modal-md">
                                <div class="modal-content p-3 text-center">

                                    <button type="button" class="btn-close position-absolute top-0 end-0 m-2"
                                        data-bs-dismiss="modal"></button>

                                    <h6 class="fw-bold mb-1">Joan Cheptoo</h6>
                                    <p class="small text-muted mb-1">Librarian</p>
                                    <p class="small mb-0">
                                        I am a dedicated librarian at Siloam College, committed to supporting
                                        teaching, learning, and research within the academic community. My role involves
                                        organizing and managing library resources to ensure easy access to accurate and
                                        relevant information for students and staff. I assist users in developing research
                                        and information literacy skills, guiding them in the effective use of library
                                        materials and online databases. I also work closely with faculty to support
                                        curriculum needs and encourage a strong reading culture across the college. Through
                                        user education, reference services, and collection development, I strive to create a
                                        welcoming and supportive learning environment. As a librarian, I value continuous
                                        learning and professional growth, and I am passionate about helping students become
                                        independent, confident information seekers. My goal is to ensure that the Siloam
                                        College Library remains a vital academic resource that contributes meaningfully to
                                        student success and institutional excellence.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
