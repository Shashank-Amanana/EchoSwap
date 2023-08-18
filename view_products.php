<?php
include 'config.php';

if (isset($_COOKIE['user_id'])) { 
    $user_id = $_COOKIE['user_id']; 
} else { 
    $user_id = '';
}

if (isset($_GET['get_id'])) { 
    $get_id = $_GET['get_id']; 
} else { 
    $get_id = ''; 
    header('Location: shop_main.php');
    exit;
}
?>


<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View products</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="css/complete.css">


</head>

<body>

    <?php include 'Header.php'; ?>
    <br>
    <section class="viewdet-view-products">
        <?php
        $select_products = "SELECT * FROM `products` WHERE pid = '$get_id'"; 
        $select_products = mysqli_query($conn, $select_products);

        if (mysqli_num_rows($select_products) > 0) {
            while ($fetch_products = mysqli_fetch_assoc($select_products)) {
                $products_id = $fetch_products['pid'];
                $prod_userid = $fetch_products['id'];

                $select_user = "SELECT * FROM `users` WHERE id = '$prod_userid' ";
                $select_user = mysqli_query($conn, $select_user); 
                $fetch_user = mysqli_fetch_assoc($select_user);
                ?>

        <div class="viewdet-container">
            <br>
            <div class="viewdet-bottom">
                <div class="viewdet-details">
                    <h1 id="lstng-Categories" class="lstng-listings-header section viewdet-main-heading"
                        data-content="website-headlines">
                        Product Details
                    </h1>
                    <br>
                    <h2 class="viewdet-name"><?= $fetch_products['Product_name']; ?></h3>
                        <br>
                        <p class="viewdet-location">
                            <i class="fas fa-map-marker-alt"></i>
                            <span><?= $fetch_products['address']; ?></span>
                        </p>
                        <div class="viewdet-info">
                            <p><i class="fa fa-indian-rupee-sign"></i><span><?= $fetch_products['price']; ?></span></p>
                            <p><i class="fas fa-user"></i><span><?= $fetch_user['name']; ?></span></p>
                            <p><i class="fas fa-phone"></i><a href="tel:12345678980"><?= $fetch_user['number']; ?></a>
                            </p>
                            <p><i class="fas fa-rectangle-list"></i><span><?= $fetch_products['category']; ?></span></p>
                        </div>
                        <br>
                        <h3 class="viewdet-name">Description</h3>
                        <p class="viewdet-description" style='width: 100%; word-wrap: break-word;'><?= $fetch_products['description']; ?></p>
                        <a href="update_products.php?pid=<?= $products_id; ?>" class="btn btn-dark">Update</a>
                </div>

                <div class="viewdet-images">
                    <br>
                    <center>
                        <h1 class="viewdet-heading">Images</h1>
                    </center>
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="uploaded_files/<?= $fetch_products['image_01']; ?>" alt="">
                            </div>
                            <?php if (!empty($fetch_products['image_02'])) { ?>
                            <div class="swiper-slide">
                                <img src="uploaded_files/<?= $fetch_products['image_02']; ?>" alt="">
                            </div>
                            <?php } ?>
                            <?php if (!empty($fetch_products['image_03'])) { ?>
                            <div class="swiper-slide">
                                <img src="uploaded_files/<?= $fetch_products['image_03']; ?>" alt="">
                            </div>
                            <?php } ?>
                            <?php if (!empty($fetch_products['image_04'])) { ?>
                            <div class="swiper-slide">
                                <img src="uploaded_files/<?= $fetch_products['image_04']; ?>" alt="">
                            </div>
                            <?php } ?>
                            <?php if (!empty($fetch_products['image_05'])) { ?>
                            <div class="swiper-slide">
                                <img src="uploaded_files/<?= $fetch_products['image_05']; ?>" alt="">
                            </div>
                            <?php } ?>
                        </div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
            </div>

        </div>
        <?php
            }
        } else {
            echo '<p class="empty">Products not found! <a href="post_products.php" style="margin-top:1.5rem;" class="btn">Add new</a></p>';
        }
        ?>

    </section>
    <br>
    <br>
    <?php include 'Footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>
    <script>
    var mySwiper = new Swiper('.swiper-container', {
        loop: false,
        speed: 1000,
        autoplay: {
            delay: 3000,
        },
        effect: 'creative',
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: 'auto',
        coverflowEffect: {
            // rotate: 50,
            stretch: 80,
            // depth: 200,
            modifier: 1,
            slideShadows: false,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
    </script>
</body>

</html>