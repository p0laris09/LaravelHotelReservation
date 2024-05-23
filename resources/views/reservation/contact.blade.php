@extends('layouts.layout')

@section('content')

<nav class="navbar navbar-expand-lg">
    <div class="container">
        <button class="navbar-toggler"  type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <a href="/" class="navbar-brand">
            <strong><span>Basta</span> Kape</strong>
        </a>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/profile">Company's Profile</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/reserve">Reservation</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="/contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<header class="site-header section-padding-img site-header-image">
    <div class="container">
        <div class="row">

            <div class="col-lg-10 col-12 header-info">
                <h1>
                    <span class="d-block text-primary">Say hello to us</span>
                    <span class="d-block text-dark">love to hear you</span>
                </h1>
            </div>
        </div>
    </div>

    <img src="/img/header/positive-european-woman-has-break-after-work.jpg" class="header-image img-fluid" alt="">
</header>

<section class="contact section-padding">
    <div class="container">
        <div class="row">
            
            <div class="col-lg-6 col-12">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.6280231719306!2d121.05349767510542!3d14.56325178591866!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c860ad20d9e9%3A0xeeb71061020f655a!2sUniversity%20of%20Makati!5e0!3m2!1sen!2sph!4v1708934041762!5m2!1sen!2sph" 
            width="500" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <div class="col-lg-6 col-12 mt-5 ms-auto">
                <div class="row">
                    <div class="col-6 border-end contact-info">
                        <h6 class="mb-3">Anne Lorraine Ramos's Email</h6>

                        <a href="mailto:hello@company.com" class="custom-link">
                        aramos.k11940859@umak.edu.ph
                            <i class="bi-arrow-right ms-2"></i>
                        </a>
                    </div>

                    <div class="col-6 contact-info">
                        <h6 class="mb-3">Ezra David Montealegre's Email</h6>

                        <a href="mailto:studio@company.com" class="custom-link">
                            emontealegre.k11935724@umak.edu.ph
                            <i class="bi-arrow-right ms-2"></i>
                        </a>
                    </div>

                    <div class="col-6 border-top border-end contact-info">
                        <h6 class="mb-3">Our Office</h6>

                        <p class="text-muted">University of Makati, Dr. Jose P. Rizal Extension, Barangay West Rembo, 1215 Makati City</p>
                    </div>

                    <div class="col-6 border-top contact-info">
                        <h6 class="mb-3">Our Socials</h6>

                        <ul class="social-icon">

                            <li><a href="https://www.facebook.com/annelorraine.ramos" class="social-icon-link bi-messenger"></a></li>

                            <li><a href="https://www.youtube.com/watch?v=xvFZjo5PgG0" class="social-icon-link bi-youtube"></a></li>

                            <li><a href="https://www.instagram.com/awesomezra/?hl=en" class="social-icon-link bi-instagram"></a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection
