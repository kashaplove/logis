<!DOCTYPE html>
<html lang="en">
<head>
    <title>Logistics &mdash; Colorlib Website Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900|Display+Playfair:200,300,400,700">
    <link rel="stylesheet" href="{{ asset('fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css') }}">

    <link rel="stylesheet" href="{{ asset('fonts/flaticon/font/flaticon.css') }}">


    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="200">

<!-- <div class="site-wrap"> -->

<div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
        </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div>

<header class="site-navbar py-3 js-site-navbar site-navbar-target" role="banner" id="site-navbar">

    <div class="container">
        <div class="row align-items-center">

            <div class="col-11 col-xl-2 site-logo">
                <h1 class="mb-0"><a href="index.html" class="text-white h2 mb-0">Logis</a></h1>
            </div>
            <div class="col-12 col-md-10 d-none d-xl-block navbar-collapse">
                <nav class="site-navigation position-relative text-right" role="navigation">

                    <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block navbar">
                        <li><a href="#section-home" class="nav-link">Home</a></li>
                        <li class="has-children">
                            <a href="#section-about" class="nav-link">About Us</a>
                            <ul class="dropdown">
                                <li><a href="#section-how-it-works" class="nav-link">How It Works</a></li>
                                <li><a href="#section-our-team" class="nav-link">Our Team</a></li>
                            </ul>
                        </li>
                        <li><a href="#section-services" class="nav-link">Services</a></li>
                        <li><a href="#section-industries" class="nav-link">Industries</a></li>
                        <li><a href="#section-blog" class="nav-link">Blog</a></li>
                        <li><a href="#section-contact" class="nav-link">Contact</a></li>
                        @can('view', auth()->user())

                        @endcan
                        <li class="has-children">
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    ADMIN
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a href="{{ route('admin.main') }}" class="dropdown-item">
                                        Admin
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endguest
                        </li>
                    </ul>
                </nav>
            </div>


            <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#"
                                                                                                                class="site-menu-toggle js-menu-toggle"><span
                        class="icon-menu h3"></span></a></div>

        </div>

    </div>
    </div>

</header>


<div class="site-blocks-cover overlay" style="background-image: url({{ asset('images/hero_bg_2.jpg') }});"
     data-aos="fade" data-stellar-background-ratio="0.5" id="section-home">
    <div class="container">
        <div class="row align-items-center justify-content-center text-center">

            <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">


                <h1 class="text-white font-weight-light text-uppercase font-weight-bold" data-aos="fade-up">We Make
                    Shipping</h1>
                <p class="mb-5" data-aos="fade-up" data-aos-delay="100">A Logistics Company</p>
                <p data-aos="fade-up" data-aos-delay="200"><a href="#"
                                                              class="btn btn-primary py-3 px-5 text-white">Get
                        Started!</a></p>

            </div>
        </div>
    </div>
</div>

<div class="site-section" id="section-about">
    <div class="container">
        <div class="row mb-5">

            <div class="col-md-5 ml-auto mb-5 order-md-2" data-aos="fade-up" data-aos-delay="100">
                <img src="images/img_3.jpg" alt="Image" class="img-fluid rounded">
            </div>
            <div class="col-md-6 order-md-1" data-aos="fade-up">
                <div class="text-left pb-1 border-primary mb-4">
                    <h2 class="text-primary">About Us</h2>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis deleniti reprehenderit animi est
                    eaque corporis! Nisi, asperiores nam amet doloribus, soluta ut reiciendis. Consequatur modi rem,
                    vero eos ipsam voluptas.</p>
                <p class="mb-5">Error minus sint nobis dolor laborum architecto, quaerat. Voluptatum porro expedita
                    labore esse velit veniam laborum quo obcaecati similique iusto delectus quasi!</p>

                <ul class="ul-check list-unstyled success">
                    <li>Error minus sint nobis dolor</li>
                    <li>Voluptatum porro expedita labore esse</li>
                    <li>Voluptas unde sit pariatur earum</li>
                </ul>

            </div>

        </div>
    </div>
</div>

