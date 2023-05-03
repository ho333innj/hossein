@extends('layouts.master')
@section('title')
listpage
@endsection
@section('titr')
<h3 style="text-align:center">لیست آگهی ها و فروشندگان</h3>
@endsection
@section('main')

 <table border='2' class="table table-striped">
            <tr>
                 <td><b>advertid</b></td>
                 <td><b>username</b></td>
                 <td><b>title</b></td>
                 <td>description</td>
            </tr>
@if(count($adverts))
    @foreach ($adverts as $adverts)
            <tr>
                <td>{{$adverts->AdvertID}}</td>
                <td>{{$adverts->User_ID}}</td>
                <td>{{$adverts->Title}}</td>
                 <td>{{$adverts->Describtion}}</td>
            </tr>
    @endforeach
@endif
 </table>

@endsection
