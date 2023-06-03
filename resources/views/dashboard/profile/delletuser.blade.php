@extends('layouts.masterdashboard')
@section('title','ثبت آگهی')
@section('main')
        @if(session()->has('status'))
            <div class="text-green-50 m-10 p-10">
                {{session()->get('status')}}
            </div>
        @endif

@endsection
