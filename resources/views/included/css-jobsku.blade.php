{{-- Meta tag --}}
<meta charset="UTF-8">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

{{-- Load local assets --}}
<link rel="icon" href="{{ asset('backend/images/sm-logo.svg')}}" type="image/gif" sizes="20x20">
<link rel="stylesheet" href="{{ asset('backend/css/all.css')}}">
<link rel="stylesheet" href="{{ asset('backend/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{ asset('backend/css/boxicons.min.css')}}">
<link rel="stylesheet" href="{{ asset('backend/css/summernote.min.css')}}">
<link rel="stylesheet" href="{{ asset('backend/css/bootstrap-icons.css')}}">
<link rel="stylesheet" href="{{ asset('backend/css/jquery-ui.css')}}">
<link rel="stylesheet" href="{{ asset('backend/css/swiper-bundle.css')}}">
<link rel="stylesheet" href="{{ asset('backend/css/slick-theme.css')}}">
<link rel="stylesheet" href="{{ asset('backend/css/slick.css')}}">
<link rel="stylesheet" href="{{ asset('backend/css/nice-select.css')}}">
<link rel="stylesheet" href="{{ asset('backend/css/select2.min.css')}}">
<link rel="stylesheet" href="{{ asset('backend/css/animate.css')}}">
<link rel="stylesheet" href="{{ asset('backend/css/jquery.fancybox.min.css')}}">
<link rel="stylesheet" href="{{ asset('backend/css/datepicker.min.css')}}">
<link rel="stylesheet" href="{{ asset('backend/css/jquery-ui.css')}}">
<link rel="stylesheet" href="{{ asset('backend/css/style.css')}}">

{{-- Load custom font --}}
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

{{-- Set the custom font for spesific tag --}}
<style>
    p, a, li, input, span {
        font-family:"Montserrat", sans-serif;
    }
</style>
