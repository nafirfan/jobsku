<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }} - Register</title>
    @include('included.css-jobsku')
</head>

<body>
<div class="eg-preloder">
</div>

<header class="header-area style-2">
    <div class="header-main-logo d-lg-block d-none">
        <a href="index.html"><img alt="image" src="{{ asset('backend/images/header1-logo.svg')}}"></a>
    </div>
    <div class="menu-topbar-area">
        <div class="menu-area">
            <div class="header-logo">
                <a href="index.html"><img alt="image" class="img-fluid" src="{{ asset('backend/images/header1-logo.svg')}}"></a>
            </div>
            <div class="main-menu">
                <div class="mobile-logo-area d-lg-none d-flex justify-content-between align-items-center">
                    <div class="mobile-logo-wrap">
{{--                        <a href="index.html"><img alt="image" src="{{ asset('backend/images/header1-logo.svg')}}"></a>--}}
                    </div>
                    <div class="menu-close-btn">
                        <i class="bi bi-x-lg"></i>
                    </div>
                </div>
                <ul class="menu-list">
                    <li class=""><a href="applicant/index.html">Home</a></li>
                    <li class=""><a href="applicant/job-listing2.html">Find Jobs</a></li>
                    <li class=""><a href="faq.html">FAQ</a></li>
                    <li class=""><a href="contact.html">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>


<div class="register-area pt-120 mb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="form-wrapper">
                    <div class="form-title">
                        <h3>Register Account</h3>
                        <span></span>
                    </div>
                    <div class="register-tab">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home"
                                        type="button" role="tab" aria-controls="nav-home" aria-selected="true">Candidate</button>
                                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile"
                                        type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Company</button>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-inner mb-25">
                                                <label for="firstname">{{ __('Firstname') }}*</label>
                                                <div class="input-area">
                                                    <img src="{{ asset('backend/images/icon/user-2.svg')}}" alt="">
                                                    <input type="text" id="firstname" name="firstname" value="{{ old('firstname') }}"
                                                          placeholder="John" required autofocus/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-inner mb-25">
                                                <label for="lastname">{{ __('Lastname') }}*</label>
                                                <div class="input-area">
                                                    <img src="{{ asset('backend/images/icon/user-2.svg')}}" alt="">
                                                    <input type="text" id="lastname" name="lastname" value="{{ old('lastname') }}"
                                                           placeholder="Nafi" required autofocus/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-inner mb-25">
                                                <label for="username">{{ __('Username') }}*</label>
                                                <div class="input-area">
                                                    <img src="{{ asset('backend/images/icon/user-2.svg')}}" alt="">
                                                    <input type="text" id="username" name="username" value="{{ old('username') }}"
                                                           placeholder="john_nafi" required autofocus/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-inner mb-25">
                                                <label for="email">{{ __('Email') }}*</label>
                                                <div class="input-area">
                                                    <img src="{{ asset('backend/images/icon/email-2.svg')}}" alt="">
                                                    <input type="email" id="email" name="email" placeholder="jnafi@example.com"
                                                           value="{{ old('email') }}" required autofocus/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-inner mb-25">
                                                <label for="password">{{ __('Password') }}*</label>
                                                <input type="password" name="password" id="password" placeholder="Password"
                                                       required autocomplete="new-password" autofocus/>
                                                <i class="bi bi-eye-slash" id="togglePassword"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-inner">
                                                <label for="password_confirmation">{{ __('Confirm Password') }}*</label>
                                                <input type="password" name="password_confirmation" id="password_confirmation"
                                                       placeholder="Confirm Password" required autofocus/>
                                                <i class="bi bi-eye-slash" id="togglePassword2"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-inner">
                                                <button class="primry-btn-2" type="submit">{{ __('Register') }}</button>
                                            </div>
                                        </div>
                                        <h6>Already have an account? <a href="{{ route('login') }}"> {{ __('Log in') }}</a> Here</h6>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <form>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-inner mb-25">
                                                <label for="firstname">First Name*</label>
                                                <div class="input-area">
                                                    <img src="{{ asset('backend/images/icon/user-2.svg')}}" alt="">
                                                    <input type="text" id="firstname" name="firstname" placeholder="Mr. Robert">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-inner mb-25">
                                                <label for="lastname">Last Name*</label>
                                                <div class="input-area">
                                                    <img src="{{ asset('backend/images/icon/user-2.svg')}}" alt="">
                                                    <input type="text" id="lastname" name="lastname" placeholder="Jonson">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-inner mb-25">
                                                <label for="username">User Name*</label>
                                                <div class="input-area">
                                                    <img src="{{ asset('backend/images/icon/user-2.svg')}}" alt="">
                                                    <input type="text" id="username1" name="username" placeholder="robertjonson">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-inner mb-25">
                                                <label for="email">Email*</label>
                                                <div class="input-area">
                                                    <img src="{{ asset('backend/images/icon/email-2.svg')}}" alt="">
                                                    <input type="text" id="email1" name="email" placeholder="info@example.com">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-inner mb-25">
                                                <label for="companyname">Company Name*</label>
                                                <div class="input-area">
                                                    <img src="{{ asset('backend/images/icon/company-2.svg')}}" alt="">
                                                    <input type="text" id="companyname" name="companyname" placeholder="Mr. Robert">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-inner mb-25">
                                                <label>Company Type*</label>
                                                <div class="input-area">
                                                    <img src="{{ asset('backend/images/icon/category-2.svg')}}" alt="">
                                                    <select class="select1">
                                                        <option value="0">Digital Agency</option>
                                                        <option value="1">Digital Marketing Agency</option>
                                                        <option value="2">Software Company</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-inner mb-25">
                                                <label for="password">Password*</label>
                                                <input type="password" name="password" id="password3" placeholder="Password" />
                                                <i class="bi bi-eye-slash" id="togglePassword3"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-inner">
                                                <label for="password4">Confirm Password*</label>
                                                <input type="password" name="confirmpassword" id="password4" placeholder="Confirm Password" />
                                                <i class="bi bi-eye-slash" id="togglePassword4"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-inner">
                                                <button class="primry-btn-2" type="submit">Sign Up</button>
                                            </div>
                                        </div>
                                        <h6>Already have an account? <a href="login.html"> Login</a> Here</h6>
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


<footer class="footer2">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 d-flex justify-content-md-start justify-content-center">
                <div class="copyright-area">
                    <p>©Copyright 2023 <a href="#">Jobsku</a> | Design By <a href="https://www.egenslab.com/">Egenslab</a></p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 d-flex justify-content-md-end justify-content-center">
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
    </div>
</footer>
@include('included.script-jobsku')

</body>
</html>
