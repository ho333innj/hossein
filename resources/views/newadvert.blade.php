@extends('layouts.master')
@section('title','login')
@section('main')
<div class="container" style="padding-left:30%;padding-right:30%; margin-top:100px;">

<form style="text-align:center" method="POST" action="/advert.insert">
    @csrf
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
     <br>
    <button type="submit" class="btn btn-primary"  style="margin-top:20px" >ثبت آگهی</button>
</form>
</div>

@endsection
