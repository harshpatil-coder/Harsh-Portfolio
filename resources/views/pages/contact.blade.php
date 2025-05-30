@extends('layouts.app')

@section('title', 'Contact - Portfolio Bhergonia')

@section('content')
<div class="container py-5" style="margin-top: 80px;">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="text-center mb-5">
                <h1 class="display-4 mb-3">Get In Touch</h1>
                <p class="lead text-muted">Let's discuss your next project or just say hello!</p>
            </div>
        </div>
    </div>
    
    @if(session('success'))
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="fas fa-check-circle me-2"></i>{{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    </div>
    @endif
    
    <div class="row">
        <div class="col-lg-8">
            <div class="card shadow-lg border-0">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0"><i class="fas fa-envelope me-2"></i>Send Me a Message</h4>
                </div>
                <div class="card-body p-4">
                    <form action="{{ route('contact.submit') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label">Full Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" 
                                       id="name" name="name" value="{{ old('name') }}" required>
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="email" class="form-label">Email Address <span class="text-danger">*</span></label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" 
                                       id="email" name="email" value="{{ old('email') }}" required>
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label for="subject" class="form-label">Subject <span class="text-danger">*</span></label>
                            <select class="form-select @error('subject') is-invalid @enderror" id="subject" name="subject" required>
                                <option value="">Choose a subject...</option>
                                <option value="General Inquiry" {{ old('subject') == 'General Inquiry' ? 'selected' : '' }}>General Inquiry</option>
                                <option value="Project Collaboration" {{ old('subject') == 'Project Collaboration' ? 'selected' : '' }}>Project Collaboration</option>
                                <option value="Job Opportunity" {{ old('subject') == 'Job Opportunity' ? 'selected' : '' }}>Job Opportunity</option>
                                <option value="Technical Question" {{ old('subject') == 'Technical Question' ? 'selected' : '' }}>Technical Question</option>
                                <option value="Other" {{ old('subject') == 'Other' ? 'selected' : '' }}>Other</option>
                            </select>
                            @error('subject')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="mb-4">
                            <label for="message" class="form-label">Message <span class="text-danger">*</span></label>
                            <textarea class="form-control @error('message') is-invalid @enderror" 
                                      id="message" name="message" rows="6" 
                                      placeholder="Tell me about your project, idea, or just say hello..." required>{{ old('message') }}</textarea>
                            @error('message')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <div class="form-text">Maximum 1000 characters</div>
                        </div>
                        
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-lg">
                                <i class="fas fa-paper-plane me-2"></i>Send Message
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        <div class="col-lg-4">
            <div class="card border-0 bg-light h-100">
                <div class="card-body p-4">
                    <h5 class="card-title mb-4">Contact Information</h5>
                      <div class="contact-item mb-4">
                        <div class="d-flex align-items-center">
                            <div class="contact-icon bg-primary text-white rounded-circle me-3" style="width: 45px; height: 45px; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div>
                                <h6 class="mb-0">Email</h6>
                                <a href="mailto:bheabergonia1@gmail.com" class="text-muted">bheabergonia1@gmail.com</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="contact-item mb-4">
                        <div class="d-flex align-items-center">
                            <div class="contact-icon bg-success text-white rounded-circle me-3" style="width: 45px; height: 45px; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div>
                                <h6 class="mb-0">Contact Number</h6>
                                <a href="tel:09817290331" class="text-muted">(0981) 729 0331</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="contact-item mb-4">
                        <div class="d-flex align-items-center">
                            <div class="contact-icon bg-info text-white rounded-circle me-3" style="width: 45px; height: 45px; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div>
                                <h6 class="mb-0">Location</h6>
                                <span class="text-muted">Luna, Bolinao, Pangasinan</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="contact-item mb-4">
                        <div class="d-flex align-items-center">
                            <div class="contact-icon bg-warning text-white rounded-circle me-3" style="width: 45px; height: 45px; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div>
                                <h6 class="mb-0">Response Time</h6>
                                <span class="text-muted">Within 24 hours</span>
                            </div>
                        </div>
                    </div>
                    
                    <hr class="my-4">
                    
                    <h6 class="mb-3">Connect With Me</h6>
                    <div class="social-links">
                        <a href="https://github.com/bhergonia" target="_blank" class="btn btn-outline-dark btn-sm me-2 mb-2">
                            <i class="fab fa-github me-1"></i>GitHub
                        </a>
                        <a href="https://linkedin.com/in/bhergonia" target="_blank" class="btn btn-outline-primary btn-sm me-2 mb-2">
                            <i class="fab fa-linkedin me-1"></i>LinkedIn
                        </a>
                        <a href="https://twitter.com/bhergonia" target="_blank" class="btn btn-outline-info btn-sm me-2 mb-2">
                            <i class="fab fa-twitter me-1"></i>Twitter
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row mt-5">
        <div class="col-12">
            <div class="card bg-primary text-white">
                <div class="card-body text-center py-5">
                    <h3 class="mb-3">Ready to Start Your Project?</h3>
                    <p class="mb-4">
                        Whether you need a complete web application, API development, or just want to discuss ideas, 
                        I'm here to help turn your vision into reality.
                    </p>
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <div class="feature-item">
                                <i class="fas fa-rocket fa-2x mb-2"></i>
                                <h6>Fast Delivery</h6>
                                <p class="mb-0">Quick turnaround without compromising quality</p>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="feature-item">
                                <i class="fas fa-shield-alt fa-2x mb-2"></i>
                                <h6>Reliable Code</h6>
                                <p class="mb-0">Clean, tested, and maintainable solutions</p>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="feature-item">
                                <i class="fas fa-headset fa-2x mb-2"></i>
                                <h6>24/7 Support</h6>
                                <p class="mb-0">Ongoing support and maintenance</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    // Character counter for message textarea
    document.addEventListener('DOMContentLoaded', function() {
        const messageTextarea = document.getElementById('message');
        const maxLength = 1000;
        
        // Create character counter element
        const counterElement = document.createElement('div');
        counterElement.className = 'form-text text-end mt-1';
        counterElement.innerHTML = `<span id="char-count">0</span>/${maxLength} characters`;
        messageTextarea.parentNode.appendChild(counterElement);
        
        // Update counter on input
        messageTextarea.addEventListener('input', function() {
            const currentLength = this.value.length;
            document.getElementById('char-count').textContent = currentLength;
            
            if (currentLength > maxLength * 0.9) {
                counterElement.classList.add('text-warning');
            } else {
                counterElement.classList.remove('text-warning');
            }
            
            if (currentLength > maxLength) {
                counterElement.classList.add('text-danger');
                counterElement.classList.remove('text-warning');
            } else {
                counterElement.classList.remove('text-danger');
            }
        });
        
        // Trigger initial count
        messageTextarea.dispatchEvent(new Event('input'));
    });
</script>
@endpush

@push('styles')
<style>
    .contact-item {
        transition: all 0.3s ease;
        padding: 10px;
        border-radius: 8px;
    }
    
    .contact-item:hover {
        background-color: rgba(13, 110, 253, 0.1);
        transform: translateX(5px);
    }
    
    .contact-icon {
        transition: all 0.3s ease;
    }
    
    .contact-item:hover .contact-icon {
        transform: scale(1.1);
    }
    
    .feature-item {
        padding: 20px;
    }
    
    .social-links .btn {
        transition: all 0.3s ease;
    }
    
    .social-links .btn:hover {
        transform: translateY(-2px);
    }
    
    .form-control:focus, .form-select:focus {
        border-color: #0d6efd;
        box-shadow: 0 0 0 0.2rem rgba(13, 110, 253, 0.25);
    }
</style>
@endpush
