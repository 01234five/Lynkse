@extends('layouts.videosyncapp')

@section('content')
<!-------------body ------------------>

<div class="side-nav side-nav-container-closed">

</div>
<div class="side-nav-screen-hold" style="display:none"></div>






<!-- ======= sec1 ========== -->
<div class="clearfix"></div>
<div class="container-fluid sec1 p-0">
<div class="container-fluid p-0 m-0">
  <div class="row row-flex">
    <!-- ======= first section ========== -->
    <div class="col-lg-2 col-md-2 col-xs-12 p-0 pl-3" style="height: calc(100vh - 80px);box-sizing: border-box;">
      <div class="box p-1" style="height: 100%">
        <div class="box-right p-1" style="height: 100%">
          <div class="row" style="height: 100%">
          



          <div id="myChat" class="col-md-12 p-1" style="height: 100%; overflow-x:hidden;">
<input type="text" id="searchListInput" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" style="border-radius:0px 0px 0px 0px;">

<div id="friends"></div>
</div>







          </div>
        </div>
      </div>
    </div>
    <!-- ======= second section ========== -->
    <div class="col-lg-8 col-md-8 col-xs-12 p-0">
    <div id="playerDiv" style="height: calc(100vh - 80px);box-sizing: border-box;"></div>
    <div  id="playerDivVimeo" class="vimeo-wrapper"></div>
    </div>
    <!-- ======= third section ========== -->
    <div class="col-lg-2 col-md-2 col-xs-12 p-0" style="height: calc(100vh - 80px);box-sizing: border-box;">
      <div class="box">
        <div class="box-right" style="height: calc(100vh - 80px);box-sizing: border-box;">
          <div class="row">
            <div class="col-md-12 p-1">
            <div id="app"><chat-room-show-component :currentroom="{{ $room }}" :messages="{{ $messages }}" :user="{{ auth()->user() }}"></chat-room-show-component></div>
            </div>

          </div>
        </div>
      </div>
    </div>

    <!--BOTTOOOMMMM -->
    
    <div id="bottomBarInitial" class="container-fluid">
    
      <div class="bottom">
      <div class="row justify-content-md-center">
      
      <div class="col-md-6 col-md-offset-3">


      <div class="container">
  <div class="row">
  <div class="col-md-3 col-xs-4">
  <div class="btn-group" role="group" aria-label="Basic example">

             
            </div>
    </div>
    <div class="col-md-6 col-xs-4 text-right">
    
    </div>
    <div id="browseButton" class="col-md-3 col-xs-4">
    <button id="browseUserCount" type="button" class="btn btn btn-black toggle-sidebar" style="color:whitesmoke">P: BROWSE <i class="fa fa-file"></i></button></div>
    </div>
  </div>
</div>
</div>


  </div>
</div>

<!-- ====banner========== -->
    <!--BOTTOOOMMMM -->
    
    <div id="bottomBarYoutube" class="container-fluid">
    
      <div class="bottom">
      <div class="row justify-content-md-center">
      
      <div class="col-md-6 col-md-offset-3">


      <div class="container">
  <div class="row">
  <div class="col-md-3 col-xs-4 my-auto" >
  
  <div class="btn-group" role="group" aria-label="Basic example">
              <button onclick="playVideo();" type="button" class="btn btn-primary"><i class="fa fa-play"></i></button>
             
              <button onclick="pauseVideo();" type="button" class="btn btn-primary"><i class="fa fa-stop"></i></button>
              <button onclick="unMuteVideo();" type="button" class="btn btn-primary"><i id="volumeYoutube" class="fa fa-volume-off"></i></button>
             
            </div>
    </div>
    <div class="col-md-6 col-xs-4 text-right">
    <input id="myRangeYoutube" type="range" min="0" max="0" value="0" class="range blue"/>
    </div>
    <div class="col-md-3 col-xs-4">
    <button id="browseUserCountyoutube" type="button" class="btn btn btn-black toggle-sidebar" style="color:whitesmoke">BROWSE <i class="fa fa-file"></i></button></div>
    </div>
  </div>
</div>
</div>


  </div>
</div>


<!-- ====banner========== -->
  <!--BOTTOOOMMMM -->
    
  <div id="bottomBarVimeo" class="container-fluid">
    
    <div class="bottom">
    <div class="row justify-content-md-center">
    
    <div class="col-md-6 col-md-offset-3">


    <div class="container">
<div class="row">
<div class="col-md-3 col-xs-4 my-auto">
<div class="btn-group" role="group" aria-label="Basic example">
            <button onclick="vimeoPusherPlay()" type="button" class="btn btn-primary"><i class="fa fa-play"></i></button>
           
            <button onclick="vimeoPusherPause()" type="button" class="btn btn-primary"><i class="fa fa-stop"></i></button>
             <button onclick="vimeoVolume()" type="button" class="btn btn-primary"><i id="volumeVimeo" class="fa fa-volume-off"></i></button>
           
          </div>
  </div>
  <div class="col-md-6 col-xs-4 text-right">
  <input id="myRangeVimeo" type="range" min="0" max="0" value="0" class="range blue"/>
  </div>
  <div class="col-md-3 col-xs-4">
  <button id="browseUserCountvimeo" type="button" class="btn btn btn-black toggle-sidebar" style="color:whitesmoke">BROWSE <i class="fa fa-file"></i></button></div>
  </div>
</div>
</div>
</div>


</div>
</div>


<!-- ====banner========== -->
<div class="container-fluid">
<div class="row justify-content-md-center">
  <div class="col-12">
<div style="text-align: center;">


