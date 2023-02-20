{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
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
            
            <h2 class="text-zinc-100 text-2xl lg:text-3xl font-bold text-center mb-4 md:mb-8">{{ __('Registration') }}</h2>

            <form method="POST" action="{{ route('register') }}" class="max-w-screen-md grid sm:grid-cols-2 gap-4 border-2 border-zinc-700 bg-zinc-800 shadow-2xl rounded-lg mx-auto">
                @csrf

                <div class="col-span-2 grid sm:grid-cols-2 gap-4 p-4 md:p-8">
                    <div class="sm:col-span-2">
                        <label for="name" class="inline-block text-zinc-100 text-sm sm:text-base mb-2">Name</label>
                        <span class="text-sm font-medium px-2.5 py-0.5 rounded bg-gray-700 text-gray-300 float-right">Required</span>
                        <input id="name" name="name" value="{{ old('name') }}" autocomplete="name" class="w-full bg-zinc-900 text-zinc-100 border-2 border-zinc-700 @error('name') !border-red-500 @enderror focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2" autofocus required />
                        
                        @error('name')
                        <div class="text-red-500 mt-2" role="alert">
                            <strong class="flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-alert-circle" width="16" height="16" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                                    <path d="M12 8l0 4"></path>
                                    <path d="M12 16l.01 0"></path>
                                </svg>
                                {{ $message }}
                            </strong>
                        </div>
                        @enderror
                    </div>

                    <div class="sm:col-span-2">
                        <label for="nik" class="inline-block text-zinc-100 text-sm sm:text-base mb-2">NIK</label>
                        <span class="text-sm font-medium px-2.5 py-0.5 rounded bg-gray-700 text-gray-300 float-right">Required</span>
                        <input id="nik" name="nik" value="{{ old('nik') }}" pattern="\d*" maxlength="16" autocomplete="nik" class="w-full bg-zinc-900 text-zinc-100 border-2 border-zinc-700 @error('nik') !border-red-500 @enderror focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2" required />
                        
                        @error('nik')
                        <div class="text-red-500 mt-2" role="alert">
                            <strong class="flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-alert-circle" width="16" height="16" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                                    <path d="M12 8l0 4"></path>
                                    <path d="M12 16l.01 0"></path>
                                </svg>
                                {{ $message }}
                            </strong>
                        </div>
                        @enderror
                    </div>

                    <div>
                        <label for="date_of_birth" class="inline-block text-zinc-100 text-sm sm:text-base mb-2">Tanggal Lahir</label>
                        <span class="text-sm font-medium px-2.5 py-0.5 rounded bg-gray-700 text-gray-300 float-right">Required</span>
                        <input datepicker id="date_of_birth" type="date" name="date_of_birth" value="{{ old('date_of_birth') }}" class="w-full bg-zinc-900 text-zinc-100 border-2 border-zinc-700 @error('date_of_birth') !border-red-500 @enderror focus:ring ring-indigo-300 rounded block px-3 py-2" required>
                    
                        @error('date_of_birth')
                        <div class="text-red-500 mt-2" role="alert">
                            <strong class="flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-alert-circle" width="16" height="16" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                                    <path d="M12 8l0 4"></path>
                                    <path d="M12 16l.01 0"></path>
                                </svg>
                                {{ $message }}
                            </strong>
                        </div>
                        @enderror
                    </div>
              
                    <div>
                      <label for="gender" class="inline-block text-zinc-100 text-sm sm:text-base mb-2">Jenis Kelamin</label>
                      <span class="text-sm font-medium px-2.5 py-0.5 rounded bg-gray-700 text-gray-300 float-right">Required</span>
                      <select name="gender" id="gender" class="w-full bg-zinc-900 text-zinc-100 border-2 border-zinc-700 @error('gender') !border-red-500 @enderror focus:ring ring-indigo-300 rounded block px-3 py-2" required>
                        <option value="#" selected disabled>choose gender</option>
                        <option value="male" {{ old('gender') == 'male' ? 'selected' : null }}>Male</option>
                        <option value="female" {{ old('gender') == 'female' ? 'selected' : null }}>Female</option>
                      </select>

                      @error('gender')
                        <div class="text-red-500 mt-2" role="alert">
                            <strong class="flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-alert-circle" width="16" height="16" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                                    <path d="M12 8l0 4"></path>
                                    <path d="M12 16l.01 0"></path>
                                </svg>
                                {{ $message }}
                            </strong>
                        </div>
                        @enderror
                    </div>

                    <div class="sm:col-span-2">
                        <label for="address" class="inline-block text-zinc-100 text-sm sm:text-base mb-2">Alamat Tempat Tinggal</label>
                        <span class="text-sm font-medium px-2.5 py-0.5 rounded bg-gray-700 text-gray-300 float-right">Required</span>
                        <textarea id="address" name="address" class="w-full h-32 bg-zinc-900 text-zinc-100 border-2 border-zinc-700 @error('address') !border-red-500 @enderror focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2" required>{{ old('address') }}</textarea>
                    
                        @error('address')
                        <div class="text-red-500 mt-2" role="alert">
                            <strong class="flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-alert-circle" width="16" height="16" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                                    <path d="M12 8l0 4"></path>
                                    <path d="M12 16l.01 0"></path>
                                </svg>
                                {{ $message }}
                            </strong>
                        </div>
                        @enderror
                    </div>

                    <div class="sm:col-span-2 border-t-2 border-t-zinc-700 pb-2 mt-2"></div>

                    <div>
                        <label for="phone" class="inline-block text-zinc-100 text-sm sm:text-base mb-2">Phone</label>
                        <span class="text-sm font-medium px-2.5 py-0.5 rounded bg-gray-700 text-gray-300 float-right">Required</span>
                        <input id="phone" name="phone" value="{{ old('phone') }}" autocomplete="phone" class="w-full bg-zinc-900 text-zinc-100 border-2 border-zinc-700 @error('phone') !border-red-500 @enderror focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2" required />
                        
                        @error('phone')
                        <div class="text-red-500 mt-2" role="alert">
                            <strong class="flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-alert-circle" width="16" height="16" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                                    <path d="M12 8l0 4"></path>
                                    <path d="M12 16l.01 0"></path>
                                </svg>
                                {{ $message }}
                            </strong>
                        </div>
                        @enderror
                    </div>
                    
                    <div>
                        <label for="email" class="inline-block text-zinc-100 text-sm sm:text-base mb-2">Email</label>
                        <span class="text-sm font-medium px-2.5 py-0.5 rounded bg-gray-700 text-gray-300 float-right">Required</span>
                        <input id="email" name="email" value="{{ old('email') }}" type="email" autocomplete="email" class="w-full bg-zinc-900 text-zinc-100 border-2 border-zinc-700 @error('email') !border-red-500 @enderror focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2" required />
                        
                        @error('email')
                        <div class="text-red-500 mt-2" role="alert">
                            <strong class="flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-alert-circle" width="16" height="16" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                                    <path d="M12 8l0 4"></path>
                                    <path d="M12 16l.01 0"></path>
                                </svg>
                                {{ $message }}
                            </strong>
                        </div>
                        @enderror
                    </div>

                    <div>
                        <label for="password" class="inline-block text-zinc-100 text-sm sm:text-base mb-2">Password</label>
                        <span class="text-sm font-medium px-2.5 py-0.5 rounded bg-gray-700 text-gray-300 float-right">Required</span>
                        <input id="password" name="password" type="password" class="w-full bg-zinc-900 text-zinc-100 border-2 border-zinc-700 @error('password') !border-red-500 @enderror focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2" required />
                        
                        @error('password')
                        <div class="text-red-500 mt-2" role="alert">
                            <strong class="flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-alert-circle" width="16" height="16" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                                    <path d="M12 8l0 4"></path>
                                    <path d="M12 16l.01 0"></path>
                                </svg>
                                {{ $message }}
                            </strong>
                        </div>
                        @enderror
                    </div>

                    <div>
                        <label for="password-confirm" class="inline-block text-zinc-100 text-sm sm:text-base mb-2">{{ __('Confirm Password') }}</label>
                        <span class="text-sm font-medium px-2.5 py-0.5 rounded bg-gray-700 text-gray-300 float-right">Required</span>
                        <input id="password-confirm" name="password_confirmation" type="password" class="w-full bg-zinc-900 text-zinc-100 border-2 border-zinc-700 focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2" required />
                    </div>

                    <div class="sm:col-span-2 border-t-2 border-t-zinc-700 pb-2 mt-2"></div>

                    <button type="submit" class="sm:col-span-2 block border-2 border-zinc-700 bg-zinc-800 hover:bg-zinc-700 active:bg-zinc-600 focus-visible:ring ring-indigo-300 text-zinc-100 text-sm md:text-base font-semibold text-center rounded-lg outline-none transition duration-100 px-8 py-3">{{ __('Register') }}</button>
                </div>

                <div class="col-span-2 flex justify-center items-center bg-zinc-700 p-4">
                    <p class="text-zinc-100 text-sm text-center">
                        Already have an account?
                        <a href="{{ route('login') }}" class="text-indigo-300 hover:text-indigo-600 active:text-indigo-700 transition duration-100">{{ __('Login') }}</a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
