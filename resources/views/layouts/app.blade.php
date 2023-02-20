{{-- <!doctype html>
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
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html> --}}

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
    <div id="app" class="bg-zinc-800 bg-gradient-to-br from-black min-h-screen">
        <!-- hero - start -->
        <div class="pb-6 sm:pb-8 lg:pb-12">
            <header class="border-b-2 border-b-zinc-700 mb-8">
                <div class="max-w-screen-2xl flex justify-between items-center px-4 md:px-8 mx-auto">
                    <!-- logo - start -->
                    <a href="/" class="inline-flex items-center text-zinc-100 text-2xl md:text-3xl font-bold gap-2.5" aria-label="logo">
                    <img class="rounded-full h-12 w-12" width="" height="" src="{{ Asset('assets/icons/apostle.png') }}" alt="image description">

                    P.P.M
                    </a>
                    <!-- logo - end -->
            
                    <!-- nav - start -->
                    <nav class="hidden lg:flex gap-12 2xl:ml-16">
                    <a href="{{ Route('home') }}" class="{{ Route::currentRouteName() == 'home' ? 'text-indigo-400 hover:text-indigo-400' : 'text-zinc-100 hover:text-indigo-400' }} text-lg font-semibold">Home</a>
                    <a href="{{ Route('laporan') }}" class="{{ Route::currentRouteName() == 'laporan' ? 'text-indigo-400 hover:text-indigo-400' : 'text-zinc-100 hover:text-indigo-400' }} text-lg font-semibold transition duration-100">Laporan</a>
                    </nav>
                    <!-- nav - end -->
            
                    <!-- buttons - start -->
                    <div class="flex border-x-2 sm:border-l-zinc-700 border-r-zinc-700 divide-x-2 divide-zinc-700">
                    <button id="dropdownNotificationButton" data-dropdown-toggle="dropdownNotification" class="w-12 sm:w-20 md:w-24 h-12 sm:h-20 md:h-24 hidden sm:flex flex-col justify-center items-center hover:bg-zinc-700 active:bg-zinc-600 transition duration-100 gap-1.5">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon w-6 h-6 text-zinc-500" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6"></path>
                            <path d="M9 17v1a3 3 0 0 0 6 0v-1"></path>
                        </svg>
            
                        <span class="hidden sm:block text-zinc-100 text-xs font-semibold">Notification</span>
                    </button>

                    <!-- Dropdown menu -->
                    <div id="dropdownNotification" class="z-20 hidden w-full max-w-sm bg-zinc-800 bg-gradient-to-t from-zinc-900 divide-y-2 divide-zinc-700 rounded-md shadow" aria-labelledby="dropdownNotificationButton">
                        <div class="block px-4 py-2 font-medium text-center text-zinc-100 rounded-t-lg">
                            Notifications
                        </div>

                        <div class="divide-y-2 divide-zinc-700">
                            <a href="#" class="flex px-4 py-3 hover:bg-zinc-700">
                            <div class="flex-shrink-0">
                                <img class="rounded-full w-11 h-11" src="/docs/images/people/profile-picture-1.jpg" alt="Jese image">
                                <div class="absolute flex items-center justify-center w-5 h-5 ml-6 -mt-5 bg-blue-600 border border-zinc-700 rounded-full">
                                <svg class="w-3 h-3 text-zinc-100" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z"></path><path d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z"></path></svg>
                                </div>
                            </div>
                            <div class="w-full pl-3">
                                <div class="text-zinc-300 text-sm mb-1.5 ">New message from <span class="font-semibold text-grey-300">Jese Leos</span>: "Hey, what's up? All set for the presentation?"</div>
                                <div class="text-xs text-indigo-400">a few moments ago</div>
                            </div>
                            </a>
                            <a href="#" class="flex px-4 py-3 hover:bg-zinc-700">
                            <div class="flex-shrink-0">
                                <img class="rounded-full w-11 h-11" src="/docs/images/people/profile-picture-1.jpg" alt="Jese image">
                                <div class="absolute flex items-center justify-center w-5 h-5 ml-6 -mt-5 bg-blue-600 border border-zinc-700 rounded-full">
                                <svg class="w-3 h-3 text-zinc-100" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z"></path><path d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z"></path></svg>
                                </div>
                            </div>
                            <div class="w-full pl-3">
                                <div class="text-zinc-300 text-sm mb-1.5 ">New message from <span class="font-semibold text-grey-300">Jese Leos</span>: "Hey, what's up? All set for the presentation?"</div>
                                <div class="text-xs text-indigo-400">a few moments ago</div>
                            </div>
                            </a>
                        </div>

                        <a href="#" class="block py-2 text-sm font-medium text-center text-zinc-100 hover:text-zinc-100 hover:bg-zinc-700 rounded-b-lg">
                            <div class="inline-flex items-center ">
                            <svg class="w-4 h-4 mr-2 text-gray-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path><path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path></svg>
                                View all
                            </div>
                        </a>
                    </div>
    
            
                    <button data-dropdown-toggle="dropdown" class="w-12 sm:w-20 md:w-24 h-12 sm:h-20 md:h-24 flex flex-col justify-center items-center hover:bg-zinc-700 active:bg-zinc-600 transition duration-100 gap-1.5">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-zinc-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
            
                        <span class="hidden sm:block text-zinc-100 text-xs font-semibold">Account</span>
                    </button>

                    <!-- Dropdown menu -->
                    <div id="dropdown" class="z-10 hidden bg-zinc-800 bg-gradient-to-t from-zinc-900 divide-y-2 divide-zinc-700 rounded-md shadow w-56">
                        <div class="px-4 py-3 text-sm text-zinc-100">
                            <div>{{ Auth::user()->name }}</div>
                            <div class="font-medium truncate">{{ Auth::user()->email }}</div>
                        </div>
                        <ul class="py-2 text-sm text-zinc-100" aria-labelledby="avatarButton">
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-zinc-700 hover:text-zinc-100">Dashboard</a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-zinc-700 hover:text-zinc-100">Settings</a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-zinc-700 hover:text-zinc-100">Earnings</a>
                        </li>
                        </ul>
                        <div class="py-1">
                            <a href="{{ route('logout') }}" class="block px-4 py-2 hover:bg-zinc-700 text-red-500 hover:text-red-500" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log out</a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>
            
                    <a href="#" class="w-12 sm:w-20 md:w-24 h-12 sm:h-20 md:h-24 flex flex-col justify-center items-center hover:bg-zinc-700 active:bg-zinc-600 transition duration-100 gap-1.5">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-zinc-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                        </svg>
            
                        <span class="hidden sm:block text-zinc-100 text-xs font-semibold">Cart</span>
                    </a>
            
                    <button type="button" class="w-12 sm:w-20 md:w-24 h-12 sm:h-20 md:h-24 flex lg:hidden flex-col justify-center items-center hover:bg-zinc-700 active:bg-zinc-600 transition duration-100 gap-1.5">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-zinc-500" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                        </svg>
            
                        <span class="hidden sm:block text-zinc-100 text-xs font-semibold">Menu</span>
                    </button>
                    </div>
                    <!-- buttons - end -->
                </div>
            </header>

            @yield('content')
        </div>
        <!-- hero - end -->
        
        <!-- footer - start -->
        <div class="pt-4 sm:pt-10 lg:pt-12">
            <footer class="max-w-screen-2xl px-4 md:px-8 mx-auto">
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 border-t-2 border-t-zinc-700 gap-12 lg:gap-8 pt-10 lg:pt-12 mb-16">
                <div class="col-span-full lg:col-span-2">
                <!-- logo - start -->
                <div class="lg:-mt-2 mb-4">
                    <a href="/" class="inline-flex items-center text-zinc-100 text-2xl md:text-3xl font-bold gap-2.5" aria-label="logo">
                    P.P.M
                    </a>
                </div>
                <!-- logo - end -->
        
                <p class="text-gray-500 sm:pr-8 mb-6">Filler text is dummy text which has no meaning however looks very similar to real text.</p>
        
                <!-- social - start -->
                <div class="flex gap-4">
                    <a href="#" target="_blank" class="text-gray-400 hover:text-gray-500 active:text-gray-600 transition duration-100">
                    <svg class="w-5 h-5" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                    </svg>
                    </a>
        
                    <a href="#" target="_blank" class="text-gray-400 hover:text-gray-500 active:text-gray-600 transition duration-100">
                    <svg class="w-5 h-5" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                    </svg>
                    </a>
        
                    <a href="#" target="_blank" class="text-gray-400 hover:text-gray-500 active:text-gray-600 transition duration-100">
                    <svg class="w-5 h-5" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19.4168 2.4594C17.7648 0.873472 15.4785 0 12.9793 0C9.1616 0 6.81353 1.56493 5.51603 2.87767C3.91693 4.49547 3 6.64362 3 8.77138C3 11.4429 4.11746 13.4934 5.98876 14.2563C6.11439 14.3078 6.24081 14.3337 6.36475 14.3337C6.75953 14.3337 7.07233 14.0754 7.1807 13.661C7.24389 13.4233 7.39024 12.8369 7.45389 12.5823C7.59011 12.0795 7.48005 11.8377 7.18295 11.4876C6.64173 10.8472 6.38969 10.0899 6.38969 9.10438C6.38969 6.17698 8.56948 3.06578 12.6095 3.06578C15.8151 3.06578 17.8064 4.88772 17.8064 7.82052C17.8064 9.67124 17.4077 11.3852 16.6837 12.6468C16.1805 13.5235 15.2957 14.5685 13.9375 14.5685C13.3501 14.5685 12.8225 14.3272 12.4896 13.9066C12.1751 13.5089 12.0714 12.9953 12.1979 12.4599C12.3408 11.855 12.5357 11.2241 12.7243 10.6141C13.0682 9.5001 13.3933 8.44789 13.3933 7.60841C13.3933 6.17252 12.5106 5.20769 11.1969 5.20769C9.52737 5.20769 8.21941 6.90336 8.21941 9.06805C8.21941 10.1297 8.50155 10.9237 8.62929 11.2286C8.41896 12.1197 7.16899 17.4176 6.93189 18.4166C6.79478 18.9997 5.96893 23.6059 7.33586 23.9731C8.87168 24.3858 10.2445 19.8997 10.3842 19.3928C10.4975 18.9806 10.8937 17.4216 11.1365 16.4634C11.878 17.1775 13.0717 17.6603 14.2333 17.6603C16.4231 17.6603 18.3924 16.6749 19.7786 14.8858C21.1229 13.1505 21.8633 10.7318 21.8633 8.0757C21.8632 5.99923 20.9714 3.95209 19.4168 2.4594Z" />
                    </svg>
                    </a>
                </div>
                <!-- social - end -->
                </div>
        
                <!-- nav - start -->
                <div>
                <div class="text-zinc-100 font-bold tracking-widest uppercase mb-4">Products</div>
        
                <nav class="flex flex-col gap-4">
                    <div>
                    <a href="#" class="text-gray-500 hover:text-indigo-500 active:text-indigo-600 transition duration-100">Overview</a>
                    </div>
        
                    <div>
                    <a href="#" class="text-gray-500 hover:text-indigo-500 active:text-indigo-600 transition duration-100">Solutions</a>
                    </div>
        
                    <div>
                    <a href="#" class="text-gray-500 hover:text-indigo-500 active:text-indigo-600 transition duration-100">Pricing</a>
                    </div>
        
                    <div>
                    <a href="#" class="text-gray-500 hover:text-indigo-500 active:text-indigo-600 transition duration-100">Customers</a>
                    </div>
                </nav>
                </div>
                <!-- nav - end -->
        
                <!-- nav - start -->
                <div>
                <div class="text-zinc-100 font-bold tracking-widest uppercase mb-4">Company</div>
        
                <nav class="flex flex-col gap-4">
                    <div>
                    <a href="#" class="text-gray-500 hover:text-indigo-500 active:text-indigo-600 transition duration-100">About</a>
                    </div>
        
                    <div>
                    <a href="#" class="text-gray-500 hover:text-indigo-500 active:text-indigo-600 transition duration-100">Investor Relations</a>
                    </div>
        
                    <div>
                    <a href="#" class="text-gray-500 hover:text-indigo-500 active:text-indigo-600 transition duration-100">Jobs</a>
                    </div>
        
                    <div>
                    <a href="#" class="text-gray-500 hover:text-indigo-500 active:text-indigo-600 transition duration-100">Press</a>
                    </div>
        
                    <div>
                    <a href="#" class="text-gray-500 hover:text-indigo-500 active:text-indigo-600 transition duration-100">Blog</a>
                    </div>
                </nav>
                </div>
                <!-- nav - end -->
        
                <!-- nav - start -->
                <div>
                <div class="text-zinc-100 font-bold tracking-widest uppercase mb-4">Support</div>
        
                <nav class="flex flex-col gap-4">
                    <div>
                    <a href="#" class="text-gray-500 hover:text-indigo-500 active:text-indigo-600 transition duration-100">Contact</a>
                    </div>
        
                    <div>
                    <a href="#" class="text-gray-500 hover:text-indigo-500 active:text-indigo-600 transition duration-100">Documentation</a>
                    </div>
        
                    <div>
                    <a href="#" class="text-gray-500 hover:text-indigo-500 active:text-indigo-600 transition duration-100">Chat</a>
                    </div>
        
                    <div>
                    <a href="#" class="text-gray-500 hover:text-indigo-500 active:text-indigo-600 transition duration-100">FAQ</a>
                    </div>
                </nav>
                </div>
                <!-- nav - end -->
        
                <!-- nav - start -->
                <div>
                <div class="text-zinc-100 font-bold tracking-widest uppercase mb-4">Legal</div>
        
                <nav class="flex flex-col gap-4">
                    <div>
                    <a href="#" class="text-gray-500 hover:text-indigo-500 active:text-indigo-600 transition duration-100">Terms of Service</a>
                    </div>
        
                    <div>
                    <a href="#" class="text-gray-500 hover:text-indigo-500 active:text-indigo-600 transition duration-100">Privacy Policy</a>
                    </div>
        
                    <div>
                    <a href="#" class="text-gray-500 hover:text-indigo-500 active:text-indigo-600 transition duration-100">Cookie settings</a>
                    </div>
                </nav>
                </div>
                <!-- nav - end -->
            </div>
        
            <div class="text-gray-400 text-sm text-center border-t-2 border-t-zinc-700 py-8">© 2021 - Present Flowrift. All rights reserved.</div>
            </footer>
        </div>
        <!-- footer - end -->
    </div>

    {{-- <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div> --}}
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
</body>
</html>