<div class="section-icon">
<a href="{{ url('/community') }}" class="svg">
          <svg  fill="#878787" width="80" class="section-icon active" viewBox="0 0 612 234.34"><path d="m 345.7793 128.0664 z M 154.8204 166.1262 c 7.8041 -2.0411 14.8877 -6.1431 20.2104 -11.8263 c 6.9438 -7.4439 10.3055 -16.1284 10.9458 -28.1147 c 0.4601 -8.6445 -0.9806 -17.289 -5.9231 -35.5986 c -3.0416 -11.5061 -4.5822 -20.0104 -4.5822 -26.2135 c 0 -9.3847 3.0416 -18.4896 8.8846 -26.3535 c 3.882 -5.2228 5.5427 -6.9438 10.2652 -10.4854 c 16.5887 -12.5665 36.1387 -14.4674 54.5883 -5.2228 c 3.2416 1.581 7.2636 4.1222 9.485 5.8632 c 1.7609 1.3808 8.4044 8.0842 9.8451 9.9453 c 1.9812 2.5014 5.4028 8.9646 6.6035 12.5665 l 1.1007 3.2416 l -2.3613 2.3212 c -3.2817 3.2416 -4.5822 6.1431 -4.5822 10.5853 c 0 3.0016 0.1802 3.922 1.4407 6.3233 c 5.503 11.0457 20.3305 10.9058 26.0737 -0.2801 c 1.0604 -2.0811 1.3008 -3.0416 1.3008 -6.0633 c 0 -3.1018 -0.2401 -4.0623 -1.3409 -6.2833 c -1.701 -3.3816 -5.1227 -6.4234 -8.5045 -7.544 c -2.5014 -0.8405 -2.5412 -0.9205 -3.3218 -3.4619 c -0.7405 -2.5014 -2.1211 -5.7828 -4.2022 -9.9453 c -0.5004 -1.0604 -2.5815 -4.1222 -4.5822 -6.7436 c -11.9262 -15.9084 -30.8762 -25.4331 -50.5263 -25.4331 c -7.1237 0 -11.4658 0.7005 -18.5898 3.0016 c -12.8066 4.1222 -25.2329 13.5471 -32.3169 24.4526 c -5.1826 8.0041 -7.544 14.7078 -8.5045 24.2724 c -0.2801 2.8213 -0.4203 5.9231 -0.2801 6.9438 c 0.1002 1.0204 0.3602 3.6019 0.5004 5.7828 c 0.1802 2.1812 0.8405 6.3233 1.4808 9.2448 c 0.6403 2.9215 1.3409 6.2033 1.581 7.3039 c 0.2401 1.1007 0.5004 2.1211 0.6003 2.3212 c 0.1002 0.1802 0.9205 3.1818 1.841 6.6633 c 3.7818 14.5076 4.9824 24.0925 4.0222 31.6564 c -1.3808 11.0457 -4.9424 17.3891 -13.0868 23.3922 c -4.0623 3.0016 -12.9469 5.8632 -18.1294 5.8632 c -5.3228 -0.0401 -12.6664 -2.1211 -17.5291 -5.0426 c -3.1018 -1.801 -8.6845 -7.1237 -9.8051 -9.2448 c -0.6403 -1.3008 -0.6403 -1.3409 0.8805 -2.0811 c 0.8405 -0.4203 1.801 -1.0604 2.1812 -1.4808 c 0.9205 -1.1007 0.7405 -3.7818 -0.3602 -6.2033 c -0.5004 -1.1606 -1.581 -3.4219 -2.3613 -5.0826 c -0.7405 -1.661 -2.1211 -4.6226 -3.0416 -6.6035 c -0.9205 -1.9408 -1.661 -3.702 -1.661 -3.7818 c 0 -0.14 -0.8405 -1.9408 -1.841 -4.0222 c -1.0204 -2.1211 -1.841 -4.1222 -1.841 -4.4823 c 0 -0.3202 1.3409 -2.0411 2.9615 -3.7818 c 4.2623 -4.4823 7.2037 -9.8451 11.5061 -20.7509 c 1.9408 -4.9824 4.0623 -12.4266 4.1222 -14.3675 c 0 -1.9408 -1.4407 -4.1222 -2.7816 -4.1222 c -0.3602 0 -1.5208 -0.2401 -2.5412 -0.5603 l -1.801 -0.5603 l 0.2801 -2.9215 c 0.6003 -5.723 -0.9806 -16.1284 -3.3816 -22.6118 c -2.3212 -6.0633 -6.9835 -13.407 -11.9662 -18.6295 c -2.0411 -2.1211 -2.4012 -2.8213 -2.4012 -4.2623 c 0 -5.0426 -3.842 -8.7447 -9.0047 -8.7447 c -5.2629 0 -9.0047 3.702 -9.0047 8.9247 c 0.0401 5.723 5.0826 9.7452 10.9058 8.6845 l 2.2613 -0.4203 l 2.1812 2.3212 c 7.5838 7.8639 12.3863 19.8701 12.3863 30.8762 c 0 2.5412 -0.0401 4.6226 -0.1002 4.6226 c -0.1002 0 -1.1606 -0.3202 -2.4012 -0.7005 c -3.0016 -0.9205 -3.1818 -0.8805 -4.8025 0.4601 c -0.8805 0.7405 -1.661 2.1812 -2.3613 4.2022 c -1.5208 4.6625 -5.503 12.0661 -7.6639 14.3274 c -0.2401 0.2801 -1.2006 1.3409 -2.1211 2.3212 c -7.544 8.4044 -19.5103 12.6664 -31.7166 11.3259 c -2.7816 -0.3202 -6.5234 -0.9806 -8.3644 -1.4808 c -5.3628 -1.4808 -7.0238 -0.6403 -7.6241 3.922 c -0.1802 1.2407 -0.4203 2.3613 -0.5004 2.4413 c -0.2801 0.2801 -2.2613 -0.9806 -5.9231 -3.6418 c -3.882 -2.9215 -6.9438 -5.7828 -8.9646 -8.5045 c -0.7405 -1.0204 -1.4808 -1.9012 -1.6207 -2.0411 c -0.5004 -0.4203 -3.882 -6.6633 -4.7625 -8.7844 c -1.4808 -3.6418 -1.6207 -4.1222 -2.3613 -7.2636 l -0.7405 -3.1018 l 1.801 -1.841 c 2.3613 -2.5412 3.1018 -4.1622 3.0416 -6.7036 c -0.1802 -9.565 -13.5872 -12.2064 -17.3289 -3.3816 c -1.661 3.882 -0.7005 7.6241 2.8213 10.9058 c 1.0204 0.9205 1.841 2.1211 1.841 2.6414 c 0 0.4601 0.4203 2.4012 0.9205 4.2022 c 4.3421 15.668 13.8271 27.6342 27.6342 34.8981 l 2.4012 1.2407 l 0 3.6019 c 0 3.6019 0 3.6019 1.5208 4.5224 c 4.6226 2.8616 17.8893 5.3228 31.6564 5.8632 l 7.0238 0.2801 l 1.5208 2.3613 c 0.7803 1.3008 1.581 2.5412 1.661 2.7816 c 0.1002 0.1802 1.3409 2.1812 2.7816 4.3822 c 1.4808 2.1812 4.0623 6.2833 5.7828 9.1449 c 4.3822 7.344 5.6829 8.1444 9.8852 6.0633 l 2.0811 -1.0604 l 1.4407 1.841 c 0.7803 1.0204 3.1818 3.6418 5.3628 5.8232 c 5.503 5.5427 11.1459 8.7844 19.4101 11.0457 c 4.5822 1.3008 15.448 1.2407 20.4705 -0.0401 z m 344.9389 -11.5061 c 11.0457 -1.581 18.4896 -5.9631 21.6711 -12.7068 c 3.0016 -6.2432 1.9012 -14.2474 -2.5815 -18.6695 c -3.922 -3.922 -8.1841 -5.5427 -20.0104 -7.6639 c -13.7671 -2.5014 -16.1885 -3.7418 -16.1885 -8.4044 c 0 -2.3613 0.14 -2.6814 1.701 -4.0623 c 2.6414 -2.2613 5.6029 -3.0016 11.8862 -3.0016 c 6.1431 0 10.4854 0.9205 15.4881 3.1818 c 1.7609 0.7803 3.2817 1.3808 3.3816 1.3008 c 0.3202 -0.3202 5.6829 -11.0457 5.6829 -11.3659 c 0 -0.3202 -2.221 -1.3808 -5.643 -2.7816 c -0.7005 -0.2401 -3.1018 -0.9205 -5.3228 -1.5208 c -3.5218 -0.8805 -5.3228 -1.0204 -13.307 -1.0204 c -7.764 -0.0401 -9.7452 0.1002 -12.2463 0.8405 c -6.9438 2.0411 -13.0266 6.4632 -15.2079 11.0857 c -3.2416 6.8836 -2.1211 15.1679 2.6414 19.9303 c 3.9819 4.0222 8.4044 5.6829 20.8908 7.8639 c 12.6664 2.1812 15.2079 3.4219 15.248 7.3039 c 0 2.6414 -1.1007 4.3024 -3.842 5.723 c -2.3212 1.2407 -2.6414 1.3008 -9.8051 1.2407 c -6.1431 0 -8.0041 -0.1802 -10.8655 -1.0204 c -5.6029 -1.581 -9.565 -3.2416 -11.3659 -4.7625 c -0.3602 -0.2801 -0.7405 -0.4601 -0.8405 -0.3602 c -0.0401 0.1002 -1.4407 2.7816 -2.9615 5.8632 l -2.8616 5.723 l 1.0204 0.8805 c 1.3008 1.0204 7.0238 3.5218 10.2652 4.3822 c 1.9812 0.5603 6.4234 1.3808 11.3659 2.1812 c 2.3212 0.3602 8.6445 0.2801 11.7859 -0.14 z m 78.1205 -0.9205 c 5.9631 -1.5208 12.6664 -5.3228 15.1679 -8.6044 c 0.7405 -0.9806 0.6403 -1.1606 -2.9615 -5.3228 c -2.0811 -2.4012 -3.922 -4.5224 -4.1222 -4.7625 c -0.2401 -0.2401 -1.1007 0.1802 -2.0411 1.0204 c -7.0238 6.1431 -19.4699 7.544 -28.0145 3.1018 c -3.9819 -2.0811 -9.2448 -8.9646 -9.2448 -12.1064 l 0 -1.0604 l 25.6133 0 l 25.6533 0 l 0.3202 -2.1812 c 0.6403 -4.4823 -0.9205 -13.2267 -3.3816 -18.3897 c -4.3024 -9.1449 -12.8467 -15.5882 -23.012 -17.3891 c -4.2022 -0.7405 -14.4273 -0.2801 -17.5692 0.7803 c -14.8477 4.9424 -23.3523 16.6887 -23.3523 32.2567 c 0 9.345 3.702 18.5296 9.7051 24.2126 c 4.6226 4.3822 11.3259 7.6241 18.2495 8.8247 c 1.5208 0.2801 3.2817 0.6003 3.922 0.7005 c 2.5014 0.4601 11.4658 -0.2401 15.0277 -1.1007 z m -312.7221 -6.4632 l 0 -6.9438 l -22.6517 0 l -22.6517 0 l 0 -36.2789 l 0 -36.2789 l -8.0842 0 l -8.0842 0 l 0 43.2224 l 0 43.2224 l 30.7359 0 l 30.7359 0 l 0 -6.9438 z m 26.8139 -26.1137 l 0 -33.0571 l -7.8639 0 l -7.8639 0 l 0 33.0571 l 0 33.0571 l 7.8639 0 l 7.8639 0 l 0 -33.0571 z m 35.5986 14.0073 c 0 -20.991 0.1802 -22.6118 2.8616 -26.5738 c 1.701 -2.5412 4.9027 -5.1826 7.6639 -6.3233 c 3.2416 -1.3808 11.9262 -1.3808 14.9277 0 c 2.5014 1.1606 5.1826 3.702 6.3832 6.1033 c 1.701 3.3816 1.9012 6.0633 1.9012 26.2135 l 0 19.6502 l 7.9043 0 l 7.8639 0 l -0.1802 -22.2714 c -0.1802 -24.5529 -0.2401 -25.1532 -3.3218 -31.4362 c -3.0416 -6.2432 -9.8051 -10.9458 -17.7093 -12.4865 c -1.5208 -0.2801 -5.1826 -0.3602 -8.6445 -0.2401 c -6.9438 0.2801 -9.7452 1.0604 -15.448 4.2623 c -0.5603 0.3202 -1.9812 1.4808 -3.1018 2.5815 l -2.0411 1.9812 l 0 -4.2623 l 0 -4.2623 l -7.4039 0 l -7.4039 0 l 0 33.0571 l 0 33.0571 l 7.8639 0 l 7.8639 0 l 0 -19.0499 z m 84.5837 9.9453 l 0.2401 -8.8846 l 4.7625 -4.4823 c 6.8836 -6.5234 5.9231 -6.3233 9.3847 -1.9408 c 1.6207 2.0811 3.1818 3.9819 3.4219 4.2623 c 0.2801 0.2801 1.2006 1.4808 2.0811 2.6414 c 0.8805 1.1606 2.5014 3.1018 3.5619 4.3822 c 2.0811 2.5014 5.643 6.8836 8.6445 10.6855 l 1.9012 2.4413 l 9.3847 0 c 10.4455 0 9.8852 0.2401 6.9438 -3.2817 c -0.9205 -1.1007 -3.922 -4.9424 -6.6633 -8.5045 c -2.7816 -3.5619 -5.1227 -6.5634 -5.2629 -6.7036 c -0.14 -0.14 -1.3808 -1.661 -2.7816 -3.4619 c -3.1018 -4.0222 -7.544 -9.605 -7.8639 -9.9453 c -0.14 -0.14 -1.3409 -1.6207 -2.6814 -3.3218 l -2.4012 -3.1415 l 13.7272 -13.7272 l 13.7272 -13.7671 l -9.1449 -0.14 l -9.1449 -0.1002 l -1.9408 1.661 c -1.0204 0.9806 -3.6418 3.3816 -5.8232 5.4028 c -4.8025 4.4823 -7.4039 6.8836 -14.7878 13.7272 c -3.1818 2.9215 -6.2033 5.723 -6.7436 6.2432 c -3.0016 2.9615 -2.7214 5.6029 -2.5815 -25.013 l 0.14 -27.4542 l -7.9043 0 l -7.8639 0 l 0 45.7636 l 0 45.7636 l 7.764 -0.1002 l 7.7241 -0.14 l 0.2401 -8.8846 z m -308.56 -5.7031 c -0.4601 -0.9806 -8.4044 -13.7671 -12.2064 -19.6502 c -1.1007 -1.7609 -2.3613 -3.4619 -2.7214 -3.7418 c -0.4601 -0.3202 -4.6226 -0.6003 -10.9058 -0.7803 c -13.407 -0.3602 -25.2329 -2.3613 -25.2329 -4.2623 c 0 -0.9205 0.9806 -7.8639 1.1007 -8.0041 c 0.1002 -0.0401 1.9812 0.1802 4.2022 0.6003 c 10.9458 1.9012 22.6918 -0.0401 31.4362 -5.2228 c 8.6044 -5.0826 14.2474 -11.3659 19.0499 -21.0308 c 1.3808 -2.8616 2.5815 -5.2228 2.6814 -5.3228 c 0.3202 -0.3202 8.0842 2.0411 8.0842 2.5014 c 0 1.0604 -4.2022 12.5265 -5.8632 15.9084 c -3.0016 6.1431 -6.4632 11.0058 -9.3847 13.1268 c -1.4808 1.0204 -3.0016 2.5014 -3.4619 3.1818 c -0.7405 1.2407 -0.7405 1.4407 0.0401 3.4619 c 0.4203 1.2006 1.701 4.1622 2.8213 6.5634 c 1.1606 2.4012 2.5815 5.643 3.2416 7.1237 c 0.6403 1.5208 2.0811 4.7224 3.1818 7.1237 c 1.1007 2.3613 2.0411 4.5822 2.0411 4.8627 c 0 0.4601 -6.7436 4.4823 -7.4439 4.4823 c -0.14 0 -0.4203 -0.4203 -0.6403 -0.9205 z m 442.9497 -25.053 c 0.6403 -3.2817 3.2817 -7.9442 5.6829 -9.9851 c 3.882 -3.2817 7.4439 -4.3822 13.7671 -4.1622 c 4.2623 0.14 5.3228 0.3202 7.544 1.4407 c 2.9215 1.4407 6.3832 4.7224 7.9043 7.4839 c 0.7405 1.4407 2.1812 5.643 2.221 6.6035 c 0 0.0401 -8.4044 0.1002 -18.7297 0.1002 l -18.6695 0 l 0.2801 -1.4808 z"></path></svg>
          </a>
        </div>       
  

</div>






</div>
</div>
</div>
</div>
</div>

  









<div id="ocn">
    <div id="ocn-inner">
    


    <div class="card h-100">
  <div class="card-header">
    <p5 class="align-self-start">Chat</p5>
  </div>
  <div id="cardbody" class="card-body" style="overflow-y: auto; word-break: break-all;">
    <div id="messages">




    </div>
  </div>
  <div class="card-footer text-muted">

  <form id="inputForm" autocomplete="off">
  <div class="input-group mb-0">
  <input id="chatInputId" type="text" class="form-control" placeholder="send text" aria-label="send text" aria-describedby="basic-addon2" >
  <div class="input-group-append">
    <button class="btn btn-outline-secondary" type="submit">Button</button>
  </div>
</div>
</form>

  </div>
</div>



    </div>
  </div>
  
 















  <div id="ocn2">
    <div id="ocn2-inner">
    


<div class="h-100">
<div class="container" >
  <div class="row" style="height:100%">
    <div class="col-6" style="padding: 0 0;">
    <div class="row row-flex p-0 m-0" style="width:100%">
    <div class="col-6" >
    <button type="submit"onclick="chooseYoutubeSearch();" style="background-color: Transparent;border: none;outline:none; color:gray;">Youtube</button>
    </div>
    <div class="col-6" >
    <button type="submit"onclick="chooseVimeoSearch();" style="background-color: Transparent;border: none;outline:none; color:gray;">Vimeo</button>
    </div>
    </div>
    <div id="vimeoOrYoutube">

    </div>
    



    </div>


    <div class="col-6" style="padding: 0 0;border:1px solid gray;border-radius: 8px;">
	<h3 style="text-align: center;color:gray">Queue</h3>
	<div id="articles2"> </div>
    </div>
  </div>
</div>
</div>



    </div>
  </div>





  <a class="nav-toggle" id="overlay"></a>
  <a class="nav-toggle2" id="overlay2"></a>




















<script>
var stateAmmounts=0;
function insertMessagefromPusher(content,thumb,name){
  
 
            $('#messages').append(`

            <div class="media">
  <img class="align-self-start mr-3 rounded-circle" src="/users/${thumb}" style="width:64; height:64;" alt="">
  <div class="media-body">
    <h5 class="mt-0">${name}</h5>
    <p>${content}</p>
   
  </div>
</div>

        `);
        scrolltoBottom()
}
function insertMyMessage(content){
  
        $('#messages').append(`

        <div class="media">
  
  <div class="media-body">
    <h5 class="mt-0 mb-1">Me</h5>
    <p>${content}</p>
    </div>
    <img class=" ml-3 rounded-circle" src="/users/${myThumb}" style="width:64; height:64;" alt="">
  
</div>

        `);
        scrolltoBottom()
}

function scrolltoBottom(){
  
  $("#cardbody").scrollTop($("#cardbody")[0].scrollHeight);
  //console.log("zzzz");
  return false;

}




    $("#searchListInput").on("keyup", function() {
  var value = this.value.toLowerCase().trim();
 
  $("#friends li").show().filter(function() {
    return $(this).attr('name').toLowerCase().trim().indexOf(value) == -1;
  }).hide();
});



