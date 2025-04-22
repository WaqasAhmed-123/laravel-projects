@extends('layouts.Layout')

@section('title', 'Update Profile')

@section('content')

<div class="content bg-white m-10">
    <br />
    <br />

    <div class="row" style="height:700px;">
        <form action="{{url('/postUpdatePassword')}}" method="post">
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

                            <h5 class="panel-title" align="center"><u>Update Password</u></h5>

                        </div>

                        <div class="panel-body">


                            <div class="form-group">
                                <label>Old Password :</label>
                                <input type="password" class="form-control" required name="oldPassword">
                            </div>

                            <div class="form-group">
                                <label>New Password :</label>
                                <input type="password" class="form-control" required name="password" id="newPassword">
                            </div>

                            <div class="form-group">
                                <label>Confirm Password :</label>
                                <input type="password" class="form-control" required name="password_confirmation" onkeyup="matchPassword(this.value)">
                            </div>



                            <div class="text-right">
                                <span class="text-danger" id="errMsg" hidden>New and Confirm Password did not match</span>
                                <button type="submit" id="subBtn" class="btn btn-primary">Update <i class="icon-database-insert position-right"></i></button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </form>
    </div>

</div>

<script>

    function matchPassword(confirmPw)
    {
        var newPw = $('#newPassword').val();
        if (newPw != confirmPw)
        {
            $('#errMsg').show();
            $('#subBtn').attr("disabled", true);
        }
        else {
            $('#errMsg').hide();
            $('#subBtn').attr("disabled", false);
        }
    }
</script>

@endsection