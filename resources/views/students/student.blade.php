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
        {{-- POST == posting information to database  --}}
        {{-- {{ blade directive path to controller(only for actions) }} --}}
        {{-- route('student.store') student==file in student controller .store function --}}
        <form method="POST" action={{ route('students.store') }}>
            {{-- immediately after form tag add csrf to secure data being submitted to the database --}}
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Student ID</label>
                <input type="text" class="form-control" name="studentid" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">First Name</label>
                <input type="text" class="form-control" name="firstName">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Middle Name</label>
                <input type="text" class="form-control" name="middleName">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Last Name</label>
                <input type="text" class="form-control" name="lastName">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Address</label>
                <input type="text" class="form-control" name="address">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            
        </form>
    </div>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    </body>
</html>