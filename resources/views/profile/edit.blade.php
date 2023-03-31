@extends('included.candidateTemplate')

<!-- Specify content -->
@section('content')
    <div class="col-lg-9">
        <div class="my-profile-inner">
            <div class="form-wrapper mb-60">
                <div class="section-title">
                    <h5>My Profile</h5>
                </div>
                <form method="POST" class="profile-form" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-inner mb-25">
                                <label>First Name*</label>
                                <div class="input-area">
                                    <img src="{{ asset('backend/images/icon/user-2.svg') }}" alt="">
                                    <input type="text" placeholder="{{ old('firstname', $user->firstname) }}"
                                           value="{{ old('firstname', $user->firstname) }}" name="firstname">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-inner mb-25">
                                <label>Last Name*</label>
                                <div class="input-area">
                                    <img src="{{ asset('backend/images/icon/user-2.svg') }}" alt="">
                                    <input type="text" placeholder="{{ old('lastname', $user->lastname) }}"
                                           value="{{ old('lastname', $user->lastname) }}" name="lastname">
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-lg-12 position-relative">
                            <div class="drag-area">
                                <p>Upload Images</p>
                                <button type="button" class="upload-btn">
                                    <i class="bi bi-plus-lg"></i>
                                </button>
                                <input type="file" id="img_profile" name="img_profile" hidden>
                                <div class="image-preview"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-inner mb-25">
                                <label>Email*</label>
                                <div class="input-area">
                                    <img src="{{ asset('backend/images/icon/email-2.svg') }}" alt="">
                                    <input type="email" placeholder="{{ old('email', $user->email) }}"
                                           value="{{ old('email', $user->email) }}" name="email" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-inner mb-25">
                                <label>Username*</label>
                                <div class="input-area">
                                    <img src="{{ asset('backend/images/icon/user-2.svg') }}" alt="">
                                    <input type="text" placeholder="{{ old('username', $user->username) }}"
                                           value="{{ old('username', $user->username) }}" name="username" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-inner mb-25">
                                <label>Current Location</label>
                                <div class="input-area">
                                    <img src="{{ asset('backend/images/icon/map-2.svg') }}" alt="">
                                    <input type="text" placeholder="{{ old('location', $user->location) }}"
                                           value="{{ old('location', $user->location) }}" name="location">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-inner mb-25">
                                <label>Phone Number</label>
                                <div class="input-area">
                                    <img src="{{ asset('backend/images/icon/phone-2.svg') }}" alt="">
                                    <input type="text" placeholder="{{ old('phone', $user->phone) }}"
                                           value="{{ old('phone', $user->phone) }}" name="phone">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-inner mb-25">
                                <label>Current Job Place</label>
                                <div class="input-area">
                                    <img src="{{ asset('backend/images/icon/company-2.svg') }}" alt="">
                                    <input type="text" placeholder="{{ old('current_job', $user->current_job) }}"
                                           value="{{ old('current_job', $user->current_job) }}" name="current_job">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-inner mb-25">
                                <label>Designation</label>
                                <div class="input-area">
                                    <img src="{{ asset('backend/images/icon/designation-2.svg') }}" alt="">
                                    <input type="text" placeholder="{{ old('designation', $user->designation) }}"
                                           value="{{ old('designation', $user->designation) }}" name="designation">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-inner">
                                <button class="primry-btn-2 lg-btn w-unset" type="submit">Update
                                    Profile</button>
                            </div>
                        </div>
                        @if (session('status'))
                            <div class="col-md-4 alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                    </div>
                </form>
            </div>
        </div>
    </div>
@stop

@section('additional-script')
    <script>
        function handleFileChange() {
            if (!this.value) return;

            file = this.files[0];
            dropArea.classList.add("active");
            showFile();
        }
    </script>
    <script src="{{ asset('backend/js/drop-zone.js')}}"></script>
@stop
