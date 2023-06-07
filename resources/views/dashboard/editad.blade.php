@extends('layouts.masterdashboard')
@section('title','ثبت آگهی')
@section('main')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h2 class="card-title">ویرایش آگهی</h2>
            </div>
                <h5>مشخصات آگهی را وارد کنید</h5>
    <br>
<form action="/advert.update/{{$advert->id}}" method="POST" enctype="multipart/form-data">
    @csrf
        @method('PATCH')
            <label for="title">نام کالا:</label><br>
            <input type="text" id="title" name="title" value="{{$advert->title}}"  class="@error('title') is-invalid @enderror"><br><br>
                @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <label for="price">قیمت:</label><br>
            <input type="text" id="price" name="price" value="{{$advert->price}}"  class="@error('price') is-invalid @enderror"><br><br>
                @error('price')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            <label for="describtion">توضیحات آگهی:</label><br>
            <input type="text" id="describtion" name="describtion" value="{{$advert->describtion}}"  class="@error('describtion') is-invalid @enderror"><br><br>
                @error('describtion')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

            <label for="file">File:</label><br>
            <input type="file" id="image" name="image"  class="@error('image') is-invalid @enderror" ><br><br>
                @error('image')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <br>
            <input type="submit" class="btn btn-primary" value="ویرایش">
</form>
</section>
</div>
@endsection
