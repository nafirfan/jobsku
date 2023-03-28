<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }} - Login</title>
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
        <div class="menu-topbar-area">
            <div class="menu-area">
                <div class="header-logo">
                    <a href="{{ route('home.index') }}"><img alt="image" class="img-fluid"
                            src="{{ asset('backend/images/header1-logo.svg') }}"></a>
                </div>
                <div class="main-menu">
                    <div class="mobile-logo-area d-lg-none d-flex justify-content-between align-items-center">
                        <div class="mobile-logo-wrap">
                            <a href="{{ route('home.index') }}"><img alt="image"
                                    src="{{ asset('backend/images/header1-logo.svg') }}"></a>
                        </div>
                        <div class="menu-close-btn">
                            <i class="bi bi-x-lg"></i>
                        </div>
                    </div>
                    <ul class="menu-list">
                        <li class=""><a href="{{ route('home.index') }}">Home</a></li>
                        <li class=""><a href="{{ route('home.findJobs') }}">Find Jobs</a></li>
                        <li class=""><a href="{{ route('home.faq') }}">FAQ</a></li>
                        <li class=""><a href="{{ route('home.contact') }}">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>


    <div class="login-area pt-120 mb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-wrapper">
                        <div class="form-title">
                            <h3>Log In Here!</h3>
                            <span></span>
                        </div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-inner mb-25">
                                        <label for="login">{{ __('Email or Username') }}*</label>
                                        <div class="input-area">
                                            <img src="{{ asset('backend/images/icon/email-2.svg') }}" alt="">
                                            <input type="text" id=login" name="login" value="{{ old('login') }}"
                                                placeholder="info@example.com" required autofocus />
                                            <ul class="mt-2">
                                                @foreach ($errors->get('password') as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-inner">
                                        <label for="password">{{ __('Password') }}*</label>
                                        <input type="password" name="password" id="password" placeholder="Password"
                                            required autocomplete="current-password" />
                                        <ul class="mt-2">
                                            @foreach ($errors->get('password') as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                        <i class="bi bi-eye-slash" id="togglePassword"></i>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-agreement form-inner d-flex justify-content-between flex-wrap">
                                        <div class="form-group">
                                            <input type="checkbox" id="remember_me" name="remember_me">
                                            <label for="remember_me">{{ __('Remember me') }}</label>
                                        </div>
                                        @if (Route::has('password.request'))
                                            <a href="{{ route('password.request') }}"
                                                class="forgot-pass">{{ __('Forgot your password?') }}</a>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-inner">
                                        <button class="primry-btn-2" type="submit">{{ __('Log in') }}</button>
                                    </div>
                                </div>
                                <h6>Don’t have an account? <a href="{{ route('register') }}">{{ __('Register') }}</a>
                                </h6>
                            </div>
                        </form>
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
                        <p>©Copyright 2023 <a href="#">Jobsku</a> | Design By <a
                                href="https://www.egenslab.com/">Egenslab</a></p>
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


{{-- <x-guest-layout> --}}
{{--    <!-- Session Status --> --}}
{{--    <x-auth-session-status class="mb-4" :status="session('status')" /> --}}

{{--    <form method="POST" action="{{ route('login') }}"> --}}
{{--        @csrf --}}

{{--        <!-- Email Address --> --}}
{{--        <div> --}}
{{--            <x-input-label for="login" :value="__('Email or Username')" /> --}}
{{--            <x-text-input id="login" class="block mt-1 w-full" type="text" name="login" :value="old('login')" required autofocus/> --}}
{{--            <x-input-error :messages="$errors->get('email')" class="mt-2" /> --}}
{{--        </div> --}}

{{--        <!-- Password --> --}}
{{--        <div class="mt-4"> --}}
{{--            <x-input-label for="password" :value="__('Password')" /> --}}

{{--            <x-text-input id="password" class="block mt-1 w-full" --}}
{{--                            type="password" --}}
{{--                            name="password" --}}
{{--                            required autocomplete="current-password" /> --}}

{{--            <x-input-error :messages="$errors->get('password')" class="mt-2" /> --}}
{{--        </div> --}}

{{--        <!-- Remember Me --> --}}
{{-- <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form> --}}
{{-- </x-guest-layout> --}}
