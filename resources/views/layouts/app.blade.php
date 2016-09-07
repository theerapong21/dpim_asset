<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="{{ csrf_token() }}" name="csrf-param">
    @include('layouts.partials.titleicon')

    <title>รบบบริหารจัการสิรทรัพย์</title>

    @include('layouts.partials.mainstyle')
    </meta>
</head>
<body  class="page-header-fixed page-sidebar-closed-hide-logo page-content-white page-sidebar-fixed">

    @include('layouts.partials.headerMenu')
<!-- BEGIN CONTAINER -->
    <div class="page-container">

    @include('layouts.partials.menu')

    <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper" >
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content" id='page_content'>
                    <!-- BEGIN PAGE HEADER-->
                    @yield('content')
                
                </div>

            </div>
            <!-- END CONTENT -->

    </div>
     <!-- END CONTAINER -->

    @include('layouts.partials.footer')
    
    <!--spinner-->
    <div class="modal fade" id="ajax_loader" role="basic" aria-hidden="true">
        <div class="modal-dialog" > 
                    <div class="block-spinner-bar " style="padding-top: 50%; padding-left:50%;">
                        <!--<img src="{{ url('assets/spinner/loader-128x/Preloader_2.gif') }}">-->
                    </div> 
                    <div class="block-spinner-bar">
                        <div class="bounce1" style=""></div>
                        <div class="bounce2"></div>
                        <div class="bounce3"></div>
                    </div>  

        </div>
    </div>



    <!-- JavaScripts -->
    @include('layouts.partials.mainscript')
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}

    @yield('menujs');
</body>
</html>
