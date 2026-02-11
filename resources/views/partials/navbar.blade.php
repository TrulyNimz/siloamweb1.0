{{-- Announcement Banner with CSS animation (replaces deprecated marquee) --}}
<div class="announcement-bar bg-info text-white fixed-top py-1" style="z-index:1100;">
    <div class="announcement-scroll">
        <span class="announcement-content">
            {{ __('messages.january_intake') }} 🚀 —
            <a href="{{ route('academic.programs') }}" class="btn btn-sm mx-2"
                style="background-color: #4169E1; color: red; font-weight: bold; border-radius: 20px;">
                {{ __('messages.apply_now') }}
            </a>
            — {{ __('messages.limited_slots') }} — {{ __('messages.enroll_today') }}
        </span>
    </div>
</div>

{{-- Main Navigation --}}
<nav id="mainNavbar" class="navbar navbar-expand-lg bg-light shadow-sm fixed-top" style="top: 28px; z-index:1000;">
    <div class="container-fluid">
        {{-- Logo --}}
        <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
            <img src="{{ asset('assets/images/web.png') }}" alt="Siloam College Logo"
                style="height: 55px; object-fit: contain;" loading="eager">
        </a>

        {{-- Mobile Toggle Button --}}
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
            aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        {{-- Navigation Links --}}
        <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                {{-- Home --}}
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link text-uppercase">{{ __('navigation.home') }}</a>
                </li>

                {{-- Admission --}}
                <li class="nav-item">
                    <a href="{{ route('school.admission') }}" class="nav-link text-uppercase">{{ __('navigation.admission') }}</a>
                </li>

                {{-- Academics Dropdown (Mega Menu) --}}
                <li class="nav-item dropdown position-static">
                    <a class="nav-link text-uppercase dropdown-toggle" href="#" id="academicsDropdown"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ __('navigation.academics') }}
                    </a>
                    <div class="dropdown-menu w-100 border-0 shadow-lg py-4" aria-labelledby="academicsDropdown">
                        <div class="container">
                            <div class="row">
                                {{-- Programs column --}}
                                <div class="col-md-3 col-sm-6 mb-3">
                                    <h6 class="fw-bold text-primary">{{ __('navigation.programs') }}</h6>
                                    <ul class="list-unstyled">
                                        <li><a class="dropdown-item py-1" href="{{ route('academic.programs') }}">{{ __('navigation.our_courses') }}</a></li>
                                    </ul>
                                </div>

                                {{-- Departments column --}}
                                <div class="col-md-3 col-sm-6 mb-3">
                                    <h6 class="fw-bold text-primary">{{ __('navigation.departments') }}</h6>
                                    <ul class="list-unstyled">
                                        <li><a class="dropdown-item py-1" href="{{ route('academic.programs') }}">{{ __('navigation.health_sciences') }}</a></li>
                                        <li><a class="dropdown-item py-1" href="{{ route('academic.packages') }}">{{ __('navigation.ict_computer_studies') }}</a></li>
                                        <li><a class="dropdown-item py-1" href="{{ route('academic.pptt') }}">{{ __('navigation.technical_courses') }}</a></li>
                                    </ul>
                                </div>

                                {{-- Related Links column --}}
                                <div class="col-md-3 col-sm-6 mb-3">
                                    <h6 class="fw-bold text-primary">{{ __('navigation.related_links') }}</h6>
                                    <ul class="list-unstyled">
                                        <li>
                                            <a class="dropdown-item py-1" href="{{ asset('assets/Files/TIMETABLE.pdf') }}"
                                                target="_blank" rel="noopener noreferrer">
                                                {{ __('navigation.teaching_timetables') }}
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item py-1" href="{{ asset('assets/Files/ACADEMIC CALENDAR.pdf') }}"
                                                target="_blank" rel="noopener noreferrer">
                                                {{ __('navigation.academic_calendars') }}
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item py-1 text-muted" href="#" aria-disabled="true">
                                                {{ __('navigation.fee_structures') }} ({{ __('navigation.coming_soon') }})
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                {{-- About Us Dropdown --}}
                <li class="nav-item dropdown">
                    <a class="nav-link text-uppercase dropdown-toggle" href="#" id="aboutDropdown"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ __('navigation.about_us') }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="aboutDropdown">
                        <li><a class="dropdown-item py-1" href="{{ route('about') }}">{{ __('navigation.about_us') }}</a></li>
                        <li><a class="dropdown-item py-1" href="{{ route('school.team') }}">{{ __('navigation.our_team') }}</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li class="dropdown-header">{{ __('navigation.student_affairs') }}</li>
                        <li><a class="dropdown-item py-1 ps-4" href="{{ route('school.dean') }}">{{ __('navigation.dean_of_students') }}</a></li>
                        <li><a class="dropdown-item py-1 ps-4" href="{{ route('school.career') }}">{{ __('navigation.career_liaison') }}</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item py-1" href="{{ route('partials.contacts') }}">{{ __('navigation.contact_us') }}</a></li>
                    </ul>
                </li>

                {{-- FAQs --}}
                <li class="nav-item">
                    <a href="{{ route('academic.faqs') }}" class="nav-link text-uppercase">{{ __('navigation.faqs') }}</a>
                </li>
            </ul>

            {{-- Accessibility Controls (Right Side) --}}
            <div class="d-flex align-items-center ms-auto">
                <div class="dropdown">
                    <button class="btn btn-outline-secondary btn-sm dropdown-toggle" type="button"
                        id="accessibilityDropdown" data-bs-toggle="dropdown" aria-expanded="false"
                        title="{{ __('navigation.accessibility_options') }}">
                        <i class="fas fa-universal-access"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="accessibilityDropdown">
                        {{-- Dark Mode Toggle --}}
                        <li>
                            <div class="dropdown-item d-flex justify-content-between align-items-center">
                                <span><i class="fas fa-moon me-2"></i> {{ __('navigation.dark_mode') }}</span>
                                <div class="form-check form-switch mb-0">
                                    <input class="form-check-input" type="checkbox" role="switch"
                                        id="darkModeToggle" onchange="toggleDarkMode()">
                                </div>
                            </div>
                        </li>
                        <li><hr class="dropdown-divider"></li>
                        {{-- Language Switcher --}}
                        <li class="dropdown-header">
                            <i class="fas fa-globe me-1"></i> {{ __('navigation.language') }} / Lugha
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="{{ route('locale.switch', 'en') }}">
                                <span class="me-2">🇬🇧</span> English
                                <i class="fas fa-check ms-auto text-success {{ app()->getLocale() !== 'en' ? 'd-none' : '' }}" id="lang-en-check"></i>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="{{ route('locale.switch', 'sw') }}">
                                <span class="me-2">🇰🇪</span> Kiswahili
                                <i class="fas fa-check ms-auto text-success {{ app()->getLocale() !== 'sw' ? 'd-none' : '' }}" id="lang-sw-check"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
