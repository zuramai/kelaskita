
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <title>@yield('title') - {{config('web_config')['WEB_TITLE']}}</title>
  @include('layouts.head')
</head>

<body>
  <script src="{{ URL::asset('assets/js/initTheme.js')}}"></script>

  <!-- Begin page -->
  <div id="wrapper">
    <div id="app">
      @include('layouts.sidebar')
      <div id="main"  class='layout-navbar navbar-fixed'>
        @include('layouts.topbar')
        <div id="main-content">
          @yield('content')
          @include('layouts.footer')
        </div>
      </div>
    </div>
  </div>
  <!-- END wrapper -->
  @include('layouts.footer-script')
</body>

</html>