<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Driv3r</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet"> 

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link href="/drivin/lib/animate/animate.min.css" rel="stylesheet">
    <link href="/drivin/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <link href="/drivin/css/bootstrap.min.css" rel="stylesheet">

    <link href="/drivin/css/style.css" rel="stylesheet">
</head>

<body>
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>

    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
        <a href="" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0"><i class="fa fa-car text-primary me-2"></i>Driv3r</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="/" class="nav-item nav-link active">Home</a>
                <a href="/about" class="nav-item nav-link">About</a>
                <a href="/services" class="nav-item nav-link">Services</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="/vehicles" class="dropdown-item">Vehicles</a>
                        <a href="/trainers" class="dropdown-item">Our Team</a>
                    </div>
                </div>
                <a href="/contact" class="nav-item nav-link">Contact</a>
            </div>
        </div>
    </nav>

    <div class="container-fluid p-0 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach($sliders as $index => $slider)
                <div class="carousel-item {{$index === 0 ? 'active' : '' }}">
                    <img class="w-100" src="/drivin/img/{{$slider->image}}" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7">
                                    <h1 class="display-2 text-light mb-5 animated slideInDown">{{$slider->description}}</h1>
                                    <a href="/" class="btn btn-primary py-sm-3 px-sm-5">Learn More</a>
                                    <a href="/services" class="btn btn-light py-sm-3 px-sm-5 ms-3">Our Services</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @foreach($sliders as $index => $slider)
                <div class="carousel-item {{$index === 1}}">
                    <img class="w-100" src="/drivin/img/{{$slider->image}}" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7">
                                    <h1 class="display-2 text-light mb-5 animated slideInDown">{{$slider->description}}</h1>
                                    <a href="/" class="btn btn-primary py-sm-3 px-sm-5">Learn More</a>
                                    <a href="/services" class="btn btn-light py-sm-3 px-sm-5 ms-3">Our Services</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <div class="container-fluid facts py-5 pt-lg-0">
        <div class="container py-5 pt-lg-0">
            <div class="row gx-0">
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="bg-white shadow d-flex align-items-center h-100 p-4" style="min-height: 150px;">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-lg-square bg-primary">
                                <i class="fa fa-car text-white"></i>
                            </div>
                            <div class="ps-4">
                                <h5>Belajar Dengan Efektif</h5>
                                <span>Kami menawarkan kursus mobil untuk semua level, dari pemula hingga mahir.</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                    <div class="bg-white shadow d-flex align-items-center h-100 p-4" style="min-height: 150px;">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-lg-square bg-primary">
                                <i class="fa fa-users text-white"></i>
                            </div>
                            <div class="ps-4">
                                <h5>Trainer Berpengalaman</h5>
                                <span>Instruktur kursus mobil kami siap membantu Anda menjadi pengemudi handal.</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="bg-white shadow d-flex align-items-center h-100 p-4" style="min-height: 150px;">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-lg-square bg-primary">
                                <i class="fa fa-file-alt text-white"></i>
                            </div>
                            <div class="ps-4">
                                <h5>Dapatkan Lisensi</h5>
                                <span>Dapatkan lisensi mengemudi dengan mudah dan cepat setelah mengikuti kursus.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl py-6">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative overflow-hidden ps-5 pt-5 h-100" style="min-height: 400px;">
                        <img class="position-absolute w-100 h-100" src="/drivin/img/about-1.jpg" alt="" style="object-fit: cover;">
                        <img class="position-absolute top-0 start-0 bg-white pe-3 pb-3" src="/drivin/img/about-2.jpg" alt="" style="width: 200px; height: 200px;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h6 class="text-primary text-uppercase mb-2">{{$about->judul}}</h6>
                        <h1 class="display-6 mb-4">{{$about->subjudul}}</h1>
                        <p>{{$about->deskripsi_1}}</p>
                        <p class="mb-4">{{$about->deskripsi_2}}</p>
                        <div class="row g-2 mb-4 pb-2">
                            <div class="col-sm-6">
                                <i class="fa fa-check text-primary me-2"></i>{{$about->kelebihan_1}}
                            </div>
                            <div class="col-sm-6">
                                <i class="fa fa-check text-primary me-2"></i>{{$about->kelebihan_2}}
                            </div>
                            <div class="col-sm-6">
                                <i class="fa fa-check text-primary me-2"></i>{{$about->kelebihan_3}}
                            </div>
                            <div class="col-sm-6">
                                <i class="fa fa-check text-primary me-2"></i>{{$about->kelebihan_4}}
                            </div>
                        </div>
                        <div class="row g-4">
                            <div class="col-sm-6">
                                <a class="btn btn-primary py-3 px-5" href="/about">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl courses my-6 py-6 pb-0">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h6 class="text-primary text-uppercase mb-2">Our Services</h6>
                <h1 class="display-6 mb-4">Penawaran Yang Dapat Meningkatkan Skill Anda</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">
                    @foreach ($services as $service)
                        @if ($service->id === 1)
                            <div class="text-center p-4 pt-0">
                                <div class="d-inline-block bg-primary text-white fs-5 py-1 px-4 mb-4">1</div>
                                <h5 class="mb-3">{{$service->title}}</h5>
                                <p>{{$service->description}}</p>
                                <ol class="breadcrumb justify-content-center mb-0">
                                    <li class="breadcrumb-item small"><i class="fa fa-car text-primary me-2"></i>Matic & Manual</li>
                                    <li class="breadcrumb-item small"><i class="fa fa-calendar-alt text-primary me-2"></i>8 jam</li>
                                </ol>
                            </div>
                            <div class="position-relative mt-auto">
                                <img class="img-fluid" src="/drivin/img/{{$service->image}}" alt="">
                            </div>
                        @endif
                    @endforeach
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">
                    @foreach ($services as $service)
                        @if ($service->id === 2)
                            <div class="text-center p-4 pt-0">
                                <div class="d-inline-block bg-primary text-white fs-5 py-1 px-4 mb-4">2</div>
                                <h5 class="mb-3">{{$service->title}}</h5>
                                <p>{{$service->description}}</p>
                                <ol class="breadcrumb justify-content-center mb-0">
                                    <li class="breadcrumb-item small"><i class="fa fa-car text-primary me-2"></i>Matic & Manual</li>
                                    <li class="breadcrumb-item small"><i class="fa fa-calendar-alt text-primary me-2"></i>12 Jam</li>
                                </ol>
                            </div>
                            <div class="position-relative mt-auto">
                                <img class="img-fluid" src="/drivin/img/{{$service->image}}" alt="">
                            </div>
                        @endif
                    @endforeach
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">
                    @foreach ($services as $service)
                        @if ($service->id === 3)
                            <div class="text-center p-4 pt-0">
                                <div class="d-inline-block bg-primary text-white fs-5 py-1 px-4 mb-4">3</div>
                                <h5 class="mb-3">{{$service->title}}</h5>
                                <p>{{$service->description}}</p>
                                <ol class="breadcrumb justify-content-center mb-0">
                                    <li class="breadcrumb-item small"><i class="fa fa-car text-primary me-2"></i>Matic & Manual</li>
                                    <li class="breadcrumb-item small"><i class="fa fa-calendar-alt text-primary me-2"></i>18 jam</li>
                                </ol>
                            </div>
                            <div class="position-relative mt-auto">
                                <img class="img-fluid" src="/drivin/img/{{$service->image}}" alt="">
                            </div>
                        @endif
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl my-6 py-6 pb-0">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h6 class="text-primary text-uppercase mb-2">Schedule</h6>
                <h1 class="display-6 mb-4">Jadwal Yang Dapat Anda Ikuti</h1>
            </div>
            <div class="jadwal-content text-center mx-auto wow fadeInUp mb-4" data-wow-delay="0.1s">
                <div class="jadwal-item">
                    <h3>Senin & Selasa</h3>
                    <p>09.00 - 12.00</p>
                </div>
                <div class="jadwal-item">
                    <h3>Rabu & Kamis</h3>
                    <p>13.00 - 16.00</p>
                </div>
                <div class="jadwal-item">
                    <h3>Jumat</h3>
                    <p>18.00 - 21.00</p>
                </div>
                <div class="jadwal-item">
                    <h3>Sabtu</h3>
                    <p>08.00 - 11.00</p>
                </div>
            </div>
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <a class="btn btn-outline-primary border-2 py-3 px-5" href="/">Daftar Sekarang</a>
            </div>
        </div>
    </div>

    <div class="container-xxl py-6">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h6 class="text-primary text-uppercase mb-2">Our Team</h6>
                <h1 class="display-6 mb-4">Team Berpengalaman & Tersertifikasi</h1>
            </div>
            <div class="row g-0 team-items">
                @foreach ($trainers as $trainer)
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item position-relative">
                            <div class="position-relative">
                                <img class="img-fluid" src="/drivin/img/{{$trainer->image}}" alt="">
                                <div class="team-social text-center">
                                    <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="bg-light text-center p-4">
                                <h5 class="mt-2">{{$trainer->title}}</h5>
                                <span>{{$trainer->description}}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="container-xxl py-6">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h6 class="text-primary text-uppercase mb-2">Testimonial</h6>
                <h1 class="display-6 mb-4">Apa Yang Client Katakan!</h1>
            </div>
            <div class="row justify-content-center">
                @foreach ($testimonials as $testimonial)
                    <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="testimonial-item text-center">
                            <div class="position-relative mb-5">
                                <img class="img-fluid rounded-circle mx-auto" src="/drivin/img/{{$testimonial->image}}" alt="">
                            </div>
                            <p class="fs-4">{{$testimonial->description}}</p>
                            <hr class="w-25 mx-auto">
                            <h5>{{$testimonial->name}}</h5>
                            <span>{{$testimonial->title}}</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="container-fluid bg-dark text-light footer my-6 mb-0 py-6 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Contact Us</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Main Street, New York, NY 10001</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>(123) 456-7890</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@drivingschool.com</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Quick Links</h4>
                    <a class="btn btn-link" href="About">About Us</a>
                    <a class="btn btn-link" href="Contact">Contact Us</a>
                    <a class="btn btn-link" href="Services">Our Services</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Popular Links</h4>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">Support</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Newsletter</h4>
                    <form action="">
                        <div class="input-group">
                            <input type="text" class="form-control p-3 border-0" placeholder="Email Address">
                            <button class="btn btn-primary">Sign Up</button>
                        </div>
                    </form>
                    <h6 class="text-white mt-4 mb-3">Follow Us</h6>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-light me-1" href=""><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-square btn-outline-light me-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-outline-light me-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-light me-1" href=""><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/drivin/lib/wow/wow.min.js"></script>
    <script src="/drivin/lib/easing/easing.min.js"></script>
    <script src="/drivin/lib/waypoints/waypoints.min.js"></script>
    <script src="/drivin/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="/drivin/js/main.js"></script>
</body>

</html>