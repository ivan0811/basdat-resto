<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="{{asset('css/icon.css')}}">

    <!-- Scripts -->    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">    
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">    

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <style>
        body{
            overflow-x: hidden;
        }
    </style>
</head>
<body>
    <div class="d-flex" style="height: 100%; width: 100%">
    <aside class="main-sidebar mini">
        <div class="container py-4 h-100">
            <div class="d-flex flex-column h-100">
                <div class="list-group mb-auto">
                    @if (\Auth::user()->role == 'admin')
                        <a href="#" class="list-group-item list-group-item-action {{Request::segment(1) == 'home' ? 'active' : ''}}">
                            Home
                        </a>
                        <a href="#" class="list-group-item list-group-item-action {{Request::segment(1) == 'menu' ? 'active' : ''}}">
                            Menu
                        </a>    
                        <a href="#" class="list-group-item list-group-item-action {{Request::segment(1) == 'riwayat' ? 'active' : ''}}">
                            Riwayat
                        </a>    
                        <a href="#" class="list-group-item list-group-item-action {{Request::segment(1) == 'pegawai' ? 'active' : ''}}">
                            Pegawai
                        </a>                  
                    @else
                    <a href="#" class="list-group-item list-group-item-action {{Request::segment(1) == 'menu' ? 'active' : ''}}">
                        Menu
                    </a>
                    <a href="#" class="list-group-item list-group-item-action {{Request::segment(1) == 'riwayat' ? 'active' : ''}}">
                        Riwayat
                    </a>                  
                    @endif                    
                </div>            
                <div class="list-group mt-auto">
                    <a href="#" class="list-group-item list-group-item-action">
                        Profile
                      </a>                 
                      <form action="/logout" id="logout" method="POST">
                          @csrf
                    </form>     
                        <a href="#" onclick="document.querySelector('#logout').submit()" class="list-group-item list-group-item-action">
                          Logout
                        </a>                  
                </div>                            
            </div>            
        </div>
    </aside>
    <section style="width: 100%" class="custom-element">
        
        @yield('content')
    </section>    
</div>
<script src="{{ asset('js/app.js') }}" defer></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
@stack('scripts')
</body>
</html>
