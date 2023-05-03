@extends('layouts.master')
@section('title','register')
@section('main')
<section id="featured" class="featured">
      <div class="container" style="padding-left:30%;padding-right:30%; margin-top:100px;">
        <p style="text-align:center">لطفا اطلاعات خود را برای ثبت نام وارد کنید</p>
        <br>

<form style="text-align:center" method="POST">

    <div class="form-group">
        <div class="form-group"  style="margin-top:20px">
            <label for="FirstName">نام </label>
            <input type="text" class="form-control" id="text" name="FirstName" value="<?php echo isset($_POST['FirstName']) ? $_POST['FirstName']:''?>" >
          </div>
          <div class="form-group"  style="margin-top:20px">
            <label for="LastName">نام خانوادگی </label>
            <input type="text" class="form-control" id="text" name="LastName" value="<?php echo isset($_POST['LastName']) ? $_POST['LastName']:''?>">
          </div>
          <br>
      <label for="UserName">نام کاربری</label>
      <input type="text" class="form-control" id="text" name="UserName" value="">
    </div>
    <br>


    <div class="form-group">
      <label for="password">کلمه عبور</label>
      <input type="password" class="form-control" id="Password" name="Password" >
    </div>
    <br>

    <div class="form-group"  style="margin-top:5px">
      <label for="confirm">تکرار کلمه عبور</label>
      <input type="password" class="form-control" id="confirm" name="confirm">
    </div>
    <br>





    <button type="submit" class="btn btn-primary"  style="margin-top:20px" >ثبت نام</button>

</div>
  </form>
@endsection