<div class="site-section bg-image overlay" style="background-image: url({{ asset('images/hero_bg_4.jpg') }});"
     id="section-how-it-works">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center border-primary">
                <h2 class="font-weight-light text-primary" data-aos="fade">How It Works</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
                <div class="how-it-work-item">
                    <span class="number">1</span>
                    <div class="how-it-work-body">
                        <h2>Make An Order</h2>
                        <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt praesentium
                            dicta consectetur fuga neque fugit a at. Cum quod vero assumenda iusto.</p>
                        <ul class="ul-check list-unstyled success">
                            <li class="text-white">Error minus sint nobis dolor</li>
                            <li class="text-white">Voluptatum porro expedita labore esse</li>
                            <li class="text-white">Voluptas unde sit pariatur earum</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
                <div class="how-it-work-item">
                    <span class="number">2</span>
                    <div class="how-it-work-body">
                        <h2>Make A Payment</h2>
                        <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt praesentium
                            dicta consectetur fuga neque fugit a at. Cum quod vero assumenda iusto.</p>
                        <ul class="ul-check list-unstyled success">
                            <li class="text-white">Error minus sint nobis dolor</li>
                            <li class="text-white">Voluptatum porro expedita labore esse</li>
                            <li class="text-white">Voluptas unde sit pariatur earum</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="300">
                <div class="how-it-work-item">
                    <span class="number">3</span>
                    <div class="how-it-work-body">
                        <h2>Track Your Order</h2>
                        <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt praesentium
                            dicta consectetur fuga neque fugit a at. Cum quod vero assumenda iusto.</p>
                        <ul class="ul-check list-unstyled success">
                            <li class="text-white">Error minus sint nobis dolor</li>
                            <li class="text-white">Voluptatum porro expedita labore esse</li>
                            <li class="text-white">Voluptas unde sit pariatur earum</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="site-section border-bottom" id="section-our-team">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center border-primary">
                <h2 class="font-weight-light text-primary" data-aos="fade">Our Team</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
                <div class="person">
                    <img src="images/person_1.jpg" alt="Image" class="img-fluid rounded mb-5 w-75 rounded-circle">
                    <h3>Christine Rooster</h3>
                    <p class="position text-muted">Co-Founder, President</p>
                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi at consequatur unde
                        molestiae quidem provident voluptatum deleniti quo iste error eos est praesentium distinctio
                        cupiditate tempore suscipit inventore deserunt tenetur.</p>
                    <ul class="ul-social-circle">
                        <li><a href="#"><span class="icon-facebook"></span></a></li>
                        <li><a href="#"><span class="icon-twitter"></span></a></li>
                        <li><a href="#"><span class="icon-linkedin"></span></a></li>
                        <li><a href="#"><span class="icon-instagram"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
                <div class="person">
                    <img src="images/person_2.jpg" alt="Image" class="img-fluid rounded mb-5 w-75 rounded-circle">
                    <h3>Brandon Sharp</h3>
                    <p class="position text-muted">Co-Founder, COO</p>
                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi at consequatur unde
                        molestiae quidem provident voluptatum deleniti quo iste error eos est praesentium distinctio
                        cupiditate tempore suscipit inventore deserunt tenetur.</p>
                    <ul class="ul-social-circle">
                        <li><a href="#"><span class="icon-facebook"></span></a></li>
                        <li><a href="#"><span class="icon-twitter"></span></a></li>
                        <li><a href="#"><span class="icon-linkedin"></span></a></li>
                        <li><a href="#"><span class="icon-instagram"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="300">
                <div class="person">
                    <img src="images/person_4.jpg" alt="Image" class="img-fluid rounded mb-5 w-75 rounded-circle">
                    <h3>Connor Hodson</h3>
                    <p class="position text-muted">Marketing</p>
                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi at consequatur unde
                        molestiae quidem provident voluptatum deleniti quo iste error eos est praesentium distinctio
                        cupiditate tempore suscipit inventore deserunt tenetur.</p>
                    <ul class="ul-social-circle">
                        <li><a href="#"><span class="icon-facebook"></span></a></li>
                        <li><a href="#"><span class="icon-twitter"></span></a></li>
                        <li><a href="#"><span class="icon-linkedin"></span></a></li>
                        <li><a href="#"><span class="icon-instagram"></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="site-section bg-light" id="section-services">
    <div class="container">
        <div class="row justify-content-center mb-5" data-aos="fade-up">
            <div class="col-md-7 text-center border-primary">
                <h2 class="mb-0 text-primary">Our Services</h2>
                <p class="color-black-opacity-5">Lorem ipsum dolor sit amet.</p>
            </div>
        </div>
        <div class="row align-items-stretch">
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">
                <div class="unit-4 d-flex">
                    <div class="unit-4-icon mr-4"><span class="text-primary flaticon-plane"></span></div>
                    <div>
                        <h3>Air Freight</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae
                            eligendi at.</p>
                        <p><a href="#">Learn More</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="unit-4 d-flex">
                    <div class="unit-4-icon mr-4"><span class="text-primary flaticon-boat-ship"></span></div>
                    <div>
                        <h3>Ocean Freight</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae
                            eligendi at.</p>
                        <p><a href="#">Learn More</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="unit-4 d-flex">
                    <div class="unit-4-icon mr-4"><span class="text-primary flaticon-truck"></span></div>
                    <div>
                        <h3>Land Transportation</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae
                            eligendi at.</p>
                        <p><a href="#">Learn More</a></p>
                    </div>
                </div>
            </div>


            <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="300">
                <div class="unit-4 d-flex">
                    <div class="unit-4-icon mr-4"><span class="text-primary flaticon-warehouse"></span></div>
                    <div>
                        <h3>Warehousing</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae
                            eligendi at.</p>
                        <p><a href="#">Learn More</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="400">
                <div class="unit-4 d-flex">
                    <div class="unit-4-icon mr-4"><span class="text-primary flaticon-wooden"></span></div>
                    <div>
                        <h3>Storage</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae
                            eligendi at.</p>
                        <p><a href="#">Learn More</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="500">
                <div class="unit-4 d-flex">
                    <div class="unit-4-icon mr-4"><span class="text-primary flaticon-worldwide"></span></div>
                    <div>
                        <h3>Worldwide Delivery</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae
                            eligendi at.</p>
                        <p><a href="#">Learn More</a></p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<div class="site-section block-13" id="section-industries">

    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center border-primary">
                <h2 class="mb-0 text-primary">Industries</h2>
                <p class="color-black-opacity-5">Lorem ipsum dolor sit amet.</p>
            </div>
        </div>
    </div>

    <div class="owl-carousel nonloop-block-13">
        <div>
            <a href="#" class="unit-1 text-center">
                <img src="images/img_1.jpg" alt="Image" class="img-fluid">
                <div class="unit-1-text">
                    <h3 class="unit-1-heading">Storage</h3>
                </div>
            </a>
        </div>

        <div>
            <a href="#" class="unit-1 text-center">
                <img src="images/img_2.jpg" alt="Image" class="img-fluid">
                <div class="unit-1-text">
                    <h3 class="unit-1-heading">Air Transports</h3>
                </div>
            </a>
        </div>

        <div>
            <a href="#" class="unit-1 text-center">
                <img src="images/img_3.jpg" alt="Image" class="img-fluid">
                <div class="unit-1-text">
                    <h3 class="unit-1-heading">Cargo Transports</h3>
                </div>
            </a>
        </div>

        <div>
            <a href="#" class="unit-1 text-center">
                <img src="images/img_4.jpg" alt="Image" class="img-fluid">
                <div class="unit-1-text">
                    <h3 class="unit-1-heading">Cargo Ship</h3>
                </div>
            </a>
        </div>

        <div>
            <a href="#" class="unit-1 text-center">
                <img src="images/img_5.jpg" alt="Image" class="img-fluid">
                <div class="unit-1-text">
                    <h3 class="unit-1-heading">Ware Housing</h3>
                </div>
            </a>
        </div>


    </div>
