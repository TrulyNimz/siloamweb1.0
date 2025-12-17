<div class="container mt-5">
    <div class="row justify-content-center">

        <h2 class="text-center mb-3">Have anything to ask?</h2>
        <h3 class="text-center text-muted mb-4">Email us below.</h3>

        <div class="col-md-11 column">
            <div class="card shadow border-info bg-light">
                <div class="card-body">

                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('contact.send') }}">
                        @csrf

                        <!-- Name -->
                        <div class="mb-3">
                            <label class="form-label">Your Name</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>

                        <!-- Email -->
                        <div class="mb-3">
                            <label class="form-label">Your Email</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>

                        <!-- Subject Dropdown -->
                        <div class="mb-3">
                            <label class="form-label">Subject</label>
                            <select name="subject" id="subject" class="form-select" required>
                                <option value="" selected disabled>-- Select Subject --</option>
                                <option value="Admissions Inquiry">Admissions Inquiry</option>
                                <option value="Course Information">Course Information</option>
                                <option value="Application Support">Application Support</option>
                                <option value="Fees & Payments">Fees & Payments</option>
                                <option value="Scholarships">Scholarships</option>
                                <option value="General Inquiry">General Inquiry</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
          <div class="mb-3 d-none" id="otherSubjectBox">
                    <label class="form-label">Specify Subject</label>
                    <input type="text" name="other_subject" class="form-control">
         </div>

                        <!-- Message -->
                        <div class="mb-3">
                            <label class="form-label">Your Message</label>
                            <textarea name="message" rows="4" class="form-control" required></textarea>
                        </div>

                        <!-- Submit -->
                        <button type="submit" class="btn btn-primary w-100">
                            Send Message
                        </button>

                    </form>
                </div>
            </div>
        </div>

    </div>
    <script>
    document.getElementById('subject').addEventListener('change', function () {
        const otherBox = document.getElementById('otherSubjectBox');
        otherBox.classList.toggle('d-none', this.value !== 'Other');
    });
</script>
</div>


