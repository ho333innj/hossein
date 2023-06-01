<nav class="main-header navbar navbar-expand bg-black navbar-dark border-bottom text-secondary ">
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
            <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{ route('home') }}">صفحه اصلی</a></li>
            <li class="nav-item"><a class="nav-link" href="#!">درباره ما</a></li>
            <li class="nav-item"><a class="nav-link" href="{{route('newad')}}">ثبت آگهی</a></li>
            <li class="nav-item"><a class="nav-link" href="{{route('myads')}}">آگهی های من</a></li>

            <li class="nav-item text-danger"><a class="nav-link" href="#!">خروج</a></li>
        </ul>
    </div>
    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="جستجو" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fa fa-search"></i>
          </button>
        </div>
      </div>
    </form>
  </nav>
