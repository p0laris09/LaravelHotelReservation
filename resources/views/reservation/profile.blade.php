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
                    <a class="nav-link active" href="/profile">Company's Profile</a>
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

<header class="site-header section-padding-img site-header-image">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-12 header-info">
                <h1>
                    <span class="d-block text-primary">Company's</span>
                    <span class="d-block text-dark">Profile</span>
                </h1>
            </div>
        </div>
    </div>

    <img src="/img/header/profile1.png" class="header-image img-fluid" alt="">
</header>

<section class="team section-padding">
    <div class="container">
        <div class="row">

            <div class="col-12">
                <h2 class="mb-5">Meet our <span>team</span></h2>
            </div>

            <div class="col-lg-4 mb-4 col-12">
                <div class="team-thumb d-flex align-items-center">
                    <img src="/img/people/Ezra.jpg" class="img-fluid custom-circle-image team-image me-4" alt="">

                    <div class="team-info">
                        <h5 class="mb-0">Ezra</h5>
                        <strong class="text-muted">Frontend</strong>

                        <!-- Button trigger modal -->
                        <button type="button" class="btn custom-modal-btn" data-bs-toggle="modal" data-bs-target="#don">
                            <i class="bi-plus-circle-fill"></i>
                        </button>

                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-4 col-12">
                <div class="team-thumb d-flex align-items-center">
                    <img src="/img/people/anne.jpg" class="img-fluid custom-circle-image team-image me-4" alt="">

                    <div class="team-info">
                        <h5 class="mb-0">Anne</h5>
                        <strong class="text-muted">Backend</strong>

                        <!-- Button trigger modal -->
                        <button type="button" class="btn custom-modal-btn" data-bs-toggle="modal" data-bs-target="#kelly">
                            <i class="bi-plus-circle-fill"></i>
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-lg-0 mb-4 col-12">
                <div class="team-thumb d-flex align-items-center">
                    <img src="/img/people/kape.png" class="img-fluid custom-circle-image team-image me-4" alt="">

                    <div class="team-info">
                        <h5 class="mb-0">Mr. Kape</h5>
                        <strong class="text-muted">Founder</strong>

                        <!-- Button trigger modal -->
                        <button type="button" class="btn custom-modal-btn" data-bs-toggle="modal" data-bs-target="#marie">
                            <i class="bi-plus-circle-fill"></i>
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="testimonial section-padding">
    <div class="container">
        <div class="row">

            <div class="col-lg-9 mx-auto col-11">
                <h2 class="text-center">Customer love, <br> <span>Basta</span> Kape</h2>

                <div class="slick-testimonial">
                    <div class="slick-testimonial-caption">
                        <p class="lead">ANG GASTOS NIYONG KASAMA!</p>

                        <div class="slick-testimonial-client d-flex align-items-center mt-4">
                            <img src="/img/people/jm.jpg" class="img-fluid custom-circle-image me-3" alt="">

                            <span>Jhon Mark, <strong class="text-muted">Fullstack Developer</strong></span>
                        </div>
                    </div>

                    <div class="slick-testimonial-caption">
                        <p class="lead">SAKALIN KITA JOMS!</p>

                        <div class="slick-testimonial-client d-flex align-items-center mt-4">
                            <img src="/img/people/clyde.jpg" class="img-fluid custom-circle-image me-3" alt="">

                            <span>Clyde, <strong class="text-muted">Database</strong></span>
                        </div>
                    </div>

                    <div class="slick-testimonial-caption">
                        <p class="lead">JOMS, PAG SINAPAK KITA.......</p>

                        <div class="slick-testimonial-client d-flex align-items-center mt-4">
                            <img src="/img/people/pat.jpg" class="img-fluid custom-circle-image me-3" alt="">

                            <span>Patrick, <strong class="text-muted">Researcher</strong></span>
                        </div>
                    </div>

                    <div class="slick-testimonial-caption">
                        <p class="lead">PATRICK...</p>

                        <div class="slick-testimonial-client d-flex align-items-center mt-4">
                            <img src="/img/people/joms.jpg" class="img-fluid custom-circle-image me-3" alt="">

                            <span>Jomari, <strong class="text-muted">Tester</strong></span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
            
