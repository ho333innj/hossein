@extends('layouts.master')
@section('title')
homepage
@endsection
@section('titr')
<h2 style="text-align:right">صفحه اصلی </h2>
@endsection
@section('main')

<div class="row">
            </div>
            <div class="row">
                  @if (count($adverts))
    @foreach($adverts as $index => $advert)
        {{-- <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $advert->title }}</h5>
                    <p class="card-text">{{ $advert->describtion }}</p>
                </div>
            </div>
        </div> --}}
        <div class="card mr:6" style="width: 18rem;">
            <img class="card-img-top" src="" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">{{ $advert->title }}</h5>
              <p class="card-text">{{ $advert->describtion }}</p>
              <a href="#" class="btn btn-primary">بیشتز</a>
            </div>
          </div>
    @endforeach
    @endif
</div>
@endsection
