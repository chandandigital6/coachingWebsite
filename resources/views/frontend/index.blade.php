@extends('components.main',['seos' => $seos])
@section('content')
    <!-- Carousel Start -->
    <div class="container-fluid p-0 pb-5 mb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel" data-aos="fade-up">
            <ol class="carousel-indicators" data-aos="fade-down">
                @foreach($banners as $key => $banner)
                    <li data-target="#header-carousel" data-slide-to="{{ $key }}" class="{{ $key == 0 ? 'active' : '' }}"></li>
                @endforeach
            </ol>

            <div class="carousel-inner">
                @foreach($banners as $key => $banner)
                    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}" style="min-height: 300px;" data-aos="fade-right">
                        <img class="position-relative w-100" src="{{ asset('storage/'.$banner->image) }}"
                             style="min-height: 300px; object-fit: cover;">
                        <div class="carousel-caption d-flex align-items-center justify-content-center">
                            <div class="p-5" style="width: 100%; max-width: 900px;">
                                <h5 class="text-white text-uppercase mb-md-3">{{$banner->title}}</h5>
                                <h1 class="display-3 text-white mb-md-4">{{$banner->sub_title}}</h1>
                                <a href="" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">Learn More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <a class="carousel-control-prev" href="#header-carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#header-carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!-- Carousel End -->




    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            @foreach($abouts as $about)


            <div class="row align-items-center">
                <div class="col-lg-5" data-aos="fade-right">
                    <img class="img-fluid rounded mb-4 mb-lg-0" src="{{ asset('storage/'.$about->image) }}" alt="">
                </div>
                <div class="col-lg-7" data-aos="fade-left">
                    <div class="text-left mb-4">
                        <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">{{$about->title}}</h5>
                        <h1>{{$about->heading}}</h1>
                    </div>
                    <p>
                        {!! $about->description !!}
                    </p>
                    <a href="" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">Learn More</a>
                </div>
            </div>
            @endforeach
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
                @foreach($services as $service)
                    <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                        <div class="cat-item position-relative overflow-hidden rounded mb-2">
                            <img class="img-fluid" src="{{ asset('storage/'.$service->image) }}" alt="{{ $service->title }}">
                            <a class="cat-overlay text-white text-decoration-none" href="">
                                <h4 class="text-white font-weight-medium">{{ $service->title }}</h4>
                                <span>{{ $service->heading }}</span>
                            </a>
                        </div>
                    </div>
                @endforeach
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
                @foreach($course as $courses)


                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="rounded overflow-hidden mb-2">
                        <img class="img-fluid" src="{{ asset('storage/'.$courses->image) }}" alt="">
                        <div class="bg-secondary p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-users text-primary mr-2"></i>{{$courses->number_of_student}}</small>
                                <small class="m-0"><i class="far fa-clock text-primary mr-2"></i>{{$courses->duration}}</small>
                            </div>
                            <a class="h5" href="{{route('courseDetails-courses',$courses->id)}}">{{$courses->title}}</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>
                                        {{$courses->rating}}
{{--                                        <small>(250)</small>--}}
                                    </h6>
                                    <h5 class="m-0"> ₹{{$courses->price}}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
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
                @foreach($teams as $team)
                <div class="col-md-6 col-lg-3 text-center team mb-4" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">


                    <div class="team-item rounded overflow-hidden mb-2">
                        <div class="team-img position-relative">
                            <img class="img-fluid" src="{{ asset('storage/'.$team->image) }}" alt="">
                            <div class="team-social">
                                <a class="btn btn-outline-light btn-square mx-1" href="{{$team->in_url}}"><i
                                        class="fab fa-instagram"></i></a>
                                <a class="btn btn-outline-light btn-square mx-1" href="{{$team->fb_url}}"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-light btn-square mx-1" href="{{$team->wat_url}}"><i
                                        class="fab fa-whatsapp"></i></a>
                            </div>
                        </div>
                        <div class="bg-secondary p-4">
                            <h5>{{$team->name}}</h5>
                            <p class="m-0">{{$team->title}}</p>
                        </div>
                    </div>

                </div>
                @endforeach
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
                        @foreach($testimonials as $testimonial)
                        <div class="text-center" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <h4 class="font-weight-normal mb-4">

                            {!! $testimonial->msg !!}
                            </h4>
                            <img class="img-fluid mx-auto mb-3" src="{{ asset('storage/'.$testimonial->image) }}"
                                alt="">
                            <h5 class="m-0">{{$testimonial->name}}</h5>
                            <span>Profession</span>
                        </div>

                        @endforeach
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
                @foreach($blogs as $blog)


                <div class="col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="blog-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="{{ asset('storage/'.$blog->image) }}" alt="">
                        <a class="blog-overlay text-decoration-none" href="{{route('blogDetails-blog',$blog->id)}}">
                            <h5 class="text-white mb-3">
                                {{$blog->short_description}}
                            </h5>
                            <p class="text-primary m-0">{{ \Carbon\Carbon::parse($blog->created_at)->format('F d, Y') }}</p>

                        </a>
                    </div>
                </div>

                @endforeach
            </div>
        </div>
    </div>
    <!-- Blog End -->
@endsection
