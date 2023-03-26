@extends('included.homeTemplate')

<!-- Specify content -->
@section('content')
    <div class="company-listing-area pt-120 mb-120">
        <div class="container">
            <div class="row g-lg-4 gy-5">
                <div class="col-lg-4 order-lg-1 order-2">
                    <div class="job-sidebar">
                        <div class="job-widget style-1 mb-20">
                            <div class="check-box-item">
                                <h5 class="job-widget-title">Company Category</h5>
                                <div class="checkbox-container">
                                    <ul>
                                        <li>
                                            <label class="containerss">
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                                <span class="text">Health Care</span>
                                                <span class="qty">(80)</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="containerss">
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                                <span class="text">Account & Finance</span>
                                                <span class="qty">(80)</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="containerss">
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                                <span class="text">Transportation</span>
                                                <span class="qty">(100)</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="containerss">
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                                <span class="text">Medical & Finance</span>
                                                <span class="qty">(120)</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="containerss">
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                                <span class="text">Development</span>
                                                <span class="qty">(30)</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="containerss">
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                                <span class="text">Engineering</span>
                                                <span class="qty">(10)</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="containerss">
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                                <span class="text">Receptionist</span>
                                                <span class="qty">(70)</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="containerss">
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                                <span class="text">Non-Profit Org.</span>
                                                <span class="qty">(100)</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="containerss">
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                                <span class="text">Health Care</span>
                                                <span class="qty">(80)</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="containerss">
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                                <span class="text">Account & Finance</span>
                                                <span class="qty">(80)</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="containerss">
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                                <span class="text">Transportation</span>
                                                <span class="qty">(100)</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="containerss">
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                                <span class="text">Medical & Finance</span>
                                                <span class="qty">(120)</span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="job-widget mb-20">
                            <div class="check-box-item">
                                <h5 class="job-widget-title">Country/ Location</h5>
                                <div class="checkbox-container">
                                    <ul>
                                        <li>
                                            <label class="containerss">
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                                <span class="text">Dhaka, Bangladesh</span>
                                                <span class="qty">(30)</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="containerss">
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                                <span class="text">Chicago, Australia</span>
                                                <span class="qty">(10)</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="containerss">
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                                <span class="text">Sylhet, Bangladesh</span>
                                                <span class="qty">(100)</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="containerss">
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                                <span class="text">New York, USA </span>
                                                <span class="qty">(60)</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="containerss">
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                                <span class="text">West London, UK</span>
                                                <span class="qty">(40)</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="containerss">
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                                <span class="text">Bristol, UK</span>
                                                <span class="qty">(30)</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="containerss">
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                                <span class="text">Brighton, UK</span>
                                                <span class="qty">(80)</span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="job-widget mb-20">
                            <div class="check-box-item">
                                <h5 class="job-widget-title">Type of Company</h5>
                                <div class="checkbox-container">
                                    <ul>
                                        <li>
                                            <label class="containerss">
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                                <span class="text">Start-up</span>
                                                <span class="qty">(30)</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="containerss">
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                                <span class="text">Mid-Level</span>
                                                <span class="qty">(60)</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="containerss">
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                                <span class="text">Top Level</span>
                                                <span class="qty">(100)</span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="job-widget mb-20">
                            <div class="check-box-item">
                                <h5 class="job-widget-title">Company Size</h5>
                                <div class="checkbox-container">
                                    <ul>
                                        <li>
                                            <label class="containerss">
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                                <span class="text">05-20 Person</span>
                                                <span class="qty">(80)</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="containerss">
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                                <span class="text">15-25 Person</span>
                                                <span class="qty">(100)</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="containerss">
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                                <span class="text">25-40 Person</span>
                                                <span class="qty">(100)</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="containerss">
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                                <span class="text">35-50 Person</span>
                                                <span class="qty">(30)</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="containerss">
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                                <span class="text">80-100 Person</span>
                                                <span class="qty">(30)</span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="job-widget-btn">
                            <a class="primry-btn-2 lg-btn text-center" href="#">Make A Job Post</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 order-lg-2 order-1">
                    <div class="company-listing-wrap">
                        <div class="row g-4 mb-25 justify-content-center">
                            <div class="col-lg-6 d-flex align-items-center justify-content-center">
                                <p class="show-item">Showing results 10 in 200 jobs list</p>
                            </div>
                            <div class="col-lg-6 d-flex align-items-center justify-content-lg-end justify-content-center">
                                <div class="grid-select-area">
                                    <div class="select-area">
                                        <select class="select1">
                                            <option value="0">Sort By(Default)</option>
                                            <option value="1">Full Time</option>
                                            <option value="2">Part Time</option>
                                            <option value="3">Remote</option>
                                            <option value="3">Internship</option>
                                            <option value="3">Freelance</option>
                                        </select>
                                    </div>
                                    <div class="grid-area">
                                        <ul>
                                            <li><a href="company-listing1.html">
                                                    <svg width="16" height="16" viewBox="0 0 16 16"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.26106 6.95674H0.695674C0.311464 6.95674 0 6.64527 0 6.26106V0.695674C0 0.311464 0.311464 0 0.695674 0H6.26106C6.64527 0 6.95674 0.311464 6.95674 0.695674V6.26106C6.95674 6.64527 6.64527 6.95674 6.26106 6.95674Z" />
                                                        <path
                                                            d="M15.304 6.95674H9.73864C9.35443 6.95674 9.04297 6.64527 9.04297 6.26106V0.695674C9.04297 0.311464 9.35443 0 9.73864 0H15.304C15.6882 0 15.9997 0.311464 15.9997 0.695674V6.26106C15.9997 6.64527 15.6882 6.95674 15.304 6.95674Z" />
                                                        <path
                                                            d="M6.26106 16.0004H0.695674C0.311464 16.0004 0 15.689 0 15.3048V9.73937C0 9.35517 0.311464 9.0437 0.695674 9.0437H6.26106C6.64527 9.0437 6.95674 9.35517 6.95674 9.73937V15.3048C6.95674 15.689 6.64527 16.0004 6.26106 16.0004Z" />
                                                        <path
                                                            d="M15.304 16.0004H9.73864C9.35443 16.0004 9.04297 15.689 9.04297 15.3048V9.73937C9.04297 9.35517 9.35443 9.0437 9.73864 9.0437H15.304C15.6882 9.0437 15.9997 9.35517 15.9997 9.73937V15.3048C15.9997 15.689 15.6882 16.0004 15.304 16.0004Z" />
                                                    </svg>
                                                </a></li>
                                            <li><a class="active" href="company-listing2.html">
                                                    <svg width="22" height="16" viewBox="0 0 22 16"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M1.91313 0C0.856731 0 0 0.893707 0 1.99656C0 3.09861 0.856731 3.99157 1.91313 3.99157C2.96953 3.99157 3.82626 3.09861 3.82626 1.99656C3.82626 0.893707 2.96953 0 1.91313 0Z" />
                                                        <path
                                                            d="M1.91313 6.00464C0.856731 6.00464 0 6.8976 0 8.00045C0 9.1025 0.856731 9.99621 1.91313 9.99621C2.96953 9.99621 3.82626 9.1025 3.82626 8.00045C3.82626 6.8976 2.96953 6.00464 1.91313 6.00464Z" />
                                                        <path
                                                            d="M1.91313 12.0085C0.856731 12.0085 0 12.9023 0 14.0043C0 15.1064 0.856731 16.0001 1.91313 16.0001C2.96953 16.0001 3.82626 15.1064 3.82626 14.0043C3.82626 12.9023 2.96953 12.0085 1.91313 12.0085Z" />
                                                        <path
                                                            d="M20.561 0.495117H6.95229C6.15787 0.495117 5.51367 1.16716 5.51367 1.99665C5.51367 2.82545 6.15782 3.49744 6.95229 3.49744H20.561C21.3554 3.49744 21.9996 2.82545 21.9996 1.99665C21.9996 1.16716 21.3554 0.495117 20.561 0.495117Z" />
                                                        <path
                                                            d="M20.561 6.49878H6.95229C6.15787 6.49878 5.51367 7.17077 5.51367 8.00032C5.51367 8.82911 6.15782 9.5011 6.95229 9.5011H20.561C21.3554 9.5011 21.9996 8.82911 21.9996 8.00032C21.9996 7.17077 21.3554 6.49878 20.561 6.49878Z" />
                                                        <path
                                                            d="M20.561 12.5034H6.95229C6.15787 12.5034 5.51367 13.1754 5.51367 14.0042C5.51367 14.833 6.15782 15.5049 6.95229 15.5049H20.561C21.3554 15.5049 21.9996 14.833 21.9996 14.0042C21.9996 13.1754 21.3554 12.5034 20.561 12.5034Z" />
                                                    </svg>
                                                </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row gy-5 mb-70 justify-content-center">
                            <div class="col-md-6 col-sm-10">
                                <div class="company-listing-card2">
                                    <div class="company-area">
                                        <span></span>
                                        <div class="logo">
                                            <img src="../assets/images/bg/company-logo/company-01.png" alt="">
                                        </div>
                                        <div class="company-details">
                                            <div class="name-location">
                                                <h5><a href="company-details.html">Marko-Land Company</a></h5>
                                                <ul>
                                                    <li><img src="../assets/images/icon/location.svg" alt="">
                                                        Dhaka, Bangladesh</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="job-details-vacancies">
                                        <div class="vacancies">
                                            <p>Vacancies: <span>1</span></p>
                                        </div>
                                        <div class="apply-btn">
                                            <a href="company-details.html">View Details<span><img
                                                        src="../assets/images/icon/apply-ellipse.svg"
                                                        alt=""></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-10">
                                <div class="company-listing-card2">
                                    <div class="company-area">
                                        <span></span>
                                        <div class="logo">
                                            <img src="../assets/images/bg/company-logo/company-02.png" alt="">
                                        </div>
                                        <div class="company-details">
                                            <div class="name-location">
                                                <h5><a href="company-details.html">Laballo.Tech Ltd</a></h5>
                                                <ul>
                                                    <li><img src="../assets/images/icon/location.svg" alt="">
                                                        Dhaka, Bangladesh</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="job-details-vacancies">
                                        <div class="vacancies">
                                            <p>Vacancies: <span>10</span></p>
                                        </div>
                                        <div class="apply-btn">
                                            <a href="company-details.html">View Details<span><img
                                                        src="../assets/images/icon/apply-ellipse.svg"
                                                        alt=""></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-10">
                                <div class="company-listing-card2">
                                    <div class="company-area">
                                        <span></span>
                                        <div class="logo">
                                            <img src="../assets/images/bg/company-logo/company-03.png" alt="">
                                        </div>
                                        <div class="company-details">
                                            <div class="name-location">
                                                <h5><a href="company-details.html">Wiestrong Industry</a></h5>
                                                <ul>
                                                    <li><img src="../assets/images/icon/location.svg" alt="">
                                                        Dhaka, Bangladesh</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="job-details-vacancies">
                                        <div class="vacancies">
                                            <p>Vacancies: <span>20</span></p>
                                        </div>
                                        <div class="apply-btn">
                                            <a href="company-details.html">View Details<span><img
                                                        src="../assets/images/icon/apply-ellipse.svg"
                                                        alt=""></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-10">
                                <div class="company-listing-card2">
                                    <div class="company-area">
                                        <span></span>
                                        <div class="logo">
                                            <img src="../assets/images/bg/company-logo/company-04.png" alt="">
                                        </div>
                                        <div class="company-details">
                                            <div class="name-location">
                                                <h5><a href="company-details.html">XYZ.UIUX Ltd</a></h5>
                                                <ul>
                                                    <li><img src="../assets/images/icon/location.svg" alt="">
                                                        Dhaka, Bangladesh</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="job-details-vacancies">
                                        <div class="vacancies">
                                            <p>Vacancies: <span>09</span></p>
                                        </div>
                                        <div class="apply-btn">
                                            <a href="company-details.html">View Details<span><img
                                                        src="../assets/images/icon/apply-ellipse.svg"
                                                        alt=""></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-10">
                                <div class="company-listing-card2">
                                    <div class="company-area">
                                        <span></span>
                                        <div class="logo">
                                            <img src="../assets/images/bg/company-logo/company-05.png" alt="">
                                        </div>
                                        <div class="company-details">
                                            <div class="name-location">
                                                <h5><a href="company-details.html">Bistro.Tech Ltd</a></h5>
                                                <ul>
                                                    <li><img src="../assets/images/icon/location.svg" alt="">
                                                        Dhaka, Bangladesh</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="job-details-vacancies">
                                        <div class="vacancies">
                                            <p>Vacancies: <span>12</span></p>
                                        </div>
                                        <div class="apply-btn">
                                            <a href="company-details.html">View Details<span><img
                                                        src="../assets/images/icon/apply-ellipse.svg"
                                                        alt=""></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-10">
                                <div class="company-listing-card2">
                                    <div class="company-area">
                                        <span></span>
                                        <div class="logo">
                                            <img src="../assets/images/bg/company-logo/company-06.png" alt="">
                                        </div>
                                        <div class="company-details">
                                            <div class="name-location">
                                                <h5><a href="company-details.html">Normand Half Group</a></h5>
                                                <ul>
                                                    <li><img src="../assets/images/icon/location.svg" alt="">
                                                        Dhaka, Bangladesh</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="job-details-vacancies">
                                        <div class="vacancies">
                                            <p>Vacancies: <span>02</span></p>
                                        </div>
                                        <div class="apply-btn">
                                            <a href="company-details.html">View Details<span><img
                                                        src="../assets/images/icon/apply-ellipse.svg"
                                                        alt=""></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-10">
                                <div class="company-listing-card2">
                                    <div class="company-area">
                                        <span></span>
                                        <div class="logo">
                                            <img src="../assets/images/bg/company-logo/company-07.png" alt="">
                                        </div>
                                        <div class="company-details">
                                            <div class="name-location">
                                                <h5><a href="company-details.html">Gangster Hero Lead</a></h5>
                                                <ul>
                                                    <li><img src="../assets/images/icon/location.svg" alt="">
                                                        Dhaka, Bangladesh</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="job-details-vacancies">
                                        <div class="vacancies">
                                            <p>Vacancies: <span>03</span></p>
                                        </div>
                                        <div class="apply-btn">
                                            <a href="company-details.html">View Details<span><img
                                                        src="../assets/images/icon/apply-ellipse.svg"
                                                        alt=""></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-10">
                                <div class="company-listing-card2">
                                    <div class="company-area">
                                        <span></span>
                                        <div class="logo">
                                            <img src="../assets/images/bg/company-logo/company-08.png" alt="">
                                        </div>
                                        <div class="company-details">
                                            <div class="name-location">
                                                <h5><a href="company-details.html">Neuro Science Ltd</a></h5>
                                                <ul>
                                                    <li><img src="../assets/images/icon/location.svg" alt="">
                                                        Dhaka, Bangladesh</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="job-details-vacancies">
                                        <div class="vacancies">
                                            <p>Vacancies: <span>44</span></p>
                                        </div>
                                        <div class="apply-btn">
                                            <a href="company-details.html">View Details<span><img
                                                        src="../assets/images/icon/apply-ellipse.svg"
                                                        alt=""></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-10">
                                <div class="company-listing-card2">
                                    <div class="company-area">
                                        <span></span>
                                        <div class="logo">
                                            <img src="../assets/images/bg/company-logo/company-09.png" alt="">
                                        </div>
                                        <div class="company-details">
                                            <div class="name-location">
                                                <h5><a href="company-details.html">Laballo.Tech Ltd</a></h5>
                                                <ul>
                                                    <li><img src="../assets/images/icon/location.svg" alt="">
                                                        Dhaka, Bangladesh</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="job-details-vacancies">
                                        <div class="vacancies">
                                            <p>Vacancies: <span>21</span></p>
                                        </div>
                                        <div class="apply-btn">
                                            <a href="company-details.html">View Details<span><img
                                                        src="../assets/images/icon/apply-ellipse.svg"
                                                        alt=""></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-10">
                                <div class="company-listing-card2">
                                    <div class="company-area">
                                        <span></span>
                                        <div class="logo">
                                            <img src="../assets/images/bg/company-logo/company-01.png" alt="">
                                        </div>
                                        <div class="company-details">
                                            <div class="name-location">
                                                <h5><a href="company-details.html">Bistro.Tech Ltd</a></h5>
                                                <ul>
                                                    <li><img src="../assets/images/icon/location.svg" alt="">
                                                        Dhaka, Bangladesh</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="job-details-vacancies">
                                        <div class="vacancies">
                                            <p>Vacancies: <span>14</span></p>
                                        </div>
                                        <div class="apply-btn">
                                            <a href="company-details.html">View Details<span><img
                                                        src="../assets/images/icon/apply-ellipse.svg"
                                                        alt=""></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-10">
                                <div class="company-listing-card2">
                                    <div class="company-area">
                                        <span></span>
                                        <div class="logo">
                                            <img src="../assets/images/bg/company-logo/company-02.png" alt="">
                                        </div>
                                        <div class="company-details">
                                            <div class="name-location">
                                                <h5><a href="company-details.html">Gangster Hero Lead16</a></h5>
                                                <ul>
                                                    <li><img src="../assets/images/icon/location.svg" alt="">
                                                        Dhaka, Bangladesh</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="job-details-vacancies">
                                        <div class="vacancies">
                                            <p>Vacancies: <span>16</span></p>
                                        </div>
                                        <div class="apply-btn">
                                            <a href="company-details.html">View Details<span><img
                                                        src="../assets/images/icon/apply-ellipse.svg"
                                                        alt=""></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-10">
                                <div class="company-listing-card2">
                                    <div class="company-area">
                                        <span></span>
                                        <div class="logo">
                                            <img src="../assets/images/bg/company-logo/company-03.png" alt="">
                                        </div>
                                        <div class="company-details">
                                            <div class="name-location">
                                                <h5><a href="company-details.html">Wiestrong Industry</a></h5>
                                                <ul>
                                                    <li><img src="../assets/images/icon/location.svg" alt="">
                                                        Dhaka, Bangladesh</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="job-details-vacancies">
                                        <div class="vacancies">
                                            <p>Vacancies: <span>15</span></p>
                                        </div>
                                        <div class="apply-btn">
                                            <a href="company-details.html">View Details<span><img
                                                        src="../assets/images/icon/apply-ellipse.svg"
                                                        alt=""></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-10">
                                <div class="company-listing-card2">
                                    <div class="company-area">
                                        <span></span>
                                        <div class="logo">
                                            <img src="../assets/images/bg/company-logo/company-04.png" alt="">
                                        </div>
                                        <div class="company-details">
                                            <div class="name-location">
                                                <h5><a href="company-details.html">UI.UX Company</a></h5>
                                                <ul>
                                                    <li><img src="../assets/images/icon/location.svg" alt="">
                                                        Dhaka, Bangladesh</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="job-details-vacancies">
                                        <div class="vacancies">
                                            <p>Vacancies: <span>18</span></p>
                                        </div>
                                        <div class="apply-btn">
                                            <a href="company-details.html">View Details<span><img
                                                        src="../assets/images/icon/apply-ellipse.svg"
                                                        alt=""></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-10">
                                <div class="company-listing-card2">
                                    <div class="company-area">
                                        <span></span>
                                        <div class="logo">
                                            <img src="../assets/images/bg/company-logo/company-05.png" alt="">
                                        </div>
                                        <div class="company-details">
                                            <div class="name-location">
                                                <h5><a href="company-details.html">XYZ.UIUX Ltd</a></h5>
                                                <ul>
                                                    <li><img src="../assets/images/icon/location.svg" alt="">
                                                        Dhaka, Bangladesh</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="job-details-vacancies">
                                        <div class="vacancies">
                                            <p>Vacancies: <span>13</span></p>
                                        </div>
                                        <div class="apply-btn">
                                            <a href="company-details.html">View Details<span><img
                                                        src="../assets/images/icon/apply-ellipse.svg"
                                                        alt=""></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-10">
                                <div class="company-listing-card2">
                                    <div class="company-area">
                                        <span></span>
                                        <div class="logo">
                                            <img src="../assets/images/bg/company-logo/company-06.png" alt="">
                                        </div>
                                        <div class="company-details">
                                            <div class="name-location">
                                                <h5><a href="company-details.html">Wiestrong Industry</a></h5>
                                                <ul>
                                                    <li><img src="../assets/images/icon/location.svg" alt="">
                                                        Dhaka, Bangladesh</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="job-details-vacancies">
                                        <div class="vacancies">
                                            <p>Vacancies: <span>20</span></p>
                                        </div>
                                        <div class="apply-btn">
                                            <a href="company-details.html">View Details<span><img
                                                        src="../assets/images/icon/apply-ellipse.svg"
                                                        alt=""></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-10">
                                <div class="company-listing-card2">
                                    <div class="company-area">
                                        <span></span>
                                        <div class="logo">
                                            <img src="../assets/images/bg/company-logo/company-07.png" alt="">
                                        </div>
                                        <div class="company-details">
                                            <div class="name-location">
                                                <h5><a href="company-details.html">Transtia. Techman </a></h5>
                                                <ul>
                                                    <li><img src="../assets/images/icon/location.svg" alt="">
                                                        Dhaka, Bangladesh</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="job-details-vacancies">
                                        <div class="vacancies">
                                            <p>Vacancies: <span>20</span></p>
                                        </div>
                                        <div class="apply-btn">
                                            <a href="company-details.html">View Details<span><img
                                                        src="../assets/images/icon/apply-ellipse.svg"
                                                        alt=""></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-10">
                                <div class="company-listing-card2">
                                    <div class="company-area">
                                        <span></span>
                                        <div class="logo">
                                            <img src="../assets/images/bg/company-logo/company-08.png" alt="">
                                        </div>
                                        <div class="company-details">
                                            <div class="name-location">
                                                <h5><a href="company-details.html">Elite Hangstroman</a></h5>
                                                <ul>
                                                    <li><img src="../assets/images/icon/location.svg" alt="">
                                                        Dhaka, Bangladesh</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="job-details-vacancies">
                                        <div class="vacancies">
                                            <p>Vacancies: <span>19</span></p>
                                        </div>
                                        <div class="apply-btn">
                                            <a href="company-details.html">View Details<span><img
                                                        src="../assets/images/icon/apply-ellipse.svg"
                                                        alt=""></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-10">
                                <div class="company-listing-card2">
                                    <div class="company-area">
                                        <span></span>
                                        <div class="logo">
                                            <img src="../assets/images/bg/company-logo/company-09.png" alt="">
                                        </div>
                                        <div class="company-details">
                                            <div class="name-location">
                                                <h5><a href="company-details.html">Navello Westro</a></h5>
                                                <ul>
                                                    <li><img src="../assets/images/icon/location.svg" alt="">
                                                        Dhaka, Bangladesh</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="job-details-vacancies">
                                        <div class="vacancies">
                                            <p>Vacancies: <span>12</span></p>
                                        </div>
                                        <div class="apply-btn">
                                            <a href="company-details.html">View Details<span><img
                                                        src="../assets/images/icon/apply-ellipse.svg"
                                                        alt=""></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-10">
                                <div class="company-listing-card2">
                                    <div class="company-area">
                                        <span></span>
                                        <div class="logo">
                                            <img src="../assets/images/bg/company-logo/company-03.png" alt="">
                                        </div>
                                        <div class="company-details">
                                            <div class="name-location">
                                                <h5><a href="company-details.html">New Sky-Mistro</a></h5>
                                                <ul>
                                                    <li><img src="../assets/images/icon/location.svg" alt="">
                                                        Dhaka, Bangladesh</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="job-details-vacancies">
                                        <div class="vacancies">
                                            <p>Vacancies: <span>06</span></p>
                                        </div>
                                        <div class="apply-btn">
                                            <a href="company-details.html">View Details<span><img
                                                        src="../assets/images/icon/apply-ellipse.svg"
                                                        alt=""></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-10">
                                <div class="company-listing-card2">
                                    <div class="company-area">
                                        <span></span>
                                        <div class="logo">
                                            <img src="../assets/images/bg/company-logo/company-04.png" alt="">
                                        </div>
                                        <div class="company-details">
                                            <div class="name-location">
                                                <h5><a href="company-details.html">Wiestrong Industry</a></h5>
                                                <ul>
                                                    <li><img src="../assets/images/icon/location.svg" alt="">
                                                        Dhaka, Bangladesh</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="job-details-vacancies">
                                        <div class="vacancies">
                                            <p>Vacancies: <span>14</span></p>
                                        </div>
                                        <div class="apply-btn">
                                            <a href="company-details.html">View Details<span><img
                                                        src="../assets/images/icon/apply-ellipse.svg"
                                                        alt=""></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-10">
                                <div class="company-listing-card2">
                                    <div class="company-area">
                                        <span></span>
                                        <div class="logo">
                                            <img src="../assets/images/bg/company-logo/company-05.png" alt="">
                                        </div>
                                        <div class="company-details">
                                            <div class="name-location">
                                                <h5><a href="company-details.html">UI.UX Company</a></h5>
                                                <ul>
                                                    <li><img src="../assets/images/icon/location.svg" alt="">
                                                        Dhaka, Bangladesh</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="job-details-vacancies">
                                        <div class="vacancies">
                                            <p>Vacancies: <span>18</span></p>
                                        </div>
                                        <div class="apply-btn">
                                            <a href="company-details.html">View Details<span><img
                                                        src="../assets/images/icon/apply-ellipse.svg"
                                                        alt=""></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-10">
                                <div class="company-listing-card2">
                                    <div class="company-area">
                                        <span></span>
                                        <div class="logo">
                                            <img src="../assets/images/bg/company-logo/company-03.png" alt="">
                                        </div>
                                        <div class="company-details">
                                            <div class="name-location">
                                                <h5><a href="company-details.html">Wiestrong Industry</a></h5>
                                                <ul>
                                                    <li><img src="../assets/images/icon/location.svg" alt="">
                                                        Dhaka, Bangladesh</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="job-details-vacancies">
                                        <div class="vacancies">
                                            <p>Vacancies: <span>20</span></p>
                                        </div>
                                        <div class="apply-btn">
                                            <a href="company-details.html">View Details<span><img
                                                        src="../assets/images/icon/apply-ellipse.svg"
                                                        alt=""></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 d-flex justify-content-center">
                                <div class="pagination-area">
                                    <nav aria-label="...">
                                        <ul class="pagination">
                                            <li class="page-item disabled"><a class="page-link" href="#"
                                                    tabindex="-1"></a></li>
                                            <li class="page-item active" aria-current="page"><a class="page-link"
                                                    href="#">01</a></li>
                                            <li class="page-item"><a class="page-link" href="#">02</a></li>
                                            <li class="page-item"><a class="page-link" href="#">03</a></li>
                                            <li class="page-item"><a class="page-link" href="#"></a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
