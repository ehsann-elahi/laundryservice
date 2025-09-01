
<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

   @include('layouts.header_scripts')
   
</head>

<body>

   <div class="preloader">
        <button class="th-btn style2 preloaderCls">Cancel Preloader</button>
        <div class="preloader-inner">
            <div class="loader">
                <div class="rot"></div>
                <img loading="lazy"style="height: 80px" src="{{asset('/assets/images/logo.png')}}" alt="Laun" />
            </div>
        </div>
    </div>

    <!-- Header Start -->
   @include('layouts.header')
 
    <!-- Hero Start -->

    <!-- Team Two Start -->
    @yield('content')

    <!-- Footer Start -->
   @include('layouts.footer')

   @include('layouts.footer_scripts')
   
</body>
</html>