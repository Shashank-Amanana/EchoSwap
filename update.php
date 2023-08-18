<?php

include 'config.php';

if (isset($_COOKIE['user_id'])) {
    $user_id = $_COOKIE['user_id'];
} else {
    $user_id = '';
    header('location:login.php');
}

if(isset($_REQUEST['submit'])){
  $Name=$_REQUEST['name'];
  $Number=$_REQUEST['number'];
  $Email=$_REQUEST['email'];
  $password=$_REQUEST['password'];

  if((!empty($Name)) && (!empty($Email))&& (!empty($Number)))
    
  {
    $user_id = $_COOKIE['user_id'];
    $upd=mysqli_query($database,"UPDATE 'users' SET 'name'='$Name' ,'email'='$Email','number'='$Number' WHERE 'id'='$user_id'");

    if(!empty($password)){
      $upd=mysqli_query($database,"UPDATE 'users' SET 'password'='$password' , WHERE 'id'='$user_id'");
    }
    $_COOKIE['Successmsg']="Profile has been Updated";
    header('location:profile.php');
    exit;
  }

  else{
    $_COOKIE['errorMsg']="Name, email and Number are Required";
    header('location:login.php');
    exit;
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <!-- custom css file link  -->
    <!-- <link rel="stylesheet" href="css/main.css"> -->
    <link rel="stylesheet" href="css/listings_dum.css">
</head>

<body>

    <?php include 'header.php'; ?>
    <div class="listings-main">
        <h1 id="Categories" class="listings-header section" data-content="website-headlines">
            Update Profile
        </h1>
        <section class="my-profile">
            <?php
           
            $sql="SELECT * FROM users WHERE id='$user_id'";
            $getResults= mysqli_query($conn,$sql);

            if($getResults){
              if(mysqli_num_rows($getResults)>0){
                while($row=mysqli_fetch_array($getResults)){
                  // print_r($row['id']);
                  ?>
            <div class="card mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Id :</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0" value=""><?php echo $row['id']?></p>
                        </div>
                    </div>
                    <hr>
                    <form method="POST">
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Name :</p>
                            </div>
                            <div class="col-sm-9">
                                <input type="text" name="name" value="<?php echo $row['name']?>">
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Number :</p>
                            </div>
                            <div class="col-sm-9">
                                <input type="number" value="<?php echo $row['number']?>">
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Email :</p>
                            </div>
                            <div class="col-sm-9">
                                <input type="email" value="<?php echo $row['email']?>">
                            </div>
                        </div>
                        <hr>

                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">password :</p>
                            </div>
                            <div class="col-sm-9">
                                <input type="password" value="<?php echo $row['password']?>">
                            </div>

                        </div>
                        <div class="col-sm-9" align="center">
                            <button type="submit" name="submit" class="btn btn-dark">Update</button>
                        </div>


                </div>
            </div>

            <?php
                }
              }
            }
          ?>

    </div>
    </div>




    </section>





    <?php include 'Footer.php'; ?>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

</body>

</html>