@extends('included.candidateTemplate')

@section('content')
    <div class="col-lg-9">
        <div class="form-wrapper">
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            @if ($errors)
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger">{{ $error }}</div>
                @endforeach
            @endif
            <form class="profile-form" method="POST" action="{{ route('user.updatePassword') }}">
                @csrf
                <div class="section-title2">
                    <h5 class="d-flex align-items-baseline gap-1"><img
                            src="{{ asset('backend/images/icon/profile-settings.svg') }}" alt=""> Profile
                        Settings </h5>
                </div>
                <div class="change-password-area mb-40">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="info-title">
                                <h6>Change Your Password</h6>
                                <div class="dash"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-inner mb-25">
                                <label for="password">New Password*</label>
                                <div class="input-area">
                                    <img src="{{ asset('backend/images/icon/lock-2.svg') }}" alt="">
                                    <input type="password" name="new_password" id="new_password" placeholder="Password">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-inner mb-25">
                                <label for="password2">Confirm Password*</label>
                                <div class="input-area">
                                    <img src="{{ asset('backend/images/icon/lock-2.svg') }}" alt="">
                                    <input type="password" name="new_password_confirmation" id="new_password_confirmation"
                                        placeholder="Confirm Password" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="privacy-security-area">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="info-title">
                                <h6>Privacy & Security</h6>
                                <div class="dash"></div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="single-permission align-items-start">
                                <div class="title">
                                    <h6>Delete Account</h6>
                                    <p>If you delete your account, you will no longer be able to get
                                        information about the matched
                                        jobs.</p>
                                </div>
                                <div class="delete-btn">
                                    <button type="reset">Delete Account</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 pt-50">
                    <div class="form-inner">
                        <button class="primry-btn-2 lg-btn w-unset" type="submit">Update Change</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop
