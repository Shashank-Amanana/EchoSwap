<div class="back-ground" id="fix">
    <div class="navbar">
        <div class="navbar-container">
            <div class="laptop">
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
        <a href="index.php" style="text-decoration:None;color:black"><h1 class="titlemobile">EchoSwap.</h1></a>
        <div class="mobile">
            <div class="search_box_wrapper search_main">
                <div class="search_box_item search_box_item_1">
                    <form action="" method="post">
                        <div class="search_box">
                            <input type="text" class="input_search" placeholder="Search products" name="searchTerm" />
                            <span class="icon">
                                <ion-icon name="search-outline" class="i"></ion-icon>
                            </span>
                        </div>
                        <button type="submit" name="search">Search</button>
                    </form>
                </div>
            </div>&nbsp;
            <a href="chat.php" class="links clicked" style="margin-top:10px;margin-left:15px;margin-right:20px"><i
                    class="fa-sharp fa-regular fa-comments fa-xl"></i></a>
            <a role="button" class="button-nav btn btn-outline-dark post" href="post.php">Post</a>
            <div class="slide-menu">
                <nav>
                    <a href="shop_main.php" class="mr-6 links clicked">Shop Now</a>
                    <a href="index.php#Resources" class="mr-6 links clicked">Resources</a>
                    <a href="#fotr-Footer" class="mr-6 links clicked">Contact us</a>
                    <?php if ($user_id != '') { ?>
                        <div class="dropdown account">
                            <a class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                Account
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="profile.php">Profile</a>
                                <a href="update.php" class="dropdown-item">Update profile</a>
                                <a href="listings.php" class="dropdown-item">My Listings</a>
                                <a href="logout.php" class="dropdown-item" onclick="confirm('Confirm Logout')">Logout</a>
                            <?php } else { ?>
                                <a class="dropdown-item" href="login.php">Login</a>
                                <a class="dropdown-item" href="register.php">Register</a>
                            <?php } ?>
                        </div>
                    </div>
                    <!-- <a href="login.php" class="links clicked">Sign in</a>
                            <a href="register.php" class="links clicked">Sign up</a> -->
                </nav>
            </div>
            <div class="hamburger-menu">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>
        </div>
    </div>
</div>
<script>
        const hamburgerMenu = document.querySelector('.hamburger-menu');
        const slideMenu = document.querySelector('.slide-menu');

        hamburgerMenu.addEventListener('click', () => {
            slideMenu.style.right = '0';
        });

        slideMenu.addEventListener('click', () => {
            slideMenu.style.right = '-300px';
        });

</script>