<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }} - {{ $title }}</title>
    @include('included.css-jobsku')
</head>

<body class="bg-wight">
    <div class="eg-preloder">
    </div>

    <header class="header-area style-1">
        <div class="header-main-logo d-lg-block d-none">
            <a href="index.html"><img alt="image" src="{{ asset('backend/images/header1-logo.svg') }}"></a>
        </div>
        @include('included.topbar')
    </header>


    <div class="hero1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hero-content">
                        <h1>Your Career’s <span>Opportunity.</span></h1>
                        <p><span>2400</span> Peoples are daily search in this portal, <span>100</span> user added job
                            portal!</p>
                        <div class="counter-area">
                            <div class="row g-lg-4 g-md-5 gy-5 justify-content-center">
                                <div class="col-lg-3 col-sm-6">
                                    <div class="counter-single">
                                        <div class="counter-icon">
                                            <img src="{{ asset('backend/images/icon/job2.svg') }}" alt="image">
                                        </div>
                                        <div class="coundown">
                                            <p>Live Jobs</p>
                                            <div class="d-flex align-items-center gap-2">
                                                <h3 class="odometer">
                                                    20223
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="counter-single">
                                        <div class="counter-icon">
                                            <img src="{{ asset('backend/images/icon/companies.svg') }}" alt="image">
                                        </div>
                                        <div class="coundown">
                                            <p>Companies</p>
                                            <div class="d-flex align-items-center gap-2">
                                                <h3 class="odometer">
                                                    804
                                                </h3>
                                                <span>+</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="counter-single">
                                        <div class="counter-icon">
                                            <img src="{{ asset('backend/images/icon/candidates.svg') }}" alt="image">
                                        </div>
                                        <div class="coundown">
                                            <p>Candidates</p>
                                            <div class="d-flex align-items-center gap-2">
                                                <h3 class="odometer">
                                                    500
                                                </h3>
                                                <span>+</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="counter-single">
                                        <div class="counter-icon">
                                            <img src="{{ asset('backend/images/icon/new-jobs.svg') }}" alt="image">
                                        </div>
                                        <div class="coundown">
                                            <p>New Jobs</p>
                                            <div class="d-flex align-items-center gap-2">
                                                <h3 class="odometer">
                                                    102
                                                </h3>
                                                <span>+</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="job-search-area">
                            <form>
                                <div class="form-inner job-title">
                                    <input type="text" placeholder="Job Title">
                                </div>
                                <div class="form-inner category">
                                    <select class="select1">
                                        <option value="0">Category</option>
                                        <option value="1">UI/UX</option>
                                        <option value="2">Closed</option>
                                        <option value="4">Closed</option>
                                        <option value="5">Closed</option>
                                    </select>
                                </div>
                                <div class="form-inner">
                                    <button type="submit" class="primry-btn-2 "><img
                                            src="{{ asset('backend/images/icon/search-icon.svg') }}" alt="">
                                        Search
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="home1-category pt-120 mb-120">
        <div class="container">
            <div class="row mb-60">
                <div
                    class="col-12 d-flex flex-wrap align-items-end justify-content-md-between justify-content-start gap-3">
                    <div class="section-title1">
                        <h2>Trending Jobs <span>Category</span></h2>
                        <p>To choose your trending job dream & to make future bright.</p>
                    </div>
                    <div class="explore-btn">
                        <a href="category.html">Explore More <span><img
                                    src="{{ asset('backend/images/icon/explore-elliose.svg') }}"
                                    alt=""></span></a>
                    </div>
                </div>
            </div>
            <div
                class="row row-cols-xxl-5 row-cols-xl-4 row-cols-md-3 row-cols-sm-2 row-cols-1 g-3 cf justify-content-center">
                <div class="col">
                    <div class="single-category">
                        <div class="category-top">
                            <div class="icon">
                                <img src="{{ asset('backend/images/icon/account-finance.svg') }}" alt="">
                            </div>
                            <div class="sl-no">
                                <h6>01</h6>
                            </div>
                        </div>
                        <div class="category-content">
                            <h5><a href="job-listing2.html">Account & Finance</a></h5>
                            <p>Job Available: <span>44</span></p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="single-category">
                        <div class="category-top">
                            <div class="icon">
                                <img src="{{ asset('backend/images/icon/technology.svg') }}" alt="">
                            </div>
                            <div class="sl-no">
                                <h6>02</h6>
                            </div>
                        </div>
                        <div class="category-content">
                            <h5><a href="job-listing2.html">Technology</a></h5>
                            <p>Job Available: <span>04</span></p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="single-category">
                        <div class="category-top">
                            <div class="icon">
                                <img src="{{ asset('backend/images/icon/medical.svg') }}" alt="">
                            </div>
                            <div class="sl-no">
                                <h6>03</h6>
                            </div>
                        </div>
                        <div class="category-content">
                            <h5><a href="job-listing2.html">Medical & Nurse</a></h5>
                            <p>Job Available: <span>33</span></p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="single-category">
                        <div class="category-top">
                            <div class="icon">
                                <img src="{{ asset('backend/images/icon/marketing.svg') }}" alt="">
                            </div>
                            <div class="sl-no">
                                <h6>04</h6>
                            </div>
                        </div>
                        <div class="category-content">
                            <h5><a href="job-listing2.html">Marketing & Sales</a></h5>
                            <p>Job Available: <span>56</span></p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="single-category">
                        <div class="category-top">
                            <div class="icon">
                                <img src="{{ asset('backend/images/icon/design-job.svg') }}" alt="">
                            </div>
                            <div class="sl-no">
                                <h6>05</h6>
                            </div>
                        </div>
                        <div class="category-content">
                            <h5><a href="job-listing2.html">Design Jobs</a></h5>
                            <p>Job Available: <span>18 </span></p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="single-category">
                        <div class="category-top">
                            <div class="icon">
                                <img src="{{ asset('backend/images/icon/transportation.svg') }}" alt="">
                            </div>
                            <div class="sl-no">
                                <h6>06</h6>
                            </div>
                        </div>
                        <div class="category-content">
                            <h5><a href="job-listing2.html">Transportation</a></h5>
                            <p>Job Available: <span>97</span></p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="single-category">
                        <div class="category-top">
                            <div class="icon">
                                <img src="{{ asset('backend/images/icon/devlopment.svg') }}" alt="">
                            </div>
                            <div class="sl-no">
                                <h6>07</h6>
                            </div>
                        </div>
                        <div class="category-content">
                            <h5><a href="job-listing2.html">Development</a></h5>
                            <p>Job Available: <span>67</span></p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="single-category">
                        <div class="category-top">
                            <div class="icon">
                                <img src="{{ asset('backend/images/icon/receotionist.svg') }}" alt="">
                            </div>
                            <div class="sl-no">
                                <h6>08</h6>
                            </div>
                        </div>
                        <div class="category-content">
                            <h5><a href="job-listing2.html">Receptionist Job</a></h5>
                            <p>Job Available: <span>55</span></p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="single-category">
                        <div class="category-top">
                            <div class="icon">
                                <img src="{{ asset('backend/images/icon/non-profit-org.svg') }}" alt="">
                            </div>
                            <div class="sl-no">
                                <h6>09</h6>
                            </div>
                        </div>
                        <div class="category-content">
                            <h5><a href="job-listing2.html">Non-Profit Orag.</a></h5>
                            <p>Job Available: <span>05</span></p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="single-category">
                        <div class="category-top">
                            <div class="icon">
                                <img src="{{ asset('backend/images/icon/architect.svg') }}" alt="">
                            </div>
                            <div class="sl-no">
                                <h6>10</h6>
                            </div>
                        </div>
                        <div class="category-content">
                            <h5><a href="job-listing2.html">Architect Jobs</a></h5>
                            <p>Job Available: <span>20</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="home1-featured-area mb-120">
        <div class="container">
            <div class="row mb-60">
                <div
                    class="col-12 d-flex flex-wrap align-items-end justify-content-md-between justify-content-start gap-3">
                    <div class="section-title1">
                        <h2>Latest <span>Featured</span> Jobs</h2>
                        <p>To choose your trending job dream & to make future bright.</p>
                    </div>
                    <div class="explore-btn">
                        <a href="job-listing2.html">Explore More <span><img
                                    src="{{ asset('backend/images/icon/explore-elliose.svg') }}"
                                    alt=""></span></a>
                    </div>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-xl-4 col-lg-6">
                    <div class="feature-card">
                        <div class="company-area">
                            <div class="logo">
                                <img src="{{ asset('backend/images/bg/company-logo/company-01.png') }}"
                                    alt="">
                            </div>
                            <div class="company-details">
                                <div class="name-location">
                                    <h5><a href="job-details.html">React JS Developer</a></h5>
                                    <p>Full Time, Part Time</p>
                                </div>
                                <div class="bookmark">
                                    <i class="bi bi-bookmark"></i>
                                </div>
                            </div>
                        </div>
                        <div class="job-discription">
                            <ul>
                                <li>
                                    <img src="{{ asset('backend/images/icon/arrow2.svg') }}" alt="">
                                    <p><span class="title">Salary:</span> $80-$110 / <span class="time">Per
                                            month</span></p>
                                </li>
                                <li>
                                    <img src="{{ asset('backend/images/icon/arrow2.svg') }}" alt="">
                                    <p><span class="title">Vacancy:</span> <span> 07 Person (Both)</span></p>
                                </li>
                                <li>
                                    <img src="{{ asset('backend/images/icon/arrow2.svg') }}" alt="">
                                    <p><span class="title">Deadline:</span> <span> 02 March, 2023</span></p>
                                </li>
                            </ul>
                        </div>
                        <div class="job-type-apply">
                            <div class="apply-btn">
                                <a href="job-details.html"><span><img
                                            src="{{ asset('backend/images/icon/apply-ellipse.svg') }}"
                                            alt=""></span>Apply
                                    Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="feature-card">
                        <div class="company-area">
                            <div class="logo">
                                <img src="{{ asset('backend/images/bg/company-logo/company-02.png') }}"
                                    alt="">
                            </div>
                            <div class="company-details">
                                <div class="name-location">
                                    <h5><a href="job-details.html">Assistant Laboratorist</a></h5>
                                    <p>Full Time, Part Time</p>
                                </div>
                                <div class="bookmark">
                                    <i class="bi bi-bookmark"></i>
                                </div>
                            </div>
                        </div>
                        <div class="job-discription">
                            <ul>
                                <li>
                                    <img src="{{ asset('backend/images/icon/arrow2.svg') }}" alt="">
                                    <p><span class="title">Salary:</span> $30-$40 / <span class="time">Per
                                            month</span></p>
                                </li>
                                <li>
                                    <img src="{{ asset('backend/images/icon/arrow2.svg') }}" alt="">
                                    <p><span class="title">Vacancy:</span> <span> 05 Person (Both)</span></p>
                                </li>
                                <li>
                                    <img src="{{ asset('backend/images/icon/arrow2.svg') }}" alt="">
                                    <p><span class="title">Deadline:</span> <span> 02 March, 2023 </span></p>
                                </li>
                            </ul>
                        </div>
                        <div class="job-type-apply">
                            <div class="apply-btn">
                                <a href="job-details.html"><span><img
                                            src="{{ asset('backend/images/icon/apply-ellipse.svg') }}"
                                            alt=""></span>Apply
                                    Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="feature-card">
                        <div class="company-area">
                            <div class="logo">
                                <img src="{{ asset('backend/images/bg/company-logo/company-03.png') }}"
                                    alt="">
                            </div>
                            <div class="company-details">
                                <div class="name-location">
                                    <h5><a href="job-details.html">Senior Receptionist</a></h5>
                                    <p>Full Time, Part Time</p>
                                </div>
                                <div class="bookmark">
                                    <i class="bi bi-bookmark"></i>
                                </div>
                            </div>
                        </div>
                        <div class="job-discription">
                            <ul>
                                <li>
                                    <img src="{{ asset('backend/images/icon/arrow2.svg') }}" alt="">
                                    <p><span class="title">Salary:</span> $60-$90 / <span class="time">Per
                                            month</span></p>
                                </li>
                                <li>
                                    <img src="{{ asset('backend/images/icon/arrow2.svg') }}" alt="">
                                    <p><span class="title">Vacancy:</span> <span> 07 Person (Female)</span></p>
                                </li>
                                <li>
                                    <img src="{{ asset('backend/images/icon/arrow2.svg') }}" alt="">
                                    <p><span class="title">Deadline:</span> <span> 03 March, 2023 </span></p>
                                </li>
                            </ul>
                        </div>
                        <div class="job-type-apply">
                            <div class="apply-btn">
                                <a href="job-details.html"><span><img
                                            src="{{ asset('backend/images/icon/apply-ellipse.svg') }}"
                                            alt=""></span>Apply
                                    Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="feature-card">
                        <div class="company-area">
                            <div class="logo">
                                <img src="{{ asset('backend/images/bg/company-logo/company-05.png') }}"
                                    alt="">
                            </div>
                            <div class="company-details">
                                <div class="name-location">
                                    <h5><a href="job-details.html">Senior WordPress Develope</a></h5>
                                    <p>Part Time, Remote</p>
                                </div>
                                <div class="bookmark">
                                    <i class="bi bi-bookmark"></i>
                                </div>
                            </div>
                        </div>
                        <div class="job-discription">
                            <ul>
                                <li>
                                    <img src="{{ asset('backend/images/icon/arrow2.svg') }}" alt="">
                                    <p><span class="title">Salary:</span> $60-$80 / <span class="time">Per
                                            month</span></p>
                                </li>
                                <li>
                                    <img src="{{ asset('backend/images/icon/arrow2.svg') }}" alt="">
                                    <p><span class="title">Vacancy:</span> <span> 03 Person (Male)</span></p>
                                </li>
                                <li>
                                    <img src="{{ asset('backend/images/icon/arrow2.svg') }}" alt="">
                                    <p><span class="title">Deadline:</span> <span> 04 March, 2023 </span></p>
                                </li>
                            </ul>
                        </div>
                        <div class="job-type-apply">
                            <div class="apply-btn">
                                <a href="job-details.html"><span><img
                                            src="{{ asset('backend/images/icon/apply-ellipse.svg') }}"
                                            alt=""></span>Apply
                                    Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="feature-card">
                        <div class="company-area">
                            <div class="logo">
                                <img src="{{ asset('backend/images/bg/company-logo/company-06.png') }}"
                                    alt="">
                            </div>
                            <div class="company-details">
                                <div class="name-location">
                                    <h5><a href="job-details.html">Manager (HR)</a></h5>
                                    <p>Full Time, Part Time</p>
                                </div>
                                <div class="bookmark">
                                    <i class="bi bi-bookmark"></i>
                                </div>
                            </div>
                        </div>
                        <div class="job-discription">
                            <ul>
                                <li>
                                    <img src="{{ asset('backend/images/icon/arrow2.svg') }}" alt="">
                                    <p><span class="title">Salary:</span> $60-$76 / <span class="time">Per
                                            month</span></p>
                                </li>
                                <li>
                                    <img src="{{ asset('backend/images/icon/arrow2.svg') }}" alt="">
                                    <p><span class="title">Vacancy:</span> <span> 01 Person (Both)</span></p>
                                </li>
                                <li>
                                    <img src="{{ asset('backend/images/icon/arrow2.svg') }}" alt="">
                                    <p><span class="title">Deadline:</span> <span> 05 March, 2023</span></p>
                                </li>
                            </ul>
                        </div>
                        <div class="job-type-apply">
                            <div class="apply-btn">
                                <a href="job-details.html"><span><img
                                            src="{{ asset('backend/images/icon/apply-ellipse.svg') }}"
                                            alt=""></span>Apply
                                    Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="feature-card">
                        <div class="company-area">
                            <div class="logo">
                                <img src="{{ asset('backend/images/bg/company-logo/company-04.png') }}"
                                    alt="">
                            </div>
                            <div class="company-details">
                                <div class="name-location">
                                    <h5><a href="job-details.html">UI/UX Designer</a></h5>
                                    <p>Full Time, Part Time</p>
                                </div>
                                <div class="bookmark">
                                    <i class="bi bi-bookmark"></i>
                                </div>
                            </div>
                        </div>
                        <div class="job-discription">
                            <ul>
                                <li>
                                    <img src="{{ asset('backend/images/icon/arrow2.svg') }}" alt="">
                                    <p><span class="title">Salary:</span> $60-$70 / <span class="time">Per
                                            month</span></p>
                                </li>
                                <li>
                                    <img src="{{ asset('backend/images/icon/arrow2.svg') }}" alt="">
                                    <p><span class="title">Vacancy:</span> <span> 03 Person (Both)</span></p>
                                </li>
                                <li>
                                    <img src="{{ asset('backend/images/icon/arrow2.svg') }}" alt="">
                                    <p><span class="title">Deadline:</span> <span> 02 March, 2023</span></p>
                                </li>
                            </ul>
                        </div>
                        <div class="job-type-apply">
                            <div class="apply-btn">
                                <a href="job-details.html"><span><img
                                            src="{{ asset('backend/images/icon/apply-ellipse.svg') }}"
                                            alt=""></span>Apply
                                    Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="home1-work-process mb-120">
        <div class="container">
            <div class="row mb-60">
                <div class="col-12 d-flex justify-content-center">
                    <div class="section-title1 text-center">
                        <h2>JOBES Working <span>Process</span></h2>
                        <p>To choose your trending job dream & to make future bright.</p>
                    </div>
                </div>
            </div>
            <div class="row g-lg-4 gy-5 justify-content-center">
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="single-work-process one text-center">
                        <div class="icon">
                            <img src="{{ asset('backend/images/icon/account-create.svg') }}" alt="">
                        </div>
                        <div class="work-content">
                            <h5><a href="register.html">Account Create</a></h5>
                            <p>To create your account be confident & safely.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="single-work-process two text-center">
                        <div class="icon">
                            <img src="{{ asset('backend/images/icon/create-resume.svg') }}" alt="">
                        </div>
                        <div class="work-content">
                            <h5><a href="edit-profile.html">Create Resume</a></h5>
                            <p>To create your account be confident & safely.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="single-work-process one text-center">
                        <div class="icon">
                            <img src="{{ asset('backend/images/icon/job-find.svg') }}" alt="">
                        </div>
                        <div class="work-content">
                            <h5><a href="job-listing2.html">Find Jobs </a></h5>
                            <p>To create your account be confident & safely.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="single-work-process two text-center">
                        <div class="icon">
                            <img src="{{ asset('backend/images/icon/job-apply.svg') }}" alt="">
                        </div>
                        <div class="work-content">
                            <h5><a href="job-listing2.html">Apply Jobs</a></h5>
                            <p>To create your account be confident & safely.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="home1-location-area mb-120">
        <div class="container">
            <div class="row mb-60">
                <div
                    class="col-12 d-flex flex-wrap align-items-end justify-content-md-between justify-content-start gap-3">
                    <div class="section-title1">
                        <h2>Get Dream With <span>Location</span></h2>
                        <p>To choose your trending job dream & to make future bright.</p>
                    </div>
                    <div class="swiper-btn1 d-flex align-items-center">
                        <div class="left-btn prev-1">
                            <img src="{{ asset('backend/images/icon/explore-elliose.svg') }}" alt="">
                        </div>
                        <div class="right-btn next-1">
                            <img src="{{ asset('backend/images/icon/explore-elliose.svg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="swiper location-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="location-card">
                                <div class="location-img">
                                    <img class="img-fluid" src="{{ asset('backend/images/bg/dhaka1.png') }}"
                                        alt="">
                                </div>
                                <div class="location-content text-center">
                                    <h5><a href="job-listing2.html"><img
                                                src="{{ asset('backend/images/icon/location.svg') }}"
                                                alt="">Dhaka,
                                            Bangladesh</a></h5>
                                    <p>Job Available: <span>2934</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="location-card">
                                <div class="location-img">
                                    <img class="img-fluid" src="{{ asset('backend/images/bg/newyork1.png') }}"
                                        alt="">
                                </div>
                                <div class="location-content text-center">
                                    <h5><a href="job-listing2.html"><img
                                                src="{{ asset('backend/images/icon/location.svg') }}"
                                                alt="">NewYork,
                                            USA</a>
                                    </h5>
                                    <p>Job Available: <span>2186</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="location-card">
                                <div class="location-img">
                                    <img class="img-fluid" src="{{ asset('backend/images/bg/chicago.png') }}"
                                        alt="">
                                </div>
                                <div class="location-content text-center">
                                    <h5><a href="job-listing2.html"><img
                                                src="{{ asset('backend/images/icon/location.svg') }}"
                                                alt="">Chicago,
                                            Australia</a></h5>
                                    <p>Job Available: <span>5678</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="location-card">
                                <div class="location-img">
                                    <img class="img-fluid" src="{{ asset('backend/images/bg/sylhet.png') }}"
                                        alt="">
                                </div>
                                <div class="location-content text-center">
                                    <h5><a href="job-listing2.html"><img
                                                src="{{ asset('backend/images/icon/location.svg') }}"
                                                alt="">Sylhet,
                                            Bangladesh</a></h5>
                                    <p>Job Available: <span>1234</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="home1-review-area mb-120">
        <div class="container">
            <div class="row mb-60">
                <div
                    class="col-12 d-flex flex-wrap align-items-end justify-content-md-between justify-content-start gap-3">
                    <div class="section-title1">
                        <h2>Trusted User <span>Reviews</span></h2>
                        <p>To choose your trending job dream & to make future bright.</p>
                    </div>
                    <div class="swiper-btn1 d-flex align-items-center">
                        <div class="left-btn prev-2">
                            <img src="{{ asset('backend/images/icon/explore-elliose.svg') }}" alt="">
                        </div>
                        <div class="right-btn next-2">
                            <img src="{{ asset('backend/images/icon/explore-elliose.svg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="swiper testimonial-slider1">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonial-card">
                                <div class="author-img">
                                    <img src="{{ asset('backend/images/bg/testimonial-author1.png') }}"
                                        alt="">
                                    <div class="quat-icon">
                                        <img src="{{ asset('backend/images/icon/quat-icon.svg') }}" alt="">
                                    </div>
                                </div>
                                <div class="testimonial-content">
                                    <div class="author-review-area">
                                        <div class="author-area">
                                            <h5>Jacoline Frangly</h5>
                                            <span>React Developer</span>
                                        </div>
                                        <ul>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-half"></i></li>
                                        </ul>
                                    </div>
                                    <p>On the other hand, we denounce with to the righteous indignation and dislike the
                                        men
                                        who are so
                                        beguiled to demoralized by the charms of pleasure.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-card">
                                <div class="author-img">
                                    <img src="{{ asset('backend/images/bg/testimonial-author2.png') }}"
                                        alt="">
                                    <div class="quat-icon">
                                        <img src="{{ asset('backend/images/icon/quat-icon.svg') }}" alt="">
                                    </div>
                                </div>
                                <div class="testimonial-content">
                                    <div class="author-review-area">
                                        <div class="author-area">
                                            <h5>Jordan Miycol</h5>
                                            <span>UI/UX Engineer</span>
                                        </div>
                                        <ul>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-half"></i></li>
                                        </ul>
                                    </div>
                                    <p>On the other hand, we denounce with to the righteous indignation and dislike the
                                        men
                                        who are so
                                        beguiled to demoralized by the charms of pleasure.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="home1-trusted-company mb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h5>Our Trusted Company</h5>
                    </div>
                    <div class="swiper trusted-company-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="company-logo">
                                    <img src="{{ asset('backend/images/bg/company-logo/trusted-company-01.png') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="company-logo">
                                    <img src="{{ asset('backend/images/bg/company-logo/trusted-company-02.png') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="company-logo">
                                    <img src="{{ asset('backend/images/bg/company-logo/trusted-company-03.png') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="company-logo">
                                    <img src="{{ asset('backend/images/bg/company-logo/trusted-company-04.png') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="company-logo">
                                    <img src="{{ asset('backend/images/bg/company-logo/trusted-company-05.png') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="company-logo">
                                    <img src="{{ asset('backend/images/bg/company-logo/trusted-company-06.png') }}"
                                        alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="home1-top-recruiters mb-120">
        <div class="container">
            <div class="row mb-60">
                <div
                    class="col-12 d-flex flex-wrap align-items-end justify-content-md-between justify-content-start gap-3">
                    <div class="section-title1">
                        <h2>Our Top <span>Recruiters</span></h2>
                        <p>To choose your trending job dream & to make future bright.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="slick-wrapper">
                    <div id="slick1">
                        <div class="slide-item">
                            <div class="recruters-card">
                                <div class="company-area">
                                    <div class="logo">
                                        <img src="{{ asset('backend/images/bg/company-logo/company-06.png') }}"
                                            alt="">
                                    </div>
                                    <div class="name-location">
                                        <h5><a href="company-listing2.html">Norland Company</a></h5>
                                        <p><img src="{{ asset('backend/images/icon/location.svg') }}" alt="">
                                            New-York, USA</p>
                                        <p><img src="{{ asset('backend/images/icon/person-2.svg') }}" alt="">
                                            45 People</p>
                                    </div>
                                </div>
                                <div class="job-details-vacancies">
                                    <div class="apply-btn">
                                        <a href="company-details.html"><span><img
                                                    src="{{ asset('backend/images/icon/apply-ellipse.svg') }}"
                                                    alt=""></span>View Details</a>
                                    </div>
                                    <div class="vacancies">
                                        <p>Vacancies: <span>21</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slide-item">
                            <div class="recruters-card">
                                <div class="company-area">
                                    <div class="logo">
                                        <img src="{{ asset('backend/images/bg/company-logo/company-07.png') }}"
                                            alt="">
                                    </div>
                                    <div class="name-location">
                                        <h5><a href="company-listing2.html">Germaine Company</a></h5>
                                        <p><img src="{{ asset('backend/images/icon/location.svg') }}" alt="">
                                            Chicago, Australia</p>
                                        <p><img src="{{ asset('backend/images/icon/person-2.svg') }}" alt="">
                                            32 People</p>
                                    </div>
                                </div>
                                <div class="job-details-vacancies">
                                    <div class="apply-btn">
                                        <a href="company-details.html"><span><img
                                                    src="{{ asset('backend/images/icon/apply-ellipse.svg') }}"
                                                    alt=""></span>View Details</a>
                                    </div>
                                    <div class="vacancies">
                                        <p>Vacancies: <span>13</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slide-item">
                            <div class="recruters-card">
                                <div class="company-area">
                                    <div class="logo">
                                        <img src="{{ asset('backend/images/bg/company-logo/company-08.png') }}"
                                            alt="">
                                    </div>
                                    <div class="name-location">
                                        <h5><a href="company-listing2.html">Techman Digita</a></h5>
                                        <p><img src="{{ asset('backend/images/icon/location.svg') }}" alt="">
                                            Dhaka, Bangladesh</p>
                                        <p><img src="{{ asset('backend/images/icon/person-2.svg') }}" alt="">
                                            35 People</p>
                                    </div>
                                </div>
                                <div class="job-details-vacancies">
                                    <div class="apply-btn">
                                        <a href="company-details.html"><span><img
                                                    src="{{ asset('backend/images/icon/apply-ellipse.svg') }}"
                                                    alt=""></span>View Details</a>
                                    </div>
                                    <div class="vacancies">
                                        <p>Vacancies: <span>15</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slide-item">
                            <div class="recruters-card">
                                <div class="company-area">
                                    <div class="logo">
                                        <img src="{{ asset('backend/images/bg/company-logo/company-09.png') }}"
                                            alt="">
                                    </div>
                                    <div class="name-location">
                                        <h5><a href="company-listing2.html">Tario.Co Ltd</a></h5>
                                        <p><img src="{{ asset('backend/images/icon/location.svg') }}" alt="">
                                            Sylhet, Bangladesh</p>
                                        <p><img src="{{ asset('backend/images/icon/person-2.svg') }}" alt="">
                                            55 People</p>
                                    </div>
                                </div>
                                <div class="job-details-vacancies">
                                    <div class="apply-btn">
                                        <a href="company-details.html"><span><img
                                                    src="{{ asset('backend/images/icon/apply-ellipse.svg') }}"
                                                    alt=""></span>View Details</a>
                                    </div>
                                    <div class="vacancies">
                                        <p>Vacancies: <span>33</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slide-item">
                            <div class="recruters-card">
                                <div class="company-area">
                                    <div class="logo">
                                        <img src="{{ asset('backend/images/bg/company-logo/company-06.png') }}"
                                            alt="">
                                    </div>
                                    <div class="name-location">
                                        <h5><a href="company-listing2.html">Norland Company</a></h5>
                                        <p><img src="{{ asset('backend/images/icon/location.svg') }}" alt="">
                                            New-York, USA</p>
                                        <p><img src="{{ asset('backend/images/icon/person-2.svg') }}" alt="">
                                            45 People</p>
                                    </div>
                                </div>
                                <div class="job-details-vacancies">
                                    <div class="apply-btn">
                                        <a href="company-details.html"><span><img
                                                    src="{{ asset('backend/images/icon/apply-ellipse.svg') }}"
                                                    alt=""></span>View Details</a>
                                    </div>
                                    <div class="vacancies">
                                        <p>Vacancies: <span>21</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slide-item">
                            <div class="recruters-card">
                                <div class="company-area">
                                    <div class="logo">
                                        <img src="{{ asset('backend/images/bg/company-logo/company-07.png') }}"
                                            alt="">
                                    </div>
                                    <div class="name-location">
                                        <h5><a href="company-listing2.html">Germaine Company</a></h5>
                                        <p><img src="{{ asset('backend/images/icon/location.svg') }}" alt="">
                                            Chicago, Australia</p>
                                        <p><img src="{{ asset('backend/images/icon/person-2.svg') }}" alt="">
                                            32 People</p>
                                    </div>
                                </div>
                                <div class="job-details-vacancies">
                                    <div class="apply-btn">
                                        <a href="company-details.html"><span><img
                                                    src="{{ asset('backend/images/icon/apply-ellipse.svg') }}"
                                                    alt=""></span>View Details</a>
                                    </div>
                                    <div class="vacancies">
                                        <p>Vacancies: <span>13</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slide-item">
                            <div class="recruters-card">
                                <div class="company-area">
                                    <div class="logo">
                                        <img src="{{ asset('backend/images/bg/company-logo/company-08.png') }}"
                                            alt="">
                                    </div>
                                    <div class="name-location">
                                        <h5><a href="company-listing2.html">Techman Digita</a></h5>
                                        <p><img src="{{ asset('backend/images/icon/location.svg') }}"
                                                alt=""> Dhaka, Bangladesh</p>
                                        <p><img src="{{ asset('backend/images/icon/person-2.svg') }}"
                                                alt=""> 35 People</p>
                                    </div>
                                </div>
                                <div class="job-details-vacancies">
                                    <div class="apply-btn">
                                        <a href="company-details.html"><span><img
                                                    src="{{ asset('backend/images/icon/apply-ellipse.svg') }}"
                                                    alt=""></span>View Details</a>
                                    </div>
                                    <div class="vacancies">
                                        <p>Vacancies: <span>15</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slide-item">
                            <div class="recruters-card">
                                <div class="company-area">
                                    <div class="logo">
                                        <img src="{{ asset('backend/images/bg/company-logo/company-09.png') }}"
                                            alt="">
                                    </div>
                                    <div class="name-location">
                                        <h5><a href="company-listing2.html">Tario.Co Ltd</a></h5>
                                        <p><img src="{{ asset('backend/images/icon/location.svg') }}"
                                                alt=""> Sylhet, Bangladesh</p>
                                        <p><img src="{{ asset('backend/images/icon/person-2.svg') }}"
                                                alt=""> 55 People</p>
                                    </div>
                                </div>
                                <div class="job-details-vacancies">
                                    <div class="apply-btn">
                                        <a href="company-details.html"><span><img
                                                    src="{{ asset('backend/images/icon/apply-ellipse.svg') }}"
                                                    alt=""></span>View Details</a>
                                    </div>
                                    <div class="vacancies">
                                        <p>Vacancies: <span>33</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slide-item">
                            <div class="recruters-card">
                                <div class="company-area">
                                    <div class="logo">
                                        <img src="{{ asset('backend/images/bg/company-logo/company-06.png') }}"
                                            alt="">
                                    </div>
                                    <div class="name-location">
                                        <h5><a href="company-listing2.html">Norland Company</a></h5>
                                        <p><img src="{{ asset('backend/images/icon/location.svg') }}"
                                                alt=""> New-York, USA</p>
                                        <p><img src="{{ asset('backend/images/icon/person-2.svg') }}"
                                                alt=""> 45 People</p>
                                    </div>
                                </div>
                                <div class="job-details-vacancies">
                                    <div class="apply-btn">
                                        <a href="company-details.html"><span><img
                                                    src="{{ asset('backend/images/icon/apply-ellipse.svg') }}"
                                                    alt=""></span>View Details</a>
                                    </div>
                                    <div class="vacancies">
                                        <p>Vacancies: <span>21</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slide-item">
                            <div class="recruters-card">
                                <div class="company-area">
                                    <div class="logo">
                                        <img src="{{ asset('backend/images/bg/company-logo/company-07.png') }}"
                                            alt="">
                                    </div>
                                    <div class="name-location">
                                        <h5><a href="company-listing2.html">Germaine Company</a></h5>
                                        <p><img src="{{ asset('backend/images/icon/location.svg') }}"
                                                alt=""> Chicago, Australia</p>
                                        <p><img src="{{ asset('backend/images/icon/person-2.svg') }}"
                                                alt=""> 32 People</p>
                                    </div>
                                </div>
                                <div class="job-details-vacancies">
                                    <div class="apply-btn">
                                        <a href="company-details.html"><span><img
                                                    src="{{ asset('backend/images/icon/apply-ellipse.svg') }}"
                                                    alt=""></span>View Details</a>
                                    </div>
                                    <div class="vacancies">
                                        <p>Vacancies: <span>13</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slide-item">
                            <div class="recruters-card">
                                <div class="company-area">
                                    <div class="logo">
                                        <img src="{{ asset('backend/images/bg/company-logo/company-08.png') }}"
                                            alt="">
                                    </div>
                                    <div class="name-location">
                                        <h5><a href="company-listing2.html">Techman Digita</a></h5>
                                        <p><img src="{{ asset('backend/images/icon/location.svg') }}"
                                                alt=""> Dhaka, Bangladesh</p>
                                        <p><img src="{{ asset('backend/images/icon/person-2.svg') }}"
                                                alt=""> 35 People</p>
                                    </div>
                                </div>
                                <div class="job-details-vacancies">
                                    <div class="apply-btn">
                                        <a href="company-details.html"><span><img
                                                    src="{{ asset('backend/images/icon/apply-ellipse.svg') }}"
                                                    alt=""></span>View Details</a>
                                    </div>
                                    <div class="vacancies">
                                        <p>Vacancies: <span>15</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slide-item">
                            <div class="recruters-card">
                                <div class="company-area">
                                    <div class="logo">
                                        <img src="{{ asset('backend/images/bg/company-logo/company-09.png') }}"
                                            alt="">
                                    </div>
                                    <div class="name-location">
                                        <h5><a href="company-listing2.html">Tario.Co Ltd</a></h5>
                                        <p><img src="{{ asset('backend/images/icon/location.svg') }}"
                                                alt=""> Sylhet, Bangladesh</p>
                                        <p><img src="{{ asset('backend/images/icon/person-2.svg') }}"
                                                alt=""> 55 People</p>
                                    </div>
                                </div>
                                <div class="job-details-vacancies">
                                    <div class="apply-btn">
                                        <a href="company-details.html"><span><img
                                                    src="{{ asset('backend/images/icon/apply-ellipse.svg') }}"
                                                    alt=""></span>View Details</a>
                                    </div>
                                    <div class="vacancies">
                                        <p>Vacancies: <span>33</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
                                <li><a href="job-listing2.html">Browse Jobs <i class='bx bx-up-arrow-alt'></i></a>
                                </li>
                                <li><a href="dashboard.html">Candidate Dashboard <i
                                            class='bx bx-up-arrow-alt'></i></a>
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
                                <li><a href="job-listing2.html">Jobs Featured <i class='bx bx-up-arrow-alt'></i></a>
                                </li>
                                <li><a href="company-dashboard.html">Employer Dashboard <i
                                            class='bx bx-up-arrow-alt'></i></a></li>
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
                                <img src="{{ asset('backend/images/icon/footer-support-icon.svg') }}"
                                    alt="">
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
                                    href="https://www.egenslab.com/">Egenslab</a>
                            </p>
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
