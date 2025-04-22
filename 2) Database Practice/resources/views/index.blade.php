@extends('layouts.myLayout')

@section('title', 'Dashboard')

@section('content')

<center class="content" style="height: 700px;">
    <h1>Dashboard</h1>
<hr>

<div class="row">
    <div class="col-lg-4"></div>
    <div class="col-lg-4 bg-success p-20 border-radius text-bold">
        Total Tasks
        <br>
    
        {{$taskCount}}
    </div>
</div>
    
    
</center>
@endsection