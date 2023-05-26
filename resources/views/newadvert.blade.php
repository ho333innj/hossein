@extends('layouts.master')
@section('title','login')
@section('titr')
<h3 style="text-align:center">ثبت آگهی</h3>
@endsection
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
<div class="container" style="padding-left:30%;padding-right:30%; margin-top:100px;">

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
</div>

@endsection
