<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Lyncse</title>
        <script src="{{ URL::asset('js/jquery-1.12.1.min.js') }}" type="text/jscript" ></script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
                overflow-y: hidden;
            }

            /* Style the video: 100% width and height to cover the entire window */
#myVideo {
  position: fixed;
  right: 0;
  bottom: 0;
  min-width: 100%;
  min-height: 100%;
}

/* Add some content at the bottom of the video/page */
#content{
  background: rgba(0, 0, 0, 0.9);
  color: #f1f1f1;
 
}

        </style>
    </head>
    <body class="antialiased" >

                    <!-- The video -->
<video onloadedmetadata="this.muted = true" autoplay muted loop poster="/video/blackscreen.png" id="myVideo">
  <source src="/video/indexPageVideo.mp4" type="video/mp4">
</video>

<!-- Optional: some overlay text to describe the video -->
        <div id="content" class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div id="topNav" class="fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/community') }}" class="text-sm text-white-700 ">Proceed</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-white-700 ">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-white-700 ">Register</a>
                        @endif
                    @endauth
                </div>
            @endif



    
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8" >
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <svg viewBox="0 0 651 192" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto text-gray-700 sm:h-20">
                        <g clip-path="url(#clip0)" fill="#EF3B2D">
                            <path d="M 143.519 171.9688 c -5.8 -0.635 -7.6416 -1.0161 -11.7271 -2.3496 c -9.0599 -3.0059 -17.4636 -9.3351 -22.6286 -17.0402 c -0.5927 -0.9102 -1.1642 -1.6511 -1.2489 -1.6511 c -0.0847 0 -1.1431 0.5292 -2.3496 1.1642 c -2.4555 1.3124 -3.408 1.4606 -4.911 0.762 c -1.1854 -0.5292 -2.0321 -1.4394 -3.3234 -3.5774 c -0.5927 -1.0161 -3.0482 -4.9321 -5.419 -8.7212 c -2.392 -3.7891 -5.419 -8.6365 -6.7738 -10.7957 c -1.3336 -2.1591 -2.519 -3.9796 -2.646 -4.0431 c -0.1058 -0.0847 -3.3022 -0.1905 -7.1124 -0.254 c -12.5315 -0.1905 -22.7768 -1.8204 -31.6673 -5.038 c -3.4927 -1.2701 -4.1489 -2.5402 -3.6197 -6.9643 c 0.1482 -1.3336 0.2752 -2.4343 0.254 -2.4555 c 0 0 -0.8679 -0.4657 -1.9263 -1.0161 c -8.8694 -4.657 -15.9818 -10.7745 -21.2315 -18.2468 c -3.0905 -4.3818 -5.5037 -9.2081 -7.4511 -14.8388 c -0.9949 -2.8788 -2.7518 -9.3986 -2.7518 -10.2241 c 0 -0.1905 -0.5715 -0.7409 -1.2701 -1.2277 c -4.911 -3.4716 -5.546 -10.2453 -1.3759 -14.6271 c 1.9051 -2.011 4.2336 -2.9847 7.1124 -2.9847 c 3.7467 0 6.9008 2.0745 8.5942 5.6095 c 1.3336 2.8153 1.2066 5.927 -0.3599 8.6789 c -0.5292 0.9526 -2.8365 3.4504 -3.5986 3.9161 c -0.3599 0.2328 0.1058 2.6672 1.2701 6.5197 c 1.6088 5.3132 4.0643 10.2453 7.3665 14.8599 c 1.9686 2.7518 6.9854 7.811 9.822 9.9066 c 2.011 1.5029 6.7314 4.5511 6.8584 4.4241 c 0.0423 -0.0423 0.2117 -1.0161 0.4022 -2.1803 c 0.4234 -2.8365 0.6562 -3.5774 1.3971 -4.4029 c 0.5927 -0.6985 2.1168 -1.3971 2.9847 -1.3971 c 0.2117 0 1.4818 0.3387 2.8153 0.7409 c 6.1599 1.8628 13.9285 2.6248 19.5804 1.9263 c 9.1869 -1.1431 16.0453 -4.4029 22.5228 -10.6898 c 5.6307 -5.5037 9.1446 -11.2825 12.1928 -20.1308 c 0.8256 -2.3496 1.4183 -3.2387 2.5402 -3.8102 c 1.1007 -0.5504 2.392 -0.5292 4.8686 0.1058 c 1.1007 0.2752 2.0321 0.4657 2.0745 0.4234 c 0.2328 -0.2328 0.2752 -6.8584 0.0635 -8.8906 c -1.1854 -10.9862 -6.4562 -22.0782 -14.0132 -29.4659 l -1.3548 -1.3336 l -1.0584 0.3387 c -3.7044 1.1007 -7.2606 0.3175 -9.8431 -2.2226 c -4.4876 -4.3818 -3.7679 -11.7694 1.4394 -15.0716 c 4.1701 -2.646 10.0336 -1.6511 12.8701 2.1803 c 1.3124 1.7781 1.8204 3.2599 1.9475 5.7154 l 0.1058 2.0533 l 1.8628 1.9051 c 7.5781 7.7687 12.6373 16.6169 15.0928 26.4388 c 1.3548 5.3978 1.6934 8.446 1.7146 15.0293 l 0 5.7789 l 1.6934 0.508 c 0.9314 0.2752 2.1168 0.6139 2.646 0.762 c 1.7146 0.4234 3.1752 2.3496 3.1752 4.2124 c 0 1.8204 -3.7891 13.5899 -6.3504 19.6862 c -3.8949 9.3139 -6.7949 14.0556 -11.6212 19.0512 c -1.8204 1.884 -2.138 2.3073 -2.0321 2.7307 c 0.0847 0.2964 2.9 6.5409 6.2657 13.9074 c 3.3657 7.3665 6.2022 13.8439 6.3081 14.3731 c 0.4234 2.2226 -0.508 3.7891 -2.9847 5.0803 c -0.8467 0.4445 -1.5876 0.8467 -1.6299 0.8891 c -0.1905 0.1482 1.884 2.9424 3.5139 4.7628 c 4.8686 5.4402 11.3672 9.1234 19.03 10.7533 c 2.7307 0.5715 7.938 0.7832 10.7957 0.4234 c 8.8271 -1.1007 17.3154 -5.7789 22.3534 -12.3409 c 4.5511 -5.927 6.7314 -12.6373 7.0701 -21.7395 c 0.2964 -7.43 -0.8044 -15.1563 -3.8526 -26.9892 c -3.9372 -15.3468 -4.5723 -17.8446 -5.1438 -20.7446 c -2.3285 -11.5366 -2.4978 -21.3162 -0.5292 -30.0586 c 2.0533 -9.1022 7.2818 -18.8395 14.0132 -25.9731 c 6.0329 -6.4139 11.6424 -10.6687 18.903 -14.3519 c 14.1191 -7.1548 29.36 -8.8906 44.6433 -5.0803 c 19.6651 4.9321 36.9593 19.03 44.6856 36.4301 c 0.9949 2.265 3.154 8.3614 3.154 8.9329 c 0 0.1693 0.6562 0.4234 1.5241 0.635 c 5.3767 1.2489 9.6526 5.3978 11.219 10.838 c 0.6562 2.3708 0.6562 5.8847 0 8.2132 c -0.8891 3.1117 -2.3708 5.419 -4.9533 7.684 l -1.4394 1.2489 l 0 39.6477 l 0 39.6265 l -8.2555 0 l -8.2555 0 l 0 -39.6477 l 0 -39.6265 l -0.6562 -0.2964 c -0.9314 -0.4022 -3.5562 -3.1117 -4.4029 -4.53 c -2.9 -4.911 -3.0905 -10.4782 -0.508 -15.4103 c 0.9737 -1.9051 2.7095 -3.9372 4.2759 -5.0803 c 1.2489 -0.8891 1.2912 -0.9526 1.1642 -1.6723 c -0.254 -1.6299 -1.6723 -5.3555 -3.1329 -8.3614 c -2.6037 -5.2708 -5.546 -9.3563 -9.9701 -13.7592 c -6.2446 -6.2657 -13.8439 -11.0074 -22.3957 -13.992 c -6.1387 -2.138 -11.0497 -2.9424 -17.8235 -2.9212 c -5.2497 0 -7.9168 0.3175 -12.4891 1.4606 c -15.6855 3.9584 -29.9316 15.6008 -36.282 29.6775 c -2.9424 6.4986 -4.0643 11.8329 -4.0431 19.2205 c 0 8.2555 1.1219 14.7118 4.9745 28.8943 c 3.4504 12.722 4.6781 18.395 5.4825 25.6133 c 1.3124 11.5366 -0.0635 22.1417 -3.9372 30.2279 c -5.7789 12.1504 -17.4001 20.9563 -31.0111 23.5388 c -2.8788 0.5292 -9.2292 0.9526 -11.2825 0.7197 z m -34.4403 -31.5192 c 2.2861 -1.1854 2.6883 -1.4818 2.5825 -1.8204 c -0.0847 -0.2117 -2.1803 -4.9533 -4.6993 -10.4993 c -8.6577 -19.2205 -8.2344 -18.1621 -7.7052 -19.8132 c 0.381 -1.1431 0.9102 -1.6934 2.8577 -2.9847 c 4.8051 -3.1964 9.4621 -10.2876 13.5264 -20.5541 c 1.4818 -3.7891 3.8314 -11.0074 3.6832 -11.3672 c -0.0423 -0.1693 -0.762 -0.4445 -1.5453 -0.635 c -0.8044 -0.2117 -2.6883 -0.6985 -4.1913 -1.1007 l -2.7095 -0.7197 l -1.6934 3.5139 c -3.8737 8.1073 -6.7949 12.3833 -11.7271 17.2308 c -2.773 2.7095 -4.3394 3.9796 -7.2818 5.927 c -10.0971 6.6256 -21.8665 8.9329 -35.3506 6.9219 c -1.5664 -0.2328 -3.3022 -0.4657 -3.8526 -0.5504 l -0.9737 -0.127 l -0.127 0.9314 c -0.3387 2.4343 -0.9737 8.0862 -0.9314 8.1285 c 0.2117 0.2117 3.8102 1.2489 5.7789 1.6723 c 2.9424 0.6562 8.8906 1.5241 12.4891 1.8204 c 1.5241 0.127 3.1752 0.254 3.7044 0.3175 c 0.5292 0.0635 4.1278 0.1058 8.0015 0.1058 c 6.4986 0 7.1336 0.0423 7.8322 0.4022 c 0.4445 0.2328 0.9949 0.635 1.2277 0.9102 c 0.254 0.254 2.1168 3.154 4.1278 6.4139 c 3.0059 4.8686 7.5358 12.1293 11.0497 17.7388 l 0.635 0.9949 l 1.2912 -0.7197 c 0.7197 -0.381 2.519 -1.3548 4.0008 -2.138 z M 439.236 163.5016 c -7.3453 -0.7409 -14.4366 -2.2861 -20.1519 -4.4029 c -12.3198 -4.5511 -21.422 -13.3147 -25.0417 -24.0892 c -0.6774 -2.0533 -1.5241 -5.5672 -1.6299 -6.9219 c -0.0423 -0.2964 -0.1058 6.2657 -0.1693 14.5848 l -0.1058 15.1351 l -8.192 0.0635 l -8.2132 0.0423 l -0.0212 -19.6227 c 0 -10.8168 -0.0423 -20.0673 -0.1058 -20.5965 c -0.762 -7.5781 -3.2175 -11.8541 -8.192 -14.2884 c -2.646 -1.2912 -3.7679 -1.4818 -8.4037 -1.4818 c -4.8475 0 -5.927 0.2117 -9.2081 1.7993 c -6.1387 2.9847 -9.2716 8.2767 -9.9278 16.8286 c -0.0635 0.6985 -0.1058 9.3986 -0.1058 19.3264 l -0.0212 18.0351 l -8.192 -0.0423 l -8.2132 -0.0635 l 0 -34.8214 l 0 -34.8214 l 7.7687 -0.0635 l 7.7898 -0.0423 l 0.127 0.508 c 0.0635 0.2752 0.0847 2.2226 0.0423 4.3394 c -0.0423 2.1168 0 3.8314 0.0847 3.8314 c 0.0635 0 0.4657 -0.381 0.8467 -0.8467 c 1.0372 -1.1854 3.4927 -3.1329 5.3978 -4.2759 c 4.784 -2.8365 10.5205 -4.2336 17.4213 -4.2548 c 7.0278 0 12.5103 1.3971 17.1884 4.4029 c 6.7526 4.3606 10.4358 10.5205 11.6847 19.5592 c 0.1905 1.3124 0.3387 2.8577 0.3387 3.4716 c 0 1.6299 0.3387 1.9051 0.4869 0.4234 c 0.1905 -1.6511 1.0796 -5.0168 1.8628 -7.0066 c 2.8153 -7.0913 8.5942 -13.9285 15.6432 -18.5008 c 7.6628 -4.9533 16.7227 -7.9803 28.8943 -9.6314 c 4.0008 -0.5292 17.9293 -0.5504 22.3322 0 c 5.8 0.7197 10.4993 1.5876 14.8388 2.773 c 2.1803 0.5927 7.684 2.392 8.2979 2.7095 c 0.4234 0.2117 0.3387 0.762 -0.2752 1.6511 c -0.2117 0.2964 -0.5715 0.8679 -0.8044 1.2701 c -1.1431 2.0321 -4.2971 7.1124 -4.5723 7.3876 c -0.2752 0.2752 -0.635 0.2117 -2.9212 -0.381 c -1.4394 -0.381 -2.8788 -0.7832 -3.2387 -0.8891 c -0.3387 -0.1058 -1.9686 -0.4869 -3.5986 -0.8467 c -1.6299 -0.3387 -3.3445 -0.7197 -3.8102 -0.8256 c -0.4657 -0.127 -2.138 -0.4022 -3.7044 -0.635 c -10.0125 -1.4394 -18.9242 -1.0161 -25.7403 1.2277 c -5.038 1.6723 -9.1869 4.1066 -12.5738 7.4511 c -4.2759 4.1913 -6.5197 8.6154 -7.8745 15.4526 c -0.3599 1.8204 -0.3387 9.1657 0.0212 11.0074 c 1.3759 6.9431 3.3869 10.965 7.5146 15.1351 c 4.7205 4.7416 11.3884 7.684 20.2366 8.9329 c 4.0431 0.5715 13.4417 0.508 18.5432 -0.1058 c 4.2124 -0.508 10.6475 -1.7569 15.1351 -2.9 c 1.5876 -0.4022 3.027 -0.7409 3.2175 -0.7409 c 0.1905 0 0.6985 0.6774 1.2277 1.6511 c 0.4869 0.8891 1.0584 1.9263 1.2489 2.265 c 0.1905 0.3599 0.762 1.3971 1.2701 2.3285 c 0.508 0.9314 1.2066 2.1591 1.5453 2.7518 c 0.4234 0.7197 0.5504 1.1431 0.4234 1.3548 c -0.4869 0.7832 -10.584 3.4716 -16.2994 4.3606 c -6.6891 1.0161 -9.2292 1.2066 -18.3738 1.2701 c -6.5409 0.0635 -9.4409 0 -11.7482 -0.2328 z M 511.5036 158.76 c -8.5519 -0.508 -17.887 -3.027 -23.8775 -6.4774 c -0.9526 -0.5292 -1.7993 -1.0584 -1.884 -1.1431 c -0.127 -0.1058 5.6942 -12.2139 6.0964 -12.6585 c 0.0212 -0.0212 0.6985 0.3387 1.5029 0.8256 c 4.1913 2.5613 10.6475 4.7416 16.5322 5.6095 c 2.773 0.4022 7.938 0.5292 10.5417 0.2752 c 3.5562 -0.381 6.6468 -1.4183 8.2767 -2.8153 c 1.5453 -1.2701 2.3496 -4.1278 1.7993 -6.2234 c -0.8256 -3.0059 -4.0219 -4.2548 -16.3205 -6.2869 c -10.0548 -1.6723 -14.9658 -3.1117 -18.4373 -5.3767 c -4.5723 -3.0059 -7.0489 -6.7103 -7.8322 -11.6636 c -0.3599 -2.3496 -0.127 -7.1124 0.4445 -9.1022 c 2.519 -8.7636 11.219 -14.6483 23.814 -16.1088 c 3.3234 -0.381 9.9701 -0.3387 13.5475 0.1058 c 7.0913 0.8891 13.9497 2.8153 17.8446 5.038 l 1.1219 0.635 l -1.6934 3.1964 c -0.9102 1.7781 -2.3496 4.5723 -3.1752 6.2446 l -1.5029 3.0059 l -2.0745 -1.0372 c -3.8737 -1.9475 -8.3614 -3.3022 -12.5315 -3.8314 c -2.6037 -0.3175 -8.6577 -0.254 -10.8592 0.0847 c -5.7154 0.9314 -9.0176 3.5562 -9.0387 7.1971 c 0 3.5139 1.7358 5.1438 7.0489 6.6679 c 2.773 0.7832 6.1599 1.5029 10.5205 2.2438 c 7.6205 1.2701 13.0607 2.7518 16.1512 4.4029 c 3.3234 1.7569 6.3081 4.6358 7.5781 7.2818 c 1.2066 2.519 1.5453 4.2336 1.5453 8.1073 c 0.0212 4.1489 -0.2328 5.3767 -1.7781 8.573 c -1.2912 2.646 -3.0694 4.784 -5.5672 6.6679 c -5.2708 4.0008 -11.7271 6.0117 -20.9987 6.5621 c -1.9898 0.1058 -3.6832 0.1905 -3.8102 0.1693 c -0.1058 0 -1.4606 -0.0847 -2.9847 -0.1693 z M 590.2697 158.7388 c -8.1073 -0.508 -15.4315 -2.9424 -21.2103 -7.0278 c -2.4343 -1.7358 -5.9482 -5.2708 -7.7263 -7.7687 c -2.7095 -3.8314 -4.6993 -8.5519 -5.673 -13.4628 c -0.6562 -3.2387 -0.8044 -9.2081 -0.3387 -12.6796 c 1.4818 -11.1344 7.3241 -20.1519 16.5745 -25.5709 c 7.6205 -4.4664 17.8446 -6.0329 27.2009 -4.1489 c 7.9168 1.5876 14.3519 5.3978 19.4957 11.5154 c 4.0008 4.784 6.7103 11.5366 7.557 18.8395 c 0.2328 2.1168 0.2752 7.3453 0.0847 8.8694 l -0.1482 0.9737 l -27.2644 0 c -23.687 0 -27.2856 0.0423 -27.2856 0.2964 c 0 0.5927 1.1219 3.8314 1.7569 5.1015 c 2.5825 5.165 7.43 8.8059 13.8015 10.3935 c 2.6037 0.6562 7.8322 0.9102 10.7957 0.5292 c 5.292 -0.6985 9.949 -2.7942 13.738 -6.1811 l 1.2489 -1.1219 l 0.762 0.8467 c 0.4234 0.4445 1.2912 1.4394 1.9475 2.2015 c 0.6562 0.762 2.3073 2.646 3.6621 4.1913 c 1.9898 2.2861 2.4132 2.8788 2.265 3.1964 c -0.2752 0.4869 -3.0482 3.0905 -4.4876 4.1913 c -3.9796 3.0482 -9.4198 5.2497 -15.495 6.3081 c -1.6511 0.2752 -7.5781 0.7832 -8.4037 0.6985 c -0.1693 0 -1.4606 -0.0847 -2.8577 -0.1905 z m 20.4271 -41.6586 c 0 -0.1058 -0.2328 -1.1007 -0.508 -2.2015 c -1.7146 -6.7103 -6.8373 -11.9176 -13.5687 -13.7169 c -2.2861 -0.635 -8.319 -0.6985 -10.5628 -0.127 c -7.0278 1.7781 -12.3198 6.8796 -14.0767 13.5264 c -0.2328 0.8467 -0.4657 1.7993 -0.5292 2.138 l -0.127 0.5715 l 19.6862 0 c 11.0497 0 19.6862 -0.0847 19.6862 -0.1905 z M 209.0763 157.7651 c -0.0847 -0.0635 -0.1482 -20.6388 -0.1482 -45.7229 l 0 -45.5747 l 8.573 0 l 8.573 0 l 0 38.4199 c 0 21.1257 0.0635 38.4199 0.1693 38.4199 c 0.0847 0 10.8168 0.0212 23.8563 0.0635 l 23.7082 0.0423 l 0.0635 7.2606 l 0.0423 7.2395 l -32.3447 0 c -17.8023 0 -32.4294 -0.0635 -32.4929 -0.1482 z"/>
                        </g>
                    </svg>
                </div>
                </div>
            
</div>

         






           

               
        

<script>

$(document).ready(function(){

if ($(window).width() <= 639) {
    $("#topNav").removeClass("right-0").addClass("right-4");
}
});

$(window).resize(function() {         
    if ($(window).width() <= 639) {
        $("#topNav").removeClass("right-0").addClass("right-4");
    }
    if ($(window).width() > 639) {
        $("#topNav").removeClass("right-4").addClass("right-0");
    }
});




</script>

    </body>
</html>
