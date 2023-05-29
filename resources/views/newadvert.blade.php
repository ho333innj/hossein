@extends('layouts.master')
@section('title','login')
{{-- @section('titr')
<h3 style="text-align:center">ثبت آگهی</h3>
@endsection --}}
@section('main')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="container" style="padding-left:30%;padding-right:30%; margin-top:25px;">
    <h6 style="text-align:center">لازم است برای ثبت آگهی وارد حساب کاری خود شوید</h6>
    <br>
    @if (Route::has('login'))
    <form style="text-align:center" method="POST" action="{{ route('login') }}">
      <div class="form-group">
      <button type="submit" class="form-control btn btn-primary"  style="margin-top:20px" >ورود</button>
      </form>
         <br>
             <br>
                <h6 style="text-align:center">عضو سایت نیسی؟؟</h6>
            <div>
        <form style="text-align:center" method="POST" action=action="{{ route('login') }}">
        <button type="submit" class="form-control btn btn-success"  style="margin-top:20px" >ایجاد حساب کاربری</button>
    </form>
</div>
</div></div>
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



{{-- <div class="container" style="padding-left:30%;padding-right:30%; margin-top:100px;">
<form style="text-align:center" method="POST" action="/advert.insert" enctype="multipart/form-data">
    @csrf
    @method('post')

    <div class="form-group card-body">
          <div class="form-group"  style="margin-top:20px">
         <label for="title">نام کالا</label>
      <input type="text" class="form-control" id="title" name="title">
          </div>
             <br>
                 <label for="describtion">توصیف کالا</label>
                      <input type="text" class="form-control" id="describtion" name="describtion">
                          </div>
                      <br>
                 <div class="form-group">
              <label for="price">قیمت</label>
         <input type="text" class="form-control" id="price" name="price" >
        </div>
        <div class="form-group">
            <label for="id">آیدی فرستنده</label>
       <input type="id" class="form-control" id="id" name="id" >
      </div>
        <div class="form-group"  style="margin-top:20px">
            <label for="image">تصویر</label>
         <input type="file" class="form-control" id="image" name="image">
             </div>
     <br>
    <button type="submit" class="btn btn-primary"  style="margin-top:20px" >ثبت آگهی</button>

</form>
</div> --}}

@endsection
