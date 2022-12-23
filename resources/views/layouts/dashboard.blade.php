<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.4/css/boxicons.min.css"/>
</head>
<body style="background: #f3f3f3;">
    <div class="container-fluid p-4">
        <div class="card dashboard shadow-sm border-0">
            <div class="row justify-content-center">
                <div class="col-lg-2 dashboard-left">
                    <img class="w-100" src="{{asset('img/td-logo.png')}}" alt="logo">
                    <hr>
                    <div class="dashboard-side-menu">
                        <ul>
                            <a href="{{route('home')}}">
                                <i class='bx bx-home-alt-2 bx-sm'></i>
                                <li>Home</li>
                            </a>
                            <a href="{{route('yelp')}}">
                                <i class='bx bxl-yelp bx-sm'></i>
                                <li>Yelp Businesses List</li>
                            </a>
                            <a href="{{route('local.business')}}">
                                <i class='bx bxs-business bx-sm'></i>
                                <li>Local Business</li>
                            </a>
                            <a href="{{route('glassdoor')}}">
                                <i class='bx bxs-user-detail bx-sm'></i>
                                <li>Glassdoor</li>
                            </a>
                            <a href="">
                                <i class='bx bx-cog bx-sm'></i>
                                <li>Recently Viewed</li>
                            </a>
                        </ul>
                    </div>
                    <div class="dashboard-account mr-auto">
                        <div class="card shadow-sm border-0">
                            <div class="card-body d-flex justify-content-center align-items-center gap-2">
                                <i class='bx bx-cog bx-sm'></i>
                                <p>Vencer Olermo</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-10 dashboard-right">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
