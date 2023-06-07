@extends('layouts.masterdashboard')
@section('title','ثبت آگهی')
<style>
    .card {
      box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
      transition: 0.3s;
      width: 40%;
      margin-top: 22px;
      margin-right: 25px;
      padding: 20px;

    }

    .card:hover {
      box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
    }

    .container {
      padding: 10px 16px;
      margin-top: 10px;
    }
    </style>
@section('main')
<p style="background: bisque">
    @if(session()->has('status'))
<div class="text-green-50 m-10 p-10">
    {{session()->get('status')}}
</div>
@endif
</p>


<div class="row">
</div>
<div class="row">
      @if (count($adverts))
        @foreach($adverts as $advert)
            <div class="card mr:6" style="width: 18rem;">
                <img class="card-img-top" src="..." alt="Card image cap">
            <div class="card-body">
                 <h5 class="card-title">{{ $advert->title }}</h5>
            <p class="card-text">{{ $advert->describtion }}</p>
            <form method="POST" action="/advert.edit/{{ $advert->id }}">
                @csrf
                @method('POST')
                <input type="submit" value="ویرایش" class="btn-secondary">
            </form>
            <form action="/advert.delete/{{ $advert->id }}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger btn-sm"> delete </button>
            </form>
                 {{-- <a href="#" class="btn btn-primary">بیشتز</a> --}}
            </div>
</div>
@endforeach
@endif
</div>
@endsection

