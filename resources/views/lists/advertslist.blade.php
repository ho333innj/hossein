@extends('layouts.master')
@section('title')
listpage
@endsection
@section('titr')
<h3>لیست آگهی ها</h3>
@endsection
@section('main')

 <table border='2' class="table table-striped">
            <tr>
                 <td><b>advertid</b></td>
                <td><b>title</b></td>
{{--                 <td><b>description</b></td> --}}
                <td><b>edit</b></td>
                <td><b>delete</b></td>

            </tr>
@if(count($adverts))
    @foreach ($adverts as $advert)
            <tr>
                   <td>{{$advert->id}}</td>

                   <td>
                         <form action="" method="post">
                            @csrf
                            @method('post')
                            <a href="/advert.edit/{{$advert->id}}"> {{$advert->title}}</a>
                         </form>
                   </td>

                   <td>
                         <form action="/advert.edit/{{$advert->id}}" method="post">
                            @csrf
                            <button class="btn btn-primary btn-sm"> edit </button>
                         </form>
                   </td>

                   <td>
                         <form action="/advert.delete/{{$advert->id}}" method="post">
                            @csrf
                            <button class="btn btn-danger btn-sm"> delete </button>
                          </form>
                   </td>
            </tr>


    @endforeach
@endif
 </table>

@endsection

