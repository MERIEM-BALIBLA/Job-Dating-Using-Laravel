<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
<!-- Scripts -->
@vite(['resources/js/app.js'])

     <!-- Scripts -->
     {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
    <title>Library Management</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
        }

        nav {
            background-color: #333;
            padding: 10px;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        nav ul li {
            display: inline-block;
            margin-right: 20px;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
        }

        .container {
            margin: 20px;
        }
    </style>
</head> 
<body>
<div >
    <nav class="flex justify-between">
        <a href="/">
            <div class="flex items-center">
                <img class="rounded-t-lg" src="{{URL::asset('assets/images/logo.png')}}" alt="Job Dating Logo" />
                <h2 class="text-gray-500 ml-2">Job Dating</h2>
             </div>
        </a>
    
        <ul>
            <li>
                <a href="/" 
                class="flex items-center p-2 text-base font-normal hover:bg-gray-100 dark:hover:bg-gray-700">Home</a></li>

            {{-- auth --}}
            @guest
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="flex items-center p-2 text-base font-normal hover:bg-gray-100 dark:hover:bg-gray-700" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @endif

                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="flex items-center p-2 text-base font-normal hover:bg-gray-100 dark:hover:bg-gray-700" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else 
            @if(auth()->check() && auth()->user()->email == 'admin@gmail.com')
                <li>
                    <a href="/company" class="flex items-center p-2 text-base font-normal hover:bg-gray-100 dark:hover:bg-gray-700">
                        <span class="ml-3">Dashboard</span>
                    </a>
                </li>
            @endif
        
                 {{-- <li class="nav-item dropdown">
                    <a id="navbarDropdown"  class="flex items-center p-2 text-base font-normal hover:bg-gray-100 dark:hover:bg-gray-700" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
                    <div>
                    </div>
                </li>  --}}
                <li class="">
                    <a class="flex items-center p-2 text-base font-normal hover:bg-gray-100 dark:hover:bg-gray-700" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                        <span class="flex-1 ml-3 whitespace-nowrap">{{ __('Log Out') }}</span>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
            </li>
             
            @endguest
        </ul>

    </nav>
@yield('content')
