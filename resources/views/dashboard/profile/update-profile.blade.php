@extends('layouts.masterdashboard')
@section('title','ثبت آگهی')
@section('main')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h2 class="card-title">ویرایش پروفایل</h2>
            </div>
                <h5>مشخصات جدید خود را وارد کنید</h5>
    <br>
<form action="/dashboard.profileupdate" method="POST">
    @csrf
        @method('PATCH')
            <label for="name">نام:</label>
            <input type="text" id="neme" name="neme" value="{{ auth()->user()->name }}"  class="@error('title') is-invalid @enderror"><br><br>
                @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            <label for="email">ایمیل:</label>
            <input type="text" id="email" name="email" value="{{ auth()->user()->email}}"  class="@error('describtion') is-invalid @enderror"><br><br>
                @error('describtion')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            <input type="submit" value="Submit">
</form>
</div>
</div>
</div>
</div>
    </section>

@endsection
