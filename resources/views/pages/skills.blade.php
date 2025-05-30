@extends('layouts.app')

@section('title', 'Skills - Portfolio Bhergonia')

@section('content')
<div class="container py-5" style="margin-top: 80px;">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="text-center mb-5">
                <h1 class="display-4 mb-3">My Skills</h1>
                <p class="lead text-muted">The tools and technologies I use to bring ideas to life</p>
            </div>
        </div>
    </div>
    
    <div class="row mb-5">
        <div class="col-12">
            <h2 class="mb-4"><i class="fas fa-code text-primary me-3"></i>Technical Skills</h2>
            
            @foreach($technicalSkills as $category => $skills)
            <div class="card mb-4 shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">
                        <i class="fas fa-cog me-2"></i>{{ $category }}
                    </h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        @foreach($skills as $skill)
                        <div class="col-md-4 col-sm-6 mb-3">
                            <div class="skill-item p-3 bg-light rounded-3 text-center">
                                <div class="skill-icon mb-2">
                                    @switch($skill)
                                        @case('PHP')
                                            <i class="fab fa-php fa-2x text-primary"></i>
                                            @break
                                        @case('JavaScript')
                                            <i class="fab fa-js-square fa-2x text-warning"></i>
                                            @break
                                        @case('Python')
                                            <i class="fab fa-python fa-2x text-info"></i>
                                            @break
                                        @case('Laravel')
                                            <i class="fab fa-laravel fa-2x text-danger"></i>
                                            @break
                                        @case('Vue.js')
                                            <i class="fab fa-vuejs fa-2x text-success"></i>
                                            @break
                                        @case('React')
                                            <i class="fab fa-react fa-2x text-info"></i>
                                            @break
                                        @case('Node.js')
                                            <i class="fab fa-node-js fa-2x text-success"></i>
                                            @break
                                        @case('HTML5')
                                            <i class="fab fa-html5 fa-2x text-danger"></i>
                                            @break
                                        @case('CSS3')
                                            <i class="fab fa-css3-alt fa-2x text-primary"></i>
                                            @break
                                        @case('Bootstrap')
                                            <i class="fab fa-bootstrap fa-2x text-primary"></i>
                                            @break
                                        @case('Git')
                                            <i class="fab fa-git-alt fa-2x text-danger"></i>
                                            @break
                                        @case('Docker')
                                            <i class="fab fa-docker fa-2x text-info"></i>
                                            @break
                                        @case('Linux')
                                            <i class="fab fa-linux fa-2x text-dark"></i>
                                            @break
                                        @case('AWS')
                                            <i class="fab fa-aws fa-2x text-warning"></i>
                                            @break
                                        @default
                                            <i class="fas fa-star fa-2x text-warning"></i>
                                    @endswitch
                                </div>
                                <h6 class="mb-0">{{ $skill }}</h6>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    
    <div class="row mb-5">
        <div class="col-12">
            <h2 class="mb-4"><i class="fas fa-users text-primary me-3"></i>Soft Skills</h2>
            <div class="row">
                @foreach($softSkills as $index => $skill)
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="soft-skill-card card h-100 border-0 shadow-sm">
                        <div class="card-body text-center">
                            <div class="skill-number bg-primary text-white rounded-circle mx-auto mb-3" style="width: 50px; height: 50px; display: flex; align-items: center; justify-content: center; font-weight: bold;">
                                {{ $index + 1 }}
                            </div>
                            <h6 class="card-title">{{ $skill }}</h6>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-12">
            <div class="card bg-gradient-primary text-white">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <h3 class="mb-3">Skill Proficiency Levels</h3>
                            <div class="mb-3">
                                <div class="d-flex justify-content-between mb-1">
                                    <span>PHP & Laravel</span>
                                    <span>95%</span>
                                </div>
                                <div class="progress mb-3" style="height: 8px;">
                                    <div class="progress-bar bg-warning" style="width: 95%"></div>
                                </div>
                            </div>
                            
                            <div class="mb-3">
                                <div class="d-flex justify-content-between mb-1">
                                    <span>JavaScript & Vue.js</span>
                                    <span>90%</span>
                                </div>
                                <div class="progress mb-3" style="height: 8px;">
                                    <div class="progress-bar bg-warning" style="width: 90%"></div>
                                </div>
                            </div>
                            
                            <div class="mb-3">
                                <div class="d-flex justify-content-between mb-1">
                                    <span>Database Design</span>
                                    <span>85%</span>
                                </div>
                                <div class="progress mb-3" style="height: 8px;">
                                    <div class="progress-bar bg-warning" style="width: 85%"></div>
                                </div>
                            </div>
                            
                            <div class="mb-3">
                                <div class="d-flex justify-content-between mb-1">
                                    <span>API Development</span>
                                    <span>88%</span>
                                </div>
                                <div class="progress" style="height: 8px;">
                                    <div class="progress-bar bg-warning" style="width: 88%"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 text-center">
                            <i class="fas fa-chart-line fa-5x mb-3 opacity-75"></i>
                            <p class="mb-0">Continuously learning and improving every day</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row mt-5">
        <div class="col-12 text-center">
            <h3 class="mb-4">Ready to work together?</h3>
            <p class="text-muted mb-4">Let's discuss how my skills can help bring your project to life.</p>
            <a href="{{ route('contact') }}" class="btn btn-primary btn-lg">
                <i class="fas fa-envelope me-2"></i>Get In Touch
            </a>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    .skill-item {
        transition: all 0.3s ease;
        border: 2px solid transparent;
    }
    
    .skill-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.1);
        border-color: #0d6efd;
    }
    
    .soft-skill-card {
        transition: all 0.3s ease;
    }
    
    .soft-skill-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.15) !important;
    }
    
    .bg-gradient-primary {
        background: linear-gradient(135deg, #0d6efd 0%, #6610f2 100%);
    }
    
    .card-header {
        border-bottom: none;
    }
    
    .progress {
        background-color: rgba(255,255,255,0.2);
    }
</style>
@endpush
