@extends('layouts.master')
@section('title')
    edit advert
@endsection
@section('titr')
    <h3 style="text-align:center">ویرایش</h3>
@endsection

@section('main')

<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
{{-- <div class="container" style="padding-left:30%;padding-right:30%; margin-top:100px;"> --}}
    <form style="text-align:center"  action="/advert.update/{{$advert->id}}" method="POST" enctype="multipart/form-data">
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
    </div>
</section>
@endsection
