<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Bootshop online Shopping cart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--Less styles -->
    <!-- Other Less css file //different less files has different color scheam
     <link rel="stylesheet/less" type="text/css" href="themes/less/simplex.less">
     <link rel="stylesheet/less" type="text/css" href="themes/less/classified.less">
     <link rel="stylesheet/less" type="text/css" href="themes/less/amelia.less">  MOVE DOWN TO activate
     -->
    <!--<link rel="stylesheet/less" type="text/css" href="themes/less/bootshop.less">
    <script src="themes/js/less.js" type="text/javascript"></script> -->

   @include('frontend.layouts.partiel.head')
</head>
<body>
@include('frontend.layouts.partiel.header')
<!-- Header End====================================================================== -->

@include('frontend.layouts.partiel.slider')

<div id="mainBody">
    <div class="container">
        <div class="row">
            <!-- Sidebar ================================================== -->
        @include('frontend.layouts.partiel.sidebar')
        <!-- Sidebar end=============================================== -->
            @yield('content')
        </div>
    </div>
</div>

<!-- Footer ================================================================== -->
@include('frontend.layouts.partiel.footer')
<!-- Placed at the end of the document so the pages load faster ============================================= -->
@include('frontend.layouts.partiel.script')


<!-- Themes switcher section ============================================================================================= -->
@include('frontend.layouts.partiel.selectionbox')
<!-- Themes switcher section end ========================================================================================== -->
</body>
</html>



