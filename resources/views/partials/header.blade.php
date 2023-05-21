<header class="bg-dark py-4 ">
    <div class="container ">
        <div class="text-right text-white">
            <h1 class="display-6"> Hossein nj</h1>
            <br>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{ route('home') }}">صفحه اصلی</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">درباره ما</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('advertslist')}}">لیست آگهی ها</a></li>
                        {{-- <li class="nav-item"><a class="nav-link" href="{{route('userslist')}}">لیست کاربران</a></li> --}}
                        <li class="nav-item"><a class="nav-link" href="{{route('newadvertshow')}}">ثبت آگهی</a></li>
                        {{-- <li class="nav-item"><a class="nav-link" href="{{route('editadvertshow')}}">ویرایش آگهی</a></li> --}}

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">پروفایل</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                {{-- <li><a class="dropdown-item"  href="{{ route('login.user') }}">ورود</a></li> --}}
                                <li><hr class="dropdown-divider" /></li>
                                {{-- <li><a class="dropdown-item" href="{{ route('register.user') }}">ثبت نام</a></li> --}}

                                {{-- <li><a class="dropdown-item" href="#!">New Arrivals</a></li> --}}
                            </ul>
                        </li>

                    </ul>
                    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
                        @if (Route::has('login'))
                            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                                @auth
                                    <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                                @else
                                    <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                                    @endif
                                @endauth
                            </div>
                        @endif
                        </div>

                </div>
            </div>
        </nav>
    </div>
</header>
{{-- py-5
px-4 px-lg-5 my-5 --}}
