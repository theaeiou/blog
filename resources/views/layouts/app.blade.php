<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{secure_asset('css/app.css')}}">
        <title>{{config('app.name', 'BLOGER')}}</title>

    </head>
    <body>
      @include('inc.navbar')
        <div class="container">
          @include('inc.send')
          @yield('content')
       </div>

       <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
       <script>
          CKEDITOR.replace( 'article-ckeditor' );
       </script>

    </body>
</html>
