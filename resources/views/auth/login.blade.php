{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- Tab Profile -->
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" type="image/png" sizes="32x32" href="{{ Asset('assets/icons/favicon-32x32.png') }}">
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @viteReactRefresh
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/app.css'])
</head>
<body>
    <div id="app" class="bg-black bg-gradient-to-b from-zinc-800 py-6 sm:py-8 lg:py-12 min-h-screen">
        <div class="max-w-screen-2xl px-4 md:px-8 mx-auto">
            
            <img class="rounded-full w-36 h-36 mx-auto mb-4 shadow-2xl" width="108" height="108" src="{{ Asset('assets/icons/apostle.png') }}" alt="image description">

            <h2 class="text-zinc-100 text-2xl lg:text-3xl font-bold text-center mb-4 md:mb-8">{{ __('Login') }}</h2>

            <form class="max-w-lg border-2 border-zinc-700 bg-zinc-800 shadow-2xl rounded-lg mx-auto" method="POST" action="{{ route('login') }}">
                @csrf

                <div class="flex flex-col gap-4 p-4 md:p-8">
                    <div>
                        <label for="email" class="inline-block text-zinc-100 text-sm sm:text-base mb-2">Email</label>
                        <input id="email" value="{{ old('email') }}" name="email" type="email" autocomplete="email" class="w-full bg-zinc-900 text-zinc-100 border-2 border-zinc-700 focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2" autofocus required/>
                    </div>

                    <div>
                        <label for="password" class="inline-block text-zinc-100 text-sm sm:text-base mb-2">Password</label>
                        <input id="password" name="password" type="password" autocomplete="current-password" class="w-full bg-zinc-900 text-zinc-100 border-2 border-zinc-700 focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2" required/>
                    </div>

                    <button type="submit" class="block border-2 border-zinc-700 bg-zinc-800 hover:bg-zinc-700 active:bg-zinc-600 focus-visible:ring ring-indigo-300 text-zinc-100 text-sm md:text-base font-semibold text-center rounded-lg outline-none transition duration-100 px-8 py-3">{{ __('Log in') }}</button>
                
                    @error('email')
                    <div class="text-red-500" role="alert">
                        <strong class="flex justify-center items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-alert-circle" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                                <path d="M12 8l0 4"></path>
                                <path d="M12 16l.01 0"></path>
                            </svg>
                            {{ $message }}
                        </strong>
                    </div>
                    @enderror
                    
                    @error('password')
                    <div class="text-red-500" role="alert">
                        <strong class="flex justify-center items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-alert-circle" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                                <path d="M12 8l0 4"></path>
                                <path d="M12 16l.01 0"></path>
                            </svg>
                            {{ $message }}
                        </strong>
                    </div>
                    @enderror

                    <div class="flex justify-center items-center relative">
                        <span class="h-px bg-zinc-700 absolute inset-x-0"></span>
                        <span class="bg-zinc-800 text-zinc-100 text-sm relative px-4">Forgot password?</span>
                    </div>

                    <a href="{{ route('password.request') }}" class="block border-2 border-zinc-700 bg-zinc-900 hover:bg-zinc-700 active:bg-zinc-600 focus-visible:ring ring-indigo-300 text-zinc-100 hover:text-zinc-100 text-sm md:text-base font-semibold text-center rounded-lg outline-none transition duration-100 px-8 py-3">{{ __('Forgot password') }}</a>
                </div>

                <div class="flex justify-center items-center bg-zinc-700 p-4">
                    <p class="text-zinc-100 text-sm text-center">
                        Don't have an account?
                        <a href="{{ route('register') }}" class="text-indigo-300 hover:text-indigo-600 active:text-indigo-700 transition duration-100">{{ __('Register') }}</a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
