@extends('layouts.master')
@section('title')
listpage
@endsection
@section('titr')
<h3 style="text-align:center">لیست کاربران</h3>
@endsection
@section('main')

 <table border='2' class="table table-striped">
            <tr>
                 <td><b>id</b></td>
                 <td><b>username</b></td>
                 {{-- <td><b>email</b></td> --}}
                 {{-- <td>posts</td> --}}
            </tr>
@if(count($users))
    @foreach ($users as $user)
            <tr>
                <td>{{$user->UserID}}</td>
                <td>{{$user->UserName}}</td>
                {{-- <td>{{$user->Email}}</td> --}}
                {{-- <td>{{$user->Post}}</td> --}}
            </tr>
    @endforeach
@endif
 </table>

@endsection
