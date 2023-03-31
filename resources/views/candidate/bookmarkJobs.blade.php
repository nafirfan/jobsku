@extends('included.candidateTemplate')

<!-- Specify content -->
@section('content')
    <div class="col-lg-9">
        <div class="applied-job-area">
            <div class="table-wrapper">
                <div class="table-title-filter">
                    <div class="section-title">
                        <h5>Bookmark Jobs </h5>
                    </div>
                </div>
                <table class="eg-table table category-table mb-30">
                    <thead>
                        <tr>
                            <th>Job Tittle</th>
                            <th>Deadline</th>
                            <th>Company</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td data-label="Job Title">
                                <div class="company-info">
                                    <div class="logo">
                                        <img src="../assets/images/bg/company-logo/company-01.png" alt="">
                                    </div>
                                    <div class="company-details">
                                        <div class="top">
                                            <h6><a href="{{ route('home.jobs') }}">Senior UI/UX Designer</a></h6>
                                            <span><img src="../assets/images/icon/calender2.svg" alt=""> 1 days
                                                ago</span>
                                        </div>
                                        <ul>
                                            <li><img src="../assets/images/icon/location.svg" alt="">New-York, USA
                                            </li>
                                            <li>
                                                <img src="../assets/images/icon/arrow2.svg" alt="">
                                                <p><span class="title">Salary:</span> $60-$90 / <span class="time">Per
                                                        Hour</span></p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                            <td data-label="Deadline">03/07/2022</td>
                            <td data-label="Company"><a class="company-btn" href="company-dashboard.html">Tech.Bath Com...
                                </a>
                            </td>
                            <td data-label="Action"><button class="view-btn">Apply Now</button></td>
                        </tr>
                        <tr>
                            <td data-label="Job Title">
                                <div class="company-info">
                                    <div class="logo">
                                        <img src="../assets/images/bg/company-logo/company-02.png" alt="">
                                    </div>
                                    <div class="company-details">
                                        <div class="top">
                                            <h6><a href="{{ route('home.jobs') }}">React JS Developer</a></h6>
                                            <span><img src="../assets/images/icon/calender2.svg" alt=""> 1 days
                                                ago</span>
                                        </div>
                                        <ul>
                                            <li><img src="../assets/images/icon/location.svg" alt="">Dhaka,
                                                Bangladesh</li>
                                            <li>
                                                <img src="../assets/images/icon/arrow2.svg" alt="">
                                                <p><span class="title">Salary:</span> $80-$100 / <span class="time">Per
                                                        Hour</span></p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                            <td data-label="Deadline">07/07/2022</td>
                            <td data-label="Company"><a class="company-btn"
                                    href="{{ route('home.companies') }}">Gangster Group</a>
                            </td>
                            <td data-label="Action"><button class="view-btn">Apply Now</button></td>
                        </tr>
                        <tr>
                            <td data-label="Job Title">
                                <div class="company-info">
                                    <div class="logo">
                                        <img src="../assets/images/bg/company-logo/company-04.png" alt="">
                                    </div>
                                    <div class="company-details">
                                        <div class="top">
                                            <h6><a href="{{ route('home.jobs') }}">WordPress Developer</a></h6>
                                            <span><img src="../assets/images/icon/calender2.svg" alt=""> 2 days
                                                ago</span>
                                        </div>
                                        <ul>
                                            <li><img src="../assets/images/icon/location.svg" alt="">West London, UK
                                            </li>
                                            <li>
                                                <img src="../assets/images/icon/arrow2.svg" alt="">
                                                <p><span class="title">Salary:</span> $30K-$40K / <span
                                                        class="time">Monthly</span></p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                            <td data-label="Deadline">10/07/2022</td>
                            <td data-label="Company"><a class="company-btn"
                                    href="{{ route('home.companies') }}">Zoomly.Co Ltd</a>
                            </td>
                            <td data-label="Action"><button class="view-btn">Apply Now</button></td>
                        </tr>
                        <tr>
                            <td data-label="Job Title">
                                <div class="company-info">
                                    <div class="logo">
                                        <img src="../assets/images/bg/company-logo/company-05.png" alt="">
                                    </div>
                                    <div class="company-details">
                                        <div class="top">
                                            <h6><a href="{{ route('home.jobs') }}">Mern-Stack Developer</a></h6>
                                            <span><img src="../assets/images/icon/calender2.svg" alt=""> 1 week
                                                ago</span>
                                        </div>
                                        <ul>
                                            <li><img src="../assets/images/icon/location.svg" alt="">New-York, USA
                                            </li>
                                            <li>
                                                <img src="../assets/images/icon/arrow2.svg" alt="">
                                                <p><span class="title">Salary:</span> $20-$50 / <span class="time">Per
                                                        Hour</span></p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                            <td data-label="Deadline">13/07/2022</td>
                            <td data-label="Company"><a class="company-btn"
                                    href="{{ route('home.companies') }}">Marko-land Ltd</a>
                            </td>
                            <td data-label="Action"><button class="view-btn">Apply Now</button></td>
                        </tr>
                        <tr>
                            <td data-label="Job Title">
                                <div class="company-info">
                                    <div class="logo">
                                        <img src="../assets/images/bg/company-logo/company-03.png" alt="">
                                    </div>
                                    <div class="company-details">
                                        <div class="top">
                                            <h6><a href="{{ route('home.jobs') }}">PHP Developer</a></h6>
                                            <span><img src="../assets/images/icon/calender2.svg" alt=""> 2 week
                                                ago</span>
                                        </div>
                                        <ul>
                                            <li><img src="../assets/images/icon/location.svg" alt="">New-York, USA
                                            </li>
                                            <li>
                                                <img src="../assets/images/icon/arrow2.svg" alt="">
                                                <p><span class="title">Salary:</span> $40K-$60K / <span
                                                        class="time">Per Month</span></p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                            <td data-label="Deadline">18/08/2022</td>
                            <td data-label="Company"><a class="company-btn"
                                    href="{{ route('home.companies') }}">Bistro.Tech
                                    Group</a>
                            </td>
                            <td data-label="Action"><button class="view-btn">Apply Now</button></td>
                        </tr>
                    </tbody>
                </table>
                <div class="pagination-table-info">
                    <div class="table-info">
                        <span>06 Results Showing In 20 Jobs</span>
                    </div>
                    <div class="pagination-area">
                        <nav aria-label="...">
                            <ul class="pagination">
                                <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1"></a>
                                </li>
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
@stop
