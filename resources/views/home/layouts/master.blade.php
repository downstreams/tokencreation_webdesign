<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0, width=device-width" />
    <title>{{$title}}</title>
    <!-- Style Sheets -->
    <link rel="icon" type="image/png"  href="{{asset('assets/home/images/favicon.ico')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/home/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/home/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/home/css/styles.css')}}">
</head>
<body>
<header>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <img class="logo-padding" src="{{asset('assets/home/images/downstreams.png')}}" alt="logo" />
            </div>
        </div>
    </div>
</header>
<section>

    @if(Session::has('flash_message'))
        <div class="alert alert-success">
            {{ Session::get('flash_message') }}
        </div>
    @endif
    @if(Session::has('error_msg'))
        <div class="alert alert-danger">
            {{ Session::get('error_msg') }}
        </div>
    @endif
    @yield('content')
</section>

<footer>
    <script src="{{asset('assets/home/js/jquery-1.11.3.js')}}"></script>
    <script src="{{asset('assets/home/js/bootstrap.min.js')}}"></script>
</footer>
</body>
</html>