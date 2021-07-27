{{-- displaying Student records --}}
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <title>SEU</title>
    </head>
    <body>
    <h1>South East University</h1>
    
    <div class="div container">
        <table class="table">
            {{-- column heading --}}
            <thead>
                <tr>
                <th scope="col">Student ID</th>
                <th scope="col">First Name</th>
                <th scope="col">Middle Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                {{-- $studentslist from controller  --}}
                {{-- $student like i in for loop --}}
                @foreach ($studentlist as $student)
                    <tr>
                        <td>{{ $student->studentid }}</td>
                        <td>{{ $student->firstName }}</td>
                        <td>{{ $student->middleName }}</td>
                        <td>{{ $student->lastName }}</td>
                        <td>
                            {{-- pass info in modal --}}
                            <button id="edit-modal"type="button" class="edit-modal btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#editStudent" 
                            {{-- variable names for javascript --}}
                            data-id ="{{ $student->id }}"
                            data-studentid="{{ $student->studentid }}"
                            data-fname="{{ $student->firstName }}"
                            data-mname="{{ $student->middleName }}"
                            data-lname="{{ $student->lastName }}"
                            data-address="{{ $student->address }}"
                            >
                            Edit
                            </button>
                            <button type="button" class="delete-modal btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deleteStudent"
                            data-id ="{{ $student->id }}"
                            data-studentid="{{ $student->studentid }}"
                            >
                                Delete
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{-- {{ route('students.create') }} go to create function in controller --}}
        <a href="{{ route('students.create') }}" class="btn btn-primary">Add Student</a>
    </div>

    {{-- modal for editing student info --}}
    <div class="modal fade" tabindex="-1" aria-hidden="true" id="editStudent">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Student</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            {{-- <form method="POST" action={{ route('students.store') }}> --}}
            @if (isset($student))    
            <form method="POST" action="students/{{ $student->studentid }}">                
                {{-- immediately after form tag add csrf to secure data being submitted to the database --}}
                @csrf
                {{-- overide post method --}}
                @method('PUT')
                <div class="mb-3">
                    <input idtype="text" class="form-control" name="id" id="editedid" hidden>
                    <label for="exampleFormControlInput1" class="form-label" >Student ID</label>
                    <input idtype="text" class="form-control" name="studentid" required id="editStudentid">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">First Name</label>
                    <input type="text" class="form-control" name="firstName" id="editfirstName">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Middle Name</label>
                    <input type="text" class="form-control" name="middleName" id="editmiddleName">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Last Name</label>
                    <input type="text" class="form-control" name="lastName" id="editlastName">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Address</label>
                    <input type="text" class="form-control" name="address" id="editaddress" >
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
            @endif
        </div>
        </div>
    </div>
    </div>

    {{-- Delete Modal --}}
    <div class="modal fade" tabindex="-1" aria-hidden="true" id="deleteStudent">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Delete Student</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            {{-- <form method="POST" action={{ route('students.store') }}> --}}
            @if (isset($student))   
            <form method="POST" action="students/{{ $student->studentid }}">                
                {{-- immediately after form tag add csrf to secure data being submitted to the database --}}
                @csrf
                {{-- overide post method --}}
                @method('DELETE')
                <div class="mb-3">
                    <input idtype="text" class="form-control" name="id" id="deleteid" hidden>
                    <label for="exampleFormControlInput1" class="form-label" >Student ID</label>
                    <input idtype="text" class="form-control" name="studentid" required id="deleteStudentId">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Delete</button>
                </div>
            </form>
            @endif
        </div>
        </div>
    </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    

        
    <!-- Optional JavaScript; choose one of the two! -->
    <script type="text/javascript">
        $(function(){
            // call function when clicking .edit-modal classname button
            $(document).on('click','.edit-modal',function(){
                // this means this page; .data('id') means data-id from data-id ="$student->id"
                var id = $(this).data('id');
                var studentid = $(this).data('studentid');
                var fname = $(this).data('fname');
                var mname = $(this).data('mname');
                var lname = $(this).data('lname');
                var address = $(this).data('address');
                
                console.log("studentid")

                // assigning values in form
                // '#editStudentid' another variable; form in modal
                $('#editedid').val(id);
                $('#editStudentid').val(studentid);
                $('#editfirstName').val(fname);
                $('#editmiddleName').val(mname);
                $('#editlastName').val(lname);
                $('#editaddress').val(address);


            });
        });
    </script>
{{-- delete --}}
    <script>
        $(function(){
            // call function when clicking .edit-modal classname button
            $(document).on('click','.delete-modal',function(){
                // this means this page; .data('id') means data-id from data-id ="$student->id"
                var id = $(this).data('id');
                var studentid = $(this).data('studentid');
                console.log("studentid")

                // assigning values in form
                // '#editStudentid' another variable; form in modal
                $('#deleteid').val(id);
                $('#deleteStudentId').val(studentid);
            });
        });
    </script>

    </body>
</html>