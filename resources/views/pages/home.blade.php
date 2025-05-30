@extends('layouts.app')

@section('title', 'Home - Bhea Bergonia Portfolio')

@section('content')
<div class="hero-section bg-primary text-white">
    <div class="container">
        <div class="row min-vh-100 align-items-center">
            <div class="col-lg-6">
                <h1 class="display-4 fw-bold mb-4">
                    Hi there! I'm <span class="text-warning">Bhea Bergonia</span>
                </h1>
                <p class="lead mb-4">
                    Welcome to my profile/portfolio! I'm currently a Bachelor of Science in Information Technology (BSIT) student. 
                    I'm continuously learning and developing my skills in the field of IT.
                </p>
                <p class="mb-4">
                    I also love designing and enjoy bringing creative ideas to life. From digital graphics to web interfaces, 
                    I find joy in creating visually appealing and functional designs that make a difference.
                </p>
                <p class="mb-4 text-warning fw-bold">
                    Thanks for stopping by!
                </p>
                <div class="d-flex gap-3">
                    <a href="{{ route('portfolio') }}" class="btn btn-warning btn-lg">
                        <i class="fas fa-briefcase me-2"></i>View My Work
                    </a>
                    <a href="{{ route('contact') }}" class="btn btn-outline-light btn-lg">
                        <i class="fas fa-envelope me-2"></i>Get In Touch
                    </a>
                </div>
            </div>
            <div class="col-lg-6 text-center">
                <div class="profile-image-container">
                    <img src="{{ asset('images/profile.jpg') }}" alt="Bhea Bergonia" class="img-fluid rounded-circle shadow-lg" style="max-width: 300px; border: 5px solid #ffc107;">
                </div>
            </div>
        </div>
    </div>
</div>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="mb-4">What I'm Learning & Creating</h2>
                <p class="lead text-muted">
                    As a BSIT student, I'm passionate about technology and design
                </p>
            </div>
        </div>
        
        <div class="row mt-5">
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body text-center">
                        <div class="icon-circle bg-primary text-white rounded-circle mx-auto mb-3" style="width: 60px; height: 60px; display: flex; align-items: center; justify-content: center;">
                            <i class="fas fa-graduation-cap fa-lg"></i>
                        </div>
                        <h5 class="card-title">IT Student</h5>
                        <p class="card-text">
                            Currently in my 3rd year of BSIT at Pangasinan State University, learning programming, 
                            systems analysis, and emerging technologies.
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body text-center">
                        <div class="icon-circle bg-success text-white rounded-circle mx-auto mb-3" style="width: 60px; height: 60px; display: flex; align-items: center; justify-content: center;">
                            <i class="fas fa-palette fa-lg"></i>
                        </div>
                        <h5 class="card-title">Creative Designer</h5>
                        <p class="card-text">
                            Passionate about graphic design using tools like Canva, creating visually appealing designs 
                            for various projects and personal interests.
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body text-center">
                        <div class="icon-circle bg-info text-white rounded-circle mx-auto mb-3" style="width: 60px; height: 60px; display: flex; align-items: center; justify-content: center;">
                            <i class="fas fa-utensils fa-lg"></i>
                        </div>
                        <h5 class="card-title">Culinary Background</h5>
                        <p class="card-text">
                            Completed Cookery strand in high school, bringing attention to detail and creativity 
                            from the kitchen to the digital world.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-light py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h2 class="mb-4">Ready to Learn & Collaborate?</h2>
                <p class="lead">
                    I'm always excited to learn new things, work on creative projects, and connect with fellow 
                    students and professionals in the field.
                </p>
                <a href="{{ route('contact') }}" class="btn btn-primary btn-lg">
                    <i class="fas fa-handshake me-2"></i>Let's Connect
                </a>
            </div>
            <div class="col-lg-6">
                <div class="row text-center">
                    <div class="col-6">
                        <div class="stat-item">
                            <h3 class="display-4 text-primary fw-bold">3rd</h3>
                            <p class="text-muted">Year BSIT Student</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="stat-item">
                            <h3 class="display-4 text-success fw-bold">21</h3>
                            <p class="text-muted">Years Old</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('styles')
<style>
    .hero-section {
        padding-top: 80px;
    }
    
    .profile-image-container {
        animation: float 3s ease-in-out infinite;
    }
    
    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-10px); }
    }
    
    .card:hover {
        transform: translateY(-5px);
        transition: all 0.3s ease;
    }
    
    .social-links a:hover {
        color: #ffc107 !important;
        transition: color 0.3s ease;
    }
</style>
@endpush
