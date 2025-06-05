@extends('layouts.app')

@section('title', 'Portfolio - Harsh Patil')

@section('content')
<div class="container py-5" style="margin-top: 80px;">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="text-center mb-5">
                <h1 class="display-4 mb-3">My Portfolio</h1>
                <p class="lead text-muted">A showcase of my recent projects and accomplishments</p>
            </div>
        </div>
    </div>
    
    <div class="row">
        @foreach($projects as $project)
        <div class="col-lg-12 mb-5">
            <div class="card shadow-lg border-0 project-card">
                <div class="row g-0">
                    <div class="col-md-5">
                        <div class="project-image-container">
                            <img src="{{ asset($project['image']) }}" class="img-fluid h-100 w-100 object-cover" alt="{{ $project['title'] }}" style="object-fit: cover; min-height: 300px;">
                            <div class="project-overlay">
                                <div class="overlay-content">
                                    <a href="{{ $project['demo'] }}" target="_blank" class="btn btn-light btn-sm me-2">
                                        <i class="fas fa-external-link-alt me-1"></i>Live Demo
                                    </a>
                                    <a href="{{ $project['github'] }}" target="_blank" class="btn btn-dark btn-sm">
                                        <i class="fab fa-github me-1"></i>GitHub
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="card-body p-4">
                            <div class="d-flex justify-content-between align-items-start mb-3">
                                <h3 class="card-title text-primary">{{ $project['title'] }}</h3>
                                <span class="badge bg-secondary">Project {{ $project['id'] }}</span>
                            </div>
                            
                            <p class="card-text mb-4">{{ $project['description'] }}</p>
                            
                            <div class="mb-4">
                                <h6 class="text-muted mb-2">Technologies Used:</h6>
                                <div class="d-flex flex-wrap gap-2">
                                    @foreach($project['technologies'] as $tech)
                                    <span class="badge bg-primary rounded-pill">{{ $tech }}</span>
                                    @endforeach
                                </div>
                            </div>
                            
                            <div class="mb-4">
                                <h6 class="text-muted mb-2">Key Features:</h6>
                                <ul class="list-unstyled">
                                    @foreach($project['features'] as $feature)
                                    <li class="mb-1">
                                        <i class="fas fa-check text-success me-2"></i>{{ $feature }}
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            
                            <div class="d-flex gap-2">
                                <a href="{{ $project['demo'] }}" target="_blank" class="btn btn-primary">
                                    <i class="fas fa-external-link-alt me-2"></i>View Live
                                </a>
                                <a href="{{ $project['github'] }}" target="_blank" class="btn btn-outline-dark">
                                    <i class="fab fa-github me-2"></i>Source Code
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    
    <div class="row mt-5">
        <div class="col-12">
            <div class="card bg-light border-0">
                <div class="card-body text-center py-5">
                    <h3 class="mb-3">More Projects Coming Soon!</h3>
                    <p class="text-muted mb-4">
                        I'm constantly working on new and exciting projects. 
                        Check back regularly to see my latest work, or follow me on GitHub for real-time updates.
                    </p>
                    <div class="d-flex justify-content-center gap-3">
                        <a href="https://github.com/harshpatil-coder" target="_blank" class="btn btn-dark">
                            <i class="fab fa-github me-2"></i>Follow on GitHub
                        </a>
                        <a href="{{ route('contact') }}" class="btn btn-primary">
                            <i class="fas fa-envelope me-2"></i>Discuss a Project
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row mt-5">
        <div class="col-12">
            <div class="text-center">
                <h3 class="mb-4">Project Development Process</h3>
                <div class="row">
                    <div class="col-md-3 mb-4">
                        <div class="process-step">
                            <div class="step-icon bg-primary text-white rounded-circle mx-auto mb-3" style="width: 60px; height: 60px; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-lightbulb fa-lg"></i>
                            </div>
                            <h5>Planning</h5>
                            <p class="text-muted">Requirements analysis and project planning</p>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <div class="process-step">
                            <div class="step-icon bg-success text-white rounded-circle mx-auto mb-3" style="width: 60px; height: 60px; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-pencil-ruler fa-lg"></i>
                            </div>
                            <h5>Design</h5>
                            <p class="text-muted">UI/UX design and system architecture</p>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <div class="process-step">
                            <div class="step-icon bg-warning text-white rounded-circle mx-auto mb-3" style="width: 60px; height: 60px; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-code fa-lg"></i>
                            </div>
                            <h5>Development</h5>
                            <p class="text-muted">Coding and implementation</p>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <div class="process-step">
                            <div class="step-icon bg-info text-white rounded-circle mx-auto mb-3" style="width: 60px; height: 60px; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-rocket fa-lg"></i>
                            </div>
                            <h5>Deployment</h5>
                            <p class="text-muted">Testing and launch</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    .project-card {
        transition: all 0.3s ease;
        overflow: hidden;
    }
    
    .project-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(0,0,0,0.1) !important;
    }
    
    .project-image-container {
        position: relative;
        overflow: hidden;
    }
    
    .project-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0,0,0,0.7);
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: opacity 0.3s ease;
    }
    
    .project-image-container:hover .project-overlay {
        opacity: 1;
    }
    
    .overlay-content {
        text-align: center;
    }
    
    .process-step {
        transition: all 0.3s ease;
    }
    
    .process-step:hover {
        transform: translateY(-5px);
    }
    
    .process-step:hover .step-icon {
        transform: scale(1.1);
    }
    
    .step-icon {
        transition: transform 0.3s ease;
    }
    
    .badge {
        font-size: 0.75rem;
    }
    
    .object-cover {
        object-fit: cover;
    }
</style>
@endpush
