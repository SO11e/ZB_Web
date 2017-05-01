<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title', 'Untitled page') - De Zonnebloem</title>
    
        <link href="{{ asset('/resources/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('/resources/dist/css/auth.css') }}" rel="stylesheet">
        <link href="{{ asset('/resources/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    </head>
    <body>
    @yield('content')
    </body>
</html>
