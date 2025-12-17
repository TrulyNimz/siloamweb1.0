 <link rel="stylesheet" href="{{ asset('assets/main.css') }}">
 <div class="text-monospace pt-3 fw-bold fs-4 fade-up">
     <h1 class=" text-center text-primary mb-2">
            About Us
        </h1>
        <span style="display:block; width:60px; height:2px; background:#0199ff;; margin:5px auto 0;"></span>
        <h4 class="text-secondary text-center fst-italic mb-4 mt-4">
            Shaping Minds, Transforming Lives.
        </h4>
        <p class="lead text-muted mx-auto" style="max-width: 750px;">
            At Siloam Medical, Technical & Commercial Training College, we focus on empowering students 
            through practical learning, industry-aligned programs, and a supportive academic environment. 
            Our goal is to develop skilled professionals ready to thrive in today’s evolving world.
        </p>
    </div>  
   <div class="container class-name my-4 pt-3">
  <div class="row g-4">

    <!-- Vision -->
    <div class="col-md-6 text-center">
      <div class="card dotted-card border-info fade-up">
        <h5 class="mt-3 fs-2">Vision</h5>
        <div class="card-body">
          <p class="fs-6 mb-2">
            To prepare world-class healthcare professionals committed to transforming healthcare locally and everywhere.
          </p>
        </div>
      </div>
    </div>

    <!-- Mission -->
    <div class="col-md-6 text-center">
      <div class="card dotted-card h-100 border-info fade-up">
        <h5 class="mt-3 fs-2">Mission</h5>
        <div class="card-body">
          <p class="fs-6 mb-2 text-start me-3">
            To empower students with innovative healthcare education that develops expertise, compassion, and leadership, preparing them to excel in their professionals and improve lives everywhere.
          </p>
        </div>
      </div>
    </div>

    <!-- Core Values -->
    <div class="row justify-content-center mt-5">
      <div class="col-md-10">
        <div class="card dotted-card h-100 border-info bg-light fade-up">
          <h5 class="mt-4 fs-2 text-center">Core Values</h5>
          <div class="card-body text-start ps-4">
            <ul class="list-style-type: square;">
              <li>Excellence - Striving for the highest standards in education, practice, and patient care.</li>
              <li>Compassion - Fostering empathy, kindness, and patient-centered care.</li>
              <li>Integrity - Upholding honesty, ethics, and professionalism in all actions.</li>
              <li>Innovation - Encouraging creativity and the adoption of new medical advancements.</li>
              <li>Collaboration - Promoting teamwork and partnerships for improved healthcare outcomes.</li>
              <li>Lifelong Learning - Committing to continuous education and professional development.</li>
              <li>Service to humanity - Dedicated to improving lives through quality healthcare education and practice.</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
<script>
document.addEventListener("DOMContentLoaded", () => {
    const observer = new IntersectionObserver((entries, obs) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add("show");
                obs.unobserve(entry.target); // animate once
            }
        });
    }, {
        threshold: 0.25
    });

    document.querySelectorAll(".fade-up").forEach(el => {
        observer.observe(el);
    });
});
</script>