Echo.private('notification.' + <?php echo auth()->user()->id; ?>)
                    .listen('NotificationEvent', (e) => {
                        console.log(e);
                        
                        //if(e.notification.message==="new friend request"){
                        //getPendingCounts();
                        //}
                        if(e.notification.message==="add new friend to chat"){
                          console.log("got it!");
                          newFriendAcceptedRequestAddToChat(e.notification.name,e.notification.thumb,e.notification.myIdis);
                        }

                        if(e.notification.message==="add new friend to chat myself"){
                          console.log("got it, add to myself!");
                          //console.log(e.notification.name,e.notification.thumb,e.notification.myIdis);
                          newFriendAcceptedRequestAddToChat(e.notification.name,e.notification.thumb,e.notification.myIdis);
                        }
                      
                    });

Echo.private('users.'+ <?php echo auth()->id(); ?>)
    		    .listen('MessageSent', (data) => {
    		    	const message = data.message;
            	message.written_by_me = false;   
              console.log(data.message.from_id); 
              lastConversationsPOST(data.message.from_id);
              $("#"+data.message.from_id).prependTo("#friends");// SEND MESSAGE TO TOP
              $("#"+data.message.from_id).css('background-color', '#d6cdcb');
              if(listeningID == data.message.from_id){
                
              insertMessagefromPusher(data.message.content,theirThumb,theirName);
              
              }
    		    });



    Echo.join(`messenger`)
    .here((users) => {
        //console.log("online ",users);
        $.each(users, function(i){
          //console.log("user online id: "+users[i].id)
          onlineArray.push(users[i].id);
          
        });
        friendList();
        //arrayStatus();
    })
    .joining((user) => {
        console.log(user.id);
        onlineArray.push(user.id);
        setStatus(user.id,"online");
    })
    .leaving((user) => {
        console.log(user.id);
        onlineArray.splice(onlineArray.indexOf(onlineArray.find(item => item.id == user.id)), 1);
        console.log(onlineArray)
        setStatus(user.id,"offline");
    })
    .error((error) => {
        console.error(error);
    });  
    
    

    
    function arrayStatus(){
//setStatus(onlineArray);
console.log("array "+onlineArray);
}
function setStatus(data,status){
  if(status=="offline"){

  $("#friends li[id="+data+"]").filter(function(){
  console.log($(this).attr('name'));
  $('#status', this).css('background-color', '717171');//GRAY COLOR
});
$("#friends li[id="+data+"]").appendTo("#friends");//MOVE IT TO LAST POSITION
}

if(status=="online"){

$("#friends li[id="+data+"]").filter(function(){
console.log($(this).attr('name'));
$('#status', this).css('background-color', '2AFF00');//GREEN COLOR
});
$("#friends li[id="+data+"]").prependTo("#friends");//MOVE IT TO FIRST POSITION
}

}

$('#inputForm').submit(function(event){
  
console.log("hello"+conversationRecepientId);
// prevent default browser behaviour
event.preventDefault();

//do stuff with your form here

var input= document.getElementById('chatInputId').value;

//console.log("enter or press"+ input);
document.getElementById('chatInputId').value='';


var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
$.ajax({
                    /* the route pointing to the post function */
                    url: '/api/messages',
                    type: 'POST',
                    /* send the csrf-token and the input to the controller */
                    data: {
                        _token: CSRF_TOKEN,
                        to_id: conversationRecepientId,
                        content: input,
                        
                       
                    },
                    //dataType: 'JSON',
                    /* remind that 'data' is the response of the AjaxController */
                    success: function (data) { 
                        $(".writeinfo").append(data.msg); 
                        
                    }
                }); 

                lastConversationsPOST(conversationRecepientId,input);  
                insertMyMessage(input);
                $("#"+conversationRecepientId).prependTo("#friends");
                
});


function newFriendAcceptedRequestAddToChat(name,thumb,id){
  var lastimetextid="time"+id;
  var lastmessageid="lm"+id;

  var statusColor="717171";
        $.each(onlineArray, function(i){
            if(id==onlineArray[i]){
              console.log("online friend "+onlineArray[i]);
              statusColor="2AFF00";
            }
            
          });


  $('#friends').append(`
    
               <li variant="info" class="list-group-item p-1 list-group-item-action" name="${name}" thumb="${thumb}" id="${id}" style="background-color:#1b2838">
<button  class="p-0 list-group-item-action bg-transparent btn" style="background-color:transparent" >
 <div class="row p-2" align-h="center">

<div class="row p-1">
    <div class="col-12 col-md-3 text-center"   align-self="center">
    
    <img src="/users/${thumb}" class="rounded-circle" style="width:50; height:50;"  ></img>
    
    </div>
</div>
    <div class="col-5 d-none d-md-block p-1" align-self="center" >
    
    <p class="mb-1" style="color:#fff">
    <img id="status" class="rounded-circle" style="width:10; height:10; background-color: #${statusColor};"  ></img>
       ${name}</p>


    <p id="${lastmessageid}" class="text-muted small mb-1" style="word-break: break-all;">last message</p>
    </div>


    <div class="col-3 d-none d-xl-block p-1" >
    
    <p  class="need_to_be_rendered text-muted small text-center" id="${lastimetextid}" render="no" datetime="null">last time</p>
    </div>
</div>
   </button>
</li>

        `);
        lastConversations(id);
}

function lastConversationEcho(){

}
function lastConversationsPOST(contactid,content){
  console.log("id passed POST "+contactid)
    
    axios.get('/api/conversations/'+contactid)
    .then(function (response) {
        // handle success
        if (!response.data || response.data.length == 0) {
          console.log("empty");

          
            
var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
$.ajax({
  
                    /* the route pointing to the post function */
                    url: '/create/conversations',
                    type: 'POST',
                    /* send the csrf-token and the input to the controller */
                    data: {
                        _token: CSRF_TOKEN,
                        user_id:<?php echo auth()->id(); ?>,
                        contact_id:contactid,
                        last_message:"Me: "+content,
                        last_messageTheir:myName+": "+content,
                        last_time: null,
                       
                    },
                    //dataType: 'JSON',
                    /* remind that 'data' is the response of the AjaxController */
                    success: function (data) { 
                        $(".writeinfo").append(data.msg); 
                        
                    }
                }); 

                lastConversations(contactid);
        }else{
        console.log("post last message"+response.data[0].last_time)
        var lastreceivedsentmessage=response.data[0].last_message.substring(0,13)
        var render=$("#time"+contactid).attr('render');
          console.log("SAdsdafsdafdsa"+render);
        if(render=="no"){
          console.log("inside render no");
          $("#time"+contactid).attr('class',"need_to_be_rendered text-muted small text-center");
          $("#time"+contactid).attr('render',"yes");
          $("#time"+contactid).attr('datetime',response.data[0].last_time);
         // timeago.cancel(document.querySelectorAll('.need_to_be_rendered'));
          timeago.cancel();
          timeago.render(document.querySelectorAll('.need_to_be_rendered'));
          $("#lm"+contactid).text(lastreceivedsentmessage);
        }else{
        $("#lm"+contactid).text(lastreceivedsentmessage);
        $("#time"+contactid).attr('datetime',response.data[0].last_time);
        timeago.cancel();
        timeago.render(document.querySelectorAll('.need_to_be_rendered'));
        }

        }
    })
    .catch(function (error) {
        // handle error
        console.log(error);
    }); 
}



function lastConversations(id){
  console.log("id passed "+id)
    
    axios.get('/api/conversations/'+id)
    .then(function (response) {
        // handle success
        if (!response.data || response.data.length == 0) {
          console.log("empty");
        }else{
          var lastreceivedsentmessage=response.data[0].last_message.substring(0,13)
        //console.log(response.data[0].last_message)
        $("#lm"+id).text(lastreceivedsentmessage);
        console.log("response.data[0].last_time" +response.data[0].last_time)
        if(response.data[0].last_time==null){
          $("#time"+id).attr('class',"text-muted small text-center");
          $("#time"+id).attr('render',"no");
        }else{
        $("#time"+id).attr('datetime',response.data[0].last_time);
        $("#time"+id).attr('render',"yes");
        }
        
        }
        return true;
    }).then(function (r){console.log(r);timeago.render(document.querySelectorAll('.need_to_be_rendered'));})
    .catch(function (error) {
        // handle error
        console.log(error);
    }); 
}



  function getMessages(id,thumb,name){
 
    axios.get(`/api/messages?contact_id=${id}`)
    .then(function (response) {
        // handle success
        
        loadMessagesToContact(response.data,thumb,name)
    })
    .catch(function (error) {
        // handle error
        console.log(error);
    }); 
  }





  function loadMessagesToContact(data,thumb,name){
      //console.log(data); console.log(thumb); console.log(name)
    
    document.getElementById("messages").innerHTML = "";
	$.each(data, function(i){
        
        var content=data[i].content;
        var me=data[i].written_by_me;
        if(me===true){
        $('#messages').append(`

        <div class="media">
  
  <div class="media-body">
    <h5 class="mt-0 mb-3" style="font-weight: bold;">Me</h5>
    <p>${content}</p>
    </div>
    <img class=" ml-3 rounded-circle" src="/users/${myThumb}" style="width:64; height:64;" alt="">
  
</div>

        `);
        }else{
            $('#messages').append(`

            <div class="media">
  <img class="align-self-start mr-3 rounded-circle" src="/users/${thumb}" style="width:64; height:64;" alt="">
  <div class="media-body">
    <h5 class="mt-0" style="font-weight: bold;">${name}</h5>
    <p>${content}</p>
   
  </div>
</div>

        `);
        }
        
        
    });
    scrolltoBottom();//SCROLL TO THE BOTTOM AFTER GETTING MESSAGES

  }



  function friendList(){
    axios.get('/communityMembers/friendList/0')
    .then(function (response) {
        // handle success
        //console.log(response.data);
        var data=response.data;
         $.each(data, function(i){
         
        var id= data[i].id;
        var lastimetextid="time"+data[i].id;
        var lastmessageid="lm"+data[i].id;

        
        var statusColor="717171";
        var online=false;
        $.each(onlineArray, function(i){
            if(id==onlineArray[i]){
              console.log("online friends "+onlineArray[i]);
              statusColor="2AFF00";
              online=true;
            }else{
              online=false;
            }
            
          });
         //console.log(lastmessageid);
if(online==false){
        axios.get('/communityMembers/searchUser/'+id)
    .then(function (response) {
        // handle success
        //console.log(response.data);
        var thumb=response.data.image;
        var name= response.data.name.substring(0,11);

               $('#friends').append(`
    
               <li variant="info" class="list-group-item p-1 list-group-item-action" name="${name}" thumb="${thumb}" id="${id}" style="background-color:#1b2838">
<button  class="p-0 list-group-item-action bg-transparent btn" style="background-color:transparent" >
 <div class="row p-2" align-h="center">

<div class="row p-1">
    <div class="col-12 col-md-3 text-center"   align-self="center">
    
    <img src="/users/${thumb}" class="rounded-circle" style="width:50; height:50;"  ></img>
    
    </div>
</div>
    <div class="col-5 d-none d-md-block p-1" align-self="center" >
    
    <p class="mb-1" style="color:#fff">
    <img id="status" class="rounded-circle" style="width:10; height:10; background-color: #${statusColor};"  ></img>
       ${name}</p>


    <p id="${lastmessageid}" class="text-muted small mb-1" style="word-break: break-all;">last message</p>
    </div>


    <div class="col-3 d-none d-xl-block p-1" >
    
    <p  class="need_to_be_rendered text-muted small text-center" id="${lastimetextid}" render="no" datetime="null">last time</p>
    </div>
</div>
   </button>
</li>

        `);
    }).then(function () {console.log("inserted li");lastConversations(id);})
    .catch(function (error) {
        // handle error
        console.log(error);
    }); 
  }else{
    axios.get('/communityMembers/searchUser/'+id)
    .then(function (response) {
        // handle success
        //console.log(response.data);
        var thumb=response.data.image;
        var name= response.data.name.substring(0,11);

               $('#friends').prepend(`
    
               <li variant="info" class="list-group-item p-1 list-group-item-action" name="${name}" thumb="${thumb}" id="${id}" style="background-color:#1b2838">
<button  class="p-0 list-group-item-action bg-transparent btn" style="background-color:transparent" >
 <div class="row p-2" align-h="center">

<div class="row p-1">
    <div class="col-12 col-md-3 text-center"   align-self="center">
    
    <img src="/users/${thumb}" class="rounded-circle" style="width:50; height:50;"  ></img>
    
    </div>
</div>
    <div class="col-5 d-none d-md-block p-1" align-self="center" >
    
    <p class="mb-1" style="color:#fff">
    <img id="status" class="rounded-circle" style="width:10; height:10; background-color: #${statusColor};"  ></img>
       ${name}</p>


    <p id="${lastmessageid}" class="text-muted small mb-1" style="word-break: break-all;">last message</p>
    </div>


    <div class="col-3 d-none d-xl-block p-1" >
    
    <p  class="need_to_be_rendered text-muted small text-center" id="${lastimetextid}" render="no" datetime="null">last time</p>
    </div>
</div>
   </button>
</li>

        `);
    }).then(function () {console.log("inserted li");lastConversations(id);})
    .catch(function (error) {
        // handle error
        console.log(error);
    }); 
  }
    

    });
    

    })
    .catch(function (error) {
        // handle error
        console.log(error);
    }); 
}

