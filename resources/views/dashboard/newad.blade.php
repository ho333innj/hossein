@extends('layouts.masterdashboard')
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
<form  class="form-control" action="/advert.insert" method="POST" enctype="multipart/form-data">
    @csrf
        @method('POST')

            <label for="title">نام کالا:</label><br>
            <input type="text" id="title" name="title" value="{{ old('title') }}"  class="@error('title') is-invalid @enderror"><br><br>
                @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <label for="price">قیمت:</label><br>
                <input type="text" id="price" name="price" value="{{ old('price') }}"  class="@error('price') is-invalid @enderror"><br><br>
                    @error('price')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
            <label for="describtion">توضیحات آگهی:</label><br>
            {{-- <textarea rows="5" cols="33">
                This is the default comment...
              </textarea><br> --}}
            {{-- <textarea rows="5" cols="33" id="describtion" name="describtion" value="{{ old('describtion') }}"  class="@error('describtion') is-invalid @enderror"> </textarea> --}}
            <input type="textarea" id="describtion" name="describtion" value="{{ old('describtion') }}"  class="@error('describtion') is-invalid @enderror"><br><br>
                @error('describtion')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

            <label for="file">تصویر:</label><br>
            <input type="file" id="image" name="image"  class="@error('image') is-invalid @enderror" ><br><br>
                @error('image')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            <input type="submit"  class="btn btn-primary" value="افزودن آگهی">
</form>
</div>
</div>
</div>
</div>
    </section>

@endsection


