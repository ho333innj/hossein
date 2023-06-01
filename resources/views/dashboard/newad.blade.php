@extends('layouts.master')
@section('title','ثبت آگهی')
@section('main')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h2 class="card-title">ثبت آگهی</h2>
            </div>
                <h5>مشخصات آگهی را وارد کنید</h5>
    <br>
<form action="/advert.insert" method="POST" enctype="multipart/form-data">
    @csrf
        @method('POST')
            <label for="title">Name:</label>
            <input type="text" id="title" name="title" value="{{ old('title') }}"  class="@error('title') is-invalid @enderror"><br><br>
                @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            <label for="describtion">Email:</label>
            <input type="text" id="describtion" name="describtion" value="{{ old('describtion') }}"  class="@error('describtion') is-invalid @enderror"><br><br>
                @error('describtion')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            <label for="price">Age:</label>
            <input type="text" id="price" name="price" value="{{ old('price') }}"  class="@error('price') is-invalid @enderror"><br><br>
                @error('price')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            <label for="file">File:</label>
            <input type="file" id="image" name="image"  class="@error('image') is-invalid @enderror" ><br><br>
                @error('image')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            <input type="submit" value="Submit">
</form>
</section>
</div>
@endsection
@endsection

