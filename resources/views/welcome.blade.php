<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Lynkse</title>
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
<video autoplay muted loop poster="/video/blackscreen.png" id="myVideo">
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
                            <path d="m 365.904 135.52 z M 163.8311 175.7949 c 8.2583 -2.1599 15.7542 -6.5006 21.3867 -12.5146 c 7.3479 -7.8771 10.9053 -17.0671 11.5829 -29.751 c 0.4869 -9.1476 -1.0377 -18.2952 -6.2678 -37.6705 c -3.2186 -12.1758 -4.8489 -21.175 -4.8489 -27.7392 c 0 -9.9309 3.2186 -19.5657 9.4017 -27.8873 c 4.1079 -5.5268 5.8653 -7.3479 10.8626 -11.0957 c 17.5542 -13.2979 38.242 -15.3094 57.7654 -5.5268 c 3.4303 1.673 7.6864 4.3621 10.037 6.2044 c 1.8634 1.4612 8.8935 8.5547 10.4181 10.5241 c 2.0965 2.647 5.7172 9.4864 6.9878 13.2979 l 1.1648 3.4303 l -2.4987 2.4563 c -3.4727 3.4303 -4.8489 6.5006 -4.8489 11.2014 c 0 3.1763 0.1907 4.1503 1.5246 6.6913 c 5.8233 11.6886 21.5138 11.5405 27.5912 -0.2964 c 1.1221 -2.2022 1.3765 -3.2186 1.3765 -6.4162 c 0 -3.2823 -0.2541 -4.2987 -1.4189 -6.649 c -1.8 -3.5784 -5.4208 -6.7973 -8.9995 -7.9831 c -2.647 -0.8894 -2.6891 -0.9741 -3.5151 -3.6634 c -0.7836 -2.647 -2.2445 -6.1194 -4.4468 -10.5241 c -0.5295 -1.1221 -2.7317 -4.3621 -4.8489 -7.1361 c -12.6203 -16.8343 -32.6732 -26.9133 -53.467 -26.9133 c -7.5383 0 -12.1331 0.7413 -19.6717 3.1763 c -13.552 4.3621 -26.7015 14.3356 -34.1978 25.8758 c -5.4842 8.47 -7.9831 15.5638 -8.9995 25.6851 c -0.2964 2.9855 -0.4448 6.2678 -0.2964 7.3479 c 0.106 1.0798 0.3812 3.8115 0.5295 6.1194 c 0.1907 2.3082 0.8894 6.6913 1.567 9.7829 c 0.6776 3.0915 1.4189 6.5643 1.673 7.729 c 0.2541 1.1648 0.5295 2.2445 0.6352 2.4563 c 0.106 0.1907 0.9741 3.367 1.9481 7.0511 c 4.0019 15.352 5.2724 25.4947 4.2563 33.4988 c -1.4612 11.6886 -5.2301 18.4012 -13.8485 24.7537 c -4.2987 3.1763 -13.7004 6.2044 -19.1846 6.2044 c -5.6326 -0.0424 -13.4036 -2.2445 -18.5493 -5.3361 c -3.2823 -1.9058 -9.19 -7.5383 -10.3758 -9.7829 c -0.6776 -1.3765 -0.6776 -1.4189 0.9317 -2.2022 c 0.8894 -0.4448 1.9058 -1.1221 2.3082 -1.567 c 0.9741 -1.1648 0.7836 -4.0019 -0.3812 -6.5643 c -0.5295 -1.2282 -1.673 -3.6211 -2.4987 -5.3784 c -0.7836 -1.7577 -2.2445 -4.8916 -3.2186 -6.9878 c -0.9741 -2.0538 -1.7577 -3.9175 -1.7577 -4.0019 c 0 -0.1481 -0.8894 -2.0538 -1.9481 -4.2563 c -1.0798 -2.2445 -1.9481 -4.3621 -1.9481 -4.7432 c 0 -0.3388 1.4189 -2.1599 3.1339 -4.0019 c 4.5104 -4.7432 7.623 -10.4181 12.1758 -21.9586 c 2.0538 -5.2724 4.2987 -13.1498 4.3621 -15.2037 c 0 -2.0538 -1.5246 -4.3621 -2.9435 -4.3621 c -0.3812 0 -1.6093 -0.2541 -2.6891 -0.5929 l -1.9058 -0.5929 l 0.2964 -3.0915 c 0.6352 -6.0561 -1.0377 -17.0671 -3.5784 -23.9278 c -2.4563 -6.4162 -7.3899 -14.1873 -12.6626 -19.7138 c -2.1599 -2.2445 -2.541 -2.9855 -2.541 -4.5104 c 0 -5.3361 -4.0656 -9.2536 -9.5288 -9.2536 c -5.5692 0 -9.5288 3.9175 -9.5288 9.4441 c 0.0424 6.0561 5.3784 10.3124 11.5405 9.19 l 2.3929 -0.4448 l 2.3082 2.4563 c 8.0252 8.3216 13.1072 21.0266 13.1072 32.6732 c 0 2.6891 -0.0424 4.8916 -0.106 4.8916 c -0.106 0 -1.2282 -0.3388 -2.541 -0.7413 c -3.1763 -0.9741 -3.367 -0.9317 -5.082 0.4869 c -0.9317 0.7836 -1.7577 2.3082 -2.4987 4.4468 c -1.6093 4.9339 -5.8233 12.7684 -8.1099 15.1613 c -0.2541 0.2964 -1.2705 1.4189 -2.2445 2.4563 c -7.9831 8.8935 -20.6458 13.4036 -33.5625 11.9851 c -2.9435 -0.3388 -6.9031 -1.0377 -8.8512 -1.567 c -5.6749 -1.567 -7.4326 -0.6776 -8.0678 4.1503 c -0.1907 1.3129 -0.4448 2.4987 -0.5295 2.5834 c -0.2964 0.2964 -2.3929 -1.0377 -6.2678 -3.8538 c -4.1079 -3.0915 -7.3479 -6.1194 -9.4864 -8.9995 c -0.7836 -1.0798 -1.567 -2.0118 -1.715 -2.1599 c -0.5295 -0.4448 -4.1079 -7.0511 -5.0397 -9.2957 c -1.567 -3.8538 -1.715 -4.3621 -2.4987 -7.6864 l -0.7836 -3.2823 l 1.9058 -1.9481 c 2.4987 -2.6891 3.2823 -4.4044 3.2186 -7.0938 c -0.1907 -10.1217 -14.378 -12.9168 -18.3375 -3.5784 c -1.7577 4.1079 -0.7413 8.0678 2.9855 11.5405 c 1.0798 0.9741 1.9481 2.2445 1.9481 2.7951 c 0 0.4869 0.4448 2.541 0.9741 4.4468 c 4.5948 16.5799 14.6318 29.2425 29.2425 36.9292 l 2.541 1.3129 l 0 3.8115 c 0 3.8115 0 3.8115 1.6093 4.7856 c 4.8916 3.0282 18.9305 5.6326 33.4988 6.2044 l 7.4326 0.2964 l 1.6093 2.4987 c 0.8257 1.3765 1.673 2.6891 1.7577 2.9435 c 0.106 0.1907 1.4189 2.3082 2.9435 4.6372 c 1.567 2.3082 4.2987 6.649 6.1194 9.6771 c 4.6372 7.7714 6.0137 8.6184 10.4605 6.4162 l 2.2022 -1.1221 l 1.5246 1.9481 c 0.8257 1.0798 3.367 3.8538 5.6749 6.1621 c 5.8233 5.8653 11.7946 9.2957 20.5398 11.6886 c 4.8489 1.3765 16.3471 1.3129 21.6619 -0.0424 z m 365.0147 -12.1758 c 11.6886 -1.673 19.5657 -6.3102 22.9324 -13.4463 c 3.1763 -6.6066 2.0118 -15.0766 -2.7317 -19.7561 c -4.1503 -4.1503 -8.6604 -5.8653 -21.175 -8.1099 c -14.5684 -2.647 -17.1307 -3.9596 -17.1307 -8.8935 c 0 -2.4987 0.1481 -2.8375 1.8 -4.2987 c 2.7951 -2.3929 5.929 -3.1763 12.578 -3.1763 c 6.5006 0 11.0957 0.9741 16.3895 3.367 c 1.8634 0.8257 3.4727 1.4612 3.5784 1.3765 c 0.3388 -0.3388 6.0137 -11.6886 6.0137 -12.0274 c 0 -0.3388 -2.3503 -1.4612 -5.9714 -2.9435 c -0.7413 -0.2541 -3.2823 -0.9741 -5.6326 -1.6093 c -3.7268 -0.9317 -5.6326 -1.0798 -14.0815 -1.0798 c -8.2159 -0.0424 -10.3124 0.106 -12.9591 0.8894 c -7.3479 2.1599 -13.7848 6.8394 -16.093 11.7309 c -3.4303 7.2842 -2.2445 16.0507 2.7951 21.0903 c 4.2137 4.2563 8.8935 6.0137 22.1067 8.3216 c 13.4036 2.3082 16.093 3.6211 16.1354 7.729 c 0 2.7951 -1.1648 4.5528 -4.0656 6.0561 c -2.4563 1.3129 -2.7951 1.3765 -10.3758 1.3129 c -6.5006 0 -8.47 -0.1907 -11.4979 -1.0798 c -5.929 -1.673 -10.1217 -3.4303 -12.0274 -5.0397 c -0.3812 -0.2964 -0.7836 -0.4869 -0.8894 -0.3812 c -0.0424 0.106 -1.5246 2.9435 -3.1339 6.2044 l -3.0282 6.0561 l 1.0798 0.9317 c 1.3765 1.0798 7.4326 3.7268 10.8626 4.6372 c 2.0965 0.5929 6.7973 1.4612 12.0274 2.3082 c 2.4563 0.3812 9.1476 0.2964 12.4719 -0.1481 z m 82.6672 -0.9741 c 6.3102 -1.6093 13.4036 -5.6326 16.0507 -9.1052 c 0.7836 -1.0377 0.6776 -1.2282 -3.1339 -5.6326 c -2.2022 -2.541 -4.1503 -4.7856 -4.3621 -5.0397 c -0.2541 -0.2541 -1.1648 0.1907 -2.1599 1.0798 c -7.4326 6.5006 -20.6031 7.9831 -29.645 3.2823 c -4.2137 -2.2022 -9.7829 -9.4864 -9.7829 -12.811 l 0 -1.1221 l 27.104 0 l 27.1463 0 l 0.3388 -2.3082 c 0.6776 -4.7432 -0.9741 -13.9965 -3.5784 -19.46 c -4.5528 -9.6771 -13.5944 -16.4955 -24.3513 -18.4012 c -4.4468 -0.7836 -15.267 -0.2964 -18.5917 0.8257 c -15.7119 5.2301 -24.7114 17.66 -24.7114 34.1341 c 0 9.8889 3.9175 19.608 10.27 25.6218 c 4.8916 4.6372 11.9851 8.0678 19.3116 9.3383 c 1.6093 0.2964 3.4727 0.6352 4.1503 0.7413 c 2.647 0.4869 12.1331 -0.2541 15.9023 -1.1648 z m -330.9229 -6.8394 l 0 -7.3479 l -23.9701 0 l -23.9701 0 l 0 -38.3904 l 0 -38.3904 l -8.5547 0 l -8.5547 0 l 0 45.738 l 0 45.738 l 32.5248 0 l 32.5248 0 l 0 -7.3479 z m 28.3745 -27.6335 l 0 -34.9811 l -8.3216 0 l -8.3216 0 l 0 34.9811 l 0 34.9811 l 8.3216 0 l 8.3216 0 l 0 -34.9811 z m 37.6705 14.8225 c 0 -22.2127 0.1907 -23.9278 3.0282 -28.1204 c 1.8 -2.6891 5.188 -5.4842 8.1099 -6.6913 c 3.4303 -1.4612 12.6203 -1.4612 15.7965 0 c 2.647 1.2282 5.4842 3.9175 6.7547 6.4585 c 1.8 3.5784 2.0118 6.4162 2.0118 27.7392 l 0 20.7939 l 8.3643 0 l 8.3216 0 l -0.1907 -23.5676 c -0.1907 -25.9819 -0.2541 -26.6171 -3.5151 -33.2658 c -3.2186 -6.6066 -10.3758 -11.5829 -18.74 -13.2132 c -1.6093 -0.2964 -5.4842 -0.3812 -9.1476 -0.2541 c -7.3479 0.2964 -10.3124 1.1221 -16.3471 4.5104 c -0.5929 0.3388 -2.0965 1.567 -3.2823 2.7317 l -2.1599 2.0965 l 0 -4.5104 l 0 -4.5104 l -7.8348 0 l -7.8348 0 l 0 34.9811 l 0 34.9811 l 8.3216 0 l 8.3216 0 l 0 -20.1586 z m 89.5066 10.5241 l 0.2541 -9.4017 l 5.0397 -4.7432 c 7.2842 -6.9031 6.2678 -6.6913 9.9309 -2.0538 c 1.715 2.2022 3.367 4.2137 3.6211 4.5104 c 0.2964 0.2964 1.2705 1.567 2.2022 2.7951 c 0.9317 1.2282 2.647 3.2823 3.7692 4.6372 c 2.2022 2.647 5.9714 7.2842 9.1476 11.3074 l 2.0118 2.5834 l 9.9309 0 c 11.0534 0 10.4605 0.2541 7.3479 -3.4727 c -0.9741 -1.1648 -4.1503 -5.2301 -7.0511 -8.9995 c -2.9435 -3.7692 -5.4208 -6.9454 -5.5692 -7.0938 c -0.1481 -0.1481 -1.4612 -1.7577 -2.9435 -3.6634 c -3.2823 -4.2563 -7.9831 -10.164 -8.3216 -10.5241 c -0.1481 -0.1481 -1.4189 -1.715 -2.8375 -3.5151 l -2.541 -3.3243 l 14.5261 -14.5261 l 14.5261 -14.5684 l -9.6771 -0.1481 l -9.6771 -0.106 l -2.0538 1.7577 c -1.0798 1.0377 -3.8538 3.5784 -6.1621 5.7172 c -5.082 4.7432 -7.8348 7.2842 -15.6485 14.5261 c -3.367 3.0915 -6.5643 6.0561 -7.1361 6.6066 c -3.1763 3.1339 -2.8798 5.929 -2.7317 -26.4688 l 0.1481 -29.0521 l -8.3643 0 l -8.3216 0 l 0 48.4271 l 0 48.4271 l 8.2159 -0.106 l 8.1736 -0.1481 l 0.2541 -9.4017 z m -326.5185 -6.035 c -0.4869 -1.0377 -8.8935 -14.5684 -12.9168 -20.7939 c -1.1648 -1.8634 -2.4987 -3.6634 -2.8798 -3.9596 c -0.4869 -0.3388 -4.8916 -0.6352 -11.5405 -0.8257 c -14.1873 -0.3812 -26.7015 -2.4987 -26.7015 -4.5104 c 0 -0.9741 1.0377 -8.3216 1.1648 -8.47 c 0.106 -0.0424 2.0965 0.1907 4.4468 0.6352 c 11.5829 2.0118 24.0125 -0.0424 33.2658 -5.5268 c 9.1052 -5.3784 15.0766 -12.0274 20.1586 -22.2548 c 1.4612 -3.0282 2.7317 -5.5268 2.8375 -5.6326 c 0.3388 -0.3388 8.5547 2.1599 8.5547 2.647 c 0 1.1221 -4.4468 13.2556 -6.2044 16.8343 c -3.1763 6.5006 -6.8394 11.6463 -9.9309 13.8908 c -1.567 1.0798 -3.1763 2.647 -3.6634 3.367 c -0.7836 1.3129 -0.7836 1.5246 0.0424 3.6634 c 0.4448 1.2705 1.8 4.4044 2.9855 6.9454 c 1.2282 2.541 2.7317 5.9714 3.4303 7.5383 c 0.6776 1.6093 2.2022 4.9973 3.367 7.5383 c 1.1648 2.4987 2.1599 4.8489 2.1599 5.1457 c 0 0.4869 -7.1361 4.7432 -7.8771 4.7432 c -0.1481 0 -0.4448 -0.4448 -0.6776 -0.9741 z m 468.7298 -26.5111 c 0.6776 -3.4727 3.4727 -8.4066 6.0137 -10.5662 c 4.1079 -3.4727 7.8771 -4.6372 14.5684 -4.4044 c 4.5104 0.1481 5.6326 0.3388 7.9831 1.5246 c 3.0915 1.5246 6.7547 4.9973 8.3643 7.9195 c 0.7836 1.5246 2.3082 5.9714 2.3503 6.9878 c 0 0.0424 -8.8935 0.106 -19.8198 0.106 l -19.7561 0 l 0.2964 -1.567 z"/>
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
