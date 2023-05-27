<div class="loader_bg">
    <div class="loader"><img src="images/loading.gif" alt="" /></div>
 </div>
 <!-- end loader -->
 <!-- header -->
 <header>
    <div class="header">
       <div class="container-fluid">
          <div class="row d_flex">
             <div class=" col-md-2 col-sm-3 col logo_section">
                <div class="full">
                   <div class="center-desk">
                      <div class="logo">
                         <a href="index.html"><img src="images/logo.png" alt="#" /></a>
                      </div>
                   </div>
                </div>
             </div>
             <div class="col-md-8 col-sm-9">
                <nav class="navigation navbar navbar-expand-md navbar-dark ">
                   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                   <span class="navbar-toggler-icon"></span>
                   </button>
                   <div class="collapse navbar-collapse" id="navbarsExample04">
                      <ul class="navbar-nav mr-auto">
                         <li class="nav-item active">
                            <a class="nav-link" href="index.html">Home</a>
                         </li>
                         <li class="nav-item">
                            <a class="nav-link" href="about.html">About</a>
                         </li>
                         <li class="nav-item">
                            <a class="nav-link" href="we_do.html">What we do</a>
                         </li>
                         <li class="nav-item">
                            <a class="nav-link" href="portfolio.html">Portfolio </a>
                         </li>
                         <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact Us</a>
                         </li>
                      </ul>
                   </div>
                </nav>
             </div>
             <div class="col-md-2 d_none">
                <ul class="email text_align_right">
                   <li> <a href="Javascript:void(0)"> Login </a></li>
                   <li> <a href="Javascript:void(0)"> <i class="fa fa-search" style="cursor: pointer;" aria-hidden="true"> </i></a> </li>
                </ul>
             </div>
          </div>
       </div>
    </div>
 </header>






{{-- <header class="bg-dark py-4 ">
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
                        <li class="nav-item"><a class="nav-link" href="{{route('newadvertshow')}}">ثبت آگهی</a></li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">پروفایل</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item"  href="{{ route('login.user') }}">ورود</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="{{ route('register.user') }}">ثبت نام</a></li>

                            </ul>
                        </li>

                    </ul>
                    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
                        @if (Route::has('login'))
                            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                                @auth
                                    <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                                @else
                                    <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">ورود</a>

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">ثبت نام</a>
                                    @endif
                                @endauth
                            </div>
                        @endif
                        </div>

                </div>
            </div>
        </nav>
    </div>
</header> --}}
{{-- py-5
px-4 px-lg-5 my-5 --}}
