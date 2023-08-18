<?php
include 'config.php';
if (isset($_COOKIE['user_id'])) {
    $user_id = $_COOKIE['user_id'];
} else {
    $user_id = '';
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Echoswap</title>
    <!-- <script src="https://cdn.tailwindcss.com/"></script>
    <script type="module" src="scripts/tailwind.config.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="css/complete.css">
</head>

<body>
    <?php include "Header2.php" ?>
    <div class="subheader">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="shop_main.php">All Categories(
                    <?php echo getTotalProductCount(); ?>)
                </a>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active" aria-current="page"  href="shop_main.php?category=electronics">Electronics(
                            <?php echo getProductCount('electronics'); ?>)
                        </a>
                        <a class="nav-link" href="shop_main.php?category=furniture">Furniture(
                            <?php echo getProductCount('furniture'); ?>)
                        </a>


                        <a class="nav-link" href="shop_main.php?category=homeDecor">Home Decor(
                            <?php echo getProductCount('homeDecor'); ?>)
                        </a>


                        <a class="nav-link" href="shop_main.php?category=clothing">Clothing and Accessories(
                            <?php echo getProductCount('clothing'); ?>)
                        </a>


                        <a class="nav-link" href="shop_main.php?category=beautyproducts">Beauty and Personal Care(
                            <?php echo getProductCount('beautyproducts'); ?>)
                        </a>


                        <a class="nav-link" href="shop_main.php?category=babyproducts">Kids and Baby(
                            <?php echo getProductCount('babyproducts"'); ?>)
                        </a>


                        <a class="nav-link" href="shop_main.php?category=outdoor products">Outdoor and Recreation(
                            <?php echo getProductCount('outdoor products'); ?>)
                        </a>


                        <a class="nav-link" href="shop_main.php?category=sustainableresources">Sustainable Living
                            Resources(
                            <?php echo getProductCount('sustainableresources'); ?>)
                        </a>

                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- =============================== * product * ============================================ -->
    <?php
    if (isset($_GET['category'])) {
        $selectedCategory = $_GET['category'];

        // Fetch products from the selected category
        $query = "SELECT * FROM products WHERE category = '$selectedCategory'";
    } else {
        // If no category is selected, fetch all products
        $query = "SELECT * FROM products";
    }
    $result = $conn->query($query); ?>
    <?php include 'search.php';?>
    <div class="product">
        <?php
        if ($result->num_rows > 0) {
            echo '<div class="First_row">'; // Start a new row
        
            $count = 0; // Counter to keep track of the number of products in the current row
            while ($row = $result->fetch_assoc()) {
                $pid = $row["pid"];
                if ($count === 4) {
                    echo '</div>'; // Close the current row
                    echo '<div class="First_row">'; // Start a new row
                    $count = 0; // Reset the counter
                }

                echo '<div class="box">';
                echo '<a href="product_details.php?get_id=' . $pid . '">';
                echo '<img src="uploaded_files/' . $row['image_01'] . '" alt="">';
                echo '<h4>₹' . $row['price'] . '</h4>';
                echo '<p>' . $row['Product_name'] . '</p>';
                echo '<div class="addres_data">';
                echo '<p>' . $row['address'] . '</p>';
                echo '</div>';
                echo '</a>';
                echo '</div>';

                $count++;
            }

            echo '</div>'; // Close the last row
        } else {
            echo 'No products available.';
        }
        ?>
    </div>
    <?php
    function getProductCount($category)
    {
        global $conn;

        // Prepare a SQL query to count the products in the specified category
        $query = "SELECT COUNT(*) AS count FROM products WHERE category = '$category'";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            return $row['count'];
        } else {
            return 0;
        }
    }
    function getTotalProductCount()
    {
        global $conn;

        // Prepare a SQL query to count all products
        $query = "SELECT COUNT(*) AS count FROM products";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            return $row['count'];
        } else {
            return 0;
        }
    }
    ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
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


</body>

</html>