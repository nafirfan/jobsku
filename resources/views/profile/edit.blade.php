@extends('included.candidateTemplate')

<!-- Specify content -->
@section('content')
    <div class="col-lg-9">
        <div class="my-profile-inner">
            <div class="form-wrapper mb-60">
                <div class="section-title">
                    <h5>My Profile</h5>
                </div>
                <form class="profile-form">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-inner mb-25">
                                <label>First Name*</label>
                                <div class="input-area">
                                    <img src="{{ asset('backend/images/icon/user-2.svg') }}" alt="">
                                    <input type="text" placeholder="{{ old('firstname', $user->firstname) }}"
                                           value="{{ old('firstname', $user->firstname) }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-inner mb-25">
                                <label>Last Name*</label>
                                <div class="input-area">
                                    <img src="{{ asset('backend/images/icon/user-2.svg') }}" alt="">
                                    <input type="text" placeholder="{{ old('lastname', $user->lastname) }}"
                                           value="{{ old('lastname', $user->lastname) }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-lg-12 position-relative">
                            <div class="drag-area active">
                                <p>Upload Images</p>
                                <button type="button" class="upload-btn">
                                    <i class="bi bi-plus-lg"></i>
                                </button>
                                <img src="https://{{ Storage::disk('Wasabi')->url('c343765-a/jobsku/users/profiles/').$user->img_profile }}"
                                     class="card-img" alt="img_profile">
                                <input type="file" id="img_profile" name="profile_picture" hidden>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-inner mb-25">
                                <label>Current Location*</label>
                                <div class="input-area">
                                    <img src="{{ asset('backend/images/icon/map-2.svg') }}" alt="">
                                    <input type="text" placeholder="Mirpur, Dhaka">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-inner mb-25">
                                <label>Phone Number*</label>
                                <div class="input-area">
                                    <img src="{{ asset('backend/images/icon/phone-2.svg') }}" alt="">
                                    <input type="text" placeholder="+880-17 *** *** **">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-inner mb-25">
                                <label>Email*</label>
                                <div class="input-area">
                                    <img src="{{ asset('backend/images/icon/email-2.svg') }}" alt="">
                                    <input type="email" placeholder="{{ old('email', $user->email) }}"
                                           value="{{ old('email', $user->email) }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-inner mb-25">
                                <label>Username*</label>
                                <div class="input-area">
                                    <img src="{{ asset('backend/images/icon/user-2.svg') }}" alt="">
                                    <input type="text" placeholder="{{ old('username', $user->username) }}"
                                           value="{{ old('username', $user->username) }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-inner mb-25">
                                <label>Current Job Place*</label>
                                <div class="input-area">
                                    <img src="{{ asset('backend/images/icon/company-2.svg') }}" alt="">
                                    <input type="text" placeholder="Company Name">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-inner mb-25">
                                <label>Designation*</label>
                                <div class="input-area">
                                    <img src="{{ asset('backend/images/icon/designation-2.svg') }}" alt="">
                                    <input type="text" placeholder="UI/UX Engineer">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-inner mb-25">
                                <label>Qualification*</label>
                                <div class="input-area">
                                    <img src="{{ asset('backend/images/icon/qualification-2.svg') }}" alt="">
                                    <select class="select1">
                                        <option value="0">Bachelor Degree in CSE</option>
                                        <option value="1">IGCSE</option>
                                        <option value="2">AS</option>
                                        <option value="4">A Level</option>
                                        <option value="5">Matriculated</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-inner mb-25">
                                <label>Language*</label>
                                <div class="input-area">
                                    <img src="{{ asset('backend/images/icon/language-2.svg') }}" alt="">
                                    <select class="select1">
                                        <option value="0">Bangla</option>
                                        <option value="1">English</option>
                                        <option value="2">Spanish</option>
                                        <option value="4">Italian</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-inner mb-50">
                                <label>Description*</label>
                                <textarea placeholder="Write something about yourself.........."></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-inner">
                                <button class="primry-btn-2 lg-btn w-unset" type="submit">Update
                                    Profile</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop

@section('additional-script')
    <script src="{{ asset('backend/js/drop-zone.js')}}"></script>
@stop
