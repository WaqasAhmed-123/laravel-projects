@extends('layouts.myLayout')

@section('content')

<div class="panel-body">
        <!-- Display Validation Errors -->
        @include('common.errors')

        <!-- New Task Form -->
        <form action="/task" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            <!-- Task Name -->
            <div class="form-group">
                <label for="task" class="col-sm-3 control-label">Task</label>

                <div class="col-sm-6">
                    <input type="text" name="name" id="task-name" class="form-control" required>
                </div>
            </div>

            <!-- Add Task Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Add Task
                    </button>
                </div>
            </div>
        </form>
    </div>


    <hr>

    
    @if (count($tasks) > 0)
        <div class="panel panel-default">
            <center class="panel-heading text-bold">
                <h3>Tasks</h3>
            </center>

            <div class="panel-body">
                <table class="table table-striped task-table">

                    <!-- Table Headings -->
                    <thead>
                        <th class="text-bold">Task</th>
                        <th class="text-bold text-center">Action</th>
                    </thead>

                    <!-- Table Body -->
                    <tbody>
                        @foreach ($tasks as $task)
                            <tr>
							    <!-- Task Name -->
							    <td class="table-text">
							        <div>{{ $task->name }}</div>
							    </td>

							    <!-- Delete Button -->
							    <td class="text-center">
							        <form action="/task/{{ $task->id }}" method="POST">
							            {{ csrf_field() }}
							            {{ method_field('DELETE') }}
										<input type="hidden" name="_method" value="DELETE">
							            <button class="btn btn-danger">Delete</button>
							        </form>
							    </td>
							</tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif

@endsection