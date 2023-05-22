@extends('layouts.master')
@section('title','login')
@section('main')
<div class="container" style="padding-left:30%;padding-right:30%; margin-top:100px;">

    <p style="text-align:center">لطفا نام کاربری و رمز خود را وارد کنید</p>
    <br>
    <form style="text-align:center" method="POST" action="">

      <div class="form-group">
        <label for="UserName">نام کاربری</label>
        <input type="text" class="form-control" id="text" name="UserName" value="">
      </div>


      <div class="form-group">
        <label for="password">کلمه عبور</label>
        <input type="password" class="form-control" id="Password" name="Password" >
      </div>



      <button type="submit" class="form-control btn btn-primary"  style="margin-top:20px" >ورود</button>
    </div>
      </form>
@endsection
