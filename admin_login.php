<?php
include 'config.php';

if (isset($_COOKIE['admin_id'])) {
    $admin_id = $_COOKIE['admin_id'];
} else {
    $admin_id = '';
}

if (isset($_POST['lsubmit'])) {

    $email = $_POST['email'];
    $email = filter_var($email, FILTER_SANITIZE_STRING);
    $pass = sha1($_POST['pass']);
    $pass = filter_var($pass, FILTER_SANITIZE_STRING);
    $select_users = "SELECT * FROM `admin` WHERE email = '$email' AND password = '$pass' LIMIT 1";
    $select_users = mysqli_query($conn, $select_users);
    $row = mysqli_fetch_assoc($select_users);

    if (mysqli_num_rows($select_users) > 0) {
        setcookie('admin_id', $row['id'], time() + 60 * 60 * 24 * 30, '/');
        echo '<script>
            window.onload = function() {
                Swal.fire({
                    title: "Success",
                    text: "Login Successful!",
                    icon: "success",
                    showConfirmButton: false,
                    timer: 1500,
                    didClose: () => {
                        window.location.href = "admin.php";
                    }
                });
            };
        </script>';
    } else {
        $warning_msg = 'Incorrect username or password!';
        echo '<script>
            window.onload = function() {
                Swal.fire("Error", "' . $warning_msg . '", "error");
            };
        </script>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width" />
    <title>Register</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="css/complete.css"> <!-- Link to your external CSS file -->
    <!-- SweetAlert2 library -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <div class="vh-10 container">
        <div class="row">
            <div class="col-md-6">
                <div class="left-div">
                    <h1 class="title main_heading">EchoSwap <p style="color: gray; ">Admin.</p>
                    </h1>
                </div>
            </div>
            <div class="col-md-6">
                <form action="" method="POST" class="registration-form">
                    <h2 class="form-title">Login to your Account</h2>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="pass" required>
                    </div>
                    <button type="submit" class="btn btn-dark" name="lsubmit">Submit</button>
                    <p class="register-link">Don't have an account? <a href="admin_register.php">Register</a></p>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>