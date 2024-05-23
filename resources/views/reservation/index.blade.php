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
                    <a class="nav-link active" href="/">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/profile">Company's Profile</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/reserve">Reservation</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<section class="slick-slideshow">   
    <div class="slick-custom">
        <img src="/img/slideshow/slide1.png" class="img-fluid" alt="">

        <div class="slick-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-10">
                        <h1 class="slick-title">Indulge in Opulence</h1>

                        <p class="lead text-white mt-lg-3 mb-lg-5">Showcases the hotel's opulence and elegance, giving visitors a luxurious and refined experience during their entire stay.</p>

                        <a href="/profile" class="btn custom-btn">Learn more about us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="slick-custom">
        <img src="/img/slideshow/slide2.png" class="img-fluid" alt="">

        <div class="slick-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-10">
                        <h1 class="slick-title">Unparalleled Excellence</h1>

                        <p class="lead text-white mt-lg-3 mb-lg-5">Demonstrates the dedication to providing guests with outstanding service and unmatched quality, implying that they should expect nothing less than the finest from the hotel.</p>

                        <a href="/reserve" class="btn custom-btn">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="slick-custom">
        <img src="/img/slideshow/slide3.png" class="img-fluid" alt="">

        <div class="slick-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-10">
                        <h1 class="slick-title">Beyond Expectations</h1>

                        <p class="lead text-white mt-lg-3 mb-lg-5">Goes above and beyond to surpass visitors' expectations, bringing their fantasies of the ideal stay to life.</p>

                        <a href="/contact" class="btn custom-btn">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
@endsection
