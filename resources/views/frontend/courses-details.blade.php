
@extends('components.main',['seos' => $seos])
@section('content')

@extends('components.main')


@section('content')
    <!-- Header Start -->
    <div class="container-fluid page-header" style="margin-bottom: 90px;" data-aos="fade-down">
        <div class="container">
            <div class="d-flex flex-column justify-content-center" style="min-height: 300px;">
                <h3 class="display-4 text-white text-uppercase">Web Design</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="{{route('home')}}">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Web Design</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- About Course Start -->
    <div class="container-fluid py-5 bg-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4" data-aos="fade-right">
                    <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">About the Course</h5>
                    <h1 class="font-weight-bold">Become a Web Design Expert</h1>
                    <p class="lead">Our Web Design course is perfect for beginners and experienced designers alike. Learn
                        to build beautiful, responsive websites from scratch using the latest technologies and best
                        practices.</p>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-check-circle text-primary mr-2"></i>Comprehensive Curriculum</li>
                        <li><i class="fa fa-check-circle text-primary mr-2"></i>Hands-on Projects</li>
                        <li><i class="fa fa-check-circle text-primary mr-2"></i>Expert Instructors</li>
                    </ul>
                    <a href="#enroll" class="btn btn-primary mt-4" data-toggle="modal"
                    data-target="#enrollModal">Enroll Now</a>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <img src="{{ asset('asset/img/course-1.jpg') }}" class="img-fluid rounded shadow-lg"
                        alt="Course Intro Image">
                </div>
            </div>
        </div>
    </div>
    <!-- About Course End -->




    <!-- Curriculum Section -->
    <div class="text-center mb-5" data-aos="fade-up">
        <h3 class="mb-4 font-weight-bold">Course Curriculum</h3>
        <p class="lead mb-5">The Web Design course is structured into detailed modules to cover every aspect of web design:
        </p>
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <!-- Single Card Wrapping All Modules -->
                <div class="card mb-4 border-primary rounded-lg">
                    <div class="card-body">
                        <!-- Course Module 1 -->
                        <div class="mb-4">
                            <h5 class="card-title text-primary"><i class="fa fa-bookmark"></i> 1. Introduction to Web Design
                            </h5>
                            <p class="card-text">Learn the fundamentals of web design, including its purpose, core
                                principles, and how design impacts user experience.</p>
                        </div>
                        <!-- Course Module 2 -->
                        <div class="mb-4">
                            <h5 class="card-title text-primary"><i class="fa fa-briefcase"></i> 2. Design Principles and
                                Theory</h5>
                            <p class="card-text">Explore key design principles such as color theory, typography, and layout.
                                Understand how to apply these principles to create visually appealing designs.</p>
                        </div>
                        <!-- Course Module 3 -->
                        <div class="mb-4">
                            <h5 class="card-title text-primary"><i class="fa fa-palette"></i> 3. Advanced Design Techniques
                            </h5>
                            <p class="card-text">Dive into advanced design techniques including animations, transitions, and
                                the use of design systems to enhance your designs.</p>
                        </div>
                        <!-- Course Module 4 -->
                        <div class="mb-4">
                            <h5 class="card-title text-primary"><i class="fa fa-tools"></i> 4. Design Tools and Software
                            </h5>
                            <p class="card-text">Get hands-on with popular design tools such as Adobe XD, Figma, and Sketch.
                                Learn how to use these tools to create prototypes and design mockups.</p>
                        </div>
                        <!-- Course Module 5 -->
                        <div class="mb-4">
                            <h5 class="card-title text-primary"><i class="fa fa-mobile-alt"></i> 5. Mobile-First and
                                Responsive Design</h5>
                            <p class="card-text">Understand the principles of mobile-first design and how to create
                                responsive layouts that work seamlessly across different devices and screen sizes.</p>
                        </div>
                        <!-- Course Module 6 -->
                        <div class="mb-4">
                            <h5 class="card-title text-primary"><i class="fa fa-user"></i> 6. User Experience (UX) Design
                            </h5>
                            <p class="card-text">Learn about UX design principles, including user research, usability
                                testing, and creating designs that provide a great user experience.</p>
                        </div>
                        <!-- Course Module 7 -->
                        <div class="mb-4">
                            <h5 class="card-title text-primary"><i class="fa fa-search"></i> 7. User Interface (UI) Design
                            </h5>
                            <p class="card-text">Master UI design principles, including creating visually intuitive
                                interfaces, establishing visual hierarchy, and ensuring consistency in design elements.</p>
                        </div>
                        <!-- Course Module 8 -->
                        <div class="mb-4">
                            <h5 class="card-title text-primary"><i class="fa fa-cogs"></i> 8. Web Design Best Practices</h5>
                            <p class="card-text">Study best practices for web design including accessibility, SEO
                                fundamentals, and performance optimization to ensure your websites are effective and
                                user-friendly.</p>
                        </div>
                        <!-- Course Module 9 -->
                        <div class="mb-4">
                            <h5 class="card-title text-primary"><i class="fa fa-globe"></i> 9. Building and Launching Your
                                Portfolio</h5>
                            <p class="card-text">Create and showcase your own portfolio website. Learn how to present your
                                design projects and skills to potential clients or employers effectively.</p>
                        </div>
                        <!-- Course Module 10 -->
                        <div class="mb-4">
                            <h5 class="card-title text-primary"><i class="fa fa-users"></i> 10. Networking and Career
                                Development</h5>
                            <p class="card-text">Develop professional skills, network with industry experts, and engage with
                                the design community to advance your career in web design.</p>
                        </div>
                        <!-- Course Module 11 -->
                        <div class="mb-4">
                            <h5 class="card-title text-primary"><i class="fa fa-trend-up"></i> 11. Staying Updated with
                                Trends</h5>
                            <p class="card-text">Keep abreast of the latest trends, tools, and technologies in web design to
                                stay competitive and relevant in the industry.</p>
                        </div>
                        <!-- Course Module 12 -->
                        <div>
                            <h5 class="card-title text-primary"><i class="fa fa-project-diagram"></i> 12. Practical Projects
                                and Case Studies</h5>
                            <p class="card-text">Apply what you've learned through real-world projects and case studies.
                                Build a portfolio that demonstrates your skills and knowledge in web design.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Web Design Category End -->

    <!-- Enroll Now Section Start -->
    <div class="container-fluid py-5 bg-primary text-white">
        <div class="container text-center">
            <h2 class="display-4 font-weight-bold mb-4" data-aos="fade-up">Ready to Start Your Journey?</h2>
            <p class="lead mb-4" data-aos="fade-up">Join our Web Design course today and gain the skills to create stunning
                websites. Enroll now and start learning from industry experts.</p>
            <a href="#enroll" class="btn btn-light btn-lg px-5 py-3" data-aos="fade-up"
                style="color: #007bff; background-color: #fff; border-radius: 50px; font-size: 18px; font-weight: bold;"data-toggle="modal"
                data-target="#enrollModal">
                Enroll Now
            </a>
        </div>
    </div>
    <!-- Enroll Now Section End -->
@endsection