$('#friends').on('click','li',function(){
        listeningID=$(this).attr('id');
		    id= $(this).attr('id');
        thumb=$(this).attr('thumb');
        name=$(this).attr('name');
        theirName=$(this).attr('name');
        theirThumb=$(this).attr('thumb');
        conversationRecepientId=$(this).attr('id');
        conversationRecepientName=$(this).attr('name');
        getMessages(id,thumb,name);
        $("#"+id).css('background-color', '#1b2838');
		$('body').toggleClass('nav-open');
        
        //console.log("their id = "+id);//write here maybe the function to create an iframe video passing the video id.
       
	    });

</script>











<!-- SIDE BAR CHAT----------->
<style>

body.nav-open {
  overflow: hidden;
}

#ocn {
  background: #F0F8FF;
  bottom: 0;
  overflow-y: auto;
  position: fixed;
  left: -320px;
  top: 0;
  width: 320px;
  -webkit-transition: all 300ms;
  transition: all 300ms;
  z-index: 9990;
}

.nav-open #ocn {
  -webkit-transform: translateX(320px);
  transform: translateX(320px);
}

#overlay {
  background: rgba(0, 0, 0, 0.8);
  bottom: 0;
  cursor: pointer;
  display: block;
  left: 0;
  opacity: 0;
  position: fixed;
  right: 0;
  top: 0;
  visibility: hidden;
  -webkit-transition: all 300ms;
  transition: all 300ms;
}

.nav-open #overlay {
  opacity: 1;
  visibility: visible;
}

</style>

<script>
 (function($) {

 var navToggle = function() {
  $('body').on('click', '.nav-toggle', function(ev) {
    ev.preventDefault();
    $('body').toggleClass('nav-open');
   });
 };

 $(document).ready(function() {
   navToggle();
 });
 })(jQuery);




 var onlineArray=[];
var listeningID;
var theirName;
var theirThumb;
var myName;
var myThumb;
var myId;
var conversationRecepientId;
var conversationRecepientName;
$(document).ready(function(){
  
    //friendList();
    axios.get(`/communityMembers/Auth/0`)
    .then(function (response) {
        // handle success
        //console.log(response.data.image)
        myName=response.data.name;
        myThumb=response.data.image;
        myId=response.data.id;
    })
    .catch(function (error) {
        // handle error
        console.log(error);
    }); 
});


</script>
<style>
  #myChat{
   
     overflow:hidden;
     
}
#myChat:hover { 
     overflow-y:scroll; 
    
}
  /* width */
::-webkit-scrollbar {
  width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
  background: #f1f1f1; 
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: #888; 
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #555; 
}
</style>



























































































<script>
var initialBar = document.getElementById("bottomBarInitial");
$( document ).ready(function() {
    console.log( "ready!" );
    youtubeBarHide();
    vimeoBarHide();
});


function logconsole(){
  console.log("vimeo");
}

function hidebarstest(){
  var x = document.getElementById("bottomBarYoutube");
  var x2 = document.getElementById("bottomBarVimeo");
  if (x.style.display === "none") {
    x.style.display = "block";
    x2.style.display = "none"
  } else {
    x.style.display = "none";
    x2.style.display = "block";
  }
}


function youtubeBarHide(){
  var youtubeBar = document.getElementById("bottomBarYoutube");
    youtubeBar.style.display = "none"
    
}
function youtubeBarShow(){
  vimeoBarHide()
  initialBar.style.display = "none"
  var youtubeBar = document.getElementById("bottomBarYoutube");
    youtubeBar.style.display = "block"
   
}
function vimeoBarHide(){
  var vimeoBar = document.getElementById("bottomBarVimeo");
  vimeoBar.style.display = "none";

}

function vimeoBarShow(){
  youtubeBarHide();
  initialBar.style.display = "none"
  var vimeoBar = document.getElementById("bottomBarVimeo");
  vimeoBar.style.display = "block";

}









function chooseVimeoSearch(){
  document.getElementById("vimeoOrYoutube").innerHTML = "";

$('#vimeoOrYoutube').append(`
<form id="yourFormVimeo">
	<div class="input-group input-group-sm mb-3">
  <input id="inputIdVimeo" style="width:80%;" type="text" class="form-control" placeholder="vimeo..." aria-label="" aria-describedby="" autocomplete="off">
  <div class="input-group-append">
    <button style="width:20%;" class="btn btn-outline-secondary" type="submit"></button>
  </div>
</div>
</form>
	<div id="articlesVimeo">
    </div>


`);


$('#yourFormVimeo').submit(function(event){
    $( '#articlesVimeo').children().off();
    $( '#articlesVimeo').off();
// prevent default browser behaviour
event.preventDefault();

//do stuff with your form here

var input= document.getElementById('inputIdVimeo').value;
console.log("enter or press"+ input);
document.getElementById('inputIdVimeo').value='';
executeVimeo(input); //make this function to search vimeo api for videos
});



}

function chooseYoutubeSearch(){
	document.getElementById("vimeoOrYoutube").innerHTML = "";

$('#vimeoOrYoutube').append(`
<form id="yourForm">
	<div class="input-group input-group-sm mb-3">
  <input id="inputId" style="width:80%;" type="text" class="form-control" placeholder="youtube..." aria-label="" aria-describedby="" autocomplete="off">
  <div class="input-group-append">
    <button style="width:20%;" class="btn btn-outline-secondary" type="submit"></button>
  </div>
</div>
</form>
	<div id="articles">
    </div>


`);

$('#yourForm').submit(function(event){
    $( '#articles').children().off();
    $( '#articles').off();
// prevent default browser behaviour
event.preventDefault();

//do stuff with your form here

var input= document.getElementById('inputId').value;
console.log("enter or press"+ input);
document.getElementById('inputId').value='';
testClick=null;
execute(input);
});
  }



  function updateRoomCount(x,y){

    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
$.ajax({
                    /* the route pointing to the post function */
                    url: '/roomInfo/UpdateCount',
                    type: 'POST',
                    /* send the csrf-token and the input to the controller */
                    data: {
                        _token: CSRF_TOKEN,
                        active:x,
                        id:y,


                        
                    },
                    //dataType: 'JSON',
                    /* remind that 'data' is the response of the AjaxController */
                    success: function (data) { 
                        $(".writeinfo").append(data.msg); 
                    }
                }); 

  }
</script>

<script>
var lastPlayerPlaying;
var sendTimeBool =false;
var totalOnline = 0;
                Echo.join('videoactionroom.' + <?php echo $room->id; ?>)
                    .here((users) =>{
                      totalOnline=users.length;
                      console.log("test : "+users.length);
                      updateRoomCount(totalOnline,<?php echo $room->id; ?>)
                      browseUserCountText="P:"+totalOnline+" Browse"
                      document.getElementById("browseUserCount").innerHTML = browseUserCountText;
                      document.getElementById("browseUserCountyoutube").innerHTML = browseUserCountText;
                      document.getElementById("browseUserCountvimeo").innerHTML = browseUserCountText;
                    })
                    .joining((user) => {
                       console.log(user);
                       insertVideo();
                       sendInitialQueueinfo(queueArray);
                       totalOnline++;
                       browseUserCountText="P:"+totalOnline+" Browse"
                       document.getElementById("browseUserCount").innerHTML = browseUserCountText;
                      document.getElementById("browseUserCountyoutube").innerHTML = browseUserCountText;
                      document.getElementById("browseUserCountvimeo").innerHTML = browseUserCountText;
                    })
                    .leaving((user) =>{
                      
                      totalOnline--;
                      console.log("test leaving : "+totalOnline);
                      updateRoomCount(totalOnline,<?php echo $room->id; ?>)
                      browseUserCountText="P:"+totalOnline+" Browse"
                      document.getElementById("browseUserCount").innerHTML = browseUserCountText;
                      document.getElementById("browseUserCountyoutube").innerHTML = browseUserCountText;
                      document.getElementById("browseUserCountvimeo").innerHTML = browseUserCountText;
                      
                    })
                    .listen('VideoAction', (e) => {
                        console.log(e);
                        if(e.action.message==="PLAY"){
                          sendTimeBool =true
                         
                          var playStatus= player.getPlayerState();
                         if (playStatus == 1) {
                            console.log("playing") // 
                           }else{
                          playVideoPOST();
                           }
                       }
                       if(e.action.message==="PAUSE"){
                        sendTimeBool =false


                        var pauseStatus= player.getPlayerState();
                         if (pauseStatus == 2) {
                            console.log("paused") //
                           }else{
                            pauseVideoPOST();
                           }
                       }
                       if(e.action.message==="SEEK"){
                          sendTimeBool =false
                          player.seekTo(e.action.currentVideoTime)
                          pauseVideoPOST()
                       }
                       if(e.action.message==="SEEKSYNC"){
                        sendTimeBool =false
                        player.seekTo(e.action.currentVideoTime);
                        player.playVideo();
                       }
                       if(e.action.message==="ADDTOQUEUE"){
                        //console.log("ADDDD TO QUEEEE UEEEE :"+ e.action.youtubeOrVimeoArticle)
                        appendQueue(e.action.id,e.action.img,e.action.title,e.action.desc,e.action.youtubeOrVimeoArticle);
                       }
                       if(e.action.message==="ADDINITIALQUEUE"){
                        for (var i = 0; i < e.action.arrayQ.length; i++) {
                          var id = e.action.arrayQ[i].vidId;
                          var thumb=e.action.arrayQ[i].thumb;
                          var title=e.action.arrayQ[i].title;
                          var desc=e.action.arrayQ[i].desc;
                          var youtubeorvimeo=e.action.arrayQ[i].youtubeorvimeo;
                          appendQueue(id,thumb,title,desc,youtubeorvimeo);
                          }
                        
                        
                      } 
                       

                       if(e.action.message==="TIME"){
                        
                         //console.log(e.user),
                         syncTime(e.action.currentVideoTime,player.getCurrentTime())
                       }

                       if(e.action.message==="INSERTPLAYER"){
                         $('#articles2').children("article[data-key="+e.action.currentVideoTime+"]").remove() //REMOVE WITH ID INSTEAD
                         console.log("last player playing:"+lastPlayerPlaying)
                         if(e.action.playerToSend=="youtube"){
                          
                           if(lastPlayerPlaying=="vimeo"){
                            destroyPlayerVimeo();
                           }
                         insertPlayer(e.action.currentVideoTime)//currentvideotime has video id in this case.
                         currentlyPlayingVideoID=e.action.currentVideoTime;
                         currentlyPlayerPlaying=e.action.playerToSend;
                         }

                         if(e.action.playerToSend=="vimeo"){
                          if(lastPlayerPlaying=="vimeo"){
                            destroyPlayerVimeo();
                           }
                         insertPlayerVimeo(e.action.currentVideoTime)//currentvideotime has video id in this case.
                         currentlyPlayingVideoID=e.action.currentVideoTime;
                         currentlyPlayerPlaying=e.action.playerToSend;
                         }

                       }

                       if(e.action.message==="INSERTPLAYERPLAYING"){
                        initialJoin=true;
                        if(lastPlayerPlaying=="vimeo"){
                            destroyPlayerVimeo();
                           }
                        if(e.action.playerToSend=="youtube"){
                        insertPlayer(e.action.videoIdTosend)//currentvideotime has video id in this case.
                         currentlyPlayingVideoID=e.action.videoIdTosend;
                         seekInitialJoin=e.action.videoCurrentTime;
                         currentlyPlayerPlaying=e.action.playerToSend;
                        }
                        if(e.action.playerToSend=="vimeo"){
                          console.log("INNNNEASDASDEJFHASDKFHSDKJF");
                        insertPlayerVimeo(e.action.videoIdTosend)//currentvideotime has video id in this case.
                         currentlyPlayingVideoID=e.action.videoIdTosend;
                         seekInitialJoin=e.action.videoCurrentTime;
                         currentlyPlayerPlaying=e.action.playerToSend;
                        }
                         
                       }

                       if(e.action.message==="ENDEDINSERTPLAYER"){
                         //FOR NOW REMOVED. IMPLEMENT COUNTDOWN FUNCTION TO PLAY NEXT VIDEO SOUNDS BETTER
                         //$('#articles2').children().first().remove();
                         //insertPlayer(e.action.currentVideoTime)//currentvideotime has video id in this case.
                       }
                        //const message= e.message;
                        //message.written_by_me = (e.user.id==message.user_id);
                        //message.user.name=e.user.name;




                        if(e.action.message==="PLAYVIMEO"){
                          sendTimeBoolVimeo =true
                         
                          playVideoVimeo();
                       }

                       if(e.action.message==="PAUSEVIMEO"){
                        sendTimeBoolVimeo =false;
                        pauseVideoVimeo();
                        
                       }

                       if(e.action.message==="SEEKVIMEO"){
                        sendTimeBoolVimeo =false
                        seekVideoVimeo(e.action.vimeoSeekValue);
                        pauseVideoVimeo();
                        updateHandlerVimeo(e.action.vimeoSeekValue)
                        
                       }


                       if(e.action.message==="TIMEVIMEO"){
                        //RECEIVES TIME EVERY 5 SECONDS
                        
                        syncTimeVimeo(e.action.currentVideoTime)
                      }

                      if(e.action.message==="SEEKSYNCVIMEO"){
                        sendTimeBoolVimeo =false
                        seekVideoVimeo(e.action.currentVideoTime);
                        playVideoVimeo();
                       }
                        
                    });

              
            

     // 2. This code loads the IFrame Player API code asynchronously.
     var tag = document.createElement('script');

tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
//-----------------------------
$(document).ready(function() {

const $valueSpan = $('.valueSpan2');
const $value = $('#customRange11');
$valueSpan.html($value.val());
$value.on('input change', () => {

  $valueSpan.html($value.val());

});



var sendTimevar;
//var sendTimeBool =false;
setInterval(function(){ startSyncingTime();}, 5000);

});
//--------------------------------------
// 3. This function creates an <iframe> (and YouTube player)
//    after the API code downloads.
var player;
      function insertPlayer(id) {
        sendTimeBoolVimeo=false;//ERROR HANDLING TO STOP VIMEO PLAYER SENDTIME
        //------MADE BY ME TO INSERT NEW ELEMENT , IN THIS CASE ERASE OLD IFRAME INSET NEW ONE
        document.getElementById("playerDiv").innerHTML = "";
        document.getElementById("playerDivVimeo").innerHTML = "";
		    var a=document.getElementById("playerDiv");
	    	var b=document.createElement("div");
	    	b.id= 'player';
	    	a.append(b);


        player = new YT.Player('player', {
          height: '100%',
          width: '100%',
          videoId: id,
          playerVars: {
            'controls': 0, 'mute':1, 'enablejsapi' :1, 'disablekb':1
          },
          events: {
            'onReady': onPlayerReady,
            'onStateChange': onPlayerStateChange
          }
        });
        sendTimeBool =false;
        youtubeBarShow()
        lastPlayerPlaying="youtube";
        $('#volumeYoutube').addClass('fa-volume-off').removeClass('fa-volume-up');
      }



      var initialJoin=false;
      var seekInitialJoin;
// 4. The API will call this function when the video player is ready.
function onPlayerReady(event) {
  //event.target.playVideoPOST()
  //playVideoPOST()
  //stopVideoPOST()
  
  if(initialJoin==true){
        console.log("intial join time: "+seekInitialJoin);
        player.playVideo();
        player.seekTo(seekInitialJoin);
        initialJoin=false;
        seekInitialJoin="";
  }

  videoMaxTime();
  sendTimeBool =false;
}
var track = false;
var x=1;
var myVar;
function trackTime(){
  myVar = setInterval(function(){ youtubeCurrentTime() }, 2000);

}
function stopTrack() {
  clearInterval(myVar);
}


// 5. The API calls this function when the player's state changes.
//    The function indicates that when playing a video (state=1),
//    the player should play for six seconds and then stop.
function onPlayerStateChange(event) {
  //console.log(event)
 if (event.data == YT.PlayerState.PLAYING) {
   if(stateAmmounts<3){
    stateAmmounts=stateAmmounts+1;
  console.log("my state ammounts: "+stateAmmounts);
  track = true;
    trackTime();
    //console.log("playing");
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
$.ajax({
                    /* the route pointing to the post function */
                    url: '/videoaction',
                    type: 'POST',
                    /* send the csrf-token and the input to the controller */
                    data: {
                        _token: CSRF_TOKEN,
                        message:'PLAY',
                        room:<?php echo $room->id; ?>,
                       
                    },
                    //dataType: 'JSON',
                    /* remind that 'data' is the response of the AjaxController */
                    success: function (data) { 
                        $(".writeinfo").append(data.msg); 
                        //playVideo();
                        setTimeout(function(){ console.log("state ammounts allowance reset in 5 seconds."); stateAmmounts=0;}, 5000);
                    }
                }); 
                
                
  }else{
    console.log("toMany State changes. Dont do this as this will overLoad the server. A better way of doing this would be by allowing the server to do the playing and pausing of video, its against youtube policy to interfere with their player functionality.The problem is restricting the video click to avoid playing and pausing would be against their policy.");
    pauseVideo();
    setTimeout(function(){ console.log("wait 5 seconds to reestablish sync functionality"); stateAmmounts=0;}, 5000);
  }
}
  if(event.data == YT.PlayerState.CUED){
    
  }
  if (event.data == YT.PlayerState.ENDED) {
    //console.log("ended");
    
    sendTimeBool=false;
    if ( $('#articles2').children().length < 1 ){
      console.log("INSIDE < 1 ENDED");
    $('#articles2').children().first().remove();
    }
    //REMOVE FIRST INSIDE ARRAY
    queueArray.shift();
    console.log(queueArray);
    
    stopTrack();
    //FLAWED. IF BOTH VIDEOS END AT SAME TIME IT REMOVES 2 VIDEOS. ALSO IF THE OTHER PERSON HAS NOT FINISHED THE VIDEO BECAUSE OF SYNC LAG IT WILL
    //FORCE THE NEW VIDEO ON THEM. A COUNTDOWN FUNCTION WOULD BE BETTER.
    if ( $('#articles2').children().length > 0 ) {
     // do something 
     console.log("doing shit");

    var id = $('#articles2').children().first().attr('data-key');
    console.log("video ended, new video id "+id);
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
$.ajax({
                    /* the route pointing to the post function */
                    url: '/videoactionSync',
                    type: 'POST',
                    /* send the csrf-token and the input to the controller */
                    data: {
                        _token: CSRF_TOKEN,
                        message:'ENDEDINSERTPLAYER',
                        room:<?php echo $room->id; ?>,
                        currentVideoTime: id,//IN THIS CASE HAS VIDEOID instead of currenttime
                        playerToSend:playerYoutubeOrVimeo,
                    },
                  });

                }
      
  }

  if (event.data == YT.PlayerState.PAUSED) {
    if(stateAmmounts<3){
    stateAmmounts=stateAmmounts+1;
    console.log("my state ammounts: "+stateAmmounts);
    stopTrack();
    track=false;
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
$.ajax({
                    /* the route pointing to the post function */
                    url: '/videoaction',
                    type: 'POST',
                    /* send the csrf-token and the input to the controller */
                    data: {
                        _token: CSRF_TOKEN,
                        message:'PAUSE',
                        room:<?php echo $room->id; ?>,
                       
                    },
                    //dataType: 'JSON',
                    /* remind that 'data' is the response of the AjaxController */
                    success: function (data) { 
                        $(".writeinfo").append(data.msg); 
                        //pauseVideo();
                        setTimeout(function(){ console.log("state ammounts allowance reset in 5 seconds."); stateAmmounts=0;}, 5000);
                        
                    }
                }); 
                
  }else{
    console.log("toMany State changes. Dont do this as this will overLoad the server. A better way of doing this would be by allowing the server to do the playing and pausing of video, its against youtube policy to interfere with their player functionality.The problem is restricting the video click to avoid playing and pausing would be against their policy.");
    pauseVideo();
    setTimeout(function(){ console.log("wait 5 seconds to reestablish sync functionality"); stateAmmounts=0;}, 5000);
  }
}
  
}


function startSyncingTime(){
  if(sendTimeBool==true){
    if(totalOnline>1){
    sendTime();
    }
  }
  else
{

}
 
}

function stopVideoPOST() {
  
  player.stopVideo();
  
}
function pauseVideoPOST() {
  
  player.pauseVideo();
  
}
function pauseVideo() {

  
  player.pauseVideo();
}
function playVideoPOST(){
  
  player.playVideo();
}
function playVideo() {
  
  player.playVideo();
  
  
}

function unMuteVideo() {
  var youtubemuted= player.isMuted()
  if(youtubemuted==true){
   youtubemuted=false;
   player.unMute();
   $('#volumeYoutube').addClass('fa-volume-up').removeClass('fa-volume-off');


  }
  else{
  
  youtubemuted=true;
  player.mute();
  $('#volumeYoutube').addClass('fa-volume-off').removeClass('fa-volume-up');
  }

}


  function syncTime(theirvideoTime,myvideotime){
    console.log(theirvideoTime,myvideotime);
    
    if(myvideotime - 5 > theirvideoTime){//im up
      console.log("up 7:"+ theirvideoTime,myvideotime);
      var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
$.ajax({
                    /* the route pointing to the post function */
                    url: '/videoactionSync',
                    type: 'POST',
                    /* send the csrf-token and the input to the controller */
                    data: {
                        _token: CSRF_TOKEN,
                        message:'SEEKSYNC',
                        room:<?php echo $room->id; ?>,
                        currentVideoTime: theirvideoTime,
                        playerToSend:"",
                    },
                    //dataType: 'JSON',
                    /* remind that 'data' is the response of the AjaxController */
                    success: function (data) { 
                        $(".writeinfo").append(data.msg); 
                    }
                });
    }

  
  }





//TO SEND AND STOP TIME SYNC-----------------------------------------




  function sendTime(){
    console.log("SYNC EVERY 5 SEC IF NECESARRY") 
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
$.ajax({
                    /* the route pointing to the post function */
                    url: '/videoactionSeek',
                    type: 'POST',
                    /* send the csrf-token and the input to the controller */
                    data: {
                        _token: CSRF_TOKEN,
                        message:'TIME',
                        room:<?php echo $room->id; ?>,
                        currentVideoTime: player.getCurrentTime(),
                        
                    },
                    //dataType: 'JSON',
                    /* remind that 'data' is the response of the AjaxController */
                    success: function (data) { 
                        $(".writeinfo").append(data.msg); 
                    }
                });
                     
  }






// window.onclick = () => {
// console.log(player);
// alert(player.playerInfo.currentTime);

// var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
// $.ajax({
//                     /* the route pointing to the post function */
//                     url: '/videoaction',
//                     type: 'POST',
//                     /* send the csrf-token and the input to the controller */
//                     data: {
//                         _token: CSRF_TOKEN,
//                         message:'ABVC',
//                         room:<?php echo $room->id; ?>,
                       
//                     },
//                     //dataType: 'JSON',
//                     /* remind that 'data' is the response of the AjaxController */
//                     success: function (data) { 
//                         $(".writeinfo").append(data.msg); 
//                     }
//                 }); 

// }

</script>





<style>

body { 
   overflow-x: hidden;
   

    background-color:#313F50;

}



        .my-js-slider{
            position: relative;
            max-width: 500px;
            margin: 10px auto;
    }
</style>
<script>
var inputRange = document.getElementsByClassName('range')[0],
    maxValue = 100, // the higher the smoother when dragging
    speed = 5,
    currValue, rafID;

// set min/max value
inputRange.min = 0;
inputRange.max = maxValue;

function videoMaxTime(){
  inputRange.max=player.getDuration();
  //console.log(inputRange.max);
}

// listen for unlock
function unlockStartHandler() {
  stopTrack();
  track=false;
  player.pauseVideo()
    // set to desired value
    currValue = +this.value;
    inputRange.Value=currValue;




}

function unlockEndHandler() {
   stopTrack();

    // store current value
    currValue = +this.value;
    inputRange.Value=currValue;
    player.seekTo(currValue, true);
    //console.log(currValue)
    track=false;
    //console.log(track);


  
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
$.ajax({
                    /* the route pointing to the post function */
                    url: '/videoactionSync',
                    type: 'POST',
                    /* send the csrf-token and the input to the controller */
                    data: {
                        _token: CSRF_TOKEN,
                        message:'SEEK',
                        room:<?php echo $room->id; ?>,
                        currentVideoTime: currValue,
                        playerToSend:"",
                    },
                    //dataType: 'JSON',
                    /* remind that 'data' is the response of the AjaxController */
                    success: function (data) { 
                        $(".writeinfo").append(data.msg); 
                    }
                });
                // player.pauseVideo();
}

function youtubeCurrentTime(){
  if(track==true){
currValue= player.getCurrentTime();
inputRange.Value=currValue;
//console.log("currValue " + currValue);
//console.log("inputRANGE " + inputRange.Value);
if(currValue > -1) {
      window.requestAnimationFrame(animateHandler);   
    }
  }
}



