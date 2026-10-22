
@extends('master')

@section('title', 'Home | My Personal Profile')

@section('content')
<div class="container">
    <div class="row align-items-center g-5 py-4">

        <!-- Introduction -->
        <div class="col-lg-7">
            <span class="badge rounded-pill text-bg-light border mb-3 px-3 py-2">
                Welcome to Our Website
            </span>

            <h1 class="display-4 fw-bold mb-3">
                Meet Our <span class="accent">Group</span>
            </h1>

            <h4 class="text-secondary mb-4">
                Four students working together
            </h4>

            <p class="lead text-secondary mb-4">
                Welcome to our group profile website. Get to know each
                member's background, skills and interests.
            </p>

            <div class="d-flex flex-wrap gap-3">
                <a href="{{ route('about') }}" class="btn btn-profile btn-lg px-4">
                    About Our Group
                </a>

                <a href="{{ route('contact') }}"
                   class="btn btn-outline-secondary btn-lg px-4">
                    Contact Our Group
                </a>
            </div>
        </div>

        <!-- Profile Card -->
        <div class="col-lg-5">
            <div class="card profile-card p-4 text-center">
                <div class="card-body py-3">
                    <h3 class="fw-bold mb-4">Our Group Members</h3>

                    <div class="row g-3">
                        <div class="col-6">
                            <div class="profile-initials profile-initials-small mx-auto mb-2" aria-hidden="true">AQ</div>
                            <p class="member-name fw-semibold mb-0">Ainin Qistina Binti Mohd Aidil</p>
                        </div>
                        <div class="col-6">
                            <div class="profile-initials profile-initials-small mx-auto mb-2" aria-hidden="true">SS</div>
                            <p class="member-name fw-semibold mb-0">Syazwan Bin Suhailan</p>
                        </div>
                        <div class="col-6">
                            <div class="profile-initials profile-initials-small mx-auto mb-2" aria-hidden="true">RS</div>
                            <p class="member-name fw-semibold mb-0">Raaed Eddin Shah Bin Khairuddin Shah</p>
                        </div>
                        <div class="col-6">
                            <div class="profile-initials profile-initials-small mx-auto mb-2" aria-hidden="true">SH</div>
                            <p class="member-name fw-semibold mb-0">Shathivel A/L Hari Rama Krishnan</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Highlights -->
    <div class="row g-4 mt-4">
        <div class="col-md-4">
            <div class="card profile-card h-100 p-3">
                <div class="card-body">
                    <div class="accent fs-2 mb-3">
                        <i class="bi bi-mortarboard"></i>
                    </div>
                    <h5 class="fw-bold">Our Background</h5>
                    <p class="text-secondary mb-0">
                        Learn more about each member's education and background.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card profile-card h-100 p-3">
                <div class="card-body">
                    <div class="accent fs-2 mb-3">
                        <i class="bi bi-code-slash"></i>
                    </div>
                    <h5 class="fw-bold">Our Skills</h5>
                    <p class="text-secondary mb-0">
                        Explore the skills each member is developing.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card profile-card h-100 p-3">
                <div class="card-body">
                    <div class="accent fs-2 mb-3">
                        <i class="bi bi-heart"></i>
                    </div>
                    <h5 class="fw-bold">Our Interests</h5>
                    <p class="text-secondary mb-0">
                        Find out about our hobbies and interests.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
