<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Login</title>

    <!-- Scripts -->    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/color.css')}}">
    <link rel="stylesheet" href="{{asset('css/icon.css')}}">
    <link rel="stylesheet" href="{{asset('css/font.css')}}">
    <style>
        body, html{
            height: 100%;
        }
        body{
            background-color: #E5E5E5;
        }
    </style>
</head>
<body>    
        <main class="d-flex" style="height: 100%">            
                <div class="container align-self-center">
                    <div class="row justify-content-center">
                        <div class="col-md-5">
                            <div class="card custom-card border-0">                                                
                                <div class="card-body p-5">
                                    <div class="d-flex">
                                        <div class="shouba mx-auto"></div>
                                    </div>
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="mb-5">
                                            <div class="mb-3">
                                                <label for="username">Username</label>
                    
                                                <div class="">
                                                    <input id="username" placeholder="Masukkan Username" type="text" class="form-control @error('email') is-invalid @enderror" name="username" value="{{ old('username') }}" required  autofocus>
                    
                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
    
                                            <div class="mb-3">
                                                <label for="password">Password</label>
                
                                                <div class="">
                                                    <input id="password" type="password" placeholder="Masukkan Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    
                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>                                        
                                            </div>    
                                        </div>                                                                                                                                                                                             
                                                        
                                            <div class="d-grid">
                                                <button type="submit" class="btn color-primary" style="width: 100%">
                                                    Masuk
                                                </button>                                                               
                                            </div>                                        
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                   
        </main>    
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
