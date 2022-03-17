<!DOCTYPE html>
<html>
<head lang="">
    <meta charset="UTF-8">
    @section('meta')
        <meta name="description" content="@setting('core::site-description')" />
    @show
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>

    </title>
    <link rel="shortcut icon" href="{{ url('favicon.ico') }}">
    <link rel="stylesheet" href="{{ url('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ url('css/font-awesome-4.7.0/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ url('css/validationEngine.jquery.css') }}">
    @yield('css')
    @yield('js')
</head>
<body>
<div id="loading" style="display:none">
    <img id="loading-image" src="{{url('images/loading.gif')}}" alt="" style="width:50px"/>
</div>
<style>
#loading {
width: 100%;
height: 100%;
top: 0;
left: 0;
position: fixed;
display: block;
opacity: 0.7;
background-color: #fff;
z-index: 9999;
text-align: center;
}

#loading-image {
position: absolute;
top: 300px;
left: 675px;
z-index: 100;
}
</style>
<section class="sec1">
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    <img src="{{url('images/logo.png') }}" class="img-responsive" style="margin-top:20px;width: 236px !important;">
                </div>
                <div class="col-sm-8 text-center">
                    <img src="{{url('images/ads.jpg')}}" class="img-responsive adsHght">
                </div>
                <div class="col-sm-2">
                    <img src="{{url('images/logo4.jpg')}}" class="img-responsive pull-right">
                </div>
            </div>
        </div>
    </div>
</section>
@include('partials.navigation')

<div class="">
    @yield('content')
</div>
@include('partials.footer')

@yield('scripts')


</body>
</html>
