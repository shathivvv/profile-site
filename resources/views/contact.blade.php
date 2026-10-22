
@extends('master')

@section('title', 'Contact | My Personal Profile')

@section('content')
<div class="container">

    <div class="text-center mb-5">
        <span class="badge rounded-pill text-bg-light border px-3 py-2 mb-3">
            Get in Touch
        </span>

        <h1 class="display-5 fw-bold">
            Contact <span class="accent">Our Group</span>
        </h1>

        <p class="text-secondary">
            Use the form below to try out the contact form.
        </p>
    </div>

    <div class="row justify-content-center g-4">

        <!-- Contact Information -->
        <div class="col-lg-4">
            <div class="card profile-card h-100 p-4">
                <h4 class="fw-bold mb-4">About This Form</h4>

                <div class="mb-4">
                    <h6 class="accent fw-bold">Group project</h6>
                    <p class="text-secondary mb-0">
                        A profile website made by four students.
                    </p>
                </div>

                <div class="mb-4">
                    <h6 class="accent fw-bold">Form fields</h6>
                    <p class="text-secondary mb-0">
                        Name, email address and message.
                    </p>
                </div>

                <div>
                    <h6 class="accent fw-bold">Demo only</h6>
                    <p class="text-secondary mb-0">
                        This form does not send or save messages.
                    </p>
                </div>
            </div>
        </div>

        <!-- Contact Form -->
        <div class="col-lg-7">
            <div class="card profile-card p-4 p-md-5">
                <h4 class="fw-bold mb-4">Send a Message</h4>

                <form action="#" method="post"
                      onsubmit="event.preventDefault(); document.getElementById('form-status').textContent = 'Thanks for trying the form. This demo does not send or save messages.';">

                    <div class="mb-3">
                        <label for="name" class="form-label fw-semibold">
                            Full Name
                        </label>

                        <input type="text" class="form-control"
                               id="name" name="name"
                               placeholder="Enter your full name"
                               required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label fw-semibold">
                            Email Address
                        </label>

                        <input type="email" class="form-control"
                               id="email" name="email"
                               placeholder="Enter your email address"
                               required>
                    </div>

                    <div class="mb-4">
                        <label for="message" class="form-label fw-semibold">
                            Message
                        </label>

                        <textarea class="form-control"
                                  id="message" name="message"
                                  rows="5"
                                  placeholder="Write your message here..."
                                  required></textarea>
                    </div>

                    <button type="submit"
                            class="btn btn-profile btn-lg w-100">
                        Send Message
                    </button>

                    <p id="form-status" class="text-secondary small mt-3 mb-0 text-center" role="status" aria-live="polite">
                        Demo only. Messages are not emailed or stored.
                    </p>
                </form>
            </div>
        </div>

    </div>
</div>
@endsection
