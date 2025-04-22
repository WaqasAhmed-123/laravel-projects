@extends('layouts.myLayout')

@section('title', 'Add Task')

@section('content')

    
    <div class="panel-body" style="height: 700px;">
        <!-- Display Validation Errors -->

        <!-- New Task Form -->
        <form action="{{URL::to('/postAddTask')}}" method="post">
            {{ csrf_field() }}

            <br>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">

                    <div class="panel panel-flat">
                        <div class="panel-heading">

                            <div class="text-left" id="alertMsg" style="color: {{$color}}; font-weight:bold">
                                {{$msg}}
                            </div>

                            <h3 class="panel-title" align="center"><u>Add New Task</u></h3>

                        </div>

                        <div class="panel-body">


                            <div class="form-group">
                                <label class="text-bold">Task Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter Task Name Here" required>

                            </div>


                            <div class="text-right">
                                <button type="submit" id="subBtn" class="btn buttonColor">Add <i class="icon-database-insert position-right"></i></button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            
        </form>
    </div>
    
@endsection