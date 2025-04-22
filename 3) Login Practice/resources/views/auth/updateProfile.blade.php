@extends('layouts.Layout')

@section('title', 'Update Profile')

@section('content')
<div class="content bg-white m-10">
    <br />
    <br />

    <div class="row" style="height:700px;">
        <form action="{{url('/postUpdateProfile')}}" method="post">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-md-10 col-md-offset-1">

                    <div class="panel panel-flat">
                        <div class="panel-heading">
                            
                                @if (\Session::has('success'))
                                    <div class="alert alert-success" id="alertMsg">
                                        {!! \Session::get('success') !!}
                                    </div>
                                @elseif (\Session::has('error'))
                                    <div class="alert alert-danger" id="alertMsg">
                                        {!! \Session::get('error') !!}
                                    </div>
                                @endif
                            

                            <h5 class="panel-title" align="center"><u>Update Profile</u></h5>

                        </div>

                        <div class="panel-body">


                            <input type="hidden" class="form-control" required name="EncId" id="updId" placeholder="" value="">

                            <div class="form-group">
                                <label>Name :</label>
                                <input type="text" class="form-control" required name="name" placeholder="Please Enter your Full Name" value="{{ Auth::user()->name }}">
                            </div>

                            <div class="form-group">
                                <label>Contact :</label>
                                <input type="text" class="form-control" required name="contact" placeholder="Please Enter your Contact Number" value="{{ Auth::user()->contact }}">
                            </div>

                            <div class="form-group">
                                <label>Email :</label>
                                <input type="email" class="form-control" required name="email" placeholder="Please Enter your Email" value="{{ Auth::user()->email }}">
                            </div>


                            <div class="text-right">
                                <button type="submit" id="subBtn" class="btn btn-primary">Update <i class="icon-database-insert position-right"></i></button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </form>
    </div>

</div>

@endsection