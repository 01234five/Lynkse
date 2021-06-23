
<!doctype html class="h-100">
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="description" content="Find friends, create rooms to watch videos and edit your account, all in here">
</meta>
    <!-- Scripts -->
    
    <script src="{{ URL::asset('js/jquery-1.12.1.min.js') }}" type="text/jscript" ></script>
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"type="text/jscript"></script>
    
    <script src="{{ asset('js/test.js') }}"></script>
    

    
    @routes
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
<link rel="stylesheet" href="/css/style.css" type="text/css">
<link rel="stylesheet" href="/fonts/stylesheet.css" type="text/css">
<link rel="stylesheet" href="/css/font-awesome.css" type="text/css">


   
<link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" type="text/css">
<Style>

#video_overlays {
    position: fixed;
  background-color: rgba(0, 0, 0, 0);
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

<header>

<div class="container">
<div class="row justify-content-between ">
    <div class="col-8 mt-2">
      
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header"> <a href="/" class="logo"><svg  fill="#878787" width="80" class="section-icon active" viewBox="0 0 612 234.34"><path d="M 135.5712 162.4455 c -5.4788 -0.5999 -7.2185 -0.9598 -11.0777 -2.2195 c -8.5582 -2.8394 -16.4965 -8.8181 -21.3755 -16.0966 c -0.5599 -0.8598 -1.0998 -1.5597 -1.1797 -1.5597 c -0.08 0 -1.0798 0.4999 -2.2195 1.0998 c -2.3195 1.2397 -3.2193 1.3797 -4.639 0.7198 c -1.1198 -0.4999 -1.9196 -1.3597 -3.1393 -3.3793 c -0.5599 -0.9598 -2.8794 -4.659 -5.1189 -8.2383 c -2.2595 -3.5792 -5.1189 -8.1583 -6.3986 -10.1978 c -1.2597 -2.0396 -2.3795 -3.7592 -2.4995 -3.8192 c -0.1 -0.08 -3.1193 -0.18 -6.7186 -0.2399 c -11.8375 -0.18 -21.5154 -1.7196 -29.9137 -4.759 c -3.2993 -1.1997 -3.9192 -2.3995 -3.4193 -6.5786 c 0.14 -1.2597 0.2599 -2.2995 0.2399 -2.3195 c 0 0 -0.8198 -0.4399 -1.8196 -0.9598 c -8.3782 -4.3991 -15.0968 -10.1778 -20.0557 -17.2363 c -2.9194 -4.1391 -5.1989 -8.6982 -7.0385 -14.017 c -0.9398 -2.7194 -2.5994 -8.8781 -2.5994 -9.658 c 0 -0.18 -0.5399 -0.6999 -1.1997 -1.1598 c -4.639 -3.2793 -5.2389 -9.6779 -1.2997 -13.8171 c 1.7996 -1.8996 3.9992 -2.8194 6.7186 -2.8194 c 3.5392 0 6.5186 1.9596 8.1183 5.2989 c 1.2597 2.6594 1.1398 5.5988 -0.3399 8.1983 c -0.4999 0.8998 -2.6794 3.2593 -3.3993 3.6992 c -0.3399 0.22 0.1 2.5195 1.1997 6.1587 c 1.5197 5.0189 3.8392 9.6779 6.9585 14.037 c 1.8596 2.5994 6.5986 7.3784 9.278 9.358 c 1.8996 1.4197 6.3587 4.2991 6.4786 4.1791 c 0.04 -0.04 0.2 -0.9598 0.3799 -2.0596 c 0.3999 -2.6794 0.6199 -3.3793 1.3197 -4.1591 c 0.5599 -0.6599 1.9996 -1.3197 2.8194 -1.3197 c 0.2 0 1.3997 0.3199 2.6594 0.6999 c 5.8188 1.7596 13.1572 2.4795 18.4961 1.8196 c 8.6782 -1.0798 15.1568 -4.1591 21.2755 -10.0979 c 5.3189 -5.1989 8.6382 -10.6577 11.5176 -19.016 c 0.7798 -2.2195 1.3397 -3.0594 2.3995 -3.5992 c 1.0398 -0.5199 2.2595 -0.4999 4.599 0.1 c 1.0398 0.2599 1.9196 0.4399 1.9596 0.3999 c 0.22 -0.22 0.2599 -6.4786 0.06 -8.3982 c -1.1198 -10.3778 -6.0987 -20.8556 -13.2372 -27.8341 l -1.2797 -1.2597 l -0.9998 0.3199 c -3.4993 1.0398 -6.8585 0.2999 -9.298 -2.0996 c -4.2391 -4.1391 -3.5592 -11.1176 1.3597 -14.237 c 3.9392 -2.4995 9.478 -1.5597 12.1574 2.0596 c 1.2397 1.6796 1.7196 3.0793 1.8396 5.3989 l 0.1 1.9396 l 1.7596 1.7996 c 7.1585 7.3384 11.9375 15.6967 14.257 24.9747 c 1.2797 5.0989 1.5997 7.9783 1.6197 14.197 l 0 5.4588 l 1.5997 0.4799 c 0.8798 0.2599 1.9996 0.5799 2.4995 0.7198 c 1.6197 0.3999 2.9994 2.2195 2.9994 3.9792 c 0 1.7196 -3.5792 12.8373 -5.9987 18.5961 c -3.6792 8.7981 -6.4186 13.2772 -10.9777 17.9962 c -1.7196 1.7796 -2.0196 2.1795 -1.9196 2.5795 c 0.08 0.2799 2.7394 6.1787 5.9187 13.1372 c 3.1793 6.9585 5.8588 13.0772 5.9587 13.5771 c 0.3999 2.0996 -0.4799 3.5792 -2.8194 4.799 c -0.7998 0.4199 -1.4997 0.7998 -1.5397 0.8398 c -0.18 0.14 1.7796 2.7794 3.3193 4.499 c 4.599 5.1389 10.7377 8.6182 17.9762 10.1578 c 2.5795 0.5399 7.4984 0.7398 10.1978 0.3999 c 8.3382 -1.0398 16.3565 -5.4588 21.1155 -11.6575 c 4.2991 -5.5988 6.3587 -11.9375 6.6786 -20.5356 c 0.2799 -7.0185 -0.7598 -14.317 -3.6392 -25.4946 c -3.7192 -14.4969 -4.3191 -16.8564 -4.859 -19.5958 c -2.1995 -10.8977 -2.3595 -20.1357 -0.4999 -28.394 c 1.9396 -8.5982 6.8785 -17.7962 13.2372 -24.5348 c 5.6988 -6.0587 10.9977 -10.0779 17.8562 -13.5571 c 13.3372 -6.7586 27.7341 -8.3982 42.1711 -4.799 c 18.5761 4.659 34.9126 17.9762 42.211 34.4127 c 0.9398 2.1395 2.9794 7.8983 2.9794 8.4382 c 0 0.16 0.6199 0.3999 1.4397 0.5999 c 5.0789 1.1797 9.1181 5.0989 10.5978 10.2378 c 0.6199 2.2395 0.6199 5.5588 0 7.7584 c -0.8398 2.9394 -2.2395 5.1189 -4.679 7.2585 l -1.3597 1.1797 l 0 37.4521 l 0 37.4321 l -7.7983 0 l -7.7983 0 l 0 -37.4521 l 0 -37.4321 l -0.6199 -0.2799 c -0.8798 -0.3799 -3.3593 -2.9394 -4.1591 -4.2791 c -2.7394 -4.639 -2.9194 -9.8979 -0.4799 -14.5569 c 0.9198 -1.7996 2.5595 -3.7192 4.0391 -4.799 c 1.1797 -0.8398 1.2197 -0.8998 1.0998 -1.5797 c -0.2399 -1.5397 -1.5797 -5.0589 -2.9594 -7.8983 c -2.4595 -4.9789 -5.2389 -8.8381 -9.418 -12.9972 c -5.8987 -5.9187 -13.0772 -10.3978 -21.1555 -13.2172 c -5.7988 -2.0196 -10.4378 -2.7794 -16.8364 -2.7594 c -4.9589 0 -7.4784 0.2999 -11.7975 1.3797 c -14.8169 3.7392 -28.274 14.7369 -34.2727 28.0341 c -2.7794 6.1387 -3.8392 11.1776 -3.8192 18.1561 c 0 7.7983 1.0598 13.8971 4.699 27.2942 c 3.2593 12.0175 4.4191 17.3763 5.1789 24.1949 c 1.2397 10.8977 -0.06 20.9156 -3.7192 28.5539 c -5.4588 11.4776 -16.4365 19.7958 -29.2938 22.2353 c -2.7194 0.4999 -8.7182 0.8998 -10.6577 0.6799 z m -32.5331 -29.7737 c 2.1595 -1.1198 2.5395 -1.3997 2.4395 -1.7196 c -0.08 -0.2 -2.0596 -4.679 -4.4391 -9.9179 c -8.1783 -18.1561 -7.7784 -17.1564 -7.2785 -18.716 c 0.3599 -1.0798 0.8598 -1.5997 2.6994 -2.8194 c 4.539 -3.0194 8.9381 -9.7179 12.7773 -19.4159 c 1.3997 -3.5792 3.6192 -10.3978 3.4793 -10.7377 c -0.04 -0.16 -0.7198 -0.4199 -1.4597 -0.5999 c -0.7598 -0.2 -2.5395 -0.6599 -3.9592 -1.0398 l -2.5595 -0.6799 l -1.5997 3.3193 c -3.6592 7.6584 -6.4186 11.6975 -11.0777 16.2765 c -2.6194 2.5595 -4.0991 3.7592 -6.8785 5.5988 c -9.538 6.2587 -20.6556 8.4382 -33.3929 6.5386 c -1.4797 -0.22 -3.1193 -0.4399 -3.6392 -0.5199 l -0.9198 -0.12 l -0.12 0.8798 c -0.3199 2.2995 -0.9198 7.6384 -0.8798 7.6784 c 0.2 0.2 3.5992 1.1797 5.4588 1.5797 c 2.7794 0.6199 8.3982 1.4397 11.7975 1.7196 c 1.4397 0.12 2.9994 0.2399 3.4993 0.2999 c 0.4999 0.06 3.8992 0.1 7.5584 0.1 c 6.1387 0 6.7386 0.04 7.3984 0.3799 c 0.4199 0.22 0.9398 0.5999 1.1598 0.8598 c 0.2399 0.2399 1.9996 2.9794 3.8992 6.0587 c 2.8394 4.599 7.1185 11.4576 10.4378 16.7564 l 0.5999 0.9398 l 1.2197 -0.6799 c 0.6799 -0.3599 2.3795 -1.2797 3.7792 -2.0196 z M 414.912 154.4472 c -6.9385 -0.6999 -13.6371 -2.1595 -19.036 -4.1591 c -11.6375 -4.2991 -20.2357 -12.5773 -23.655 -22.7552 c -0.6399 -1.9396 -1.4397 -5.2589 -1.5397 -6.5386 c -0.04 -0.2799 -0.1 5.9187 -0.16 13.7771 l -0.1 14.297 l -7.7384 0.06 l -7.7584 0.04 l -0.02 -18.5361 c 0 -10.2178 -0.04 -18.956 -0.1 -19.4559 c -0.7198 -7.1585 -3.0394 -11.1976 -7.7384 -13.4971 c -2.4995 -1.2197 -3.5592 -1.3997 -7.9383 -1.3997 c -4.579 0 -5.5988 0.2 -8.6982 1.6996 c -5.7988 2.8194 -8.7581 7.8183 -9.378 15.8966 c -0.06 0.6599 -0.1 8.8781 -0.1 18.2561 l -0.02 17.0364 l -7.7384 -0.04 l -7.7584 -0.06 l 0 -32.893 l 0 -32.893 l 7.3384 -0.06 l 7.3584 -0.04 l 0.12 0.4799 c 0.06 0.2599 0.08 2.0996 0.04 4.0991 c -0.04 1.9996 0 3.6192 0.08 3.6192 c 0.06 0 0.4399 -0.3599 0.7998 -0.7998 c 0.9798 -1.1198 3.2993 -2.9594 5.0989 -4.0391 c 4.519 -2.6794 9.9379 -3.9992 16.4565 -4.0191 c 6.6386 0 11.8175 1.3197 16.2366 4.1591 c 6.3786 4.1191 9.8579 9.9379 11.0377 18.4761 c 0.18 1.2397 0.3199 2.6994 0.3199 3.2793 c 0 1.5397 0.3199 1.7996 0.4599 0.3999 c 0.18 -1.5597 1.0198 -4.739 1.7596 -6.6186 c 2.6594 -6.6986 8.1183 -13.1572 14.7769 -17.4763 c 7.2385 -4.679 15.7966 -7.5384 27.2942 -9.0981 c 3.7792 -0.4999 16.9364 -0.5199 21.0955 0 c 5.4788 0.6799 9.9179 1.4997 14.017 2.6194 c 2.0596 0.5599 7.2585 2.2595 7.8383 2.5595 c 0.3999 0.2 0.3199 0.7198 -0.2599 1.5597 c -0.2 0.2799 -0.5399 0.8198 -0.7598 1.1997 c -1.0798 1.9196 -4.0591 6.7186 -4.3191 6.9785 c -0.2599 0.2599 -0.5999 0.2 -2.7594 -0.3599 c -1.3597 -0.3599 -2.7194 -0.7398 -3.0594 -0.8398 c -0.3199 -0.1 -1.8596 -0.4599 -3.3993 -0.7998 c -1.5397 -0.3199 -3.1593 -0.6799 -3.5992 -0.7798 c -0.4399 -0.12 -2.0196 -0.3799 -3.4993 -0.5999 c -9.458 -1.3597 -17.8762 -0.9598 -24.3148 1.1598 c -4.759 1.5797 -8.6782 3.8792 -11.8775 7.0385 c -4.0391 3.9592 -6.1587 8.1383 -7.4384 14.5969 c -0.3399 1.7196 -0.3199 8.6582 0.02 10.3978 c 1.2997 6.5586 3.1993 10.3578 7.0985 14.297 c 4.4591 4.479 10.7577 7.2585 19.1159 8.4382 c 3.8192 0.5399 12.6973 0.4799 17.5163 -0.1 c 3.9792 -0.4799 10.0579 -1.6596 14.297 -2.7394 c 1.4997 -0.3799 2.8594 -0.6999 3.0394 -0.6999 c 0.18 0 0.6599 0.6399 1.1598 1.5597 c 0.4599 0.8398 0.9998 1.8196 1.1797 2.1395 c 0.18 0.3399 0.7198 1.3197 1.1997 2.1995 c 0.4799 0.8798 1.1398 2.0396 1.4597 2.5994 c 0.3999 0.6799 0.5199 1.0798 0.3999 1.2797 c -0.4599 0.7398 -9.9979 3.2793 -15.3967 4.1191 c -6.3187 0.9598 -8.7182 1.1398 -17.3563 1.1997 c -6.1787 0.06 -8.9181 0 -11.0976 -0.22 z M 483.1775 149.9682 c -8.0783 -0.4799 -16.8964 -2.8594 -22.5552 -6.1187 c -0.8998 -0.4999 -1.6996 -0.9998 -1.7796 -1.0798 c -0.12 -0.1 5.3789 -11.5376 5.7588 -11.9575 c 0.02 -0.02 0.6599 0.3199 1.4197 0.7798 c 3.9592 2.4195 10.0579 4.479 15.6167 5.2989 c 2.6194 0.3799 7.4984 0.4999 9.9579 0.2599 c 3.3593 -0.3599 6.2787 -1.3397 7.8183 -2.6594 c 1.4597 -1.1997 2.2195 -3.8992 1.6996 -5.8788 c -0.7798 -2.8394 -3.7992 -4.0191 -15.4167 -5.9387 c -9.498 -1.5797 -14.137 -2.9394 -17.4163 -5.0789 c -4.3191 -2.8394 -6.6586 -6.3387 -7.3984 -11.0177 c -0.3399 -2.2195 -0.12 -6.7186 0.4199 -8.5982 c 2.3795 -8.2782 10.5978 -13.8371 22.4952 -15.2168 c 3.1393 -0.3599 9.418 -0.3199 12.7973 0.1 c 6.6986 0.8398 13.1772 2.6594 16.8564 4.759 l 1.0598 0.5999 l -1.5997 3.0194 c -0.8598 1.6796 -2.2195 4.3191 -2.9994 5.8987 l -1.4197 2.8394 l -1.9596 -0.9798 c -3.6592 -1.8396 -7.8983 -3.1193 -11.8375 -3.6192 c -2.4595 -0.2999 -8.1783 -0.2399 -10.2578 0.08 c -5.3989 0.8798 -8.5182 3.3593 -8.5382 6.7986 c 0 3.3193 1.6397 4.859 6.6586 6.2987 c 2.6194 0.7398 5.8188 1.4197 9.9379 2.1196 c 7.1985 1.1997 12.3374 2.5994 15.2568 4.1591 c 3.1393 1.6596 5.9587 4.3791 7.1585 6.8785 c 1.1398 2.3795 1.4597 3.9992 1.4597 7.6584 c 0.02 3.9192 -0.22 5.0789 -1.6796 8.0983 c -1.2197 2.4995 -2.8994 4.519 -5.2589 6.2987 c -4.9789 3.7792 -11.0777 5.6788 -19.8358 6.1987 c -1.8796 0.1 -3.4793 0.18 -3.5992 0.16 c -0.1 0 -1.3797 -0.08 -2.8194 -0.16 z M 557.5817 149.9482 c -7.6584 -0.4799 -14.5769 -2.7794 -20.0358 -6.6386 c -2.2995 -1.6397 -5.6188 -4.9789 -7.2985 -7.3384 c -2.5595 -3.6192 -4.4391 -8.0783 -5.3589 -12.7173 c -0.6199 -3.0594 -0.7598 -8.6982 -0.3199 -11.9775 c 1.3997 -10.5178 6.9185 -19.036 15.6567 -24.1549 c 7.1985 -4.2191 16.8564 -5.6988 25.6945 -3.9192 c 7.4784 1.4997 13.5571 5.0989 18.4161 10.8777 c 3.7792 4.519 6.3387 10.8977 7.1385 17.7962 c 0.22 1.9996 0.2599 6.9385 0.08 8.3782 l -0.14 0.9198 l -25.7545 0 c -22.3753 0 -25.7745 0.04 -25.7745 0.2799 c 0 0.5599 1.0598 3.6192 1.6596 4.819 c 2.4395 4.879 7.0185 8.3182 13.0372 9.8179 c 2.4595 0.6199 7.3984 0.8598 10.1978 0.4999 c 4.9989 -0.6599 9.398 -2.6394 12.9772 -5.8388 l 1.1797 -1.0598 l 0.7198 0.7998 c 0.3999 0.4199 1.2197 1.3597 1.8396 2.0796 c 0.6199 0.7198 2.1795 2.4995 3.4593 3.9592 c 1.8796 2.1595 2.2795 2.7194 2.1395 3.0194 c -0.2599 0.4599 -2.8794 2.9194 -4.2391 3.9592 c -3.7592 2.8794 -8.8981 4.9589 -14.6369 5.9587 c -1.5597 0.2599 -7.1585 0.7398 -7.9383 0.6599 c -0.16 0 -1.3797 -0.08 -2.6994 -0.18 z m 19.2959 -39.3517 c 0 -0.1 -0.22 -1.0398 -0.4799 -2.0796 c -1.6197 -6.3387 -6.4586 -11.2576 -12.8173 -12.9573 c -2.1595 -0.5999 -7.8583 -0.6599 -9.9779 -0.12 c -6.6386 1.6796 -11.6375 6.4986 -13.2972 12.7773 c -0.22 0.7998 -0.4399 1.6996 -0.4999 2.0196 l -0.12 0.5399 l 18.5961 0 c 10.4378 0 18.5961 -0.08 18.5961 -0.18 z M 197.4981 149.0284 c -0.08 -0.06 -0.14 -19.4959 -0.14 -43.1908 l 0 -43.0509 l 8.0983 0 l 8.0983 0 l 0 36.2923 c 0 19.9558 0.06 36.2923 0.16 36.2923 c 0.08 0 10.2178 0.02 22.5352 0.06 l 22.3952 0.04 l 0.06 6.8585 l 0.04 6.8385 l -30.5535 0 c -16.8164 0 -30.6335 -0.06 -30.6935 -0.14 z"></path></svg></a>
      
        
      </div>
    </div>
    <div class="col-2 d-flex align-items-center d-flex justify-content-end">
    <div onclick="communityRoomsView();" style="white-space: nowrap;"><a href="#" ><i class="fa fa-wechat"></i><a href="#" id="roomsIconID" style="padding-left:5px;"> </a ></a></div>
    </div>
    <div class="col-2 d-flex align-items-center d-flex justify-content-end">
    <div onclick="communityMembersView();" style="white-space: nowrap;"><a href="#" ><i  class="fa fa-smile-o " ></i><a href="#" id="communityIconID" style="padding-left:5px;"> </a ></a></div>
    
  </div>
</div>

</div>
      
      

         
            
            
          
            
 

</header>

<main>
            @yield('content')
            

        </main>




<script>
$(document).ready(function() {
if ($(window).width() <= 767) {

  
}

if ($(window).width() >= 768) {
  $("#roomsIconID").text("Rooms");
  $("#communityIconID").text("Community");

}


$(window).resize(function() {    

  if ($(window).width() <= 767) {
    $("#roomsIconID").text("");
  $("#communityIconID").text("");
  
}

if ($(window).width() >= 768) {
  $("#roomsIconID").text("Rooms");
  $("#communityIconID").text("Community");

}

});


});
</script>   

</body>




</html>
