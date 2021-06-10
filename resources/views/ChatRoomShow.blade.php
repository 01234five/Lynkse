@extends('layouts.videosyncapp')

@section('content')
<!-------------body ------------------>
<div id="siteWrapper" style="overflow-y:hidden;"><!--keep an eye on overflow-y here-->
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
    <div id="secondSectionID" class="col-lg-8 col-md-8 col-xs-12 p-0">
    <div id="playerDiv" style="height: calc(100vh - 80px);box-sizing: border-box;"></div>
    <div  id="playerDivVimeo" class="vimeo-wrapper"></div>
    </div>
    <!-- ======= third section ========== -->
    <div id="thirdSectionID" class="col-lg-2 col-md-2 col-xs-12 p-0" style="height: calc(100vh - 80px);box-sizing: border-box;">
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
      
      <div class="col-lg-6 col-md-8 col-md-offset-3">


      <div class="container">
  <div class="row">
  <div id="buttonsYoutube" class="col-md-3 col-xs-4 my-auto text-center" >
  
  <div class="btn-group" role="group" aria-label="Basic example">
              <button onclick="playVideo();" type="button" class="btn btn-primary"><i class="fa fa-play"></i></button>
             
              <button onclick="pauseVideo();" type="button" class="btn btn-primary"><i class="fa fa-stop"></i></button>
              <button onclick="unMuteVideo();" type="button" class="btn btn-primary"><i id="volumeYoutube" class="fa fa-volume-off"></i></button>
             
            </div>
    </div>
    <div class="col-md-6 col-xs-4 text-right ">
      <div class="container" style="height:37px;padding:0;">
    <input id="myRangeYoutube" type="range" min="0" max="0" value="0" class="range blue"/>
    </div>
    </div>
    <div id="browseButtonYoutube" class="col-md-3 col-xs-4 text-center">
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
<div class="col-md-3 col-xs-4 my-auto text-center">
<div class="btn-group" role="group" aria-label="Basic example">
            <button onclick="vimeoPusherPlay()" type="button" class="btn btn-primary"><i class="fa fa-play"></i></button>
           
            <button onclick="vimeoPusherPause()" type="button" class="btn btn-primary"><i class="fa fa-stop"></i></button>
             <button onclick="vimeoVolume()" type="button" class="btn btn-primary"><i id="volumeVimeo" class="fa fa-volume-off"></i></button>
           
          </div>
  </div>
  <div class="col-md-6 col-xs-4 text-right">
  <input id="myRangeVimeo" type="range" min="0" max="0" value="0" class="range blue"/>
  </div>
  <div class="col-md-3 col-xs-4 text-center">
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
          <svg  fill="#878787" width="80" class="section-icon active" viewBox="0 0 612 180.34"><path d="M 135.5712 162.4455 c -5.4788 -0.5999 -7.2185 -0.9598 -11.0777 -2.2195 c -8.5582 -2.8394 -16.4965 -8.8181 -21.3755 -16.0966 c -0.5599 -0.8598 -1.0998 -1.5597 -1.1797 -1.5597 c -0.08 0 -1.0798 0.4999 -2.2195 1.0998 c -2.3195 1.2397 -3.2193 1.3797 -4.639 0.7198 c -1.1198 -0.4999 -1.9196 -1.3597 -3.1393 -3.3793 c -0.5599 -0.9598 -2.8794 -4.659 -5.1189 -8.2383 c -2.2595 -3.5792 -5.1189 -8.1583 -6.3986 -10.1978 c -1.2597 -2.0396 -2.3795 -3.7592 -2.4995 -3.8192 c -0.1 -0.08 -3.1193 -0.18 -6.7186 -0.2399 c -11.8375 -0.18 -21.5154 -1.7196 -29.9137 -4.759 c -3.2993 -1.1997 -3.9192 -2.3995 -3.4193 -6.5786 c 0.14 -1.2597 0.2599 -2.2995 0.2399 -2.3195 c 0 0 -0.8198 -0.4399 -1.8196 -0.9598 c -8.3782 -4.3991 -15.0968 -10.1778 -20.0557 -17.2363 c -2.9194 -4.1391 -5.1989 -8.6982 -7.0385 -14.017 c -0.9398 -2.7194 -2.5994 -8.8781 -2.5994 -9.658 c 0 -0.18 -0.5399 -0.6999 -1.1997 -1.1598 c -4.639 -3.2793 -5.2389 -9.6779 -1.2997 -13.8171 c 1.7996 -1.8996 3.9992 -2.8194 6.7186 -2.8194 c 3.5392 0 6.5186 1.9596 8.1183 5.2989 c 1.2597 2.6594 1.1398 5.5988 -0.3399 8.1983 c -0.4999 0.8998 -2.6794 3.2593 -3.3993 3.6992 c -0.3399 0.22 0.1 2.5195 1.1997 6.1587 c 1.5197 5.0189 3.8392 9.6779 6.9585 14.037 c 1.8596 2.5994 6.5986 7.3784 9.278 9.358 c 1.8996 1.4197 6.3587 4.2991 6.4786 4.1791 c 0.04 -0.04 0.2 -0.9598 0.3799 -2.0596 c 0.3999 -2.6794 0.6199 -3.3793 1.3197 -4.1591 c 0.5599 -0.6599 1.9996 -1.3197 2.8194 -1.3197 c 0.2 0 1.3997 0.3199 2.6594 0.6999 c 5.8188 1.7596 13.1572 2.4795 18.4961 1.8196 c 8.6782 -1.0798 15.1568 -4.1591 21.2755 -10.0979 c 5.3189 -5.1989 8.6382 -10.6577 11.5176 -19.016 c 0.7798 -2.2195 1.3397 -3.0594 2.3995 -3.5992 c 1.0398 -0.5199 2.2595 -0.4999 4.599 0.1 c 1.0398 0.2599 1.9196 0.4399 1.9596 0.3999 c 0.22 -0.22 0.2599 -6.4786 0.06 -8.3982 c -1.1198 -10.3778 -6.0987 -20.8556 -13.2372 -27.8341 l -1.2797 -1.2597 l -0.9998 0.3199 c -3.4993 1.0398 -6.8585 0.2999 -9.298 -2.0996 c -4.2391 -4.1391 -3.5592 -11.1176 1.3597 -14.237 c 3.9392 -2.4995 9.478 -1.5597 12.1574 2.0596 c 1.2397 1.6796 1.7196 3.0793 1.8396 5.3989 l 0.1 1.9396 l 1.7596 1.7996 c 7.1585 7.3384 11.9375 15.6967 14.257 24.9747 c 1.2797 5.0989 1.5997 7.9783 1.6197 14.197 l 0 5.4588 l 1.5997 0.4799 c 0.8798 0.2599 1.9996 0.5799 2.4995 0.7198 c 1.6197 0.3999 2.9994 2.2195 2.9994 3.9792 c 0 1.7196 -3.5792 12.8373 -5.9987 18.5961 c -3.6792 8.7981 -6.4186 13.2772 -10.9777 17.9962 c -1.7196 1.7796 -2.0196 2.1795 -1.9196 2.5795 c 0.08 0.2799 2.7394 6.1787 5.9187 13.1372 c 3.1793 6.9585 5.8588 13.0772 5.9587 13.5771 c 0.3999 2.0996 -0.4799 3.5792 -2.8194 4.799 c -0.7998 0.4199 -1.4997 0.7998 -1.5397 0.8398 c -0.18 0.14 1.7796 2.7794 3.3193 4.499 c 4.599 5.1389 10.7377 8.6182 17.9762 10.1578 c 2.5795 0.5399 7.4984 0.7398 10.1978 0.3999 c 8.3382 -1.0398 16.3565 -5.4588 21.1155 -11.6575 c 4.2991 -5.5988 6.3587 -11.9375 6.6786 -20.5356 c 0.2799 -7.0185 -0.7598 -14.317 -3.6392 -25.4946 c -3.7192 -14.4969 -4.3191 -16.8564 -4.859 -19.5958 c -2.1995 -10.8977 -2.3595 -20.1357 -0.4999 -28.394 c 1.9396 -8.5982 6.8785 -17.7962 13.2372 -24.5348 c 5.6988 -6.0587 10.9977 -10.0779 17.8562 -13.5571 c 13.3372 -6.7586 27.7341 -8.3982 42.1711 -4.799 c 18.5761 4.659 34.9126 17.9762 42.211 34.4127 c 0.9398 2.1395 2.9794 7.8983 2.9794 8.4382 c 0 0.16 0.6199 0.3999 1.4397 0.5999 c 5.0789 1.1797 9.1181 5.0989 10.5978 10.2378 c 0.6199 2.2395 0.6199 5.5588 0 7.7584 c -0.8398 2.9394 -2.2395 5.1189 -4.679 7.2585 l -1.3597 1.1797 l 0 37.4521 l 0 37.4321 l -7.7983 0 l -7.7983 0 l 0 -37.4521 l 0 -37.4321 l -0.6199 -0.2799 c -0.8798 -0.3799 -3.3593 -2.9394 -4.1591 -4.2791 c -2.7394 -4.639 -2.9194 -9.8979 -0.4799 -14.5569 c 0.9198 -1.7996 2.5595 -3.7192 4.0391 -4.799 c 1.1797 -0.8398 1.2197 -0.8998 1.0998 -1.5797 c -0.2399 -1.5397 -1.5797 -5.0589 -2.9594 -7.8983 c -2.4595 -4.9789 -5.2389 -8.8381 -9.418 -12.9972 c -5.8987 -5.9187 -13.0772 -10.3978 -21.1555 -13.2172 c -5.7988 -2.0196 -10.4378 -2.7794 -16.8364 -2.7594 c -4.9589 0 -7.4784 0.2999 -11.7975 1.3797 c -14.8169 3.7392 -28.274 14.7369 -34.2727 28.0341 c -2.7794 6.1387 -3.8392 11.1776 -3.8192 18.1561 c 0 7.7983 1.0598 13.8971 4.699 27.2942 c 3.2593 12.0175 4.4191 17.3763 5.1789 24.1949 c 1.2397 10.8977 -0.06 20.9156 -3.7192 28.5539 c -5.4588 11.4776 -16.4365 19.7958 -29.2938 22.2353 c -2.7194 0.4999 -8.7182 0.8998 -10.6577 0.6799 z m -32.5331 -29.7737 c 2.1595 -1.1198 2.5395 -1.3997 2.4395 -1.7196 c -0.08 -0.2 -2.0596 -4.679 -4.4391 -9.9179 c -8.1783 -18.1561 -7.7784 -17.1564 -7.2785 -18.716 c 0.3599 -1.0798 0.8598 -1.5997 2.6994 -2.8194 c 4.539 -3.0194 8.9381 -9.7179 12.7773 -19.4159 c 1.3997 -3.5792 3.6192 -10.3978 3.4793 -10.7377 c -0.04 -0.16 -0.7198 -0.4199 -1.4597 -0.5999 c -0.7598 -0.2 -2.5395 -0.6599 -3.9592 -1.0398 l -2.5595 -0.6799 l -1.5997 3.3193 c -3.6592 7.6584 -6.4186 11.6975 -11.0777 16.2765 c -2.6194 2.5595 -4.0991 3.7592 -6.8785 5.5988 c -9.538 6.2587 -20.6556 8.4382 -33.3929 6.5386 c -1.4797 -0.22 -3.1193 -0.4399 -3.6392 -0.5199 l -0.9198 -0.12 l -0.12 0.8798 c -0.3199 2.2995 -0.9198 7.6384 -0.8798 7.6784 c 0.2 0.2 3.5992 1.1797 5.4588 1.5797 c 2.7794 0.6199 8.3982 1.4397 11.7975 1.7196 c 1.4397 0.12 2.9994 0.2399 3.4993 0.2999 c 0.4999 0.06 3.8992 0.1 7.5584 0.1 c 6.1387 0 6.7386 0.04 7.3984 0.3799 c 0.4199 0.22 0.9398 0.5999 1.1598 0.8598 c 0.2399 0.2399 1.9996 2.9794 3.8992 6.0587 c 2.8394 4.599 7.1185 11.4576 10.4378 16.7564 l 0.5999 0.9398 l 1.2197 -0.6799 c 0.6799 -0.3599 2.3795 -1.2797 3.7792 -2.0196 z M 414.912 154.4472 c -6.9385 -0.6999 -13.6371 -2.1595 -19.036 -4.1591 c -11.6375 -4.2991 -20.2357 -12.5773 -23.655 -22.7552 c -0.6399 -1.9396 -1.4397 -5.2589 -1.5397 -6.5386 c -0.04 -0.2799 -0.1 5.9187 -0.16 13.7771 l -0.1 14.297 l -7.7384 0.06 l -7.7584 0.04 l -0.02 -18.5361 c 0 -10.2178 -0.04 -18.956 -0.1 -19.4559 c -0.7198 -7.1585 -3.0394 -11.1976 -7.7384 -13.4971 c -2.4995 -1.2197 -3.5592 -1.3997 -7.9383 -1.3997 c -4.579 0 -5.5988 0.2 -8.6982 1.6996 c -5.7988 2.8194 -8.7581 7.8183 -9.378 15.8966 c -0.06 0.6599 -0.1 8.8781 -0.1 18.2561 l -0.02 17.0364 l -7.7384 -0.04 l -7.7584 -0.06 l 0 -32.893 l 0 -32.893 l 7.3384 -0.06 l 7.3584 -0.04 l 0.12 0.4799 c 0.06 0.2599 0.08 2.0996 0.04 4.0991 c -0.04 1.9996 0 3.6192 0.08 3.6192 c 0.06 0 0.4399 -0.3599 0.7998 -0.7998 c 0.9798 -1.1198 3.2993 -2.9594 5.0989 -4.0391 c 4.519 -2.6794 9.9379 -3.9992 16.4565 -4.0191 c 6.6386 0 11.8175 1.3197 16.2366 4.1591 c 6.3786 4.1191 9.8579 9.9379 11.0377 18.4761 c 0.18 1.2397 0.3199 2.6994 0.3199 3.2793 c 0 1.5397 0.3199 1.7996 0.4599 0.3999 c 0.18 -1.5597 1.0198 -4.739 1.7596 -6.6186 c 2.6594 -6.6986 8.1183 -13.1572 14.7769 -17.4763 c 7.2385 -4.679 15.7966 -7.5384 27.2942 -9.0981 c 3.7792 -0.4999 16.9364 -0.5199 21.0955 0 c 5.4788 0.6799 9.9179 1.4997 14.017 2.6194 c 2.0596 0.5599 7.2585 2.2595 7.8383 2.5595 c 0.3999 0.2 0.3199 0.7198 -0.2599 1.5597 c -0.2 0.2799 -0.5399 0.8198 -0.7598 1.1997 c -1.0798 1.9196 -4.0591 6.7186 -4.3191 6.9785 c -0.2599 0.2599 -0.5999 0.2 -2.7594 -0.3599 c -1.3597 -0.3599 -2.7194 -0.7398 -3.0594 -0.8398 c -0.3199 -0.1 -1.8596 -0.4599 -3.3993 -0.7998 c -1.5397 -0.3199 -3.1593 -0.6799 -3.5992 -0.7798 c -0.4399 -0.12 -2.0196 -0.3799 -3.4993 -0.5999 c -9.458 -1.3597 -17.8762 -0.9598 -24.3148 1.1598 c -4.759 1.5797 -8.6782 3.8792 -11.8775 7.0385 c -4.0391 3.9592 -6.1587 8.1383 -7.4384 14.5969 c -0.3399 1.7196 -0.3199 8.6582 0.02 10.3978 c 1.2997 6.5586 3.1993 10.3578 7.0985 14.297 c 4.4591 4.479 10.7577 7.2585 19.1159 8.4382 c 3.8192 0.5399 12.6973 0.4799 17.5163 -0.1 c 3.9792 -0.4799 10.0579 -1.6596 14.297 -2.7394 c 1.4997 -0.3799 2.8594 -0.6999 3.0394 -0.6999 c 0.18 0 0.6599 0.6399 1.1598 1.5597 c 0.4599 0.8398 0.9998 1.8196 1.1797 2.1395 c 0.18 0.3399 0.7198 1.3197 1.1997 2.1995 c 0.4799 0.8798 1.1398 2.0396 1.4597 2.5994 c 0.3999 0.6799 0.5199 1.0798 0.3999 1.2797 c -0.4599 0.7398 -9.9979 3.2793 -15.3967 4.1191 c -6.3187 0.9598 -8.7182 1.1398 -17.3563 1.1997 c -6.1787 0.06 -8.9181 0 -11.0976 -0.22 z M 483.1775 149.9682 c -8.0783 -0.4799 -16.8964 -2.8594 -22.5552 -6.1187 c -0.8998 -0.4999 -1.6996 -0.9998 -1.7796 -1.0798 c -0.12 -0.1 5.3789 -11.5376 5.7588 -11.9575 c 0.02 -0.02 0.6599 0.3199 1.4197 0.7798 c 3.9592 2.4195 10.0579 4.479 15.6167 5.2989 c 2.6194 0.3799 7.4984 0.4999 9.9579 0.2599 c 3.3593 -0.3599 6.2787 -1.3397 7.8183 -2.6594 c 1.4597 -1.1997 2.2195 -3.8992 1.6996 -5.8788 c -0.7798 -2.8394 -3.7992 -4.0191 -15.4167 -5.9387 c -9.498 -1.5797 -14.137 -2.9394 -17.4163 -5.0789 c -4.3191 -2.8394 -6.6586 -6.3387 -7.3984 -11.0177 c -0.3399 -2.2195 -0.12 -6.7186 0.4199 -8.5982 c 2.3795 -8.2782 10.5978 -13.8371 22.4952 -15.2168 c 3.1393 -0.3599 9.418 -0.3199 12.7973 0.1 c 6.6986 0.8398 13.1772 2.6594 16.8564 4.759 l 1.0598 0.5999 l -1.5997 3.0194 c -0.8598 1.6796 -2.2195 4.3191 -2.9994 5.8987 l -1.4197 2.8394 l -1.9596 -0.9798 c -3.6592 -1.8396 -7.8983 -3.1193 -11.8375 -3.6192 c -2.4595 -0.2999 -8.1783 -0.2399 -10.2578 0.08 c -5.3989 0.8798 -8.5182 3.3593 -8.5382 6.7986 c 0 3.3193 1.6397 4.859 6.6586 6.2987 c 2.6194 0.7398 5.8188 1.4197 9.9379 2.1196 c 7.1985 1.1997 12.3374 2.5994 15.2568 4.1591 c 3.1393 1.6596 5.9587 4.3791 7.1585 6.8785 c 1.1398 2.3795 1.4597 3.9992 1.4597 7.6584 c 0.02 3.9192 -0.22 5.0789 -1.6796 8.0983 c -1.2197 2.4995 -2.8994 4.519 -5.2589 6.2987 c -4.9789 3.7792 -11.0777 5.6788 -19.8358 6.1987 c -1.8796 0.1 -3.4793 0.18 -3.5992 0.16 c -0.1 0 -1.3797 -0.08 -2.8194 -0.16 z M 557.5817 149.9482 c -7.6584 -0.4799 -14.5769 -2.7794 -20.0358 -6.6386 c -2.2995 -1.6397 -5.6188 -4.9789 -7.2985 -7.3384 c -2.5595 -3.6192 -4.4391 -8.0783 -5.3589 -12.7173 c -0.6199 -3.0594 -0.7598 -8.6982 -0.3199 -11.9775 c 1.3997 -10.5178 6.9185 -19.036 15.6567 -24.1549 c 7.1985 -4.2191 16.8564 -5.6988 25.6945 -3.9192 c 7.4784 1.4997 13.5571 5.0989 18.4161 10.8777 c 3.7792 4.519 6.3387 10.8977 7.1385 17.7962 c 0.22 1.9996 0.2599 6.9385 0.08 8.3782 l -0.14 0.9198 l -25.7545 0 c -22.3753 0 -25.7745 0.04 -25.7745 0.2799 c 0 0.5599 1.0598 3.6192 1.6596 4.819 c 2.4395 4.879 7.0185 8.3182 13.0372 9.8179 c 2.4595 0.6199 7.3984 0.8598 10.1978 0.4999 c 4.9989 -0.6599 9.398 -2.6394 12.9772 -5.8388 l 1.1797 -1.0598 l 0.7198 0.7998 c 0.3999 0.4199 1.2197 1.3597 1.8396 2.0796 c 0.6199 0.7198 2.1795 2.4995 3.4593 3.9592 c 1.8796 2.1595 2.2795 2.7194 2.1395 3.0194 c -0.2599 0.4599 -2.8794 2.9194 -4.2391 3.9592 c -3.7592 2.8794 -8.8981 4.9589 -14.6369 5.9587 c -1.5597 0.2599 -7.1585 0.7398 -7.9383 0.6599 c -0.16 0 -1.3797 -0.08 -2.6994 -0.18 z m 19.2959 -39.3517 c 0 -0.1 -0.22 -1.0398 -0.4799 -2.0796 c -1.6197 -6.3387 -6.4586 -11.2576 -12.8173 -12.9573 c -2.1595 -0.5999 -7.8583 -0.6599 -9.9779 -0.12 c -6.6386 1.6796 -11.6375 6.4986 -13.2972 12.7773 c -0.22 0.7998 -0.4399 1.6996 -0.4999 2.0196 l -0.12 0.5399 l 18.5961 0 c 10.4378 0 18.5961 -0.08 18.5961 -0.18 z M 197.4981 149.0284 c -0.08 -0.06 -0.14 -19.4959 -0.14 -43.1908 l 0 -43.0509 l 8.0983 0 l 8.0983 0 l 0 36.2923 c 0 19.9558 0.06 36.2923 0.16 36.2923 c 0.08 0 10.2178 0.02 22.5352 0.06 l 22.3952 0.04 l 0.06 6.8585 l 0.04 6.8385 l -30.5535 0 c -16.8164 0 -30.6335 -0.06 -30.6935 -0.14 z"></path></svg>
          </a>
          
        </div>       
  


        <div class="row justify-content-center">
