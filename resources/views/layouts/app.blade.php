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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/color.css')}}">
    <link rel="stylesheet" href="{{asset('css/icon.css')}}">
    <link rel="stylesheet" href="{{asset('css/font.css')}}">    
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
                        <a href="#" class="list-group-item list-group-item-action text-center">
                            <div class="logo ml-2"></div>
                        </a>
                    @if (\Auth::user()->role == 'admin')
                        <a href="{{route('home')}}" class="list-group-item list-group-item-action {{Request::segment(1) == 'home' ? 'active' : 'grey-sidebar'}}">
                            <span class="{{Request::segment(1) == 'home' ? 'active' : 'grey-dark'}} icon-24 icon-mask icon icon-home"></span>
                            Home
                        </a>
                        <a href="{{route('menu')}}" class="list-group-item list-group-item-action {{Request::segment(1) == 'menu' ? 'active' : 'grey-sidebar'}}">
                            <span class="{{Request::segment(1) == 'menu' ? 'active' : 'grey-dark'}} icon-24 icon-mask icon icon-list"></span>
                            Menu
                        </a>    
                        <a href="{{route('riwayat')}}" class="list-group-item list-group-item-action {{Request::segment(1) == 'riwayat' ? 'active' : 'grey-sidebar'}}">
                            <span class="{{Request::segment(1) == 'riwayat' ? 'active' : 'grey-dark'}} icon-24 icon-mask icon icon-history"></span>
                            Riwayat
                        </a>    
                        <a href="{{route('pegawai')}}" class="list-group-item list-group-item-action {{Request::segment(1) == 'pegawai' ? 'active' : 'grey-sidebar'}}">
                            <span class="{{Request::segment(1) == 'pegawai' ? 'active' : 'grey-dark'}} icon-24 icon-mask icon icon-pegawai"></span>
                            Pegawai
                        </a>                  
                    @else
                    <a href="{{route('menu')}}" class="list-group-item list-group-item-action {{Request::segment(1) == 'menu' ? 'active' : 'grey-sidebar'}}">
                        <span class="{{Request::segment(1) == 'menu' ? 'active' : 'grey-dark'}} icon-24 icon-mask icon icon-list"></span>
                        Menu
                    </a>
                    <a href="{{route('riwayat')}}" class="list-group-item list-group-item-action {{Request::segment(1) == 'riwayat' ? 'active' : 'grey-sidebar'}}">
                        <span class="{{Request::segment(1) == 'riwayat' ? 'active' : 'grey-dark'}} icon-24 icon-mask icon icon-history"></span>
                        Riwayat
                    </a>                  
                    @endif                    
                </div>            
                <div class="list-group mt-auto">
                    <a href="{{route('profile')}}" class="list-group-item list-group-item-action">
                        <span class="{{Request::segment(1) == 'profile' ? 'active' : 'grey-dark'}} icon-24 icon icon-user"></span>
                        Profile
                      </a>                 
                      <form action="/logout" id="logout" method="POST">
                          @csrf
                    </form>     
                        <a href="#" onclick="document.querySelector('#logout').submit()" class="list-group-item list-group-item-action">
                            <span class="grey-dark icon-24 icon icon-logout"></span>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
{{-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> --}}
<script>
    $.fn.selectpicker.Constructor.BootstrapVersion = '4';
</script>
@stack('scripts')
</body>
</html>
