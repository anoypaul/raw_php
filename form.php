<!-- php coding -->
<?php 

  if (isset($_POST['button'])) {
    $name = $_POST['name'];
    $mail = $_POST['email'];
    if(!empty($name) && !empty($email)){
        echo "Your Data submited";
    }else{
      echo "Field should not be empty";
    }
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Form with RAW PHP</title>

</head>
<body>

    <h4>Name = <?php echo $name ?> </h4>
    <h4>Password = <?php echo $name ?> </h4>
 
    <!-- form design -->
    <div class="col-4">
        <h4 class="text-center">Data Add</h4>
        <div class="form" style="background-color: rgba(218, 209, 209, 0.877); padding: 10px; border-radius: 5px;">
        <form action="" method="post">
            <div class="mb-3">
            <label for="Name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
            <label for="Email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email">
            </div>
            <button type="submit" class="btn btn-primary" value="submitData" name = "button">submit Data</button>
        </form>
        </div>
    </div>
    </div>


</body>
</html>