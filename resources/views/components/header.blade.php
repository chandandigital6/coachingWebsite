<!-- Topbar Start -->
<div class="container-fluid d-none d-lg-block">
    <div class="row align-items-center py-4 px-xl-5">
        <div class="col-lg-3">
            <a href="" class="text-decoration-none">
                <h1 class="m-0"><span class="text-primary">Real </span>Victory</h1>
            </a>
        </div>
        <div class="col-lg-3 text-right">
            <div class="d-inline-flex align-items-center">
                <i class="fa fa-2x fa-map-marker-alt text-primary mr-3"></i>
                <div class="text-left">
                    <h6 class="font-weight-semi-bold mb-1">Our Office</h6>
                    <small>123 Street, New York, USA</small>
                </div>
            </div>
        </div>
        <div class="col-lg-3 text-right">
            <div class="d-inline-flex align-items-center">
                <i class="fa fa-2x fa-envelope text-primary mr-3"></i>
                <div class="text-left">
                    <h6 class="font-weight-semi-bold mb-1">Email Us</h6>
                    <small>info@example.com</small>
                </div>
            </div>
        </div>
        <div class="col-lg-3 text-right">
            <div class="d-inline-flex align-items-center">
                <i class="fa fa-2x fa-phone text-primary mr-3"></i>
                <div class="text-left">
                    <h6 class="font-weight-semi-bold mb-1">Call Us</h6>
                    <small>+012 345 6789</small>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->

<!-- Navbar Start -->
<div class="container-fluid">
    <div class="row border-top px-xl-5">
        <div class="col-lg-3 d-none d-lg-block">
            <!-- Add any additional content here if needed -->
        </div>
        <div class="col-lg-9">
            <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                <a href="" class="text-decoration-none d-block d-lg-none">
                    <h1 class="m-0"><span class="text-primary">E</span>COURSES</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav py-0">
                        <a href="{{ route('home') }}" class="nav-item nav-link active">Home</a>
                        <a href="{{ route('about') }}" class="nav-item nav-link">About</a>
                        <a href="{{ route('course') }}" class="nav-item nav-link">Courses</a>
                        <a href="{{ route('teacher') }}" class="nav-item nav-link">Teachers</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Blog</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="{{ route('blog') }}" class="dropdown-item">Blog List</a>
                                <a href="{{ route('single') }}" class="dropdown-item">Blog Detail</a>
                            </div>
                        </div>
                        <a href="{{ route('contact') }}" class="nav-item nav-link">Contact</a>
                    </div>
                    <a class="btn btn-primary py-2 px-4 ml-auto d-none d-lg-block" href="#" data-toggle="modal"
                        data-target="#enrollModal">Enroll Now</a>
                </div>
            </nav>
        </div>
    </div>
</div>
<!-- Navbar End -->

<!-- Enroll Now Modal Start -->
<div class="modal fade" id="enrollModal" tabindex="-1" role="dialog" aria-labelledby="enrollModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content border-0 rounded-lg shadow-lg">
            <div class="modal-header border-bottom-0">
                <h5 class="modal-title" id="enrollModalLabel">Enroll Now</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="name" class="font-weight-bold">Full Name</label>
                        <input type="text" class="form-control rounded-pill border-primary" id="name"
                            placeholder="Enter your name" required>
                    </div>
                    <div class="form-group">
                        <label for="email" class="font-weight-bold">Email Address</label>
                        <input type="email" class="form-control rounded-pill border-primary" id="email"
                            placeholder="Enter your email" required>
                    </div>
                    <div class="form-group">
                        <label for="phone" class="font-weight-bold">Phone Number</label>
                        <input type="tel" class="form-control rounded-pill border-primary" id="phone"
                            placeholder="Enter your phone number" required>
                    </div>
                    <div class="form-group">
                        <label for="course" class="font-weight-bold">Select Course</label>
                        <select class="form-control rounded-pill border-primary" id="course" required>
                            <option value="" disabled selected>Select Course</option>
                            <option value="course1">PHP</option>
                            <option value="course2">WEB DESIGNING</option>
                            <option value="course3">FULL STACK</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary rounded-pill btn-block py-2">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Enroll Now Modal End -->
