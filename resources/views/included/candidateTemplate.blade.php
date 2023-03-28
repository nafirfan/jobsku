<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }} - Profile</title>
    @include('included.css-jobsku')
</head>

<body>
    <div class="eg-preloder">
    </div>

    <header class="header-area style-2">
        <div class="header-main-logo d-lg-block d-none">
            <a href="{{ route('home.index') }}"><img alt="image"
                    src="{{ asset('backend/images/header1-logo.svg') }}"></a>
        </div>
        @include('included.topbar')
    </header>


    <div class="dashboard-area pt-120 mb-120">
        <div class="container">
            <div class="row g-lg-4 gy-5 mb-90">
                @include('included.candidateSidebar')
                @yield('content')
            </div>
        </div>
    </div>


    <footer class="footer1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-4 col-sm-6 mb--50 d-flex justify-content-sm-start justify-content-center">
                    <div class="footer-widget">
                        <div class="widget-title">
                            <h5>About Company</h5>
                        </div>
                        <div class="menu-container">
                            <ul>
                                <li><a href="contact.html">Contact Us <i class='bx bx-up-arrow-alt'></i></a></li>
                                <li><a href="#">Terms & Condition <i class='bx bx-up-arrow-alt'></i></a></li>
                                <li><a href="#">Privacy & Policy <i class='bx bx-up-arrow-alt'></i></a></li>
                                <li><a href="#">Candidate Listing <i class='bx bx-up-arrow-alt'></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div
                    class="col-lg-3 col-md-4 col-sm-6 mb--50 d-flex justify-content-md-center justify-content-sm-end justify-content-center">
                    <div class="footer-widget">
                        <div class="widget-title">
                            <h5>For Candidate’s</h5>
                        </div>
                        <div class="menu-container">
                            <ul>
                                <li><a href="edit-profile-2.html">Create Resume <i class='bx bx-up-arrow-alt'></i></a>
                                </li>
                                <li><a href="category.html">Browse Categories <i class='bx bx-up-arrow-alt'></i></a>
                                </li>
                                <li><a href="bookmark.html">Save Jobs List <i class='bx bx-up-arrow-alt'></i></a></li>
                                <li><a href="job-listing1.html">Browse Jobs <i class='bx bx-up-arrow-alt'></i></a>
                                </li>
                                <li><a href="dashboard.html">Candidate Dashboard <i class='bx bx-up-arrow-alt'></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div
                    class="col-lg-3 col-md-4 col-sm-6 mb--50 d-flex justify-content-lg-center justify-content-md-end justify-content-sm-start justify-content-center">
                    <div class="footer-widget">
                        <div class="widget-title">
                            <h5>For Employer’s</h5>
                        </div>
                        <div class="menu-container">
                            <ul>
                                <li><a href="job-post.html">Post A Job <i class='bx bx-up-arrow-alt'></i></a></li>
                                <li><a href="#">Browse Candidates <i class='bx bx-up-arrow-alt'></i></a></li>
                                <li><a href="pricing-plan.html">Job Packages <i class='bx bx-up-arrow-alt'></i></a>
                                </li>
                                <li><a href="job-listing1.html">Jobs Featured <i class='bx bx-up-arrow-alt'></i></a>
                                </li>
                                <li><a href="company-dashboard.html">Employer Dashboard <i
                                            class='bx bx-up-arrow-alt'></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div
                    class="col-lg-3 col-md-4 col-sm-6 d-flex justify-content-lg-end justify-content-md-center justify-content-sm-end justify-content-center">
                    <div class="footer-widget four">
                        <div class="widget-title">
                            <h5>Download App</h5>
                        </div>
                        <div class="app-list">
                            <ul>
                                <li>
                                    <a href="#"><img src="../assets/images/icon/apple-app.svg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="../assets/images/icon/google-play.svg"
                                            alt=""></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-btm">
                <div class="row align-items-center">
                    <div class="col-lg-6 d-flex justify-content-lg-start justify-content-center">
                        <div class="support">
                            <div class="icon">
                                <img src="../assets/images/icon/footer-support-icon.svg" alt="">
                            </div>
                            <div class="content">
                                <h5>Support Line:</h5>
                                <a href="tel:+099-03573983465">+099-035 7398 3465</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex justify-content-lg-end justify-content-center">
                        <div class="footer-btm-menu">
                            <ul>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Terms of Services</a></li>
                                <li><a
                                        href="https://www.google.com/maps/place/Egens+Lab/@23.8340712,90.3634979,17z/data=!3m1!4b1!4m5!3m4!1s0x3755c14c8682a473:0xa6c74743d52adb88!8m2!3d23.8340663!4d90.3656866">Our
                                        Sitemap</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row border-top align-items-center">
                    <div class="col-lg-6 d-flex  justify-content-lg-start justify-content-center">
                        <div class="copyright-area">
                            <p>©Copyright 2023 <a href="#">JOBES</a> | Design By <a
                                    href="https://www.egenslab.com/">Egenslab</a></p>
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex justify-content-lg-end justify-content-center">
                        <div class="social-area">
                            <h6>Follow JOBES:</h6>
                            <ul>
                                <li><a href="https://www.facebook.com/"><i class="bx bxl-facebook"></i></a></li>
                                <li><a href="https://twitter.com/"><i class="bx bxl-twitter"></i></a></li>
                                <li><a href="https://www.linkedin.com/"><i class="bx bxl-linkedin"></i></a></li>
                                <li><a href="https://www.instagram.com/"><i class="bx bxl-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    @include('included.script-jobsku')
</body>

</html>
