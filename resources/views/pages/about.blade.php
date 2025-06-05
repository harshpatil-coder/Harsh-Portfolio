@extends('layouts.app')

@section('title', 'About Me - Harsh Patil Portfolio')

@section('content')
<div class="container py-5" style="margin-top: 80px;">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="text-center mb-5">
                <h1 class="display-4 mb-3">About Me</h1>
                <p class="lead text-muted">Getting to know Harsh Patil</p>
            </div>
        </div>
    </div>
    
    <div class="row mb-5">
        <div class="col-lg-4 mb-4">
            <div class="text-center">
                <img src="{{ asset('images/about-profile.jpg') }}" alt="Harsh Patil" class="img-fluid rounded-circle shadow" style="max-width: 250px;">
            </div>
        </div>
        <div class="col-lg-8">
            <h2 class="mb-4">Personal Background</h2>
            <p class="mb-4">
                Hello! I'm {{ $personalInfo['name'] }}, a passionate Website Developer with a Bachelor's degree in Computer Applications (BCA) from Silver Oak University. 
                My journey in tech has been focused on mastering programming languages like JAVA, PHP, and exploring emerging IOT technologies.
            </p>
            <p class="mb-4">
                I specialize in Website Development using PHP Laravel Framework, creating visually appealing and functional web applications. 
                Whether it's building responsive websites, implementing complex backend logic, or working on innovative projects, 
                I approach everything with enthusiasm and attention to detail.
            </p>
            <p class="mb-4">
                My comprehensive education in computer applications has equipped me with strong technical foundations and practical skills 
                that I now apply to create modern, efficient web solutions.
            </p>
            
            <div class="row">
                <div class="col-md-6 mb-3">
                    <h5><i class="fas fa-user text-primary me-2"></i>Full Name</h5>
                    <p class="text-muted">{{ $personalInfo['name'] }}</p>
                </div>
                <div class="col-md-6 mb-3">
                    <h5><i class="fas fa-map-marker-alt text-primary me-2"></i>Address</h5>
                    <p class="text-muted">{{ $personalInfo['address'] }}</p>
                </div>
                <div class="col-md-6 mb-3">
                    <h5><i class="fas fa-birthday-cake text-primary me-2"></i>Birthday</h5>
                    <p class="text-muted">{{ $personalInfo['birthday'] }}</p>
                </div>
                <div class="col-md-6 mb-3">
                    <h5><i class="fas fa-calendar text-primary me-2"></i>Age</h5>
                    <p class="text-muted">{{ $personalInfo['age'] }} years old</p>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row mb-5">
        <div class="col-12">
            <h2 class="mb-4"><i class="fas fa-graduation-cap text-primary me-3"></i>Education</h2>
            <div class="timeline">
                @foreach($education as $edu)
                <div class="card mb-3 shadow-sm">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <span class="badge bg-info mb-2">{{ $edu['level'] }}</span>
                                <h5 class="card-title text-primary">{{ $edu['degree'] }}</h5>
                                <h6 class="card-subtitle mb-2 text-muted">{{ $edu['school'] }}</h6>
                                <p class="card-text">{{ $edu['description'] }}</p>
                            </div>
                            <div class="col-md-4 text-md-end">
                                <span class="badge bg-primary fs-6">{{ $edu['year'] }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    
    <div class="row mb-5">
        <div class="col-12">
            <h2 class="mb-4"><i class="fas fa-heart text-primary me-3"></i>Hobbies & Interests</h2>
            <div class="row">
                @foreach($hobbies as $hobby)
                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="hobby-item p-3 bg-light rounded-3 text-center h-100">
                        <div class="skill-icon mb-2">
                            @switch($hobby)
                                @case('Web Development')
                                    <i class="fas fa-globe fa-2x text-primary"></i>
                                    @break
                                @case('Learning New Technologies')
                                    <i class="fas fa-laptop-code fa-2x text-success"></i>
                                    @break
                                @case('PHP Laravel Development')
                                    <i class="fab fa-laravel fa-2x text-danger"></i>
                                    @break
                                @case('Software Architecture')
                                    <i class="fas fa-layer-group fa-2x text-info"></i>
                                    @break
                                @case('Technical Problem Solving')
                                    <i class="fas fa-puzzle-piece fa-2x text-warning"></i>
                                    @break
                                @case('IoT Projects')
                                    <i class="fas fa-microchip fa-2x text-primary"></i>
                                    @break
                                @default
                                    <i class="fas fa-code fa-2x text-primary"></i>
                            @endswitch
                        </div>
                        <h6 class="mb-0">{{ $hobby }}</h6>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-12">
            <div class="card bg-primary text-white">
                <div class="card-body text-center">
                    <h3 class="mb-3">Let's Connect!</h3>
                    <p class="mb-4">
                        I'm always excited to meet new people, learn from others, and collaborate on interesting projects. 
                        Whether you're a fellow developer, professional, or just someone who shares similar interests, 
                        I'd love to connect!
                    </p>
                    <div class="d-flex justify-content-center gap-3">
                        <a href="{{ route('contact') }}" class="btn btn-warning btn-lg">
                            <i class="fas fa-envelope me-2"></i>Get In Touch
                        </a>
                        <a href="{{ route('portfolio') }}" class="btn btn-outline-light btn-lg">
                            <i class="fas fa-briefcase me-2"></i>View My Work
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    .hobby-item {
        transition: all 0.3s ease;
    }
    
    .hobby-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    }
    
    .timeline .card {
        transition: all 0.3s ease;
    }
    
    .timeline .card:hover {
        transform: translateX(10px);
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    }
</style>
@endpush