<div class="col-md-8 d-flex justify-content-center">
        <div class="col-md-6 d-flex justify-content-center">
    <a href="{{ url('privacyPolicy') }}" style="text-align: center;" target="_blank">Privacy Policy</a>
    </div>
    <div class="col-md-6 d-flex justify-content-center">
    <a href="#" onclick="toggleFullScreen();">FullScreen</a>
    </div>
</div>
</div>
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
    <button class="btn btn-outline-secondary" type="submit">Send</button>
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













  </div>

<script>

var toggleBool=false;
$('#thirdSectionID').on( "click", function() {
  if (window.innerWidth <= 952 && window.innerWidth > 767)  {

        if(toggleBool==false){
        $("#thirdSectionID").removeClass("col-md-2").addClass("col-md-4");
        $("#secondSectionID").removeClass("col-md-8").addClass("col-md-6");
        toggleBool=true;
        
        }else{
          $("#thirdSectionID").removeClass("col-md-4").addClass("col-md-2");
          $("#secondSectionID").removeClass("col-md-6").addClass("col-md-8");
          toggleBool=false;
        }

    }
  });





</script>
  <style>
#siteWrapper {
  overflow-x:hidden;
  width:100%;
  position: relative;
 
}
</style>
<script>
function toggleFullScreen() {
  if (!document.fullscreenElement &&    // alternative standard method
      !document.mozFullScreenElement && !document.webkitFullscreenElement && !document.msFullscreenElement ) {  // current working methods
    if (document.documentElement.requestFullscreen) {
      document.documentElement.requestFullscreen();
    } else if (document.documentElement.msRequestFullscreen) {
      document.documentElement.msRequestFullscreen();
    } else if (document.documentElement.mozRequestFullScreen) {
      document.documentElement.mozRequestFullScreen();
    } else if (document.documentElement.webkitRequestFullscreen) {
      document.documentElement.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT);
    }
  } else {
    if (document.exitFullscreen) {
      document.exitFullscreen();
    } else if (document.msExitFullscreen) {
      document.msExitFullscreen();
    } else if (document.mozCancelFullScreen) {
      document.mozCancelFullScreen();
    } else if (document.webkitExitFullscreen) {
      document.webkitExitFullscreen();
    }
  }
}