// handle range animation
function animateHandler() {

    //// calculate gradient transition
   // var transX = currValue - maxValue;
    
    // update input range
    inputRange.value = currValue;

    //Change slide thumb color on mouse up
    if (currValue < 20) {
        inputRange.classList.remove('ltpurple');
    }
    if (currValue < 40) {
        inputRange.classList.remove('purple');
    }
    if (currValue < 60) {
        inputRange.classList.remove('pink');
    }
    
    // determine if we need to continue
    //if(currValue > -1) {
    //  window.requestAnimationFrame(animateHandler);   
   // }
    
    // decrement value
   // currValue = currValue - speed;
}

// handle successful unlock
function successHandler() {
  alert('Unlocked');
};

// bind events
inputRange.addEventListener('mousedown', unlockStartHandler, false);
inputRange.addEventListener('mousestart', unlockStartHandler, false);
inputRange.addEventListener('mouseup', unlockEndHandler, false);
inputRange.addEventListener('touchend', unlockEndHandler, false);

// move gradient
inputRange.addEventListener('input', function() {
    //Change slide thumb color on way up
    if (this.value > 20) {
        inputRange.classList.add('ltpurple');
    }
    if (this.value > 40) {
        inputRange.classList.add('purple');
    }
    if (this.value > 60) {
        inputRange.classList.add('pink');
    }

    //Change slide thumb color on way down
    if (this.value < 20) {
        inputRange.classList.remove('ltpurple');
    }
    if (this.value < 40) {
        inputRange.classList.remove('purple');
    }
    if (this.value < 60) {
        inputRange.classList.remove('pink');
    }
});
</script>

<style>


#myRangeYoutube.range {
  -webkit-appearance: none;
  -moz-appearance: none;
  position: absolute;
  left: 50%;
  top: 50%;
  width: 200px;
  margin-top: 0px;
  transform: translate(-50%, -50%);
}

input[id="myRangeYoutube"][type=range]::-webkit-slider-runnable-track {
  -webkit-appearance: none;
  background: rgba(59,173,227,1);
  background: -moz-linear-gradient(45deg, rgba(59,173,227,1) 0%, rgba(87,111,230,1) 25%, rgba(152,68,183,1) 51%, rgba(255,53,127,1) 100%);
  background: -webkit-gradient(left bottom, right top, color-stop(0%, rgba(59,173,227,1)), color-stop(25%, rgba(87,111,230,1)), color-stop(51%, rgba(152,68,183,1)), color-stop(100%, rgba(255,53,127,1)));
  background: -webkit-linear-gradient(45deg, rgba(59,173,227,1) 0%, rgba(87,111,230,1) 25%, rgba(152,68,183,1) 51%, rgba(255,53,127,1) 100%);
  background: -o-linear-gradient(45deg, rgba(59,173,227,1) 0%, rgba(87,111,230,1) 25%, rgba(152,68,183,1) 51%, rgba(255,53,127,1) 100%);
  background: -ms-linear-gradient(45deg, rgba(59,173,227,1) 0%, rgba(87,111,230,1) 25%, rgba(152,68,183,1) 51%, rgba(255,53,127,1) 100%);
  background: linear-gradient(45deg, rgba(59,173,227,1) 0%, rgba(87,111,230,1) 25%, rgba(152,68,183,1) 51%, rgba(255,53,127,1) 100%);
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#3bade3 ', endColorstr='#ff357f ', GradientType=1 );
  height: 2px;
}

input[id="myRangeYoutube"][type=range]:focus {
  outline: none;
}

input[id="myRangeYoutube"][type=range]::-moz-range-track {
  -moz-appearance: none;
  background: rgba(59,173,227,1);
  background: -moz-linear-gradient(45deg, rgba(59,173,227,1) 0%, rgba(87,111,230,1) 25%, rgba(152,68,183,1) 51%, rgba(255,53,127,1) 100%);
  background: -webkit-gradient(left bottom, right top, color-stop(0%, rgba(59,173,227,1)), color-stop(25%, rgba(87,111,230,1)), color-stop(51%, rgba(152,68,183,1)), color-stop(100%, rgba(255,53,127,1)));
  background: -webkit-linear-gradient(45deg, rgba(59,173,227,1) 0%, rgba(87,111,230,1) 25%, rgba(152,68,183,1) 51%, rgba(255,53,127,1) 100%);
  background: -o-linear-gradient(45deg, rgba(59,173,227,1) 0%, rgba(87,111,230,1) 25%, rgba(152,68,183,1) 51%, rgba(255,53,127,1) 100%);
  background: -ms-linear-gradient(45deg, rgba(59,173,227,1) 0%, rgba(87,111,230,1) 25%, rgba(152,68,183,1) 51%, rgba(255,53,127,1) 100%);
  background: linear-gradient(45deg, rgba(59,173,227,1) 0%, rgba(87,111,230,1) 25%, rgba(152,68,183,1) 51%, rgba(255,53,127,1) 100%);
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#3bade3 ', endColorstr='#ff357f ', GradientType=1 );
  height: 2px;
}

input[id="myRangeYoutube"][type=range]::-webkit-slider-thumb {
  -webkit-appearance: none;
  border: 2px solid;
  border-radius: 50%;
  height: 25px;
  width: 25px;
  max-width: 80px;
  position: relative;
  bottom: 11px;
  background-color: #1d1c25;
  cursor: -webkit-grab;

  -webkit-transition: border 1000ms ease;
  transition: border 1000ms ease;
}

input[id="myRangeYoutube"][type=range]::-moz-range-thumb {
  -moz-appearance: none;
  border: 2px solid;
  border-radius: 50%;
  height: 25px;
  width: 25px;
  max-width: 80px;
  position: relative;
  bottom: 11px;
  background-color: #1d1c25;
  cursor: -moz-grab;
  -moz-transition: border 1000ms ease;
  transition: border 1000ms ease;
}



#myRangeYoutube.range.blue::-webkit-slider-thumb {
   border-color: rgb(59,173,227);
}

#myRangeYoutube.range.ltpurple::-webkit-slider-thumb {
   border-color: rgb(87,111,230);
}

#myRangeYoutube.range.purple::-webkit-slider-thumb {
   border-color: rgb(152,68,183);
}

#myRangeYoutube.range.pink::-webkit-slider-thumb {
   border-color: rgb(255,53,127);
}

#myRangeYoutube.range.blue::-moz-range-thumb {
   border-color: rgb(59,173,227);
}

#myRangeYoutube.range.ltpurple::-moz-range-thumb {
   border-color: rgb(87,111,230);
}

#myRangeYoutube.range.purple::-moz-range-thumb {
   border-color: rgb(152,68,183);
}

#myRangeYoutube.range.pink::-moz-range-thumb {
   border-color: rgb(255,53,127);
}

input[id="myRangeYoutube"][type=range]::-webkit-slider-thumb:active {
  cursor: -webkit-grabbing;
}

input[id="myRangeYoutube"][type=range]::-moz-range-thumb:active {
  cursor: -moz-grabbing;
}
</style>










<style>


canvas {
  
  width: 100%;
  height: 100%;
}

#control-panel {
  background: rgba(0,0,0,.75);
  border: 1px solid #333;
 
  position: absolute;
  
  z-index: 2;
}

p {
	font-size: 12px;
  margin: 0 0 5px;
}

a {
  border-bottom: 1px dotted #444;
  color: #fff;
  font-size: 12px;
  text-decoration: none;
}
</style>

















<style>

article:hover {
		border: 2px solid #ff9999;
	}




.nopadding
{
	padding:0;
}

.centered
{
	text-align: center !important;
}

.leftalign
{
	text-align: left !important;
}

.rightalign
{
	text-align: right !important;
}

.side-nav-screen-hold
{
	position: absolute;
	height: 100vh;
	width: 100vw;
	background-color: rgba(0,0,0,.4);
	z-index: 900;
	top: 0;
	left: 0;
	z-index: 1050;
}

.side-nav-container-closed
{
	-webkit-transition: all 0.5s ease;
	-moz-transition: all 0.5s ease;
	-o-transition: all 0.5s ease;
	-ms-transition: all 0.5s ease;
	transition: all 0.5s ease;
	position: absolute;
	height: 100vh;
	width: 20em;
	right: -27em;
	top: 0;
	background-color: rgb(0,0,0);
	z-index: 1100;
	overflow-y: auto;
	
}

.side-nav-container
{
	-webkit-transition: all 0.5s ease;
	-moz-transition: all 0.5s ease;
	-o-transition: all 0.5s ease;
	-ms-transition: all 0.5s ease;
	transition: all 0.5s ease;
	position: absolute;
	height: 100vh;
	width: 20em !important;
	right: 0;
	top: 0;
	background-color: rgb(52, 235, 131);
	z-index: 1100;
	overflow-y: auto;
	
}




.side-nav-divider
{
	width: 100%;
	height: 1px;
	background-color: white;
}


.side-nav-tab
{
	cursor: pointer;
	-moz-user-select: none;
	-khtml-user-select: none;
	-webkit-user-select: none;
	-ms-user-select: none;
	user-select: none;
	height: 4em;
	-webkit-transition: all 0.1s ease;
	-moz-transition: all 0.1s ease;
	-o-transition: all 0.1s ease;
	-ms-transition: all 0.1s ease;
	transition: all 0.1s ease;
}




.side-nav-tab:hover
{
	background-color: white;
	color:black !important;
}

.side-nav-tab-selected
{
	background-color: white;
	color:black !important;
}


</style>

<script>
$(".toggle-sidebar").on("click",function()
{
    $('body').toggleClass('nav-open2');

});


</script>



<script>

//YOUTUBE API---------------------------------------------------- FOR SEARCH
function execute(input){

const YOUTUBE_API_KEY = youtubeapikey;

var q=input;
const url = `https://www.googleapis.com/youtube/v3/search?part=snippet&maxResults=20&q=${q}&key=${YOUTUBE_API_KEY}`;
// console.log(url);
fetch(url)
  .then(response => response.json())
  .then(data => {
    console.log(data);
    //document.querySelector(".youtubeVideo").src = `https://www.youtube.com/embed/${data.items[0].id.videoId}`;
	resultsLoop(data);
    

    $('#articles').on('click','article',function(){
		idsend= $(this).attr('data-key');
		console.log("my id = "+idsend);//write here maybe the function to create an iframe video passing the video id.
		//$(this).clone().appendTo('#articles2');
    var imgsend=$('img', this).attr('src');
    var titlesend=$('h5', this).text();
    var descriptionsend=$('p', this).text();
    var youtubeorvimeosend= $(this).attr('YoutubeOrVimeo-key');
    console.log(youtubeorvimeosend)
    console.log("h "+ titlesend);
    console.log("p "+ descriptionsend);
   
    sendQueueinfo(imgsend,idsend,titlesend,descriptionsend,"youtube")
    
   
	});
    
});
}

var id;
var image;
function resultsLoop(data){
	document.getElementById("articles").innerHTML = "";
	$.each(data.items, function(i,item){
	var thumb = data.items[i].snippet.thumbnails.medium.url;
	var title = item.snippet.title;
	var desc = item.snippet.description;
	var vid = item.id.videoId;	
$('#articles').append(`
<article class="item" YoutubeOrVimeo-key="youtube" data-key="${vid}" style="border-radius:8px; padding:9px 12px;">
  <img src="${thumb}" style="width:100%;"></img>
  <div class="detailts">
  <h5 style="font-size: 80%; padding:0;margin:0;font-weight:600;">${title}</h5>
  <p style="font-size: 50%; color:grey; font-weight:600; padding:0; margin:0;">${desc}</p>
  </div>
  </article>


`);
	});
	
	

}

function sendInitialQueueinfo(arrayQ){
  
  //var myJSON = JSON.stringify(img);
  var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
$.ajax({
                    /* the route pointing to the post function */
                    url: '/videoactionInitialQueue',
                    type: 'POST',
                    /* send the csrf-token and the input to the controller */
                    data: {
                        _token: CSRF_TOKEN,
                        message:'ADDINITIALQUEUE',
                        room:<?php echo $room->id; ?>,
                        arrayQ:arrayQ
                    },
                    //dataType: 'JSON',
                    /* remind that 'data' is the response of the AjaxController */
                    success: function (data) { 
                        $(".writeinfo").append(data.msg); 
                    }
                });
}

function sendQueueinfo(img,id,title,description,yov){
  
  //var myJSON = JSON.stringify(img);
  var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
$.ajax({
                    /* the route pointing to the post function */
                    url: '/videoactionQueue',
                    type: 'POST',
                    /* send the csrf-token and the input to the controller */
                    data: {
                        _token: CSRF_TOKEN,
                        message:'ADDTOQUEUE',
                        room:<?php echo $room->id; ?>,
                        id: id,
                        img: img,
                        desc: description,
                        title: title,
                        youtubeOrVimeoArticle:yov,
                    },
                    //dataType: 'JSON',
                    /* remind that 'data' is the response of the AjaxController */
                    success: function (data) { 
                        $(".writeinfo").append(data.msg); 
                    }
                });
}

