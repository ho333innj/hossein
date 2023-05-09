@extends('layouts.master')
@section('title','login')
@section('main')


<div class="container" style="padding-left:30%;padding-right:30%; margin-top:100px;">
    <form style="text-align:center"  action="/advert.update/{{$advert->id}}" method="POST" >
     @csrf
     @method('PATCH')
        <div class="form-group card-body">
              <div class="form-group"  style="margin-top:20px">
                 <label for="title">نام کالا</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{$advert->title}}" >
              </div>
              <br>
                 <label for="describtion">توصیف کالا</label>
                    <input type="text" class="form-control" id="describtion" name="describtion"  value="{{$advert->describtion}}">
              </div>
              <br>
                     <div class="form-group">
                  <label for="price" >قیمت</label>
             <input type="text" class="form-control" id="price" name="price" value="{{$advert->price}}">
            </div>
            <br>
            <input type="submit" value="update">
    </form>
</div>
@endsection
