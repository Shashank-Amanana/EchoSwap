<!DOCTYPE html>
<html>
<?php include 'config.php';
if (isset($_COOKIE['admin_id'])) {
    $admin_id = $_COOKIE['admin_id'];
} else {
    $admin_id = '';
    header('location:admin_login.php');
}?>
<head>
    <script src="https://cdn.tailwindcss.com/"></script>
    <link rel="stylesheet" href="css/complete.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <div class="header"></div>
    <div class="back-ground" id="fix">
        <div class="navbar">
            <div class="navbar-container">
                <a href="index.php" style="text-decoration:None;color:black">
                    <h1 id="title_main">EchoSwap <p style="color: gray; ">Admin.</p>
                    </h1>
                </a>
                <nav class="nav-links">
                    <a href="shop_main.php" class="mr-6 links clicked">Pending Requests</a>
                    <a href="#Resources" class="mr-6 links clicked">PlaceHolder</a>
                    <!-- <a href="#fotr-Footer" class="mr-6 links clicked">PlaceHolder</a>
                    <a href="shop_main.php" class="mr-6 links clicked">PlaceHolder</a>
                    <a href="#Resources" class="mr-6 links clicked">PlaceHolder</a>
                    <a href="#fotr-Footer" class="mr-6 links clicked">PlaceHolder</a> -->
                </nav>
                <div class="nav-click">
                    <div class="nav-buttons">
                        <div class="dropdown account">
                            <button class="btn btn btn-outline-darkbtn-secondary dropdown-toggle" type="button"
                                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                Account
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <?php if($admin_id != ''){ ?>
                                <a class="dropdown-item" href="profile.php">Profile</a>
                                <a href="#" class="dropdown-item">Update profile</a>
                                <a href="#" class="dropdown-item"
                                    onclick="event.preventDefault(); logoutConfirmation()">Logout</a>
                                <?php } 
                                else{ ?>
                                <a class="dropdown-item" href="admin_login.php">Login</a>
                                <a class="dropdown-item" href="admin_register.php">Register</a>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
    function logoutConfirmation() {
        Swal.fire({
            title: 'Logout',
            text: 'Are you sure you want to logout?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Logout',
            cancelButtonText: 'Cancel',
        }).then((result) => {
            if (result.isConfirmed) {
                // If confirmed, redirect to the logout page
                window.location.href = 'admin_logout.php';
            }
        });
    }
    </script>