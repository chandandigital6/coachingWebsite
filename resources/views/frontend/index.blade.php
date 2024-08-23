@extends('components.main')
@section('content')
    <!-- Carousel Start -->
    <div class="container-fluid p-0 pb-5 mb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel" data-aos="fade-up">
            <ol class="carousel-indicators" data-aos="fade-down">
                <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#header-carousel" data-slide-to="1"></li>
                <li data-target="#header-carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active" style="min-height: 300px;" data-aos="fade-right">
                    <img class="position-relative w-100" src="{{ asset('asset/img/carousel-1.jpg') }}"
                        style="min-height: 300px; object-fit: cover;">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-5" style="width: 100%; max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-md-3">Best Online Courses</h5>
                            <h1 class="display-3 text-white mb-md-4">Best Education From Your Home</h1>
                            <a href="" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">Learn
                                More</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" style="min-height: 300px;" data-aos="fade-left">
                    <img class="position-relative w-100" src="{{ asset('asset/img/carousel-2.jpg') }}"
                        style="min-height: 300px; object-fit: cover;">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-5" style="width: 100%; max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-md-3">Best Online Courses</h5>
                            <h1 class="display-3 text-white mb-md-4">Best Online Learning Platform</h1>
                            <a href="" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">Learn
                                More</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" style="min-height: 300px;" data-aos="fade-left">
                    <img class="position-relative w-100" src="{{ asset('asset/img/carousel-3.jpg') }}"
                        style="min-height: 300px; object-fit: cover;">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-5" style="width: 100%; max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-md-3">Best Online Courses</h5>
                            <h1 class="display-3 text-white mb-md-4">New Way To Learn From Home</h1>
                            <a href="" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">Learn
                                More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->



    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-5" data-aos="fade-right">
                    <img class="img-fluid rounded mb-4 mb-lg-0" src="{{ asset('asset/img/about.jpg') }}" alt="">
                </div>
                <div class="col-lg-7" data-aos="fade-left">
                    <div class="text-left mb-4">
                        <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">About Us</h5>
                        <h1>Innovative Way To Learn</h1>
                    </div>
                    <p>Aliquyam accusam clita nonumy ipsum sit sea clita ipsum clita, ipsum dolores amet voluptua duo
                        dolores et sit ipsum rebum, sadipscing et erat eirmod diam kasd labore clita est. Diam sanctus
                        gubergren sit rebum clita amet, sea est sea vero sed et. Sadipscing labore tempor at sit dolor clita
                        consetetur diam. Diam ut diam tempor no et, lorem dolore invidunt no nonumy stet ea labore, dolor
                        justo et sit gubergren diam sed sed no ipsum. Sit tempor ut nonumy elitr dolores justo aliquyam
                        ipsum stet</p>
                    <a href="" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->



    <!-- Category Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-5" data-aos="fade-up">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Subjects</h5>
                <h1>Explore Top Subjects</h1>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="{{ asset('asset/img/cat-1.jpg') }}" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href="{{route('coursesdetails')}}">
                            <h4 class="text-white font-weight-medium">Web Design</h4>
                            <span>100 Courses</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="{{ asset('asset/img/cat-2.jpg') }}" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href="">
                            <h4 class="text-white font-weight-medium">Development</h4>
                            <span>100 Courses</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="{{ asset('asset/img/cat-3.jpg') }}" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href="">
                            <h4 class="text-white font-weight-medium">Game Design</h4>
                            <span>100 Courses</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="{{ asset('asset/img/cat-4.jpg') }}" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href="">
                            <h4 class="text-white font-weight-medium">Apps Design</h4>
                            <span>100 Courses</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="{{ asset('asset/img/cat-5.jpg') }}" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href="">
                            <h4 class="text-white font-weight-medium">Marketing</h4>
                            <span>100 Courses</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="600">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="{{ asset('asset/img/cat-6.jpg') }}" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href="">
                            <h4 class="text-white font-weight-medium">Research</h4>
                            <span>100 Courses</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="700">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="{{ asset('asset/img/cat-7.jpg') }}" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href="">
                            <h4 class="text-white font-weight-medium">Content Writing</h4>
                            <span>100 Courses</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="800">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="{{ asset('asset/img/cat-8.jpg') }}" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href="">
                            <h4 class="text-white font-weight-medium">SEO</h4>
                            <span>100 Courses</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Category End -->



    <!-- Courses Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-5" data-aos="fade-up">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Courses</h5>
                <h1>Our Popular Courses</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="rounded overflow-hidden mb-2">
                        <img class="img-fluid" src="{{ asset('asset/img/course-1.jpg') }}" alt="">
                        <div class="bg-secondary p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-users text-primary mr-2"></i>25 Students</small>
                                <small class="m-0"><i class="far fa-clock text-primary mr-2"></i>01h 30m</small>
                            </div>
                            <a class="h5" href="">Web design & development courses for beginner</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5
                                        <small>(250)</small>
                                    </h6>
                                    <h5 class="m-0">$99</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="rounded overflow-hidden mb-2">
                        <img class="img-fluid" src="{{ asset('asset/img/course-2.jpg') }}" alt="">
                        <div class="bg-secondary p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-users text-primary mr-2"></i>25 Students</small>
                                <small class="m-0"><i class="far fa-clock text-primary mr-2"></i>01h 30m</small>
                            </div>
                            <a class="h5" href="">Web design & development courses for beginner</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5
                                        <small>(250)</small>
                                    </h6>
                                    <h5 class="m-0">$99</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="rounded overflow-hidden mb-2">
                        <img class="img-fluid" src="{{ asset('asset/img/course-3.jpg') }}" alt="">
                        <div class="bg-secondary p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-users text-primary mr-2"></i>25 Students</small>
                                <small class="m-0"><i class="far fa-clock text-primary mr-2"></i>01h 30m</small>
                            </div>
                            <a class="h5" href="">Web design & development courses for beginner</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5
                                        <small>(250)</small>
                                    </h6>
                                    <h5 class="m-0">$99</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="rounded overflow-hidden mb-2">
                        <img class="img-fluid" src="{{ asset('asset/img/course-4.jpg') }}" alt="">
                        <div class="bg-secondary p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-users text-primary mr-2"></i>25 Students</small>
                                <small class="m-0"><i class="far fa-clock text-primary mr-2"></i>01h 30m</small>
                            </div>
                            <a class="h5" href="">Web design & development courses for beginner</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5
                                        <small>(250)</small>
                                    </h6>
                                    <h5 class="m-0">$99</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="rounded overflow-hidden mb-2">
                        <img class="img-fluid" src="{{ asset('asset/img/course-5.jpg') }}" alt="">
                        <div class="bg-secondary p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-users text-primary mr-2"></i>25 Students</small>
                                <small class="m-0"><i class="far fa-clock text-primary mr-2"></i>01h 30m</small>
                            </div>
                            <a class="h5" href="">Web design & development courses for beginner</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5
                                        <small>(250)</small>
                                    </h6>
                                    <h5 class="m-0">$99</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="600">
                    <div class="rounded overflow-hidden mb-2">
                        <img class="img-fluid" src="{{ asset('asset/img/course-6.jpg') }}" alt="">
                        <div class="bg-secondary p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-users text-primary mr-2"></i>25 Students</small>
                                <small class="m-0"><i class="far fa-clock text-primary mr-2"></i>01h 30m</small>
                            </div>
                            <a class="h5" href="">Web design & development courses for beginner</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5
                                        <small>(250)</small>
                                    </h6>
                                    <h5 class="m-0">$99</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Courses End -->



    <!-- Registration Start -->
    <div class="container-fluid bg-registration py-5" style="margin: 90px 0;" data-aos="fade-up">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-7 mb-5 mb-lg-0" data-aos="fade-right">
                    <div class="mb-4">
                        <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 3px;">Need Any Courses?</h5>
                        <h1 class="text-white display-4">Get 30% Off for New Students</h1>
                    </div>
                    <p class="text-light">Invidunt lorem justo sanctus clita. Erat lorem labore ea, justo dolor lorem ipsum
                        ut sed eos, ipsum et dolor kasd sit ea justo. Erat justo sed sed diam. Ea et erat ut sed diam sea
                        ipsum est dolor.</p>
                    <ul class="list-unstyled text-light">
                        <li class="py-2"><i class="fa fa-check-circle text-primary mr-3"></i>Labore eos amet dolor amet
                            diam</li>
                        <li class="py-2"><i class="fa fa-check-circle text-primary mr-3"></i>Etsea et sit dolor amet
                            ipsum</li>
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
                                    <button class="btn btn-dark btn-block border-0 py-3" type="submit">Sign Up
                                        Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Registration End -->


    <!-- Team Start -->
    <div class="container-fluid py-5" data-aos="fade-up">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-5" data-aos="fade-down">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Teachers</h5>
                <h1>Meet Our Teachers</h1>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3 text-center team mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="team-item rounded overflow-hidden mb-2">
                        <div class="team-img position-relative">
                            <img class="img-fluid" src="{{ asset('asset/img/team-1.jpg') }}" alt="">
                            <div class="team-social">
                                <a class="btn btn-outline-light btn-square mx-1" href="#"><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-light btn-square mx-1" href="#"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-light btn-square mx-1" href="#"><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="bg-secondary p-4">
                            <h5>Jhon Doe</h5>
                            <p class="m-0">Web Designer</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 text-center team mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="team-item rounded overflow-hidden mb-2">
                        <div class="team-img position-relative">
                            <img class="img-fluid" src="{{ asset('asset/img/team-2.jpg') }}" alt="">
                            <div class="team-social">
                                <a class="btn btn-outline-light btn-square mx-1" href="#"><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-light btn-square mx-1" href="#"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-light btn-square mx-1" href="#"><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="bg-secondary p-4">
                            <h5>Jhon Doe</h5>
                            <p class="m-0">Web Designer</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 text-center team mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="team-item rounded overflow-hidden mb-2">
                        <div class="team-img position-relative">
                            <img class="img-fluid" src="{{ asset('asset/img/team-3.jpg') }}" alt="">
                            <div class="team-social">
                                <a class="btn btn-outline-light btn-square mx-1" href="#"><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-light btn-square mx-1" href="#"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-light btn-square mx-1" href="#"><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="bg-secondary p-4">
                            <h5>Jhon Doe</h5>
                            <p class="m-0">Web Designer</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 text-center team mb-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="team-item rounded overflow-hidden mb-2">
                        <div class="team-img position-relative">
                            <img class="img-fluid" src="{{ asset('asset/img/team-4.jpg') }}" alt="">
                            <div class="team-social">
                                <a class="btn btn-outline-light btn-square mx-1" href="#"><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-light btn-square mx-1" href="#"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-light btn-square mx-1" href="#"><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="bg-secondary p-4">
                            <h5>Jhon Doe</h5>
                            <p class="m-0">Web Designer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->



    <!-- Testimonial Start -->
    <div class="container-fluid py-5" data-aos="fade-up">
        <div class="container py-5">
            <div class="text-center mb-5" data-aos="fade-down">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Testimonial</h5>
                <h1>What Say Our Students</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="text-center" data-aos="fade-up" data-aos-delay="100">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <h4 class="font-weight-normal mb-4">Dolor eirmod diam stet kasd sed. Aliqu rebum est eos. Rebum
                                elitr dolore et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos
                                labore diam</h4>
                            <img class="img-fluid mx-auto mb-3" src="{{ asset('asset/img/testimonial-1.jpg') }}"
                                alt="">
                            <h5 class="m-0">Client Name</h5>
                            <span>Profession</span>
                        </div>
                        <div class="text-center" data-aos="fade-up" data-aos-delay="200">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <h4 class="font-weight-normal mb-4">Dolor eirmod diam stet kasd sed. Aliqu rebum est eos. Rebum
                                elitr dolore et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos
                                labore diam</h4>
                            <img class="img-fluid mx-auto mb-3" src="{{ asset('asset/img/testimonial-2.jpg') }}"
                                alt="">
                            <h5 class="m-0">Client Name</h5>
                            <span>Profession</span>
                        </div>
                        <div class="text-center" data-aos="fade-up" data-aos-delay="300">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <h4 class="font-weight-normal mb-4">Dolor eirmod diam stet kasd sed. Aliqu rebum est eos. Rebum
                                elitr dolore et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos
                                labore diam</h4>
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



    <!-- Blog Start -->
    <div class="container-fluid py-5" data-aos="fade-up">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-5" data-aos="fade-down">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Our Blog</h5>
                <h1>Latest From Our Blog</h1>
            </div>
            <div class="row pb-3">
                <div class="col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="blog-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="{{ asset('asset/img/blog-1.jpg') }}" alt="">
                        <a class="blog-overlay text-decoration-none" href="">
                            <h5 class="text-white mb-3">Lorem elitr magna stet eirmod labore amet labore clita at ut clita
                            </h5>
                            <p class="text-primary m-0">Jan 01, 2050</p>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="blog-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="{{ asset('asset/img/blog-2.jpg') }}" alt="">
                        <a class="blog-overlay text-decoration-none" href="">
                            <h5 class="text-white mb-3">Lorem elitr magna stet eirmod labore amet labore clita at ut clita
                            </h5>
                            <p class="text-primary m-0">Jan 01, 2050</p>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="blog-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="{{ asset('asset/img/blog-3.jpg') }}" alt="">
                        <a class="blog-overlay text-decoration-none" href="">
                            <h5 class="text-white mb-3">Lorem elitr magna stet eirmod labore amet labore clita at ut clita
                            </h5>
                            <p class="text-primary m-0">Jan 01, 2050</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->
@endsection
