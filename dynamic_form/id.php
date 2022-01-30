<?php 
    if (isset($_POST['btn'])) {
        $name = $_POST['std_name'];
        $phone = $_POST['std_phone'];
        $email = $_POST['std_email'];
        $course = $_POST['std_course'];
        $batch_no = $_POST['std_batch_no'];
    }
?>


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
                <div class="card mt-5 p-3" style="">
                    <h4 class="text-center"><strong>Student Id</strong></h4>
                    <hr>
                    <div class="row">
                        <div class="col-4">
                            <img src="..." class="card-img-top" alt="...">
                        </div>
                        <div class="col-8">
                            <div class="card-body">
                                <h6>Name : <?php if(isset($name)){ echo $name;} ?> </h6>
                                <h6>Phone : <?php if(isset($phone)){ echo $phone;} ?> </h6>
                                <h6>Email : <?php if(isset($email)){ echo $email;} ?> </h6>
                                <h6>Course : <?php if(isset($course)){ echo $course;} ?> </h6>
                                <h6>Batch No : <?php if(isset($batch_no)){ echo $batch_no;} ?> </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3"></div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>