</script>
<script>

var playerReadyVar=false;
$( document ).ready(function() {
      friendList();//needs to be on screen first, before setStatus is ran.
      

 
});
function addEchoMessenger(){
     console.log("Adding Echo Messenger");
  Echo.join(`messenger`)
    .here((users) => {

        //console.log("online ",users);
        $.each(users, function(i){
          console.log("user online id: "+users[i].id)
          onlineArray.push(users[i].id);
          setStatus(users[i].id,"online");
        });
        
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

  }
</script>

<script>
var stateAmmounts=0;
function insertMessagefromPusher(content,thumb,name){
  
 
            $('#messages').append(`

            <div class="media" style="padding-bottom: 18px;">
  <img class="align-self-start mr-3 rounded-circle" src="/users/${thumb}" style="width:64; height:64;" alt="">
  <div class="media-body">
    <h5 class="mt-0" style="font-weight: bold;">${name}</h5>
    <p style="font-size: 14px;">${content}</p>
   
  </div>
</div>

        `);
        scrolltoBottom()
}
function insertMyMessage(content){
  
        $('#messages').append(`

        <div class="media" style="padding-bottom: 18px;">
  
  <div class="media-body">
    <h5 class="mt-0 mb-1" style="font-weight: bold;">Me</h5>
    <p style="font-size: 14px;">${content}</p>
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
                        console.log("success api/messages POST")
                        lastConversationsPOST(conversationRecepientId,input);  
                        insertMyMessage(input);
                        $("#"+conversationRecepientId).prependTo("#friends");
                    }
                }); 

                
                
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
    <div class="col-5 p-1" align-self="center" >
    
    <p class="mb-1" style="color:#fff">
    <img id="status" class="rounded-circle" style="width:10; height:10; background-color: #${statusColor};"  ></img>
       ${name}</p>


    <p id="${lastmessageid}" class="text-muted small mb-1" style="word-break: break-all;">last message</p>
    </div>


    <div class="col-3 d-md-none d-lg-none d-xl-block p-1" >
    
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

          $("#lm"+contactid).text(lastreceivedsentmessage);
        }else{
        $("#lm"+contactid).text(lastreceivedsentmessage);
        $("#time"+contactid).attr('datetime',response.data[0].last_time);

        }

        }
    }).then(function (r){console.log(r);timeago.cancel();timeago.render(document.querySelectorAll('.need_to_be_rendered'));})
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

        <div class="media" style="padding-bottom: 18px;">
  
  <div class="media-body">
    <h5 class="mt-0 mb-3" style="font-weight: bold;">Me</h5>
    <p style="font-size: 14px;">${content}</p>
    </div>
    <img class=" ml-3 rounded-circle" src="/users/${myThumb}" style="width:64; height:64;" alt="">
  
</div>

        `);
        }else{
            $('#messages').append(`

            <div class="media" style="padding-bottom: 18px;">
  <img class="align-self-start mr-3 rounded-circle" src="/users/${thumb}" style="width:64; height:64;" alt="">
  <div class="media-body">
    <h5 class="mt-0" style="font-weight: bold;">${name}</h5>
    <p style="font-size: 14px;">${content}</p>
   
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
        var count=response.data.length;
        var countAddedtoChat=0;
        console.log(count);
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
    <div class="col-5 p-1" align-self="center" >
    
    <p class="mb-1" style="color:#fff">
    <img id="status" class="rounded-circle" style="width:10; height:10; background-color: #${statusColor};"  ></img>
       ${name}</p>


    <p id="${lastmessageid}" class="text-muted small mb-1" style="word-break: break-all;">last message</p>
    </div>


    <div class="col-3 d-md-none d-lg-none d-xl-block p-1" >
    
    <p  class="need_to_be_rendered text-muted small text-center" id="${lastimetextid}" render="no" datetime="null">last time</p>
    </div>
</div>
   </button>
</li>

        `);
    }).then(function () {console.log("inserted li");lastConversations(id);countAddedtoChat=countAddedtoChat+1;
      if(countAddedtoChat==count){
        addEchoMessenger();
    }
    })
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
    <div class="col-5 p-1" align-self="center" >
    
    <p class="mb-1" style="color:#fff">
    <img id="status" class="rounded-circle" style="width:10; height:10; background-color: #${statusColor};"  ></img>
       ${name}</p>


    <p id="${lastmessageid}" class="text-muted small mb-1" style="word-break: break-all;">last message</p>
    </div>


    <div class="col-3 d-md-none d-lg-none d-xl-block p-1" >
    
    <p  class="need_to_be_rendered text-muted small text-center" id="${lastimetextid}" render="no" datetime="null">last time</p>
    </div>
</div>
   </button>
</li>

        `);
    }).then(function () {console.log("inserted li");lastConversations(id);countAddedtoChat=countAddedtoChat+1;
    if(countAddedtoChat==count){
      addEchoMessenger();
    }
    
    })
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
                      if(totalOnline==1){
                        playerReadyVar=true;
                        console.log("1 person in room, playerReady=true");
                      }
             
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
                            console.log("playing"); // 
                            if(track==false){
                            //track = true;
                            //trackTime();
                            }
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
                          insertPlayerPlaying(e.action.videoIdTosend)//currentvideotime has video id in this case.
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

                       if(e.action.message==="PLAYERREADY"){ //Gets sent to others.
                         console.log("PlayerReady on their end");
                        playerReadyVar =true;

                       }
                       if(e.action.message==="PLAYERNOTREADY"){ //Get sents to everyone.
                         if(totalOnline>1){
                        playerReadyVar =false;
                         }

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
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
$.ajax({
                    /* the route pointing to the post function */
                    url: '/videoactionPlayerNotReady',
                    type: 'POST',
                    /* send the csrf-token and the input to the controller */
                    data: {
                        _token: CSRF_TOKEN,
                        message:'PLAYERNOTREADY',
                        room:<?php echo $room->id; ?>,
                       
                    },
                    //dataType: 'JSON',
                    /* remind that 'data' is the response of the AjaxController */
                    success: function (data) { 
                        $(".writeinfo").append(data.msg); 
                        //playVideo();
                        //playerReadyVar=false;
                 

        
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

});

        ///////////////////////////////////
      }




      function insertPlayerPlaying(id) {
    
        
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


        ///////////////////////////////////
      }


      
      var initialJoin=false;
      var seekInitialJoin;
// 4. The API will call this function when the video player is ready.
function onPlayerReady(event) {
  //event.target.playVideoPOST()
  //playVideoPOST()
  //stopVideoPOST()
  
  if(initialJoin==true){
        playerReadyVar=true;
        console.log("intial join time: "+seekInitialJoin);
        player.playVideo();
        player.seekTo(seekInitialJoin);
        initialJoin=false;
        seekInitialJoin="";
        
  }

  videoMaxTime();
  sendTimeBool =false;


  var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
$.ajax({
                    /* the route pointing to the post function */
                    url: '/videoactionPlayerReady',
                    type: 'POST',
                    /* send the csrf-token and the input to the controller */
                    data: {
                        _token: CSRF_TOKEN,
                        message:'PLAYERREADY',
                        room:<?php echo $room->id; ?>,
                       
                    },
                    //dataType: 'JSON',
                    /* remind that 'data' is the response of the AjaxController */
                    success: function (data) { 
                        $(".writeinfo").append(data.msg); 
                        //playVideo();

                    }
                }); 


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
   if(playerReadyVar==false){
     console.log("players not ready");
    player.pauseVideo();
   }else{
   if(stateAmmounts<4){
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
    if(stateAmmounts<4){
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
inputRange.addEventListener('touchstart', unlockStartHandler, false);
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

  var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
$.ajax({
                    /* the route pointing to the post function */
                    url: '/videoactionPlayerNotReady',
                    type: 'POST',
                    /* send the csrf-token and the input to the controller */
                    data: {
                        _token: CSRF_TOKEN,
                        message:'PLAYERNOTREADY',
                        room:<?php echo $room->id; ?>,
                       
                    },
                    //dataType: 'JSON',
                    /* remind that 'data' is the response of the AjaxController */
                    success: function (data) { 
                        $(".writeinfo").append(data.msg); 
                        //playVideo();
                        //playerReadyVar=false;


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
                }); 






  
  

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
inputRange.addEventListener('touchstart', unlockStartHandler, false);
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
