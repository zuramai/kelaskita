<!-- =========================================================================================
  Name: KelasKita Website
  Author: Ahmad Saugi
  Author URL: http://ahmadsaugi.com
  Repository: https://github.com/zuramai/kelaskita
========================================================================================== -->
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
    <!-- Begin page -->
        <div id="wrapper">
            @yield('content')
        </div>
    @include('layouts.footer-script')    
    </body>
</html>