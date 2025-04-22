@extends('layouts.myLayout')

@section('title', 'View Tasks')

@section('content')

<div class="modal" id="deleteModal">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title text-center">Do You Want to Delete?</h4>
                <button type="button" class="close text-danger" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer text-center">
                <a class="btn btn-danger" id="deleteId">Yes</a>
                <button type="button" class="btn btn-primary" data-dismiss="modal">No</button>
            </div>

        </div>
    </div>
</div>


<div class="content">

    <div class="text-left" id="alertMsg" style="color: {{$color}}; font-weight:bold">
        {{$msg}}
    </div>

    <center><h3><u>Tasks List</u></h3></center>

    <div class="datatable-scroll m-10">
            <table class="table datatable-basic dataTable no-footer" id="table">
                <thead>
                    <tr role="row">
                        <th class="text-bold" >
                            Name
                        </th>

                        <th class="text-center text-bold">
                            Actions
                        </th>

                    </tr>
                </thead>


                <tbody>

                    @if (count($tasks) > 0)
                        @foreach ($tasks as $task)

                            <tr>

                                <td>
                                    {{ $task->name }}
                                </td>


                                <td class="text-center">
                                    <ul class="icons-list">
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                <i class="icon-menu9"></i>
                                            </a>

                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="/updateTask/{{ $task->id}}"><i class="icon-pencil"></i> Edit</a></li>
                                                <!-- <li><a href="/deleteTask/{{ $task->id}}"><i class="icon-database-remove"></i> Delete</a></li> -->
                                                <li><a onclick="deleteFunction('{{ $task->id}}')" data-toggle="modal" data-target="#deleteModal"><i class="icon-database-remove"></i> Delete</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            @endforeach
                        @endif
                </tbody>
            </table>

</div>

</div>

<script type="text/javascript">
    
    $("#table").dataTable();

    function deleteFunction(id) {
        var a = document.getElementById('deleteId');
        a.href = "/deleteTask/" + id;
    }
</script>


@endsection