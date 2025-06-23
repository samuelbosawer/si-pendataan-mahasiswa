
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content=" Sistem Informasi Pendaftaraan Anggota Baru Komunitas Mahasiwa Pelajar Puncak" />
    <meta name="keywords" content="Sistem Informasi Pendaftaraan Anggota Baru Komunitas Mahasiwa Pelajar Puncak" />
    <meta name="author" content="Sistem Informasi Pendaftaraan Anggota Baru Komunitas Mahasiwa Pelajar Puncak" />

    <!-- Site Title -->
    <title>
        Sistem Informasi Pendaftaraan Anggota Baru Komunitas Mahasiwa Pelajar Puncak
    </title>

    <!-- Site favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">

    <!-- Youtube Css -->
    <link rel="stylesheet" href="assets/css/ytplayer.css">

    <!-- Material Icon -->
    <link rel="stylesheet" type="text/css" href="assets/css/materialdesignicons.min.css" />

    <!-- Pe7 Icon -->
    <link rel="stylesheet" type="text/css" href="assets/css/pe-icon-7.css">

    <!-- Custom  Css -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.min.css" />

</head>

<body>

    <!--Navbar Start-->
    <nav class="navbar navbar-expand-lg fixed-top custom-nav sticky">
        <div class="container">
            <!-- LOGO -->
            <a class="logo navbar-brand" href="index.html">
                <img src="assets/images/logo.png" alt="" class="img-fluid logo-light">
                <img src="assets/images/logo-dark.png" alt="" class="img-fluid logo-dark">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <i class="mdi mdi-menu"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ms-auto navbar-center" id="mySidenav">
                    <li class="nav-item active">
                        <a href="#beranda" class="nav-link">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a href="#tentang" class="nav-link">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a href="#pendaftaran" class="nav-link">Pendaftaran</a>
                    </li>
                    <li class="nav-item">
                        <a href="#kontak" class="nav-link">Kontak</a>
                    </li>
                    <li class="nav-item">
                        <a href="#faq" class="nav-link">FAQ</a>
                    </li>
                      <li class="nav-item">
                        <a href="{{route('login')}}" class="nav-link">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!--Start Home-->
    <section class="bg-dark d-flex align-items-center min-vh-100" id="home">
        <div class="bg-overlay"></div>
        <a id="video" class="youtube-bg" data-property="{videoURL:'https://www.youtube.com/watch?v=mcoiQDC_DhY',containment:'#home', showControls:false, autoPlay:true, loop:true, mute:true, startAt:0, opacity:1, quality:'default'}"></a>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="text-white text-center">
                        {{-- <div class="mx-auto">
                            <button type="button" class="play-btn video_play mx-auto" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <i class="mdi mdi-play text-center"></i>
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-xl modal-dialog-centered">
                                    <div class="modal-content bg-transparent border-0">
                                        <div class="modal-body p-0 w-auto h-auto overflow-hidden d-inline-flex justify-content-center">
                                            <div>
                                                <div class="modal-header border-0">
                                                    <button type="button" class="bg-transparent border-0 ms-auto p-0 me-4 pe-5" data-bs-dismiss="modal" aria-label="Close"><i class="mdi mdi-close text-white fs-5"></i></button>
                                                </div>
                                                <iframe src="https://player.vimeo.com/video/99025203?h=0788a7a47b&title=0&byline=0&portrait=0&badge=0" width="990" height="460" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <h1 class="header_title mb-0 mt-4">  Bergabunglah Bersama Komunitas Mahasiswa Pelajar Puncak</h1>
                        <p class="header_subtitle pt-4 text-white mx-auto">Bangun relasi, kembangkan potensi, dan jadilah bagian dari gerakan perubahan positif untuk generasi Puncak.</p>
                        <div class="header_btn">
                            <a href="javascript:void(0)" class="btn btn-primary rounded-pill mt-4">Daftar Sekarang</a>
                            <a href="javascript:void(0)" class="btn btn-success rounded-pill mt-4">Pelajari Lebih Lanjut</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Home-->

    <!-- Start Features -->
    <section class="section" id="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h3 class="mb-0 text-capitalize">Tentang <span class="fw-bold">Kami</span></h3>
                        <div class="main-title-border bg-primary  mx-auto"></div>
                        <p class="text-secondary sec_subtitle mx-auto mt-2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                    </div>
                </div>
            </div>
            <div class="row mt-4 pt-4 vertical-content">
                <div class="col-lg-6">
                    <div class="mt-3">
                        <div>
                            <h2 class="features-heading">Create Something Totally & Amazing Professional Features.</h2>
                            <div class="main-title-border bg-primary "></div>
                        </div>
                        <div class="features position-relative">
                            <div class="features-icon float-start fs-18 position-absolute rounded-pill text-primary bg-primary bg-opacity-25 text-center">
                                <i class="mdi mdi-check"></i>
                            </div>
                            <div class="ms-5">
                                <h3 class="fs-18 fw-bold">Clean & Minimal Design</h3>
                                <p class="fs-15 pt-2 text-secondary">You want customer to your store. Easily publish your coupans and when a user has manage to catch one of your coupens.</p>
                            </div>
                        </div>

                        <div class="features position-relative">
                            <div class="features-icon float-start fs-18 position-absolute rounded-pill text-primary bg-primary bg-opacity-25 text-center">
                                <i class="mdi mdi-check"></i>
                            </div>
                            <div class="ms-5">
                                <h3 class="fs-18 fw-bold">Planing & Strategy</h3>
                                <p class="pt-2 text-secondary">You want customer to your store. Easily publish your coupans and when a user has manage to catch one of your coupens.</p>
                            </div>
                        </div>

                        <div class="features position-relative">
                            <div class="features-icon float-start fs-18 position-absolute rounded-pill text-primary bg-primary bg-opacity-25 text-center">
                                <i class="mdi mdi-check"></i>
                            </div>
                            <div class="ms-5">
                                <h3 class="fs-18 fw-bold">Elegant & Modern Design</h3>
                                <p class="pt-2 text-secondary">You want customer to your store. Easily publish your coupans and when a user has manage to catch one of your coupens.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mt-3">
                        <img src="assets/images/features.png" class="img-fluid mx-auto d-block" alt="" title="Features">
                    </div>
                </div>
            </div>
            <div class="row mt-4 pt-4 vertical-content">
                <div class="col-lg-6">
                    <div class="mt-3">
                        <img src="assets/images/features-2.png" class="img-fluid mx-auto d-block" alt="" title="Features">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mt-3">
                        <div>
                            <h2 class="features-heading">A digital web studio creating stunning & engaging online experiences.</h2>
                            <div class="main-title-border bg-primary "></div>
                        </div>
                        <div class="features position-relative">
                            <div class="features-icon float-start fs-18 position-absolute rounded-pill text-primary bg-primary bg-opacity-25 text-center">
                                <i class="mdi mdi-check"></i>
                            </div>
                            <div class="ms-5">
                                <h3 class="fs-18 fw-bold">Clean & Minimal Design</h3>
                                <p class="pt-2 text-secondary">You want customer to your store. Easily publish your coupans and when a user has manage to catch one of your coupens.</p>
                            </div>
                        </div>

                        <div class="features position-relative">
                            <div class="features-icon float-start fs-18 position-absolute rounded-pill text-primary bg-primary bg-opacity-25 text-center">
                                <i class="mdi mdi-check"></i>
                            </div>
                            <div class="ms-5">
                                <h3 class="fs-18 fw-bold">Elegant & Modern Design</h3>
                                <p class="pt-2 text-secondary">You want customer to your store. Easily publish your coupans and when a user has manage to catch one of your coupens.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Features -->

    <!-- Start Cta -->
    <section class="section bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h2 class="fw-bold">Are You Ready To Enjoy? Get This Perfect Theme Now!</h2>
                        <p class="text-secondary mx-auto cta-desc mt-4 pt-2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                        <div class="mt-4 pt-3">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary rounded-pill" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">Start Trial Free</button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModalCenter">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title mb-0 fw-bold" id="exampleModalLongTitle">Get 30 days FREE Trial</h5>
                                            <button type="button" class="close border-0 bg-transparent fs-4 text-secondary" data-bs-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="free-trial-form">
                                                <div class="form-group mb-3">
                                                    <input type="text" class="form-control" id="fname" placeholder="First Name">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <input type="email" class="form-control" id="semail" placeholder="Email">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <input type="text" class="form-control" id="cname" placeholder="Company Name">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <input type="text" class="form-control" id="mnumber" placeholder="Mobile Name">
                                                </div>
                                                <div>
                                                    <button class="btn btn-primary w-100">Sign Up</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Cta -->

    <!-- Start Services -->
    <section class="section" id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h3 class="mb-0 text-capitalize">Best <span class="fw-bold">Services</span></h3>
                        <div class="main-title-border bg-primary  mx-auto"></div>
                        <p class="text-secondary sec_subtitle mx-auto mt-2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                    </div>
                </div>
            </div>
            <div class="row mt-4 pt-4">
                <div class="col-lg-4">
                    <div class="services_boxes text-center mt-3">
                        <div class="services_icon">
                            <i class="pe-7s-display2 text-primary"></i>
                        </div>
                        <div class="services_desc mt-4">
                            <h5 class="fw-bold">Graphic Design</h5>
                            <p class="mt-3 text-secondary mb-3">The standard chunk of Lorem Ipsum used since the is reproduced below for those interested.</p>
                            <a href="javascript:void(0)" class="py-1 px-3 text-primary d-inline-block border border-1 border-secondary border-opacity-10">Read More <i class="mdi mdi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="services_boxes text-center mt-3">
                        <div class="services_icon">
                            <i class="pe-7s-paint text-primary"></i>
                        </div>
                        <div class="services_desc mt-4">
                            <h5 class="fw-bold">Unlimited Color</h5>
                            <p class="mt-3 text-secondary mb-3">The standard chunk of Lorem Ipsum used since the is reproduced below for those interested.</p>
                            <a href="javascript:void(0)" class="py-1 px-3 text-primary d-inline-block border border-1 border-secondary border-opacity-10">Read More <i class="mdi mdi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="services_boxes text-center mt-3">
                        <div class="services_icon">
                            <i class="pe-7s-graph1 text-primary"></i>
                        </div>
                        <div class="services_desc mt-4">
                            <h5 class="fw-bold">Media Marketing</h5>
                            <p class="mt-3 text-secondary mb-3">The standard chunk of Lorem Ipsum used since the is reproduced below for those interested.</p>
                            <a href="javascript:void(0)" class="py-1 px-3 text-primary d-inline-block border border-1 border-secondary border-opacity-10">Read More <i class="mdi mdi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-4">
                    <div class="services_boxes text-center mt-3">
                        <div class="services_icon">
                            <i class="pe-7s-signal text-primary"></i>
                        </div>
                        <div class="services_desc mt-4">
                            <h5 class="fw-bold">Unlimited Wifi</h5>
                            <p class="mt-3 text-secondary mb-3">The standard chunk of Lorem Ipsum used since the is reproduced below for those interested.</p>
                            <a href="javascript:void(0)" class="py-1 px-3 text-primary d-inline-block border border-1 border-secondary border-opacity-10">Read More <i class="mdi mdi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="services_boxes text-center mt-3">
                        <div class="services_icon">
                            <i class="pe-7s-phone text-primary"></i>
                        </div>
                        <div class="services_desc mt-4">
                            <h5 class="fw-bold">Responsive Design</h5>
                            <p class="mt-3 text-secondary mb-3">The standard chunk of Lorem Ipsum used since the is reproduced below for those interested.</p>
                            <a href="javascript:void(0)" class="py-1 px-3 text-primary d-inline-block border border-1 border-secondary border-opacity-10">Read More <i class="mdi mdi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="services_boxes text-center mt-3">
                        <div class="services_icon">
                            <i class="pe-7s-tools text-primary"></i>
                        </div>
                        <div class="services_desc mt-4">
                            <h5 class="fw-bold">Easy to customize</h5>
                            <p class="mt-3 text-secondary mb-3">The standard chunk of Lorem Ipsum used since the is reproduced below for those interested.</p>
                            <a href="javascript:void(0)" class="py-1 px-3 text-primary d-inline-block border border-1 border-secondary border-opacity-10">Read More <i class="mdi mdi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Services -->

    <!-- Start How It Work -->
    <section class="section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h3 class="mb-0 text-capitalize">How It <span class="fw-bold">Work?</span></h3>
                        <div class="main-title-border bg-primary mx-auto"></div>
                        <p class="text-secondary mx-auto mt-2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                    </div>
                </div>
            </div>
            <div class="row mt-4 pt-4">
                <div class="col-lg-4 position-relative">
                    <div class="text-center mt-3 p-3">
                        <div class="work_number fs-80 position-absolute start-0 end-0">1.</div>
                        <div class="z-index position-relative">
                            <div class="fs-1">
                                <i class="pe-7s-network text-primary"></i>
                            </div>
                            <div class="work_content mt-4">
                                <h5 class="fw-bold">Design & Devloping</h5>
                                <p class="mt-3 text-secondary mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 position-relative">
                    <div class="text-center work_border_left border-1 border-start border-secondary border-opacity-25 mt-3 p-3">
                        <div class="work_number fs-80 position-absolute start-0 end-0">2.</div>
                        <div class="z-index position-relative">
                            <div class="fs-1">
                                <i class="pe-7s-light text-primary"></i>
                            </div>
                            <div class="work_content mt-4">
                                <h5 class="fw-bold">Testing Project</h5>
                                <p class="mt-3 text-secondary mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 position-relative">
                    <div class="text-center work_border_left border-1 border-start border-secondary border-opacity-25 mt-3 p-3">
                        <div class="work_number fs-80 position-absolute start-0 end-0">3.</div>
                        <div class="z-index position-relative">
                            <div class="fs-1">
                                <i class="pe-7s-cloud-upload text-primary"></i>
                            </div>
                            <div class="work_content mt-4">
                                <h5 class="fw-bold">Publisher Project</h5>
                                <p class="mt-3 text-secondary mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End How It Work -->

    <!-- Start Video -->
    <section class="section bg-video">
        <div class="bg-overlay"></div>
        <div class="container position-relative">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h3 class="mb-0 text-capitalize text-white">Watch The <span class="fw-bold">Video</span></h3>
                        <div class="main-title-border bg-primary  mx-auto"></div>
                        <p class="text-white sec_subtitle mx-auto mt-2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                    </div>
                </div>
            </div>
            <div class="row mt-4 pt-4">
                <div class="col-lg-12">
                    <div class="mx-auto">
                        <div class="video-btn-white text-center">
                            <a href="#video-play" class="play-btn-white video_play mx-auto>
                                <button id=" video-play" type="button" class="bg-transparent border-0 m-0 p-0 mx-auto" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                                <i class="mdi mdi-play text-center text-white"></i>
                                </button>
                                <span>Watch Intro Video</span>
                            </a>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModal1Label" aria-hidden="true">
                            <div class="modal-dialog modal-xl modal-dialog-centered">
                                <div class="modal-content bg-transparent border-0">
                                    <div class="modal-body p-0 w-auto h-auto overflow-hidden d-inline-flex justify-content-center">
                                        <div>
                                            <div class="modal-header border-0">
                                                <button type="button" class="bg-transparent text-white border-0 ms-auto p-0 me-4 pe-5" data-bs-dismiss="modal" aria-label="Close"><i class="mdi mdi-close text-white fs-5"></i></button>
                                            </div>
                                            <iframe src="https://player.vimeo.com/video/99025203?h=0788a7a47b&title=0&byline=0&portrait=0&badge=0" width="990" height="460" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Video -->

    <!-- Start Client -->
    <section class="section bg-light" id="client">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h3 class="mb-0 text-capitalize">Our <span class="fw-bold">Client</span></h3>
                        <div class="main-title-border bg-primary  mx-auto"></div>
                        <p class="text-secondary sec_subtitle mx-auto mt-2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                    </div>
                </div>
            </div>
            <div class="row mt-4 pt-4">
                <div class="col-lg-4">
                    <div class="testi_boxes bg-white p-4 mt-3 rounded">
                        <div class="testi_icon text-primary">
                            <i class="mdi mdi-format-quote-open fs-64 d-inline-block bg-primary bg-opacity-10"></i>
                        </div>
                        <div class="mt-4">
                            <p class="client_review text-secondary mb-0 fst-italic">" Aenean a congue sem. In vulputate iaculis nunc, sed scelerisque turpis condimentum id. Donec ut tortor bibendum posuere."</p>
                            <h5 class="fs-17 mb-0 mt-4 fw-bold">- Barry Harris, Envato</h5>
                            <p class="text-primary ms-2 ps-1 mb-0">Co-Founder</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testi_boxes bg-white p-4 mt-3 rounded">
                        <div class="testi_icon text-primary">
                            <i class="mdi mdi-format-quote-open fs-64 d-inline-block bg-primary bg-opacity-10"></i>
                        </div>
                        <div class="mt-4">
                            <p class="client_review text-secondary mb-0 fst-italic">" Aenean a congue sem. In vulputate iaculis nunc, sed scelerisque turpis condimentum id. Donec ut tortor bibendum posuere."</p>
                            <h5 class="fs-17 mb-0 mt-4 fw-bold">- Walter Chavez, Envato</h5>
                            <p class="text-primary ms-2 ps-1 mb-0">Web Designer</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testi_boxes bg-white p-4 mt-3 rounded">
                        <div class="testi_icon text-primary">
                            <i class="mdi mdi-format-quote-open fs-64 d-inline-block bg-primary bg-opacity-10"></i>
                        </div>
                        <div class="mt-4">
                            <p class="client_review text-secondary mb-0 fst-italic">" Aenean a congue sem. In vulputate iaculis nunc, sed scelerisque turpis condimentum id. Donec ut tortor bibendum posuere."</p>
                            <h5 class="fs-17 mb-0 mt-4 fw-bold">- Ebony verty, Envato</h5>
                            <p class="text-primary ms-2 ps-1 mb-0">Web Devloper</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Client -->

    <!-- Start Team -->
    <section class="section" id="team">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h3 class="mb-0 text-capitalize">Meet Our <span class="fw-bold">Team</span></h3>
                        <div class="main-title-border bg-primary  mx-auto"></div>
                        <p class="text-secondary sec_subtitle mx-auto mt-2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                    </div>
                </div>
            </div>
            <div class="row mt-4 pt-4">
                <div class="col-lg-3">
                    <div class="team_box rounded text-center mt-3 p-4">
                        <img src="assets/images/team/team-1.jpg" alt="" class="rounded-circle img-fluid mx-auto d-block img-thumbnail">
                        <div class="mt-3">
                            <h5 class="mb-0 fw-bold fs-18">@Scott Ross</h5>
                            <p class="text-secondary team_work fs-14">CEO/Founder</p>
                            <a class="follow_btn d-inline-flex text-primary rounded-pill bg-primary bg-opacity-10" data-bs-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample">Scott Follow Click Me</a>
                            <div class="collapse" id="collapseExample1">
                                <div class="mt-3">
                                    <ul class="list-inline team_social mt-4 mb-0 text-center">
                                        <li class="list-inline-item"><a class="text-dark d-inline-block rounded-pill text-center border border-1 border-secondary border-opacity-25" href="javascript:void(0)"><i class="mdi mdi-facebook"></i></a></li>
                                        <li class="list-inline-item"><a class="text-dark d-inline-block rounded-pill text-center border border-1 border-secondary border-opacity-25" href="javascript:void(0)"><i class="mdi mdi-google"></i></a></li>
                                        <li class="list-inline-item"><a class="text-dark d-inline-block rounded-pill text-center border border-1 border-secondary border-opacity-25" href="javascript:void(0)"><i class="mdi mdi-twitter"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="team_box rounded text-center mt-3 p-4">
                        <img src="assets/images/team/team-2.jpg" alt="" class="rounded-circle img-fluid mx-auto d-block img-thumbnail">
                        <div class="mt-3">
                            <h5 class="mb-0 fw-bold fs-18">@Kevin Strauser</h5>
                            <p class="text-secondary team_work fs-14">CTO/Co-Founder</p>
                            <a class="follow_btn d-inline-flex text-primary rounded-pill bg-primary bg-opacity-10" data-bs-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample">Kevin Follow Click Me</a>
                            <div class="collapse" id="collapseExample2">
                                <div class="mt-3">
                                    <ul class="list-inline team_social mt-4 mb-0 text-center">
                                        <li class="list-inline-item"><a class="text-dark d-inline-block rounded-pill text-center border border-1 border-secondary border-opacity-25" href="javascript:void(0)"><i class="mdi mdi-facebook"></i></a></li>
                                        <li class="list-inline-item"><a class="text-dark d-inline-block rounded-pill text-center border border-1 border-secondary border-opacity-25" href="javascript:void(0)"><i class="mdi mdi-google"></i></a></li>
                                        <li class="list-inline-item"><a class="text-dark d-inline-block rounded-pill text-center border border-1 border-secondary border-opacity-25" href="javascript:void(0)"><i class="mdi mdi-twitter"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="team_box rounded text-center mt-3 p-4">
                        <img src="assets/images/team/team-3.jpg" alt="" class="rounded-circle img-fluid mx-auto d-block img-thumbnail">
                        <div class="mt-3">
                            <h5 class="mb-0 fw-bold fs-18">@Teresa Morrison</h5>
                            <p class="text-secondary team_work fs-14">Web Designer</p>
                            <a class="follow_btn d-inline-flex text-primary rounded-pill bg-primary bg-opacity-10" data-bs-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample">Teresa Follow Click Me</a>
                            <div class="collapse" id="collapseExample3">
                                <div class="mt-3">
                                    <ul class="list-inline team_social mt-4 mb-0 text-center">
                                        <li class="list-inline-item"><a class="text-dark d-inline-block rounded-pill text-center border border-1 border-secondary border-opacity-25" href="javascript:void(0)"><i class="mdi mdi-facebook"></i></a></li>
                                        <li class="list-inline-item"><a class="text-dark d-inline-block rounded-pill text-center border border-1 border-secondary border-opacity-25" href="javascript:void(0)"><i class="mdi mdi-google"></i></a></li>
                                        <li class="list-inline-item"><a class="text-dark d-inline-block rounded-pill text-center border border-1 border-secondary border-opacity-25" href="javascript:void(0)"><i class="mdi mdi-twitter"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="team_box rounded text-center mt-3 p-4">
                        <img src="assets/images/team/team-4.jpg" alt="" class="rounded-circle img-fluid mx-auto d-block img-thumbnail">
                        <div class="mt-3">
                            <h5 class="mb-0 fw-bold fs-18">@Eunice Spaulding</h5>
                            <p class="text-secondary team_work fs-14">Web Developer</p>
                            <a class="follow_btn d-inline-flex text-primary rounded-pill bg-primary bg-opacity-10" data-bs-toggle="collapse" href="#collapseExample4" role="button" aria-expanded="false" aria-controls="collapseExample">Eunice Follow Click Me</a>
                            <div class="collapse" id="collapseExample4">
                                <div class="mt-3">
                                    <ul class="list-inline team_social mt-4 mb-0 text-center">
                                        <li class="list-inline-item"><a class="text-dark d-inline-block rounded-pill text-center border border-1 border-secondary border-opacity-25" href="javascript:void(0)"><i class="mdi mdi-facebook"></i></a></li>
                                        <li class="list-inline-item"><a class="text-dark d-inline-block rounded-pill text-center border border-1 border-secondary border-opacity-25" href="javascript:void(0)"><i class="mdi mdi-google"></i></a></li>
                                        <li class="list-inline-item"><a class="text-dark d-inline-block rounded-pill text-center border border-1 border-secondary border-opacity-25" href="javascript:void(0)"><i class="mdi mdi-twitter"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Team -->

    <!-- Start Price -->
    <section class="section bg-light" id="price">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h3 class="mb-0 text-capitalize">Our <span class="fw-bold">Pricing</span></h3>
                        <div class="main-title-border bg-primary  mx-auto"></div>
                        <p class="text-secondary sec_subtitle mx-auto mt-2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                    </div>
                </div>
            </div>
            <div class="row mt-4 pt-4">
                <div class="col-lg-4">
                    <div class="mt-3 price_box border border-1 border-secondary border-opacity-10 rounded bg-white">
                        <div class="price_name text-center">
                            <h4 class="mb-0 fw-bold">Single Use</h4>
                        </div>
                        <div class="plan_price text-center">
                            <h1 class="mb-0 fs-56 text-primary">$29</h1>
                            <h6 class="text-secondary fw-bold">Per Month</h6>
                        </div>
                        <div class="price_divider"></div>
                        <div class="price_features">
                            <p><i class="mdi mdi-check icon-success text-primary bg-primary bg-opacity-10"></i> Bandwidth: <span class="fw-bold">1GB</span></p>
                            <p><i class="mdi mdi-check icon-success text-primary bg-primary bg-opacity-10"></i> Onlinespace: <span class="fw-bold">500MB</span></p>
                            <p><i class="mdi mdi-close icon-danger text-danger bg-danger bg-danger bg-opacity-10"></i> Support: <span class="fw-bold">No</span></p>
                            <p><i class="mdi mdi-check icon-success text-primary bg-primary bg-opacity-10"></i> Domain: <span class="fw-bold">1</span></p>
                            <p><i class="mdi mdi-close icon-danger text-danger bg-danger bg-danger bg-opacity-10"></i> Hidden Fees: <span class="fw-bold">No</span></p>
                        </div>
                        <div class="text-center mt-5">
                            <a href="javascript:void(0)" class="btn btn-outline-primary">Join Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="mt-3 price_box border border-1 border-secondary border-opacity-10 rounded bg-white">
                        <div class="price_name text-center">
                            <h4 class="mb-0 fw-bold">Multiple Use</h4>
                        </div>
                        <div class="plan_price text-center">
                            <h1 class="mb-0 fs-56 text-primary">$39</h1>
                            <h6 class="text-secondary fw-bold">Per Month</h6>
                        </div>
                        <div class="price_divider"></div>
                        <div class="price_features">
                            <p><i class="mdi mdi-check icon-success text-primary bg-primary bg-opacity-10"></i> Bandwidth: <span class="fw-bold">2GB</span></p>
                            <p><i class="mdi mdi-check icon-success text-primary bg-primary bg-opacity-10"></i> Onlinespace: <span class="fw-bold">1GB</span></p>
                            <p><i class="mdi mdi-check icon-success text-primary bg-primary bg-opacity-10"></i> Support: <span class="fw-bold">Yes</span></p>
                            <p><i class="mdi mdi-check icon-success text-primary bg-primary bg-opacity-10"></i> Domain: <span class="fw-bold">3</span></p>
                            <p><i class="mdi mdi-close icon-danger text-danger bg-danger bg-danger bg-opacity-10"></i> Hidden Fees: <span class="fw-bold">No</span></p>
                        </div>
                        <div class="text-center mt-5">
                            <a href="javascript:void(0)" class="btn btn-primary">Join Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="mt-3 price_box border border-1 border-secondary border-opacity-10 rounded bg-white">
                        <div class="price_name text-center">
                            <h4 class="mb-0 fw-bold">Extended Use</h4>
                        </div>
                        <div class="plan_price text-center">
                            <h1 class="mb-0 fs-56 text-primary">$49</h1>
                            <h6 class="text-secondary fw-bold">Per Month</h6>
                        </div>
                        <div class="price_divider"></div>
                        <div class="price_features">
                            <p><i class="mdi mdi-check icon-success text-primary bg-primary bg-opacity-10"></i> Bandwidth: <span class="fw-bold">3GB</span></p>
                            <p><i class="mdi mdi-check icon-success text-primary bg-primary bg-opacity-10"></i> Onlinespace: <span class="fw-bold">2GB</span></p>
                            <p><i class="mdi mdi-check icon-success text-primary bg-primary bg-opacity-10"></i> Support: <span class="fw-bold">Yes</span></p>
                            <p><i class="mdi mdi-check icon-success text-primary bg-primary bg-opacity-10"></i> Domain: <span class="fw-bold">Unlimited</span></p>
                            <p><i class="mdi mdi-close icon-danger text-danger bg-danger bg-danger bg-opacity-10"></i> Hidden Fees: <span class="fw-bold">No</span></p>
                        </div>
                        <div class="text-center mt-5">
                            <a href="javascript:void(0)" class="btn btn-outline-primary">Join Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Price -->

    <!-- Start FAQ -->
    <section class="section" id="faq">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h3 class="mb-0 text-capitalize">Frequently Asked <span class="fw-bold">Questions</span></h3>
                        <div class="main-title-border bg-primary mx-auto"></div>
                        <p class="text-secondary sec_subtitle mx-auto mt-2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                    </div>
                </div>
            </div>
            <div class="row mt-4 pt-4">
                <div class="col-lg-4">
                    <div class="p-3">
                        <div class="faq_number">
                            <h2 class="fw-bold text-primary mb-0">01.</h2>
                        </div>
                        <div class="mt-2">
                            <p class="text-secondary fs-13 mb-0">For User</p>
                            <h5 class="fs-18 fw-bold">When can be used?</h5>
                            <p class="text-secondary">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="p-3">
                        <div class="faq_number">
                            <h2 class="fw-bold text-primary mb-0">02.</h2>
                        </div>
                        <div class="mt-2">
                            <p class="text-secondary fs-13 mb-0">For User</p>
                            <h5 class="fs-18 fw-bold"> What is Item Support?</h5>
                            <p class="text-secondary">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="p-3">
                        <div class="faq_number">
                            <h2 class="fw-bold text-primary mb-0">03.</h2>
                        </div>
                        <div class="mt-2">
                            <p class="text-secondary fs-13 mb-0">For User</p>
                            <h5 class="fs-18 fw-bold">Where Is My Purchase Code?</h5>
                            <p class="text-secondary">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-4">
                    <div class="p-3">
                        <div class="faq_number">
                            <h2 class="fw-bold text-primary mb-0">04.</h2>
                        </div>
                        <div class="mt-2">
                            <p class="text-secondary fs-13 mb-0">For Advertiser</p>
                            <h5 class="fs-18 fw-bold">How to Contact an Author?</h5>
                            <p class="text-secondary">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="p-3">
                        <div class="faq_number">
                            <h2 class="fw-bold text-primary mb-0">05.</h2>
                        </div>
                        <div class="mt-2">
                            <p class="text-secondary fs-13 mb-0">For Advertiser</p>
                            <h5 class="fs-18 fw-bold">What is Lorem Ipsum?</h5>
                            <p class="text-secondary">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="p-3">
                        <div class="faq_number">
                            <h2 class="fw-bold text-primary mb-0">06.</h2>
                        </div>
                        <div class="mt-2">
                            <p class="text-secondary fs-13 mb-0">For Advertiser</p>
                            <h5 class="fs-18 fw-bold"> Why use Lorem Ipsum?</h5>
                            <p class="text-secondary">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End FAQ -->

    <!-- START CTA -->
    <section class="section bg-cta-img">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center text-white position-relative">
                        <h2 class="fw-bold">Let's get started with Brezon</h2>
                        <p class="mx-auto cta-desc mt-4 pt-2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                        <div class="mt-4 pt-3">
                            <a href="javascript:void(0)" class="btn btn-primary rounded-pill">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END CTA -->

    <!-- Start Contact -->
    <section class="section" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h3 class="mb-0 text-capitalize">Get In <span class="fw-bold">Tuch</span></h3>
                        <div class="main-title-border bg-primary  mx-auto"></div>
                        <p class="text-secondary sec_subtitle mx-auto mt-2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                    </div>
                </div>
            </div>
            <div class="row mt-4 pt-2">
                <div class="col-lg-4">
                    <div class="text-center mt-3">
                        <div>
                            <i class="pe-7s-call text-primary h2"></i>
                        </div>
                        <div class="mt-2">
                            <p class="mb-0 fw-bold">Call Us On</p>
                            <p class="text-secondary">+985 123 7856</p>
                        </div>
                    </div>
                    <div class="text-center mt-3">
                        <div>
                            <i class="pe-7s-mail text-primary h2"></i>
                        </div>
                        <div class="mt-2">
                            <p class="mb-0 fw-bold">Email Us At</p>
                            <p class="text-secondary">exmaple@gmail.com</p>
                        </div>
                    </div>
                    <div class="text-center mt-3">
                        <div>
                            <i class="pe-7s-map text-primary h2"></i>
                        </div>
                        <div class="mt-2">
                            <p class="mb-0 fw-bold">Visit Office</p>
                            <p class="text-secondary">391, Broaddus Avenue, Benton.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="contact_form">
                        <div id="message"></div>
                        <form>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group mt-4">
                                        <input name="name" id="name" type="text" class="form-control" placeholder="Your Name*" required="">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mt-4">
                                        <input name="email" id="email" type="email" class="form-control" placeholder="Your Email*" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group mt-4">
                                        <input type="text" class="form-control" id="subject" placeholder="Your Subject.." required="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group mt-4">
                                        <textarea name="comments" id="comments" rows="4" class="form-control" placeholder="Your message..."></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 text-center mt-4">
                                    <input type="submit" id="submit" name="send" class="btn btn-primary" value="Send Message">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact -->

    <!-- Start Footer -->
    <footer class="footer_detail bg-dark">
        <div class="container">
            <div class="row pt-5 pb-5">
                <div class="col-lg-12">
                    <div class="text-center">
                        <img src="assets/images/logo.png" class="mx-auto img-fluid d-block footer_logo" alt="">
                    </div>
                    <div class="footer_menu">
                        <ul class="mb-0 list-inline text-center mt-4">
                            <li class="list-inline-item me-0"><a href="javascript:void(0)" class="text-secondary">Terms &amp; Condition</a></li>
                            <li class="list-inline-item me-0"><a href="javascript:void(0)" class="text-secondary">Privacy Policy</a></li>
                            <li class="list-inline-item me-0"><a href="javascript:void(0)" class="text-secondary">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="fot_bor w-100"></div>
            <div class="row pt-4 pb-4">
                <div class="col-lg-12">
                    <div class="float-start float_none">
                        <p class="copy-rights text-secondary mb-0">
                            ©
                            <script>document.write(new Date().getFullYear()) </script> Brezon. Design by
                            <a href="https://themeforest.net/user/themesboss/portfolio" target="_blank" class="text-secondary">ThemesBoss.</a>
                        </p>
                    </div>
                    <div class="float-end float_none">
                        <ul class="list-inline fot_social mb-0">
                            <li class="list-inline-item"><a href="javascript:void(0)" class="social-icon d-block fs-18 rounded-pill text-center text-secondary"><i class="mdi mdi-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" class="social-icon d-block fs-18 rounded-pill text-center text-secondary"><i class="mdi mdi-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" class="social-icon d-block fs-18 rounded-pill text-center text-secondary"><i class="mdi mdi-linkedin"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" class="social-icon d-block fs-18 rounded-pill text-center text-secondary"><i class="mdi mdi-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <!-- Back To Top -->
    <a href="javascript:void(0)" class="back_top"> <i class="pe-7s-angle-up"> </i> </a>

    <!-- Javascript -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/scrollspy.min.js"></script>

    <!-- CONTACT JS -->
    <script src="assets/js/contact.js"></script>

    <!--YT Background-->
    <script src="assets/js/jquery.mb.YTPlayer.js"></script>

    <!-- Custom Js   -->
    <script src="assets/js/custom.js"></script>

    <script>
        $(".youtube-bg").mb_YTPlayer();
    </script>

</body>

</html>
