<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>@yield('title', 'Insert Title') - De Zonnebloem</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href="{{ asset('/resources/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{ asset('/resources/dist/css/theme.css') }}">
        <link rel="stylesheet" href="{{ asset('/resources/dist/css/skins/orange.css') }}">

        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="hold-transition skin-orange sidebar-mini">
        <div class="wrapper">
            <header class="main-header">
                <a href="#" class="logo">
                    <span class="logo-mini"><i class="fa fa-dashboard"></i></span>
                    <span class="logo-lg"><i class="fa fa-sun-o"></i> De Zonnebloem</span>
                </a>
                <nav class="navbar navbar-static-top">
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>

                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <span><i class="fa fa-user"></i> {{ $user->firstname != '' && $user->lastname != '' ? $user->firstname . ' ' . $user->lastname : 'Onbekende gebruiker' }}</span></a>
                                <ul class="dropdown-menu">
                                    <li class="user-header">
                                        <img src="{{ asset('/resources/dist/img/user.png') }}" class="img-circle" alt="User Image">
                                        <p>{{ $user->firstname != '' && $user->lastname != '' ? $user->firstname . ' ' . $user->lastname : 'Onbekende gebruiker' }}
                                            <small>{{ $user->region->name != '' ? $user->region->name : 'Onbekende regio' }}</small>
                                        </p>
                                    </li>
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="#" class="btn btn-default btn-flat"><i class="fa fa-user"></i> Mijn account</a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="{{ route('auth.logout') }}" class="btn btn-default btn-flat"><i class="fa fa-sign-out"></i> Uitloggen</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <aside class="main-sidebar">
                <section class="sidebar">
                    <ul class="sidebar-menu">
                        <li class="header">ALGEMEEN</li>
                        <li class="{{ Ekko::isActiveRoute('app.dashboard') }}">
                            <a href="{{ route('app.dashboard') }}"><i class="fa fa-home"></i> <span>Home</span></a>
                        </li>
                        <li class="{{ Ekko::areActiveRoutes(['user.list', 'user.add', 'user.edit', 'user.remove']) }}">
                            <a href="{{ route('user.list') }}"><i class="fa fa-user"></i> <span>Gebruikers</span></a>
                        </li>
                        <li class="{{ Ekko::areActiveRoutes(['issue.list', 'issue.view', 'issue.edit', 'issue.delete']) }}">
                            <a href="{{ route('issue.list') }}"><i class="fa fa-list"></i> <span>Meldingen</span></a>
                        </li>
                        <li class="{{ Ekko::areActiveRoutes(['region.list', 'region.add', 'region.edit']) }}">
                            <a href="{{ route('region.list') }}"><i class="fa fa-list"></i> <span>Regio's</span></a>
                        </li>
                        
                        <li class="header">ACCOUNT</li>
                        <li>
                            <a href="#"><i class="fa fa-user"></i> <span>Mijn account</span></a>
                        </li>
                        <li>
                            <a href="{{ route('auth.logout') }}"><i class="fa fa-sign-out"></i> <span>Uitloggen</span></a>
                        </li>
                    </ul>
                </section>
            </aside>
            <div class="content-wrapper">
                <section class="content-header">
                    <h1>@yield('title', 'Insert Title')
                        <small>@yield('pagedescription', '')</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-sun-o"></i> De Zonnebloem</a></li>
                        @yield('middlebreadcrumbs', '')
                        <li class="active">@yield('title', 'Insert Title')</li>
                    </ol>
                </section>
                <section class="content">
                    @yield('content')
                </section>
            </div>
            <footer class="main-footer">
                <div class="pull-right">
                    <div id="footerclock">Gelieve javascript in te schakelen als u dit kunt zien!</div>
                </div>
                <strong>Copyright &copy; 2017<?php if(date("Y") != "2017"){ echo "-" . date("Y"); } ?> 42IN11SOe</strong>
            </footer>
        </div>

        <script src="https://code.jquery.com/jquery-2.2.3.min.js"></script>
        <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
        <script src="{{ asset('/resources/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('/resources/dist/js/app.js') }}"></script>
        <script src="{{ asset('/resources/dist/js/clock.js') }}"></script>
        @yield('javascript')
    </body>
</html>