<!DOCTYPE html>
<html>

<head>
    <script src="https://cdn.tailwindcss.com/"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="css/complete.css" />
</head>

<body>
    <div class="header"></div>
    <div class="back-ground" id="fix">
        <div class="navbar">
            <div class="navbar-container">
                <a href="index.php" style="text-decoration:None;color:black">
                    <h1 id="title_main">EchoSwap.</h1>
                </a>
                <div class="search_box_wrapper search_main">
                    <div class="search_box_item search_box_item_1">
                        <form action="" method="post">
                            <div class="search_box">
                                <input type="text" class="input_search" placeholder="Search products"
                                    name="searchTerm" />
                                <span class="icon">
                                    <ion-icon name="search-outline" class="i"></ion-icon>
                                </span>
                            </div>
                            <button type="submit" name="search">Search</button>
                        </form>
                    </div>
                </div>&nbsp;
                <nav class="nav-links">
                    <a href="shop_main.php" class="mr-6 links clicked">Shop Now</a>
                    <a href="index.php#Resources" class="mr-6 links clicked">Resources</a>
                    <a href="#fotr-Footer" class="mr-6 links clicked">Contact us</a>

                </nav>
                <a href="chat.php" class="mr-6 links clicked"><i class="fa-sharp fa-regular fa-comments fa-2xl"></i></a>
                <div class="nav-click">
                    <div class="nav-buttons">
                        <a role="button" class="button-nav btn btn-outline-dark post" href="post.php">
                            Post Product
                        </a>
                        <div class="dropdown account">
                            <button class="btn btn btn-outline-darkbtn-secondary dropdown-toggle" type="button"
                                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                Account
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <?php if ($user_id != '') { ?>
                                    <a class="dropdown-item" href="profile.php">Profile</a>
                                    <a href="update.php" class="dropdown-item">Update profile</a>
                                    <a href="listings.php" class="dropdown-item">My Listings</a>
                                    <a href="logout.php" class="dropdown-item"
                                        onclick="return confirm('logout from this website?');">Logout</a>
                                <?php } else { ?>
                                    <a class="dropdown-item" href="login.php">Login</a>
                                    <a class="dropdown-item" href="register.php">Register</a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
        </script>
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
                    window.location.href = 'logout.php';
                }
            });
        }
    </script>