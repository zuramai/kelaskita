 <!-- =========================================================================================
  Name: KelasKita Website
  Author: Ahmad Saugi
  Author URL: http://ahmadsaugi.com
  Repository: https://github.com/zuramai/kelaskita
  Community: Devover ID
  Community URL : http://devover.id
========================================================================================== -->
       <!-- jQuery  -->
        <script src="{{ URL::asset('assets/js/jquery.min.js')}}"></script>
        <script src="{{ URL::asset('assets/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{ URL::asset('assets/js/metisMenu.min.js')}}"></script>
        <script src="{{ URL::asset('assets/js/jquery.slimscroll.js')}}"></script>
        <script src="{{ URL::asset('assets/js/waves.min.js')}}"></script>

        <script src="{{ URL::asset('assets/plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>

        @yield('script')

        <!-- App js -->
        <script src="{{ URL::asset('assets/js/app.js')}}"></script>
        
        @yield('script-bottom')