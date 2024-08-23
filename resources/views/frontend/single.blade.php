@extends('components.main')
@section('content')
    <!-- Header Start -->
    <div class="container-fluid page-header" style="margin-bottom: 90px;" data-aos="fade-down">
        <div class="container">
            <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
                <h3 class="display-4 text-white text-uppercase">Single</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Single</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Detail Start -->
    <div class="container-fluid py-5" data-aos="fade-up">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-8">
                    <div class="mb-5">
                        <h6 class="text-primary mb-3" data-aos="fade-right">Jan 01, 2050</h6>
                        <h1 class="mb-5" data-aos="fade-left">Vero ipsum sea justo dolore eirmod amet dolor tempor lorem
                        </h1>
                        <img class="img-fluid rounded w-100 mb-4" src="{{ asset('asset/img/carousel-1.jpg') }}"
                            alt="Image" data-aos="zoom-in">
                        <p data-aos="fade-right">Sadipscing labore amet rebum est et justo gubergren. Et eirmod ipsum sit
                            diam ut magna lorem.
                            Nonumy vero labore lorem sanctus rebum et lorem magna kasd, stet amet magna accusam
                            consetetur eirmod. Kasd accusam sit ipsum sadipscing et at at sanctus et. Ipsum sit
                            gubergren dolores et, consetetur justo invidunt at et aliquyam ut et vero clita. Diam sea
                            sea no sed dolores diam nonumy, gubergren sit stet no diam kasd vero.</p>
                        <p data-aos="fade-left">Voluptua est takimata stet invidunt sed rebum nonumy stet, clita aliquyam
                            dolores vero stet
                            consetetur elitr takimata rebum sanctus. Sit sed accusam stet sit nonumy kasd diam dolores,
                            sanctus lorem kasd duo dolor dolor vero sit et. Labore ipsum duo sanctus amet eos et.
                            Consetetur no sed et aliquyam ipsum justo et, clita lorem sit vero amet amet est dolor
                            elitr, stet et no diam sit. Dolor erat justo dolore sit invidunt.</p>
                        <h2 class="mb-4" data-aos="fade-right">Est dolor lorem et ea</h2>
                        <img class="img-fluid rounded w-50 float-left mr-4 mb-3" src="{{ asset('asset/img/blog-1.jpg') }}"
                            alt="Image" data-aos="zoom-in">
                        <p data-aos="fade-up">Diam dolor est labore duo invidunt ipsum clita et, sed et lorem voluptua
                            tempor invidunt at
                            est sanctus sanctus. Clita dolores sit kasd diam takimata justo diam lorem sed. Magna amet
                            sed rebum eos. Clita no magna no dolor erat diam tempor rebum consetetur, sanctus labore sed
                            nonumy diam lorem amet eirmod. No at tempor sea diam kasd, takimata ea nonumy elitr
                            sadipscing gubergren erat. Gubergren at lorem invidunt sadipscing rebum sit amet ut ut,
                            voluptua diam dolores at sadipscing stet. Clita dolor amet dolor ipsum vero ea ea eos.
                            Invidunt sed diam dolores takimata dolor dolore dolore sit. Sit ipsum erat amet lorem et,
                            magna sea at sed et eos. Accusam eirmod kasd lorem clita sanctus ut consetetur et. Et duo
                            tempor sea kasd clita ipsum et. Takimata kasd diam justo est eos erat aliquyam et ut. Ea sed
                            sadipscing no justo et eos labore, gubergren ipsum magna dolor lorem dolore, elitr aliquyam
                            takimata sea kasd dolores diam, amet et est accusam labore eirmod vero et voluptua. Amet
                            labore clita duo et no. Rebum voluptua magna eos magna, justo gubergren labore sit.</p>
                        <p data-aos="fade-up">Diam dolor est labore duo invidunt ipsum clita et, sed et lorem voluptua
                            tempor invidunt at
                            est sanctus sanctus. Clita dolores sit kasd diam takimata justo diam lorem sed. Magna amet
                            sed rebum eos. Clita no magna no dolor erat diam tempor rebum consetetur, sanctus labore sed
                            nonumy diam lorem amet eirmod. No at tempor sea diam kasd, takimata ea nonumy elitr
                            sadipscing gubergren erat.</p>
                    </div>

                    <!-- Comment List -->
                    <div class="mb-5" data-aos="fade-left">
                        <h3 class="text-uppercase mb-4" style="letter-spacing: 5px;">3 Comments</h3>
                        <div class="media mb-4" data-aos="fade-right">
                            <img src="{{ asset('asset/img/user.jpg') }}" alt="Image"
                                class="img-fluid rounded-circle mr-3 mt-1" style="width: 45px;">
                            <div class="media-body">
                                <h6>John Doe <small><i>01 Jan 2045 at 12:00pm</i></small></h6>
                                <p>Diam amet duo labore stet elitr ea clita ipsum, tempor labore accusam ipsum et no at.
                                    Kasd diam tempor rebum magna dolores sed sed eirmod ipsum. Gubergren clita aliquyam
                                    consetetur sadipscing, at tempor amet ipsum diam tempor consetetur at sit.</p>
                                <button class="btn btn-sm btn-secondary">Reply</button>
                            </div>
                        </div>
                        <div class="media mb-4" data-aos="fade-right">
                            <img src="{{ asset('asset/img/user.jpg') }}" alt="Image"
                                class="img-fluid rounded-circle mr-3 mt-1" style="width: 45px;">
                            <div class="media-body">
                                <h6>John Doe <small><i>01 Jan 2045 at 12:00pm</i></small></h6>
                                <p>Diam amet duo labore stet elitr ea clita ipsum, tempor labore accusam ipsum et no at.
                                    Kasd diam tempor rebum magna dolores sed sed eirmod ipsum. Gubergren clita aliquyam
                                    consetetur sadipscing, at tempor amet ipsum diam tempor consetetur at sit.</p>
                                <button class="btn btn-sm btn-secondary">Reply</button>
                                <div class="media mt-4" data-aos="fade-right">
                                    <img src="{{ asset('asset/img/user.jpg') }}" alt="Image"
                                        class="img-fluid rounded-circle mr-3 mt-1" style="width: 45px;">
                                    <div class="media-body">
                                        <h6>John Doe <small><i>01 Jan 2045 at 12:00pm</i></small></h6>
                                        <p>Diam amet duo labore stet elitr ea clita ipsum, tempor labore accusam ipsum
                                            et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum.
                                            Gubergren clita aliquyam consetetur, at tempor amet ipsum diam tempor at
                                            sit.</p>
                                        <button class="btn btn-sm btn-secondary">Reply</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Comment Form -->
                    <div class="bg-secondary rounded p-5" data-aos="fade-up">
                        <h3 class="text-uppercase mb-4" style="letter-spacing: 5px;">Leave a comment</h3>
                        <form>
                            <div class="form-group">
                                <label for="name">Name *</label>
                                <input type="text" class="form-control border-0" id="name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email *</label>
                                <input type="email" class="form-control border-0" id="email">
                            </div>
                            <div class="form-group">
                                <label for="website">Website</label>
                                <input type="url" class="form-control border-0" id="website">
                            </div>

                            <div class="form-group">
                                <label for="message">Message *</label>
                                <textarea id="message" cols="30" rows="5" class="form-control border-0"></textarea>
                            </div>
                            <div class="form-group mb-0">
                                <input type="submit" value="Leave Comment"
                                    class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold">
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-4 mt-5 mt-lg-0">
                    <!-- Author Bio -->
                    <div class="d-flex flex-column text-center bg-secondary rounded mb-5 py-5 px-4" data-aos="fade-right">
                        <img src="{{ asset('asset/img/user.jpg') }}" class="img-fluid rounded-circle mx-auto mb-3"
                            style="width: 100px;">
                        <h3 class="text-primary mb-3">John Doe</h3>
                        <p>Conset elitr erat vero dolor ipsum et diam, eos dolor lorem ipsum, ipsum ipsum sit no ut
                            est. Guber ea ipsum erat kasd amet est elitr ea sit.</p>
                        <div class="d-flex justify-content-center">
                            <a class="text-primary px-2" href="">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a class="text-primary px-2" href="">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a class="text-primary px-2" href="">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a class="text-primary px-2" href="">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a class="text-primary px-2" href="">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Category List -->
                    <div class="mb-5" data-aos="fade-left">
                        <h3 class="text-uppercase mb-4" style="letter-spacing: 5px;">Categories</h3>
                        <div class="d-flex flex-wrap m-n1">
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Politics</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Business</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Corporate</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Sports</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Health</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Education</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Science</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Technology</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Foods</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Entertainment</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Travel</a>
                        </div>
                    </div>

                    <!-- Related Posts -->
                    <div class="mb-5" data-aos="fade-right">
                        <h3 class="text-uppercase mb-4" style="letter-spacing: 5px;">Related Post</h3>
                        <a class="d-flex align-items-center text-decoration-none bg-secondary rounded mb-3 overflow-hidden"
                            href="">
                            <img class="img-fluid" src="{{ asset('asset/img/blog-1.jpg') }}" style="width: 100px;"
                                alt="">
                            <div class="pl-3">
                                <h6 class="text-uppercase">Diam amet eos at no eos</h6>
                                <span>Jan 01, 2050</span>
                            </div>
                        </a>
                        <a class="d-flex align-items-center text-decoration-none bg-secondary rounded mb-3 overflow-hidden"
                            href="">
                            <img class="img-fluid" src="{{ asset('asset/img/blog-2.jpg') }}" style="width: 100px;"
                                alt="">
                            <div class="pl-3">
                                <h6 class="text-uppercase">Diam amet eos at no eos</h6>
                                <span>Jan 01, 2050</span>
                            </div>
                        </a>
                        <a class="d-flex align-items-center text-decoration-none bg-secondary rounded mb-3 overflow-hidden"
                            href="">
                            <img class="img-fluid" src="{{ asset('asset/img/blog-3.jpg') }}" style="width: 100px;"
                                alt="">
                            <div class="pl-3">
                                <h6 class="text-uppercase">Diam amet eos at no eos</h6>
                                <span>Jan 01, 2050</span>
                            </div>
                        </a>
                    </div>

                    <!-- Tag Cloud -->
                    <div class="mb-5" data-aos="fade-up">
                        <h3 class="text-uppercase mb-4" style="letter-spacing: 5px;">Tag Cloud</h3>
                        <div class="d-flex flex-wrap m-n1">
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Design</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Development</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Marketing</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">SEO</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Writing</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Consulting</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Design</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Development</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Marketing</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">SEO</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Writing</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Consulting</a>
                        </div>
                    </div>

                    <!-- Plain Text -->
                    <div data-aos="fade-right">
                        <h3 class="text-uppercase mb-4" style="letter-spacing: 5px;">Plain Text</h3>
                        <div class="bg-secondary text-center" style="padding: 30px;">
                            <p>Vero sea et accusam justo dolor accusam lorem consetetur, dolores sit amet sit dolor clita
                                kasd justo, diam accusam no sea ut tempor magna takimata, amet sit et diam dolor ipsum
                                amet diam</p>
                            <a href="" class="btn btn-primary py-2 px-4">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Detail End -->
@endsection
