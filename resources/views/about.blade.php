@extends('master')

@section('title', 'About Our Group | My Personal Profile')

@section('content')
@php
    $members = [
        [
            'name' => 'Ainin Qistina Binti Mohd Aidil',
            'initials' => 'AQ',
            'background' => 'Add a short introduction, course and study year.',
            'skills' => 'Add a few technical or personal skills.',
            'interests' => 'Add your hobbies and interests.',
        ],
        [
            'name' => 'Syazwan Bin Suhailan',
            'initials' => 'SS',
            'background' => 'Add a short introduction, course and study year.',
            'skills' => 'Add a few technical or personal skills.',
            'interests' => 'Add your hobbies and interests.',
        ],
        [
            'name' => 'Raaed Eddin Shah Bin Khairuddin Shah',
            'initials' => 'RS',
            'background' => 'Add a short introduction, course and study year.',
            'skills' => 'Add a few technical or personal skills.',
            'interests' => 'Add your hobbies and interests.',
        ],
        [
            'name' => 'Shathivel A/L Hari Rama Krishnan',
            'initials' => 'SH',
            'background' => 'Add a short introduction, course and study year.',
            'skills' => 'Add a few technical or personal skills.',
            'interests' => 'Add your hobbies and interests.',
        ],
    ];
@endphp

<div class="container">
    <div class="text-center mb-5">
        <span class="badge rounded-pill text-bg-light border px-3 py-2 mb-3">
            Get to Know Us
        </span>

        <h1 class="display-5 fw-bold">
            About <span class="accent">Our Group</span>
        </h1>

        <p class="text-secondary">
            Learn about each member's background, skills and interests.
        </p>
    </div>

    <div class="card profile-card p-4 p-md-5 mb-5">
        <h2 class="h3 fw-bold mb-3">A Little About Our Group</h2>
        <p class="text-secondary mb-0">
            We are a group of four students working together on this website.
            Each profile below has space for its member's own details.
        </p>
    </div>

    <h2 class="h3 fw-bold mb-4">Our Members</h2>

    <div class="row g-4">
        @foreach ($members as $member)
            <div class="col-md-6">
                <div class="card profile-card h-100 p-4">
                    <div class="d-flex align-items-center gap-3 mb-4">
                        <div class="profile-initials profile-initials-small flex-shrink-0" aria-hidden="true">
                            {{ $member['initials'] }}
                        </div>
                        <h3 class="h5 fw-bold mb-0">{{ $member['name'] }}</h3>
                    </div>

                    <div class="mb-3">
                        <h4 class="h6 accent fw-bold mb-1">Background &amp; Education</h4>
                        <p class="text-secondary small mb-0">{{ $member['background'] }}</p>
                    </div>

                    <div class="mb-3">
                        <h4 class="h6 accent fw-bold mb-1">Skills</h4>
                        <p class="text-secondary small mb-0">{{ $member['skills'] }}</p>
                    </div>

                    <div>
                        <h4 class="h6 accent fw-bold mb-1">Hobbies &amp; Interests</h4>
                        <p class="text-secondary small mb-0">{{ $member['interests'] }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
