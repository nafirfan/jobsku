@extends('included.companyTemplate')

@section('content')
    <div class="dashboard-area company-dashboard pt-120 mb-120">
        <div class="container">
            <div class="row">
                @include('included.companyTopbar')
                <div class="col-lg-12">
                    <div class="form-wrapper">
                        <form method="post" action="{{ route('job.store') }}">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="section-title2">
                                        <h5>Job Information:</h5>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-inner mb-25">
                                        <label for="jobtitle">Job Title*</label>
                                        <div class="input-area">
                                            <img src="{{ asset('backend/images/icon/company-2.svg') }}" alt="">
                                            <input type="text" id="jobtitle" name="name"
                                                placeholder="Senior UI/UX Engineer" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-inner mb-25">
                                        <label>Job Category*</label>
                                        <div class="input-area">
                                            <img src="{{ asset('backend/images/icon/category-2.svg') }}" alt="">
                                            <select name="category" id="category" class="select1" required>
                                                <option value="">Select Job Category</option>
                                                <option value="Startup">Startup</option>
                                                <option value="SaaS">SaaS (Software as a Service)</option>
                                                <option value="E-commerce">E-commerce</option>
                                                <option value="Social Media">Social Media</option>
                                                <option value="Mobile App Development">Mobile App Development</option>
                                                <option value="Web Development">Web Development</option>
                                                <option value="Gaming">Gaming</option>
                                                <option value="Artificial Intelligence (AI)">Artificial Intelligence (AI)
                                                </option>
                                                <option value="Internet of Things (IoT)">Internet of Things (IoT)</option>
                                                <option value="Cloud Computing">Cloud Computing</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-inner mb-25">
                                        <label for="vacancies">Vacancies*</label>
                                        <div class="input-area">
                                            <img src="{{ asset('backend/images/icon/user-2.svg') }}" alt="">
                                            <input type="text" id="vacancies" name="vacancy" placeholder="07" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-inner">
                                        <label for="vacancies">Budget/Salary*</label>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="input-area">
                                                    <img src="{{ asset('backend/images/icon/salary-2.svg') }}"
                                                        alt="">
                                                    <input type="text" name="salary_min" placeholder="Min Salary"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-25">
                                                <div class="input-area">
                                                    <img src="{{ asset('backend/images/icon/salary-2.svg') }}"
                                                        alt="">
                                                    <input type="text" name="salary_max" placeholder="Max Salary"
                                                        required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-inner mb-25">
                                        <label>Job Type*</label>
                                        <div class="input-area">
                                            <img src="{{ asset('backend/images/icon/company-2.svg') }}" alt="">
                                            <select id="type" name="type" class="select1" required>
                                                <option value="">Select Job Type</option>
                                                <option value="Full Time">Full Time</option>
                                                <option value="Half Time">Half Time</option>
                                                <option value="Remote">Remote</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-inner mb-25">
                                        <label for="experiences">Year of Experience*</label>
                                        <div class="input-area">
                                            <img src="{{ asset('backend/images/icon/email-2.svg') }}" alt="">
                                            <input type="text" id="experiences" name="year_of_experience"
                                                placeholder="1/2/3" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-inner select-jobtag mb-25">
                                        <label>Location*</label>
                                        <div class="input-area">
                                            <img src="{{ asset('backend/images/icon/search-2.svg') }}" alt="">
                                            <input type="text" id="location" name="location"
                                                placeholder="Buahbatu, Bandung, Indonesia" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-inner mb-25">
                                        <label for="datepicker9">Deadline*</label>
                                        <div class="input-area">
                                            <img src="{{ asset('backend/images/icon/calender2.svg') }}" alt="">
                                            <input type="text" id="datepicker9" name="expiration_pub"
                                                placeholder="MM/DD/YY" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-inner mb-25">
                                        <label>Educational Requirement*</label>
                                        <div class="input-area">
                                            <img src="{{ asset('backend/images/icon/company-2.svg') }}" alt="">
                                            <select id="type" name="educational_req" class="select1" required>
                                                <option value="">Select Educational Requirement</option>
                                                <option value="Bachelor Degree">Bachelor Degree</option>
                                                <option value="Master Degree">Master Degree</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-inner mb-25">
                                        <label>Gender*</label>
                                        <div class="input-area">
                                            <img src="{{ asset('backend/images/icon/user-2.svg') }}" alt="">
                                            <select id="type" name="gender" class="select1" required>
                                                <option value="">Select Gender</option>
                                                <option value="Female">Female</option>
                                                <option value="Male">Male</option>
                                                <option value="All">All</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-inner mb-30">
                                        <label for="summernote1">Job Description*</label>
                                        <textarea name="description" id="summernote1" placeholder="Something Write Yourself....">
                                        </textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-inner mb-30">
                                        <label for="summernote2">Job Responsibility*</label>
                                        <textarea name="responsibilities" id="summernote2" placeholder="Something Write Yourself....">
                                        </textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-inner">
                                        <button class="primry-btn-2 lg-btn w-unset" type="submit">Post Now</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
