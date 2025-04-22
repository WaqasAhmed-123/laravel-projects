@extends('layouts.myLayout')

@section('title', 'Update Task')

@section('content')

    
    <div class="panel-body" style="height: 700px;">
        <!-- Display Validation Errors -->

        <!-- New Task Form -->
        <form action="{{URL::to('/postUpdateTask')}}" method="post">
            {{ csrf_field() }}

            <br>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">

                    <div class="panel panel-flat">
                        <div class="panel-heading">

                            <div class="text-left" id="alertMsg" style="color: {{$color}}; font-weight:bold">
                                {{$msg}} 
                            </div> 

                            <h3 class="panel-title" align="center"><u>Update Task</u></h3>

                        </div>

                        <div class="panel-body">


                            <input type="hidden" name="id" class="form-control" required value="{{$task[0]->id}}">

                            <div class="form-group">
                                <label class="text-bold">Task Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter Task Name Here" required value="{{$task[0]->name}}">

                            </div>


                            <div class="text-right">
                                <button type="submit" id="subBtn" class="btn buttonColor">Update <i class="icon-database-insert position-right"></i></button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            
        </form>
    </div>
    
@endsection