var currentlyPlayingVideoID;
var currentlyPlayerPlaying;
function insertVideo(){
  if(currentlyPlayerPlaying=="youtube"){
  currentTimeonVideo=player.getCurrentTime();
 
  var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
$.ajax({
                    /* the route pointing to the post function */
                    url: '/videoactionSendVideo',
                    type: 'POST',
                    /* send the csrf-token and the input to the controller */
                    data: {
                        _token: CSRF_TOKEN,
                        message:'INSERTPLAYERPLAYING',
                        room:<?php echo $room->id; ?>,
                        videoIdTosend: currentlyPlayingVideoID,
                        videoCurrentTime: currentTimeonVideo,
                        playerToSend:currentlyPlayerPlaying,
                    },
                  });
  }
  if(currentlyPlayerPlaying=="vimeo"){
    insertVideoVimeo();
  }

} 

$('#articles2').on('click','article',function(){
  id= $(this).attr('data-key');
  playerYoutubeOrVimeo= $(this).attr('YoutubeOrVimeo-key');
  //console.log("player playing: "+playerYoutubeOrVimeo)
  //ADD REMOVE ELEMENT OF ARRAY HERE.
  for (var i = queueArray.length - 1; i >= 0; --i) {
    if (queueArray[i].vidId == id) {
      queueArray.splice(i,1);
    }
}
console.log(queueArray);
		
		console.log("my id = "+id);//write here maybe the function to create an iframe video passing the video id.
    currentlyPlayingVideoID=id;
    currentlyPlayerPlaying=playerYoutubeOrVimeo;
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
$.ajax({
                    /* the route pointing to the post function */
                    url: '/videoactionSync',
                    type: 'POST',
                    /* send the csrf-token and the input to the controller */
                    data: {
                        _token: CSRF_TOKEN,
                        message:'INSERTPLAYER',
                        room:<?php echo $room->id; ?>,
                        currentVideoTime: id,//IN THIS CASE HAS VIDEOID instead of currenttime
                        playerToSend:playerYoutubeOrVimeo,
                    },
                  });
    
    
		//insertPlayer(id);
	});







var queueArray=[];
function appendQueue(vid,thumb,title,desc,youtubeorvimeo){
  //ARRAY BUILD HERE
  var videoInfo = {vidId:vid, thumb:thumb, title:title, desc:desc,youtubeorvimeo:youtubeorvimeo};
  queueArray.push(videoInfo);
  console.log(queueArray);
  $('#articles2').append(`
<article class="item" YoutubeOrVimeo-key="${youtubeorvimeo}" data-key="${vid}" style="border-radius:8px; padding:9px 12px;">
  <img src="${thumb}" style="width:100%;"></img>
  <div class="detailts">
  <h5 style="font-size: 80%; padding:0;margin:0;font-weight:600;">${title}</h5>
  <p style="font-size: 50%; color:grey; font-weight:600; padding:0; margin:0;">${desc}</p>
  </div>
  </article>
  `);
}


</script>

<script src="https://player.vimeo.com/api/player.js"></script>

<script>

function testVimeo(){
  
  axios.get(`/vimeo/0`)
    .then(function (response) {
        // handle success
        console.log(response.data.body.data)
        resultsLoopVimeo(response.data.body.data)
    })
    .catch(function (error) {
        // handle error
        console.log(error);
    }); 
  

}


function executeVimeo(q){
  
  axios.get(`/vimeo/`+q)
    .then(function (response) {
        // handle success
        console.log(response.data.body.data)
        resultsLoopVimeo(response.data.body.data)
    })
    .catch(function (error) {
        // handle error
        console.log(error);
    }); 
  

}




function resultsLoopVimeo(data){
	document.getElementById("articlesVimeo").innerHTML = "";
	$.each(data, function(i,item){
	var thumb = data[i].pictures.sizes[1].link;
	var title = data[i].name
	var desc = data[i].description.substring(0,100);
	var vid = data[i].uri;	
$('#articlesVimeo').append(`
<article class="item" YoutubeOrVimeo-key="vimeo" data-key="${vid}" style="border-radius:8px; padding:9px 12px;">
  <img src="${thumb}" style="width:100%;"></img>
  <div class="detailts">
  <h5 style="font-size: 80%; padding:0;margin:0;font-weight:600;">${title}</h5>
  <p style="font-size: 50%; color:grey; font-weight:600; padding:0; margin:0;">${desc}</p>
  </div>
  </article>


`);
	});
	
	$('#articlesVimeo').on('click','article',function(){
		idsend= $(this).attr('data-key');
    var res = idsend.replace(/\D/g, "");// gets rid of all numerical values, replaces them with ""
		console.log("my id = "+res);//write here maybe the function to create an iframe video passing the video id.
		//$(this).clone().appendTo('#articles2');
    var imgsend=$('img', this).attr('src');
    var titlesend=$('h5', this).text();
    var descriptionsend=$('p', this).text();
    var yOrV=$(this).attr('YoutubeOrVimeo-key');
    console.log("h "+ titlesend);
    console.log("p "+ descriptionsend);
    sendQueueinfo(imgsend,res,titlesend,descriptionsend,yOrV)


	});

}

</script>
















<style>
  		.vimeo-wrapper {
        position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
 
  pointer-events: none;
  overflow: hidden;
		}
  #playerDivVimeo iframe{
    
    left:0;
    top:0;
    height:100%;
    width:100%;
    position:absolute;
}
  

    
</style>

<script src="https://player.vimeo.com/api/player.js"></script>
<script>


function insertVideoVimeo(){

  playerVimeo.getCurrentTime().then(function(seconds) {
    //console.log(seconds);
    currentTimeonVideo=seconds;

    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
$.ajax({
                   /* the route pointing to the post function */
                   url: '/videoactionSendVideo',
                   type: 'POST',
                   /* send the csrf-token and the input to the controller */
                   data: {
                       _token: CSRF_TOKEN,
                       message:'INSERTPLAYERPLAYING',
                       room:<?php echo $room->id; ?>,
                       videoIdTosend: currentlyPlayingVideoID,
                       videoCurrentTime: currentTimeonVideo,
                       playerToSend:currentlyPlayerPlaying,
                   },
                 });
    
}).catch(function(error) {
    // an error occurred
});
 
 
 
}


var playerVimeo; 
function destroyPlayerVimeo(){
  playerVimeo.destroy().then(function() {
    // the player was destroyed
}).catch(function(error) {
    // an error occurred
});
}
function insertPlayerVimeo(id){
  sendTimeBool=false;//ERROR HANDLING TO STOP SENDING TIME FROM YOUTUBE.
  var options = {
        id: id,
        width: 640,
        loop: false,
        speed: false,
        autoplay: false,
        controls: false,
    };
  document.getElementById("playerDivVimeo").innerHTML = "";
  document.getElementById("playerDiv").innerHTML = "";
  playerVimeo= new Vimeo.Player('playerDivVimeo', options);
  
  
    
    playerVimeo.setVolume(0);

    playerVimeo.on('play', function() {
        trackVimeo=true;
        
        console.log('played the video!');
    });

    playerVimeo.on('pause', function() {
      trackVimeo=false;
        console.log('PAUSED the video!');
    });

    playerVimeo.on('loaded', function() {
        console.log('loaded video!');
        //videoMaxTimeVimeo();
        VimeotrackTime();
    });

    playerVimeo.ready().then(function() {
    // the player is ready
    if(initialJoin==true){
        console.log("intial join time: "+seekInitialJoin);
        playVideoVimeo();
        seekVideoVimeoInital(seekInitialJoin);
        
       
        initialJoin=false;
        seekInitialJoin="";
  }

    videoMaxTimeVimeo();


});


    playerVimeo.on('seeking', function(data) {
      pauseVideoVimeo();
    console.log("SEEKING");
   
});

playerVimeo.on('seeked', function(data) {
  pauseVideoVimeo();
    console.log("SEEKED TO: "+data.seconds);
    
});


playerVimeo.on('ended', function(data) {
    sendTimeBoolVimeo =false;
    console.log("ENDED");
    
});


vimeoBarShow();
lastPlayerPlaying="vimeo";

}






var trackVimeo=false;

var myVarVimeo;


var sendTimeBoolVimeo=false;
var vimeoSyncInterval=setInterval(function(){ startSyncingTimeVimeo();}, 5000);
function startSyncingTimeVimeo(){
  if(sendTimeBoolVimeo==true){
    sendTimeVimeo()
  }
  else
{

}
 
}


function syncTimeVimeo(theirvideoTime){
    //console.log(theirvideoTime);
    playerVimeo.getCurrentTime().then(function(seconds) {
      console.log(theirvideoTime,seconds)
      if(seconds - 5 > theirvideoTime){//im up
      console.log("up 7:"+ theirvideoTime,seconds);
      var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
$.ajax({
                    /* the route pointing to the post function */
                    url: '/videoactionSyncVimeo',
                    type: 'POST',
                    /* send the csrf-token and the input to the controller */
                    data: {
                        _token: CSRF_TOKEN,
                        message:'SEEKSYNCVIMEO',
                        room:<?php echo $room->id; ?>,
                        currentVideoTime: theirvideoTime,
                    },
                    //dataType: 'JSON',
                    /* remind that 'data' is the response of the AjaxController */
                    success: function (data) { 
                        $(".writeinfo").append(data.msg); 
                    }
                });
    }
}).catch(function(error) {
    // an error occurred
});



    

  
  }


function sendTimeVimeo(){
  playerVimeo.getCurrentTime().then(function(seconds) {
    console.log("SYNC EVERY 5 SEC IF NECESARRY") 
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
$.ajax({
                    /* the route pointing to the post function */
                    url: '/videoactionSeekVimeo',
                    type: 'POST',
                    /* send the csrf-token and the input to the controller */
                    data: {
                        _token: CSRF_TOKEN,
                        message:'TIMEVIMEO',
                        room:<?php echo $room->id; ?>,
                        currentVideoTime: seconds,
                        
                    },
                    //dataType: 'JSON',
                    /* remind that 'data' is the response of the AjaxController */
                    success: function (data) { 
                        $(".writeinfo").append(data.msg); 
                    }
                });
}).catch(function(error) {
    // an error occurred
});


    
                     
  }



function VimeotrackTime(){
  myVarVimeo = setInterval(function(){ vimeoCurrentTime() }, 2000);

}
function VimeostopTrack() {
  clearInterval(myVarVimeo);
}




    

    



function getTime(){
      var test;
      playerVimeo.getCurrentTime().then(function(seconds) {
    // seconds = the current playback position
    //console.log(seconds);
}).catch(function(error) {
    // an error occurred
});


    }

    function getDuration(){
      playerVimeo.getDuration().then(function(duration) {
    // duration = the duration of the video in seconds
}).catch(function(error) {
    // an error occurred
});
    }


    function vimeoPusherPlay(){
      var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
$.ajax({
                    /* the route pointing to the post function */
                    url: '/videoactionVimeo',
                    type: 'POST',
                    /* send the csrf-token and the input to the controller */
                    data: {
                        _token: CSRF_TOKEN,
                        message:'PLAYVIMEO',
                        room:<?php echo $room->id; ?>,
                       
                    },
                    //dataType: 'JSON',
                    /* remind that 'data' is the response of the AjaxController */
                    success: function (data) { 
                        $(".writeinfo").append(data.msg); 
                    }
                }); 
    }



    function vimeoPusherPause(){
      sendTimeBoolVimeo =false;
      var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
$.ajax({
                    /* the route pointing to the post function */
                    url: '/videoactionVimeo',
                    type: 'POST',
                    /* send the csrf-token and the input to the controller */
                    data: {
                        _token: CSRF_TOKEN,
                        message:'PAUSEVIMEO',
                        room:<?php echo $room->id; ?>,
                       
                    },
                    //dataType: 'JSON',
                    /* remind that 'data' is the response of the AjaxController */
                    success: function (data) { 
                        $(".writeinfo").append(data.msg); 
                    }
                }); 
    }


    function vimeoPusherSeek(sv){
      var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
$.ajax({
                    /* the route pointing to the post function */
                    url: '/seekVimeo',
                    type: 'POST',
                    /* send the csrf-token and the input to the controller */
                    data: {
                        _token: CSRF_TOKEN,
                        message:'SEEKVIMEO',
                        room:<?php echo $room->id; ?>,
                        vimeoSeekValue:sv,
                       
                    },
                    //dataType: 'JSON',
                    /* remind that 'data' is the response of the AjaxController */
                    success: function (data) { 
                        $(".writeinfo").append(data.msg); 
                    }
                }); 
    }

    function seekVideoVimeo(seekValue){
      playerVimeo.setCurrentTime(seekValue).then(function(seconds) {
    // seconds = the actual time that the player seeked to
}).catch(function(error) {
    switch (error.name) {
        case 'RangeError':
            // the time was less than 0 or greater than the video’s duration
            break;

        default:
            // some other error occurred
            break;
    }
});
    }


    function seekVideoVimeoInital(seekValue){
      playerVimeo.setCurrentTime(seekValue).then(function(seconds) {
    // seconds = the actual time that the player seeked to
    vimeoPusherPlay();
}).catch(function(error) {
    switch (error.name) {
        case 'RangeError':
            // the time was less than 0 or greater than the video’s duration
            break;

        default:
            // some other error occurred
            break;
    }
});
    }



    function playVideoVimeo(){
      //console.log(inputRange.max);
      playerVimeo.play().then(function() {
    // the video was played
    sendTimeBoolVimeo =true;
}).catch(function(error) {
    switch (error.name) {
        case 'PasswordError':
            // the video is password-protected and the viewer needs to enter the
            // password first
            break;

        case 'PrivacyError':
            // the video is private
            break;

        default:
            // some other error occurred
            break;
    }
});
    }


    function pauseVideoVimeo(){

      playerVimeo.pause().then(function() {
    // the video was paused
    sendTimeBoolVimeo =false;
}).catch(function(error) {
    switch (error.name) {
        case 'PasswordError':
            // the video is password-protected and the viewer needs to enter the
            // password first
            break;

        case 'PrivacyError':
            // the video is private
            break;

        default:
            // some other error occurred
            break;
    }
});
    }
    

