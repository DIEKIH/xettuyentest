
<!doctype html>
<html class="no-js" lang="">
@include('user_24.admin_24.header')
<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Thanh header_top (màu xanh) -->
     @include('user_24.admin_24.header_top')
    <!-- Thanh header_top (màu xanh) -->
    <!-- Menu điện thoại-->
    <div class="mobile-menu-area">
        @include('user_24.admin_24.mobie_menu')
    </div>
    <!-- Menu điện thoại -->
    <!-- Main Menu area start-->
    <div class="main-menu-area mg-tb-40">
        @include('user_24.admin_24.menu')
    </div>
    <!-- Main Menu area End-->
    <!-- Thống kê cơ bản -->
    <div class="notika-status-area">
        @include('user_24.admin_24.thongke')
    </div>
    <!-- Thống kê cơ bản-->



    <!-- Content -->


    @include('user_24.admin_24.main_home')

    <!-- Content -->




    <!-- Start Footer area-->
    <div class="footer-copyright-area">
        @include('user_24.admin_24.footer_bot')
    </div>
     <!-- End Footer area-->

    <!-- Start Footer-->
     @include('user_24.admin_24.footer')
     <!-- End Footer -->

</body>

</html>