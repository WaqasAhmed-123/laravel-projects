@extends('layouts.Layout')

@section('title', 'View Users')

@section('content')


<img id="loadImg"src={{url('theme/assets/images/loading.gif')}} width='150' style="position:fixed; margin-top:20%; margin-left:35%; z-index:111; display:none" />


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


<div class="modal fade" id="updateModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-header">
                
                <h5 class="text-center text-bold">Update User</h5>
                
                <button type="button" class="close text-danger" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form action="{{url('/postUpdateUser')}}" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" id="updId" />


                    <div class="form-group">
                        <label class="text-bold">Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Full Name of Staff" required id="updName">
                    </div>

                    <div class="form-group">
                        <label class="text-bold">Contact</label>
                        <input type="text" name="contact" class="form-control" placeholder="Add Contact Number Here" required id="updContact">
                    </div>

                    <div class="form-group">
                        <label class="text-bold">Email</label>
                        <input type="email" name="email" class="form-control" onkeyup="validateEmail(this.value)" placeholder="Add Email Here" required id="updEmail">
                        <span class="text-danger" id="updEmailErrMsg"></span>
                    </div>


                    <div class="modal-footer">
                        <button type="submit" value="submit" class="btn btn-primary" id="updSubBtn">Update</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<div class="clearfix">

    <h3 class="text-center">
        <u>User List</u>
    </h3>
</div>
<br />

<div style="min-height:700px" class="m-10">

    
    @if (\Session::has('success'))
        <div class="alert alert-success" id="alertMsg">
            {!! \Session::get('success') !!}
        </div>
    @elseif (\Session::has('error'))
        <div class="alert alert-danger" id="alertMsg">
            {!! \Session::get('error') !!}
        </div>
    @endif



    <div class="datatable-scroll table-bordered p-10">
        <table class="table no-footer table-responsive table-striped" id="userTable">
            <thead class="bg-blue-300">
                <tr>
                    <th class="text-bold">
                        Name
                    </th>
                    <th class="text-bold">
                        Contact
                    </th>
                    <th class="text-bold">
                        Email
                    </th>
                    
                    <th class="text-bold text-center">
                        Action
                    </th>
                </tr>
            </thead>

            <!-- <tbody>

                    @if (count($users) > 0)
                        @foreach ($users as $user)

                            <tr>

                                <td>
                                    {{ $user->name }}
                                </td>

                                <td>
                                    {{ $user->contact }}
                                </td>

                                <td>
                                    {{ $user->email }}
                                </td>

                                <td class="text-center">
                                    <ul class="icons-list">
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                <i class="icon-menu9"></i>
                                            </a>

                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a onclick="updateFunction({{ $user->id}})"><i class="icon-pencil"></i> Edit</a></li>
                                                <li><a onclick="deleteFunction('{{ $user->id}}')" data-toggle="modal" data-target="#deleteModal"><i class="icon-database-remove"></i> Delete</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            @endforeach
                        @endif
                </tbody> -->
        </table>
    </div>
</div>


<script type="text/javascript">
    
    var token = $('meta[name="csrf-token"]').attr('content');

    //$("#userTable").dataTable();


    $('#userTable').DataTable(
    {
        "ajax":
        {
            "url": '/getUsersList',
            "type": "POST",
            "datatype": "json",
            "data": { _token:token },
        },
        'columns':
        [
            { "data": "name", "name": "name" },
            { "data": "contact", "name": "contact" },
            { "data": "email", "name": "email" },
            { "data": "Action", "name": "0" }
        ],
        'columnDefs':
        [
            {
                "targets": 0,
                'className': 'col-lg-2',
                "render": function(data, type, full, meta) {
                    return full.name;
                }
            },
            {
                "targets": 1,
                'className': 'col-lg-3',
                "render": function (data, type, full, meta) {
                    return full.contact;
                }
            },
            {
                "targets": 2,
                'className': 'col-lg-4',
                "render": function (data, type, full, meta) {
                    return full.email;
                }
            },
            {
                "targets": 3,
                'className': 'col-lg-1',
                'searchable': false,
                'orderable': false,
                "render": function (data, type, full, meta)
                {
                    return '<ul class="icons-list text-center"> <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-menu9"></i> </a> <ul class="dropdown-menu dropdown-menu-right"> ' +
                        '<li><a class="text-primary" onclick="updateFunction(' + full.id + ')"><i class="icon-pencil"></i> Edit</a></li>' +
                        '<li><a class="text-danger" onclick="deleteFunction(' + full.id + ')" data-toggle="modal" data-target="#deleteModal"><i class="glyphicon glyphicon-floppy-remove"></i> Delete</a></li>' +
                        '</ul></li></ul>';
                }
            }
        ],
       "serverSide": "true",
        "processing": "true",
        "language":
        {
            "processing": "<i class='icon-spinner spinner icon-3x'></i>",
            "search": "<span>Search :</span> _INPUT_",
            "searchPlaceholder": "Type to Filter",
            "lengthMenu": "<span>Show :</span> _MENU_",
            "paginate": { 'first': 'First', 'last': 'Last', 'next': '&rarr;', 'previous': '&larr;' }
        },
    });




    function updateFunction(id)
    {
        $("#loadImg").show();

        $.ajax({
            type: 'POST',
            url: "/getUserById",
            dataType: "json",
            data: {
                _token:token , id: id
            },
            success: function (response)
            {
                
                $("#updId").val(response.id);

                $("#updName").val(response.name);
                $("#updContact").val(response.contact);
                $("#updEmail").val(response.email);
               

                $("#loadImg").hide();
                $("#updateModal").modal('show');
            },
            error: function ()
            {
                $("#loadImg").hide();

                alert("ajax Failed");
            }
        });

    }

    // function validateEmail(email)
    // {
    //     var id = $('#updId').val();
    //     if (email != "" && id != "")
    //     {
    //         $.ajax({
    //             type: 'POST',
    //             url: "../Admin/ValidateEmail",
    //             dataType: "json",
    //             data: {
    //                 email: email, id: id
    //             },
    //             success: function (response)
    //             {
    //                 if (response == true)
    //                 {
    //                     $('#updEmailErrMsg').text("");
    //                     $('#updSubBtn').attr('disabled', false);
    //                 }
    //                 else {
    //                     $('#updEmailErrMsg').text("Duplicate Email");
    //                     $('#updSubBtn').attr('disabled', true);
    //                 }
    //             },
    //             error: function ()
    //             {
    //                 $('#updEmailErrMsg').text("");
    //                 $('#updSubBtn').attr('disabled', false);

    //                 alert("Ajax failed");
    //             }
    //         });
    //     }

    // }



    function deleteFunction(id) {
        var a = document.getElementById('deleteId');
        a.href = "/deleteUser/" + id;
    }
</script>


@endsection