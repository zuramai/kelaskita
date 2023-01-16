
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>@yield('title') - {{config('web_config')['WEB_TITLE']}}</title>
        @include('layouts.head')
        <style>
            #auth {
                padding-top: 5rem;
            }
        </style>
  </head>
<body>
    <div id="auth">
        <div class="row">
            <div class="col-12 col-md-4 mx-auto">
                @yield('content')
            </div>
        </div>
        @include('layouts.footer-script')    
    </body>
</html>