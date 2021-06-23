
<!doctype html class="h-100">
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="description" content="Browse for a video to watch with others, and talk to them about the video on the chat">
</meta>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ URL::asset('js/jquery-1.12.1.min.js') }}" type="text/jscript" ></script>
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"type="text/jscript"></script>
    
    <script src="{{ asset('js/test.js') }}"></script>
    <script src="https://apis.google.com/js/api.js"></script>

    
    @routes
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <!-- Styles -->
    
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    

<link rel="stylesheet" href="/fonts/stylesheet.css" type="text/css">
<link rel="stylesheet" href="/css/font-awesome.css" type="text/css">


   

<link rel="stylesheet" href="{{ URL::asset('css/stylevideoapp.css') }}" type="text/css">

<Style>

#video_overlays {
    position: fixed;
   /* background-color: rgba(0, 0, 0, 0);*/ 
  height:100%;
  z-index:-1;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
}


</style>
</head>






<body id="layout1">

<div id="video_overlays"></div>
<div style="position: fixed; top: 0; width: 100%; height: 100%; z-index: -2;">
    <video autoplay muted loop poster="" id="video" style=" object-fit: cover;width:100%; height:100%">
    <source src="" type="video/mp4">
    </video>
</div>



<main>
            @yield('content')
            

        </main>

</body>




</html>
