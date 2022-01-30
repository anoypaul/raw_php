<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Form page</title>
</head>
<body>
    <!-- form design -->
    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <form class="mt-5 p-3 border" action="id.php" method="post">
                    <h4 class="text-center"> Student Id Form</h4>
                    <hr>
                    <div class="row mb-3">
                        <label for="Name" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="std_name" name="std_name">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="Phone" class="col-sm-2 col-form-label">Phone</label>
                        <div class="col-sm-10">
                        <input type="phone" class="form-control" id="std_phone" name="std_phone">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="Email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                        <input type="email" class="form-control" id="std_email" name="std_email">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="Course" class="col-sm-2 col-form-label">Course</label>
                        <div class="col-sm-10">
                        <input type="password" class="form-control" id="std_course" name="std_course">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="Batch No" class="col-sm-2 col-form-label">Batch No</label>
                        <div class="col-sm-10">
                        <input type="password" class="form-control" id="std_batch_no" name="std_batch_no">
                        </div>
                    </div>
                    <div class="text-center">
                        <input class="btn btn-primary" type="submit" value="Submit Data" name="btn">
                    </div>
                </form>
            </div>
            <div class="col-3"></div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>