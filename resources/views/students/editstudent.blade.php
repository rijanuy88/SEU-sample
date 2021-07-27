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

        <div class="container">
        <form method="POST" action="{{ $editstudent->id }}">
            @csrf
            @method('PUT')
            <div class="mb-3">
            <input type="hidden" class="form-control" name="id" value={{ $editstudent->id }}>
            </div>
            <div class="mb-3">
            <label class="form-label">Student ID</label>
            <input type="text" class="form-control" name="studentid" value={{ $editstudent->studentid }}>
            </div>
            <div class="mb-3">
            <label class="form-label">First Name</label>
            <input type="text" class="form-control" name="firstName" value={{ $editstudent->firstName }}>
            </div>
            <div class="mb-3">
            <label class="form-label">Middle Name</label>
            <input type="text" class="form-control" name="middleName" value={{ $editstudent->middleName }}>
            </div>
            <div class="mb-3">
            <label class="form-label">Last Name</label>
            <input type="text" class="form-control" name="lastName" value={{ $editstudent->lastName }}>
            </div>
            <div class="mb-3">
            <label class="form-label">Address</label>
            <input type="text" class="form-control" name="address" value={{ $editstudent->address }}>
            </div>
            <div class="mb-3">
            <a href="/SEU/public/students" class="btn btn-danger">Back</a>
            <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
        </div> 
        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>