var vimeoVolumevar=0;
function vimeoVolume(){
  if(vimeoVolumevar==0){
  playerVimeo.setVolume(1).then(function(volume) {
    vimeoVolumevar=1;
    $('#volumeVimeo').toggleClass('fa-volume-off fa-volume-up');
}).catch(function(error) {
    switch (error.name) {
        case 'RangeError':
            // the volume was less than 0 or greater than 1
            break;

        default:
            // some other error occurred
            break;
    }
});
  }else{
    playerVimeo.setVolume(0).then(function(volume) {
    vimeoVolumevar=0;
    $('#volumeVimeo').toggleClass('fa-volume-off fa-volume-up');
}).catch(function(error) {
    switch (error.name) {
        case 'RangeError':
            // the volume was less than 0 or greater than 1
            break;

        default:
            // some other error occurred
            break;
    }
});
  }
}

</script>








<script>
var inputRangeVimeo = document.getElementsByClassName('range')[1],
    maxValueVimeo = 100, // the higher the smoother when dragging
    speedVimeo = 5,
    currValueVimeo, rafIDVimeo;

// set min/max value
inputRangeVimeo.min = 0;
inputRangeVimeo.max = maxValueVimeo;

function videoMaxTimeVimeo(){
      playerVimeo.getDuration().then(function(duration) {
   
    $('#myRangeVimeo').attr('max',duration); //setter
   
    
}).catch(function(error) {
    // an error occurred
});
}

// listen for unlock
function unlockStartHandler() {
  //stopTrack();
  trackVimeo=false;
  vimeoPusherPause();
    // set to desired value
    currValueVimeo = +this.value;
    inputRangeVimeo.Value=currValueVimeo;




}
function updateHandlerVimeo(cvVimeo){
  currValueVimeo = +cvVimeo;
    inputRangeVimeo.Value=currValueVimeo;
    window.requestAnimationFrame(animateHandlerVimeo);
}
function unlockEndHandler() {
   //stopTrack();

    // store current value
    currValueVimeo = +this.value;
    inputRangeVimeo.Value=currValueVimeo;
    //seekVideoVimeo(currValue);
    vimeoPusherSeek(currValueVimeo)

  
    trackVimeo=false;



  
  //SEND HERE MESSAGE SEEEEKK
}

function vimeoCurrentTime(){
  if(trackVimeo==true){


playerVimeo.getCurrentTime().then(function(seconds) {
    // seconds = the current playback position
    //console.log(seconds);
    currValueVimeo= seconds;
    //console.log(currValue);
}).catch(function(error) {
    // an error occurred
});

inputRangeVimeo.Value=currValueVimeo;
//console.log("currValue " + currValue);
//console.log("inputRANGE " + inputRange.Value);
if(currValueVimeo > -1) {
      window.requestAnimationFrame(animateHandlerVimeo);   
    }
  }
}



// handle range animation
function animateHandlerVimeo() {

    //// calculate gradient transition
   // var transX = currValue - maxValue;
    
    // update input range
    inputRangeVimeo.value = currValueVimeo;

    //Change slide thumb color on mouse up
    if (currValueVimeo < 20) {
        inputRangeVimeo.classList.remove('ltpurple');
    }
    if (currValueVimeo < 40) {
        inputRangeVimeo.classList.remove('purple');
    }
    if (currValueVimeo < 60) {
        inputRangeVimeo.classList.remove('pink');
    }
    
    // determine if we need to continue
    //if(currValue > -1) {
    //  window.requestAnimationFrame(animateHandler);   
   // }
    
    // decrement value
   // currValue = currValue - speed;
}

// handle successful unlock
function successHandler() {
  alert('Unlocked');
};

// bind events
inputRangeVimeo.addEventListener('mousedown', unlockStartHandler, false);
inputRangeVimeo.addEventListener('mousestart', unlockStartHandler, false);
inputRangeVimeo.addEventListener('mouseup', unlockEndHandler, false);
inputRangeVimeo.addEventListener('touchend', unlockEndHandler, false);

// move gradient
inputRangeVimeo.addEventListener('input', function() {
    //Change slide thumb color on way up
    if (this.value > 20) {
        inputRangeVimeo.classList.add('ltpurple');
    }
    if (this.value > 40) {
        inputRangeVimeo.classList.add('purple');
    }
    if (this.value > 60) {
        inputRangeVimeo.classList.add('pink');
    }

    //Change slide thumb color on way down
    if (this.value < 20) {
        inputRangeVimeo.classList.remove('ltpurple');
    }
    if (this.value < 40) {
        inputRangeVimeo.classList.remove('purple');
    }
    if (this.value < 60) {
        inputRangeVimeo.classList.remove('pink');
    }
});
</script>



<style>


#myRangeVimeo.range {
  -webkit-appearance: none;
  -moz-appearance: none;
  position: absolute;
  left: 50%;
  top: 50%;
  width: 200px;
  margin-top: 0px;
  transform: translate(-50%, -50%);
}

#myRangeVimeo[type=range]::-webkit-slider-runnable-track {
  -webkit-appearance: none;
  background: rgba(59,173,227,1);
  background: -moz-linear-gradient(45deg, rgba(59,173,227,1) 0%, rgba(87,111,230,1) 25%, rgba(152,68,183,1) 51%, rgba(255,53,127,1) 100%);
  background: -webkit-gradient(left bottom, right top, color-stop(0%, rgba(59,173,227,1)), color-stop(25%, rgba(87,111,230,1)), color-stop(51%, rgba(152,68,183,1)), color-stop(100%, rgba(255,53,127,1)));
  background: -webkit-linear-gradient(45deg, rgba(59,173,227,1) 0%, rgba(87,111,230,1) 25%, rgba(152,68,183,1) 51%, rgba(255,53,127,1) 100%);
  background: -o-linear-gradient(45deg, rgba(59,173,227,1) 0%, rgba(87,111,230,1) 25%, rgba(152,68,183,1) 51%, rgba(255,53,127,1) 100%);
  background: -ms-linear-gradient(45deg, rgba(59,173,227,1) 0%, rgba(87,111,230,1) 25%, rgba(152,68,183,1) 51%, rgba(255,53,127,1) 100%);
  background: linear-gradient(45deg, rgba(59,173,227,1) 0%, rgba(87,111,230,1) 25%, rgba(152,68,183,1) 51%, rgba(255,53,127,1) 100%);
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#3bade3 ', endColorstr='#ff357f ', GradientType=1 );
  height: 2px;
}

#myRangeVimeo[type=range]:focus {
  outline: none;
}

#myRangeVimeo[type=range]::-moz-range-track {
  -moz-appearance: none;
  background: rgba(59,173,227,1);
  background: -moz-linear-gradient(45deg, rgba(59,173,227,1) 0%, rgba(87,111,230,1) 25%, rgba(152,68,183,1) 51%, rgba(255,53,127,1) 100%);
  background: -webkit-gradient(left bottom, right top, color-stop(0%, rgba(59,173,227,1)), color-stop(25%, rgba(87,111,230,1)), color-stop(51%, rgba(152,68,183,1)), color-stop(100%, rgba(255,53,127,1)));
  background: -webkit-linear-gradient(45deg, rgba(59,173,227,1) 0%, rgba(87,111,230,1) 25%, rgba(152,68,183,1) 51%, rgba(255,53,127,1) 100%);
  background: -o-linear-gradient(45deg, rgba(59,173,227,1) 0%, rgba(87,111,230,1) 25%, rgba(152,68,183,1) 51%, rgba(255,53,127,1) 100%);
  background: -ms-linear-gradient(45deg, rgba(59,173,227,1) 0%, rgba(87,111,230,1) 25%, rgba(152,68,183,1) 51%, rgba(255,53,127,1) 100%);
  background: linear-gradient(45deg, rgba(59,173,227,1) 0%, rgba(87,111,230,1) 25%, rgba(152,68,183,1) 51%, rgba(255,53,127,1) 100%);
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#3bade3 ', endColorstr='#ff357f ', GradientType=1 );
  height: 2px;
}

#myRangeVimeo[type=range]::-webkit-slider-thumb {
  -webkit-appearance: none;
  border: 2px solid;
  border-radius: 50%;
  height: 25px;
  width: 25px;
  max-width: 80px;
  position: relative;
  bottom: 11px;
  background-color: #1d1c25;
  cursor: -webkit-grab;

  -webkit-transition: border 1000ms ease;
  transition: border 1000ms ease;
}

#myRangeVimeo[type=range]::-moz-range-thumb {
  -moz-appearance: none;
  border: 2px solid;
  border-radius: 50%;
  height: 25px;
  width: 25px;
  max-width: 80px;
  position: relative;
  bottom: 11px;
  background-color: #1d1c25;
  cursor: -moz-grab;
  -moz-transition: border 1000ms ease;
  transition: border 1000ms ease;
}



#myRangeVimeo.range.blue::-webkit-slider-thumb {
   border-color: rgb(59,173,227);
}

#myRangeVimeo.range.ltpurple::-webkit-slider-thumb {
   border-color: rgb(87,111,230);
}

#myRangeVimeo.range.purple::-webkit-slider-thumb {
   border-color: rgb(152,68,183);
}

#myRangeVimeo.range.pink::-webkit-slider-thumb {
   border-color: rgb(255,53,127);
}

#myRangeVimeo.range.blue::-moz-range-thumb {
   border-color: rgb(59,173,227);
}

#myRangeVimeo.range.ltpurple::-moz-range-thumb {
   border-color: rgb(87,111,230);
}

#myRangeVimeo.range.purple::-moz-range-thumb {
   border-color: rgb(152,68,183);
}

#myRangeVimeo.range.pink::-moz-range-thumb {
   border-color: rgb(255,53,127);
}

#myRangeVimeo[type=range]::-webkit-slider-thumb:active {
  cursor: -webkit-grabbing;
}

#myRangeVimeo[type=range]::-moz-range-thumb:active {
  cursor: -moz-grabbing;
}
</style>


















<style>

body.nav-open2 {
  overflow: hidden;
}

#ocn2 {
  background: #F0F8FF;
  bottom: 0;
  overflow-y: auto;
  position: fixed;
  right: -320px;
  top: 0;
  width: 320px;
  -webkit-transition: all 300ms;
  transition: all 300ms;
  z-index: 9990;
}

.nav-open2 #ocn2 {
  -webkit-transform: translateX(-320px);
  transform: translateX(-320px);
}

#overlay2 {
  background: rgba(0, 0, 0, 0.8);
  bottom: 0;
  cursor: pointer;
  display: block;
  left: 0;
  opacity: 0;
  position: fixed;
  right: 0;
  top: 0;
  visibility: hidden;
  -webkit-transition: all 300ms;
  transition: all 300ms;
}

.nav-open2 #overlay2 {
  opacity: 1;
  visibility: visible;
}

</style>

<script>
 (function($) {

 var navToggle2 = function() {
  $('body').on('click', '.nav-toggle2', function(ev) {
    ev.preventDefault();
    $('body').toggleClass('nav-open2');
   });
 };

 $(document).ready(function() {
   navToggle2();
 });
 })(jQuery);



 $('#browseButton').on('click','div',function(){
        console.log("clicked");
		
        
        //console.log("their id = "+id);//write here maybe the function to create an iframe video passing the video id.
       
	    });
 </script>





@endsection
