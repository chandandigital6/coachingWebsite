@extends('components.main',['seos' => $seos])

@section('content')
    <!-- Header Start -->
    <div class="container-fluid page-header" style="margin-bottom: 90px;" data-aos="fade-down" data-aos-duration="1000">
        <div class="container">
            <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
                <h3 class="display-4 text-white text-uppercase">Contact</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="{{route('home')}}">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Contact</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Contact Start -->
    <div class="container-fluid py-5 bg-light">
        <div class="container py-5">
            <div class="text-center mb-5" data-aos="fade-up" data-aos-duration="1000">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Contact</h5>
                <h1>Get In Touch With Us</h1>
            </div>
            <div class="row">
                <!-- Contact Form Start -->
                <div class="col-lg-6 mb-4">
                    <div class="contact-form bg-white rounded p-5 shadow-lg border border-light" data-aos="zoom-in" data-aos-duration="1000">
                        <div id="success"></div>
                        <form action="{{ route('appointment.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="name" class="font-weight-bold text-primary">Full Name</label>
                                <input type="text" class="form-control rounded-pill border-primary" name="name"
                                    id="name" placeholder="Enter your name" required>
                            </div>
                            <div class="form-group">
                                <label for="email" class="font-weight-bold text-primary">Email Address</label>
                                <input type="email" class="form-control rounded-pill border-primary" name="email"
                                    id="email" placeholder="Enter your email" required>
                            </div>
                            <div class="form-group">
                                <label for="phone" class="font-weight-bold text-primary">Phone Number</label>
                                <input type="tel" class="form-control rounded-pill border-primary" name="number"
                                    id="phone" placeholder="Enter your phone number" required>
                            </div>
                            <div class="form-group">
                                <label for="course" class="font-weight-bold text-primary">Select Course</label>
                                <select class="form-control rounded-pill border-primary" name="course" id="course"
                                    required>
                                    <option value="" disabled selected>Select Course</option>
                                    <option value="php">PHP</option>
                                    <option value="web designing">WEB DESIGNING</option>
                                    <option value="full stack">FULL STACK</option>
                                    <option value="digital marketing"> Digital Marketing</option>
                                    <option value="graphics Designing"> Graphics Designing</option>
                                </select>
                            </div>
                            <button type="submit"
                                class="rounded-pill btn btn-primary btn-block border-0 py-3">Submit</button>
                        </form>
                    </div>
                </div>
                <!-- Contact Form End -->

                <!-- Contact Info Start -->
                <div class="col-lg-6">
                    <div class="contact-info bg-white rounded p-4 shadow-lg border border-light">
                        <div class="row">
                            <div class="col-md-12 mb-4" data-aos="fade-up" data-aos-duration="1000">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-map-marker-alt fa-2x text-primary mr-3"></i>
                                    <div>
                                        <h5 class="text-primary mb-2">Address</h5>
                                        <p class="mb-0">123 Main Street, City, Country</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 mb-4" data-aos="fade-up" data-aos-duration="1200">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-phone-alt fa-2x text-primary mr-3"></i>
                                    <div>
                                        <h5 class="text-primary mb-2">Phone</h5>
                                        <p class="mb-0">(+123) 456-7890</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 mb-4" data-aos="fade-up" data-aos-duration="1400">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-envelope fa-2x text-primary mr-3"></i>
                                    <div>
                                        <h5 class="text-primary mb-2">Email</h5>
                                        <p class="mb-0">contact@example.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Social Media Links -->
                        <div class="text-center mt-4">
                            <h5 class="text-primary mb-2">Follow Us</h5>
                            <div class="d-flex justify-content-center">
                                <a href="https://www.facebook.com/yourpage" target="_blank" class="btn btn-outline-primary mx-2">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="https://twitter.com/yourprofile" target="_blank" class="btn btn-outline-primary mx-2">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="https://www.linkedin.com/in/yourprofile" target="_blank" class="btn btn-outline-primary mx-2">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                                <a href="https://www.instagram.com/yourprofile" target="_blank" class="btn btn-outline-primary mx-2">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Contact Info End -->
            </div>
            <!-- Map Start -->
            <div class="row mt-5">
                <div class="col-12">
                    <h5 class="text-center text-primary mb-4">Our Location</h5>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.549798748302!2d-122.42550138468832!3d37.77902697975971!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8085808b11a65e89%3A0xb8da0d82cb6c5b3f!2s333%20California%20St%2C%20San%20Francisco%2C%20CA%2094141!5e0!3m2!1sen!2sus!4v1632957480810!5m2!1sen!2sus" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
            <!-- Map End -->
        </div>
    </div>
    <!-- Contact End -->
@endsection