</div>


<div class="site-blocks-cover overlay inner-page-cover"
     style="background-image: url({{ asset('images/hero_bg_2.jpg') }}); background-attachment: fixed;">
    <div class="container">
        <div class="row align-items-center justify-content-center text-center">

            <div class="col-md-7" data-aos="fade-up">
                <a href="https://vimeo.com/channels/staffpicks/93951774"
                   class="play-single-big mb-4 d-inline-block popup-vimeo"><span class="icon-play"></span></a>
                <h2 class="text-white font-weight-light mb-5 h1">Watch The Video</h2>
            </div>
        </div>
    </div>
</div>

<div class="site-section border-bottom">
    <div class="container">

        <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center border-primary">
                <h2 class="font-weight-light text-primary">Testimonials</h2>
            </div>
        </div>

        <div class="slide-one-item home-slider owl-carousel">
            <div>
                <div class="testimonial">
                    <figure class="mb-4">
                        <img src="images/person_1.jpg" alt="Image" class="img-fluid mb-3">

                    </figure>
                    <blockquote>
                        <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde
                            reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum
                            eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
                        <p class="author"> &mdash; John Trump</p>
                    </blockquote>
                </div>
            </div>
            <div>
                <div class="testimonial">
                    <figure class="mb-4">
                        <img src="images/person_2.jpg" alt="Image" class="img-fluid mb-3">

                    </figure>
                    <blockquote>
                        <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde
                            reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum
                            eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
                        <p class="author"> &mdash; Roger Moore</p>
                    </blockquote>
                </div>
            </div>

            <div>
                <div class="testimonial">
                    <figure class="mb-4">
                        <img src="images/person_4.jpg" alt="Image" class="img-fluid mb-3">
                    </figure>
                    <blockquote>
                        <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde
                            reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum
                            eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
                        <p class="author"> &mdash; Ben Carson</p>
                    </blockquote>
                </div>
            </div>

            <div>
                <div class="testimonial">
                    <figure class="mb-4">
                        <img src="images/person_5.jpg" alt="Image" class="img-fluid mb-3">
                    </figure>
                    <blockquote>
                        <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde
                            reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum
                            eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
                        <p class="author"> &mdash; Jed Smith</p>
                    </blockquote>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="site-section" id="section-blog">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center border-primary">
                <h2 class="font-weight-light text-primary">Our Blog</h2>
                <p class="color-black-opacity-5">See Our Daily News &amp; Updates</p>
            </div>
        </div>
        <div class="row mb-5 align-items-stretch">
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">
                <div class="h-entry">
                    <a href="single.html"><img src="images/blog_1.jpg" alt="Image" class="img-fluid"></a>
                    <h2 class="font-size-regular"><a href="single.html">How Logistics Company Improve Spendings</a></h2>
                    <div class="meta mb-4">by Jed Wilson <span class="mx-2">&bullet;</span> Jan 18, 2019 <span
                            class="mx-2">&bullet;</span> <a href="#">News</a></div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente
                        veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="h-entry">
                    <a href="single.html"><img src="images/blog_2.jpg" alt="Image" class="img-fluid"></a>
                    <h2 class="font-size-regular"><a href="single.html">How Logistics Company Improve Spendings</a></h2>
                    <div class="meta mb-4">by Jed Wilson <span class="mx-2">&bullet;</span> Jan 18, 2019 <span
                            class="mx-2">&bullet;</span> <a href="#">News</a></div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente
                        veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="h-entry">
                    <a href="single.html"><img src="images/blog_3.jpg" alt="Image" class="img-fluid"></a>
                    <h2 class="font-size-regular"><a href="single.html">How Logistics Company Improve Spendings</a></h2>
                    <div class="meta mb-4">by Jed Wilson <span class="mx-2">&bullet;</span> Jan 18, 2019 <span
                            class="mx-2">&bullet;</span> <a href="#">News</a></div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente
                        veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center" data-aos="fade-up" data-aos-delay="300">
                <p class="mb-0"><a href="https://free-template.co" class="btn btn-primary py-3 px-5 text-white">View All
                        Blog Posts</a></p>
            </div>
        </div>
    </div>
</div>
<div class="site-section bg-light" id="section-contact">
    <div class="container">
        @include('includes.message')
    </div>
</div>


<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-5 mr-auto">
                        <h2 class="footer-heading mb-4">About Us</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam iure deserunt ut architecto
                            dolores quo beatae laborum aliquam ipsam rem impedit obcaecati ea consequatur.</p>
                    </div>

                    <div class="col-md-3">
                        <h2 class="footer-heading mb-4">Quick Links</h2>
                        <ul class="list-unstyled">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Testimonials</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h2 class="footer-heading mb-4">Follow Us</h2>
                        <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                        <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                        <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                        <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <h2 class="footer-heading mb-4">Subscribe Newsletter</h2>
                <form action="#" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control border-secondary text-white bg-transparent"
                               placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary text-white" type="button" id="button-addon2">Send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
            <div class="col-md-12">
                <div class="border-top pt-5">
                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                        All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i>
                        by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>

        </div>
    </div>
</footer>
<!-- </div> -->

<script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
<script src="{{ asset('js/jquery-ui.js') }}"></script>
<script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
<script src="{{ asset('js/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('js/aos.js') }}"></script>

<script src="{{ asset('js/main.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
