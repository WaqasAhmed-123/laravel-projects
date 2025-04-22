@extends('layout.myLayout')

@section('content')

<center class="content" style="height: 700px;">
    <h1>This is Page 2</h1>
    
    <hr>
    <p>Following name is comming from Controller passed as a parameter</p>
    <h2>{{$name}}</h2>
</center>
@endsection