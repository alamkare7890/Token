<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
      .container{
        padding: 50px;
        border-radius: 30px;
        background-color: rgba(0, 255, 255, 0.068);
        box-shadow: 0 0 2px 2px #1010100e;
      }
    </style>
  </head>
  <body>
  <?php
          if ($_SERVER['REQUEST_METHOD'] == 'POST'){       
            $name = $_POST['forName'];
            $email = $_POST['forEmail'];
            $phone = $_POST['forPhone'];
            $query = $_POST['forQuery'];
            $mes = $_POST['formes'];
          };  
        $servname = 'localhost';
        $username = 'root';
        $database = 'form';
        $pass = '';
        $connect = mysqli_connect($servname, $username, $pass, $database);
        $insert = "INSERT INTO `data` (`name`, `email`, `phone`, `query`, `message`) VALUES ('$name', '$email', '$phone', '$query', '$mes')";
        mysqli_query($connect, $insert);
        /*if(!$insert){
          echo 'It has been Successfully Submitted';

        }else{
          echo 'Unable to Submit';
        }*/
        ?>
 
    <div class="container mt-5">
      <form action="index.php" method='post'>
        <div class="mb-3">
          <label for="forName" class="form-label">Name</label>
          <input type="text" name="forName" class="form-control" id="forName" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="forEmail" class="form-label">Email</label>
          <input type="email" name="forEmail" class="form-control" id="forEmail" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="forPhone" class="form-label">Phone</label>
          <input type="number" name="forPhone" class="form-control" id="forPhone" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="forQuery" class="form-label">Your Query</label>
          <input type="text" name="forQuery" class="form-control" id="forQuery" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label class="form-check-label" for="forcheck">Message</label>
          <textarea name="formes" id="" class="form-control"></textarea>
        </div>
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="forcheck">
          <label class="form-check-label" for="forcheck">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div> 
   

       


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
</body>
</html>