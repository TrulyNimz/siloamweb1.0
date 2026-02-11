@extends('partials.layouts')

@section('title', 'Mission, Vision and Core Values - SHCHS')

@section('content')
<div class="class-name text-start mt-2">
    <h1 class="class-name mb-2 mt-5 text-capitalize text-center">Welcome to Siloam College of Health Sciences</h1>
    <span style="display:block; width:200px; height:2px; background:#ff0101; margin:5px auto 0;"></span>

    <div class="container my-4">
        <div class="row g-0 mb-4 my-4">
            <div class="col-md-4">
                <p class="text-uppercase text-center fs-1">Our <br> Mandate</p>
                <span style="display:block; width:100px; height:2px; background:#ff0101; margin:5px auto 0;"></span>
            </div>
            <div class="col-md-8">
                <p class="mb-4 mt-4 ms-4 text-start fs-5 text-muted">
                    Siloam College of Health Sciences operates with the explicit mandate to prepare world-class
                    healthcare professionals who will transform healthcare systems, both locally and globally.
                    We fulfill this mandate by dedicating our resources to delivering innovative education and
                    training programs, cultivating compassionate leaders ready to drive positive community health outcomes.
                </p>
            </div>
        </div>
    </div>

    <div class="container my-5 p-0">
        <div class="card border-0 p-4 text-center">
            <h2>Campus Life</h2>
            <p>Campus life offers students a vibrant and enriching experience beyond the classroom. It provides
                opportunities to engage in academic clubs, sports, cultural activities, and social events, helping
                students develop leadership, teamwork, and communication skills. Campus life also fosters a sense of
                community and belonging, allowing students to build friendships, network with peers, and explore new
                interests. Through a balance of learning and extracurricular activities, students gain practical
                experiences that prepare them for personal growth and future careers.</p>
        </div>

        <div class="container my-5 p-0">
            <div class="row g-0">
                <div class="col-md-6 p-4">
                    <h2>Graduation Ceremony</h2>
                    <p>The graduation ceremony at <strong class="text-capitalize">Siloam Hospital College of Health
                            Sciences</strong> is a joyous and memorable event that celebrates the accomplishments of
                        students who have successfully completed their studies. It is a formal occasion where graduates
                        are recognized for their hard work, dedication, and perseverance throughout their academic journey.
                        Families, friends, and faculty gather to honor the achievements of the graduates, witness the
                        awarding of certificates or diplomas, and share in the pride and excitement of this significant
                        milestone. The ceremony not only marks the end of an educational chapter but also inspires
                        graduates as they embark on new opportunities and future endeavors.</p>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('assets/img/GRADU.jpg') }}" class="w-100" style="height: 100%; object-fit: cover;"
                        alt="Graduation Ceremony" loading="lazy">
                </div>
            </div>
        </div>

        <div class="container my-5 p-0">
            <div class="row g-0">
                <div class="col-md-6">
                    <img src="{{ asset('assets/img/sss.jpg') }}" class="w-100" style="height: 100%; object-fit: cover;"
                        alt="Student Support Services" loading="lazy">
                </div>
                <div class="col-md-6 p-4">
                    <h2>Student Support</h2>
                    <p>The institution is committed to fostering a supportive and inclusive learning environment by
                        providing comprehensive Student Support Services (SSS) designed to promote the overall well-being,
                        personal development, and academic success of all students. Our dedicated SSS department offers a
                        range of confidential resources and professional assistance, including individualized counseling for
                        personal, career, and academic matters; mental health support; academic advising and tutoring; and
                        assistance with financial aid and accommodation services. The primary goal of these services is to
                        help students navigate challenges, develop essential life skills (such as time management and study
                        habits), and access necessary resources, thereby optimizing their opportunities for personal growth
                        and successful academic progression throughout their time here.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
