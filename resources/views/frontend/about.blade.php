@extends('components.main')
@section('content')
    <!-- Header Start -->
    <div class="container-fluid page-header" style="margin-bottom: 90px;" data-aos="fade-down">
        <div class="container">
            <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
                <h3 class="display-4 text-white text-uppercase">About</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">About</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- About Start -->
    <div class="container-fluid py-5" data-aos="fade-right">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-5" data-aos="zoom-in">
                    <img class="img-fluid rounded mb-4 mb-lg-0" src="{{ asset('asset/img/about.jpg') }}" alt="">
                </div>
                <div class="col-lg-7" data-aos="fade-left">
                    <div class="text-left mb-4">
                        <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">About Us</h5>
                        <h1>Innovative Way To Learn</h1>
                    </div>
                    <p>Aliquyam accusam clita nonumy ipsum sit sea clita ipsum clita, ipsum dolores amet voluptua duo
                        dolores et sit ipsum rebum, sadipscing et erat eirmod diam kasd labore clita est...</p>
                    <a href="" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2"
                        data-aos="fade-up">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Registration Start -->
    <div class="container-fluid bg-registration py-5" style="margin: 90px 0;" data-aos="fade-up">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-7 mb-5 mb-lg-0" data-aos="fade-right">
                    <div class="mb-4">
                        <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 3px;">Need Any Courses?</h5>
                        <h1 class="text-white display-4">Get 30% Off for New Students</h1>
                    </div>
                    <p class="text-light">Invidunt lorem justo sanctus clita. Erat lorem labore ea...</p>
                    <ul class="list-unstyled text-light">
                        <li class="py-2"><i class="fa fa-check-circle text-primary mr-3"></i>Labore eos amet dolor amet
                            diam</li>
                        <li class="py-2"><i class="fa fa-check-circle text-primary mr-3"></i>Etsea et sit dolor amet ipsum
                        </li>
                        <li class="py-2"><i class="fa fa-check-circle text-primary mr-3"></i>Diam dolor diam elitr ipsum
                            vero</li>
                    </ul>
                </div>
                <div class="col-lg-5" data-aos="fade-left">
                    <div class="card border-0 shadow">
                        <div class="card-header bg-white text-center p-4">
                            <h1 class="m-0">Sign Up Now</h1>
                        </div>
                        <div class="card-body rounded-bottom bg-primary p-5">
                            <form>
                                <div class="form-group">
                                    <input type="text" class="form-control border-0 p-4" placeholder="Your Name"
                                        required />
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control border-0 p-4" placeholder="Your Email"
                                        required />
                                </div>
                                <div class="form-group">
                                    <select class="custom-select border-0 p-4" style="height: 52px;">
                                        <option selected>Select a Course</option>
                                        <option value="1">Course 1</option>
                                        <option value="2">Course 2</option>
                                        <option value="3">Course 3</option>
                                    </select>
                                </div>
                                <div>
                                    <button class="btn btn-dark btn-block border-0 py-3" type="submit">Sign Up Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Registration End -->

    <!-- Testimonial Start -->
    <div class="container-fluid py-5" data-aos="fade-up">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;" data-aos="zoom-in">Testimonial
                </h5>
                <h1 data-aos="fade-up">What Say Our Students</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="text-center" data-aos="fade-right">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <h4 class="font-weight-normal mb-4">Dolor eirmod diam stet kasd sed...</h4>
                            <img class="img-fluid mx-auto mb-3" src="{{ asset('asset/img/testimonial-1.jpg') }}"
                                alt="">
                            <h5 class="m-0">Client Name</h5>
                            <span>Profession</span>
                        </div>
                        <div class="text-center" data-aos="fade-left">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <h4 class="font-weight-normal mb-4">Dolor eirmod diam stet kasd sed...</h4>
                            <img class="img-fluid mx-auto mb-3" src="{{ asset('asset/img/testimonial-2.jpg') }}"
                                alt="">
                            <h5 class="m-0">Client Name</h5>
                            <span>Profession</span>
                        </div>
                        <div class="text-center" data-aos="fade-right">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <h4 class="font-weight-normal mb-4">Dolor eirmod diam stet kasd sed...</h4>
                            <img class="img-fluid mx-auto mb-3" src="{{ asset('asset/img/testimonial-3.jpg') }}"
                                alt="">
                            <h5 class="m-0">Client Name</h5>
                            <span>Profession</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
@endsection