<!-- TEAM MEMBER MODAL -->
<div class="modal fade" id="don" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-0">
            <div class="modal-header flex-column">
                <h3 class="modal-title" id="exampleModalLabel">Ezra Montealegre</h3>

                <h6 class="text-muted">Frontend</h6>

                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <h5 class="mb-4">Magkape tayo always</h5>

                <div class="row mb-4">
                    <div class="col-lg-6 col-12">
                        <p>Sa unang higop, bumabalot ang himig</p>
                        <p> Ng bawat butil, ang halimuyak ng pagsisimula</p>
                        <p> Sa bawat timpla, may sariling himala</p>
                        <p> Kape, kaibigan sa bawat umagan kay ganda</p>
                    </div>

                    <div class="col-lg-6 col-12">
                        <p>Sa buong umaga, tanging kape ang karamay,</p>
                            <p> Sa bawat tasa, init at alindog taglay.</p>
                                <p> Ang bawat timpla, tamis at pait naglalaro,</p>
                                    <p> Sa bawat bungad, pag-asa'y sumasalubong sa tayo.</p>
                    </div>
                </div>

                <ul class="social-icon">
                    <li class="me-3"><strong>Where to find?</strong></li>

                    <li><a href="#" class="social-icon-link bi-youtube"></a></li>

                    <li><a href="#" class="social-icon-link bi-whatsapp"></a></li>

                    <li><a href="#" class="social-icon-link bi-instagram"></a></li>
                </ul>
            </div>
        </div>

    </div>
</div>

<!-- TEAM MEMBER MODAL -->
<div class="modal fade" id="kelly" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-0">
            <div class="modal-header flex-column">
                <h3 class="modal-title" id="exampleModalLabel">Anne Lorraine Ramos</h3>

                <h6 class="text-muted">Backend</h6>

                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <h5 class="mb-4">Always Tayo Magkape</h5>

                <div class="row mb-4">
                    <div class="col-lg-6 col-12">
                        <p>Sa bawat umaga, bago magbukang-liwayway,</p>
                            <p> May awit ng kape na naglalakbay.</p>
                                <p> Ang bawat tasa'y himig ng pag-asa,</p>
                                    <p>  Sa bawat hibla, may himig ng saya.</p>
                    </div>

                    <div class="col-lg-6 col-12">
                        <p>Mula sa butil na lupa, galing sa mabunga't luntiang paraiso,</p>
                        <p>Ang kape'y sagisag ng pagsisikap at pag-asa.</p>
                        <p>Sa bawat hagod ng hangin, ang simoy ng kape'y dumaraan,</p>
                        <p>Ang halimuyak na nakalilibang, sa bawat pagitan ng gabi at araw.</p>
                    </div>
                </div>

                <ul class="social-icon">
                    <li class="me-3"><strong>Where to find?</strong></li>

                    <li><a href="#" class="social-icon-link bi-facebook"></a></li>

                    <li><a href="#" class="social-icon-link bi-instagram"></a></li>
                </ul>
            </div>
        </div>

    </div>
</div>

<!-- TEAM MEMBER MODAL -->
<div class="modal fade" id="marie" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-0">
            <div class="modal-header flex-column">
                <h3 class="modal-title" id="exampleModalLabel">Mr. Kape</h3>

                <h6 class="text-muted">Founder & CEO</h6>

                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <h5 class="mb-4">I love kape</h5>

                <div class="row mb-4">
                    <div class="col-lg-6 col-12">
                        <p>Punta na kayo sa aming hotel pls</p>
                    </div>

                    <div class="col-lg-6 col-12">
                        <p>may free coffee dalii!</p>
                    </div>
                </div>

                <ul class="social-icon">
                    <li class="me-3"><strong>Where to find?</strong></li>

                    <li><a href="#" class="social-icon-link bi-twitter"></a></li>

                    <li><a href="#" class="social-icon-link bi-linkedin"></a></li>

                    <li><a href="#" class="social-icon-link bi-envelope"></a></li>
                </ul>
            </div>
        </div>

    </div>
</div>

@endsection
