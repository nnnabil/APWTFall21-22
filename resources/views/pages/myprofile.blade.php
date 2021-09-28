@extends('layouts.app')
@section('content')
    <h1>My Profile</h1>

    <h3>Name: {{$name}}</h3> 
    <h3>ID: {{$id}}</h3> 
    <h3>DOB: {{$dob}}</h3> 
    <table>
        @foreach($names as $n)
        <tr><td class="border">{{$n}}</td></tr> 
        @endforeach
    </table>
@endsection
