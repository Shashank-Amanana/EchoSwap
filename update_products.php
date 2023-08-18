<?php
include 'config.php';

if (isset($_COOKIE['user_id'])) {
    $user_id = $_COOKIE['user_id'];
} else {
    $user_id = '';
}

if (isset($_GET['pid'])) {
    $pid = $_GET['pid'];
} else {
    header('Location: shop_main.php');
    exit;
}

// Fetch the product details from the database
$select_product = "SELECT * FROM `products` WHERE pid = '$pid'";
$result_product = mysqli_query($conn, $select_product);

if (mysqli_num_rows($result_product) > 0) {
    $product = mysqli_fetch_assoc($result_product);
} else {
    header('Location: shop_main.php');
    exit;
}

if (isset($_POST['post'])) {
    // Retrieve the updated values from the form submission
    $updatedProductName = $_POST['Product_name'];
    $updatedPrice = $_POST['price'];
    $updatedCategory = $_POST['category'];
    $updatedAddress = $_POST['address'];
    $updatedDescription = $_POST['description'];

    $image_02 = $_FILES['image_02']['name'];
    $image_02 = filter_var($image_02, FILTER_SANITIZE_STRING);
    $image_02_ext = pathinfo($image_02, PATHINFO_EXTENSION);
    $rename_image_02 = create_unique_id() . '.' . $image_02_ext;
    $image_02_tmp_name = $_FILES['image_02']['tmp_name'];
    $image_02_size = $_FILES['image_02']['size'];
    $image_02_folder = 'uploaded_files/' . $rename_image_02;

    if (!empty($image_02)) {
        if ($image_02_size > 2000000) {
            $warning_msg[] = 'image 02 size is too large!';
        } else {
            move_uploaded_file($image_02_tmp_name, $image_02_folder);
        }
    } else {
        $rename_image_02 = '';
    }

    $image_03 = $_FILES['image_03']['name'];
    $image_03 = filter_var($image_03, FILTER_SANITIZE_STRING);
    $image_03_ext = pathinfo($image_03, PATHINFO_EXTENSION);
    $rename_image_03 = create_unique_id() . '.' . $image_03_ext;
    $image_03_tmp_name = $_FILES['image_03']['tmp_name'];
    $image_03_size = $_FILES['image_03']['size'];
    $image_03_folder = 'uploaded_files/' . $rename_image_03;

    if (!empty($image_03)) {
        if ($image_03_size > 2000000) {
            $warning_msg[] = 'image 03 size is too large!';
        } else {
            move_uploaded_file($image_03_tmp_name, $image_03_folder);
        }
    } else {
        $rename_image_03 = '';
    }

    $image_04 = $_FILES['image_04']['name'];
    $image_04 = filter_var($image_04, FILTER_SANITIZE_STRING);
    $image_04_ext = pathinfo($image_04, PATHINFO_EXTENSION);
    $rename_image_04 = create_unique_id() . '.' . $image_04_ext;
    $image_04_tmp_name = $_FILES['image_04']['tmp_name'];
    $image_04_size = $_FILES['image_04']['size'];
    $image_04_folder = 'uploaded_files/' . $rename_image_04;

    if (!empty($image_04)) {
        if ($image_04_size > 2000000) {
            $warning_msg[] = 'image 04 size is too large!';
        } else {
            move_uploaded_file($image_04_tmp_name, $image_04_folder);
        }
    } else {
        $rename_image_04 = '';
    }

    $image_05 = $_FILES['image_05']['name'];
    $image_05 = filter_var($image_05, FILTER_SANITIZE_STRING);
    $image_05_ext = pathinfo($image_05, PATHINFO_EXTENSION);
    $rename_image_05 = create_unique_id() . '.' . $image_05_ext;
    $image_05_tmp_name = $_FILES['image_05']['tmp_name'];
    $image_05_size = $_FILES['image_05']['size'];
    $image_05_folder = 'uploaded_files/' . $rename_image_05;

    if (!empty($image_05)) {
        if ($image_05_size > 2000000) {
            $warning_msg[] = 'image 05 size is too large!';
        } else {
            move_uploaded_file($image_05_tmp_name, $image_05_folder);
        }
    } else {
        $rename_image_05 = '';
    }

    $image_01 = $_FILES['image_01']['name'];
    $image_01 = filter_var($image_01, FILTER_SANITIZE_STRING);
    $image_01_ext = pathinfo($image_01, PATHINFO_EXTENSION);
    $rename_image_01 = create_unique_id() . '.' . $image_01_ext;
    $image_01_tmp_name = $_FILES['image_01']['tmp_name'];
    $image_01_size = $_FILES['image_01']['size'];
    $image_01_folder = 'uploaded_files/' . $rename_image_01;

    if ($image_01_size > 2000000) {
        $warning_msg[] = 'image 01 size too large!';
    } else {
        $insert_Product = "INSERT INTO `temporary_products`(id, pid, Product_name, address, price, category, image_01, image_02, image_03, image_04, image_05, description) VALUES('$user_id','$pid','$updatedProductName', '$updatedAddress', $updatedPrice, '$updatedCategory', '$rename_image_01', '$rename_image_02', '$rename_image_03', '$rename_image_04', '$rename_image_05', '$updatedDescription')";
        $insert_Product = mysqli_query($conn, $insert_Product);
        move_uploaded_file($image_01_tmp_name, $image_01_folder);
        $success_msg[] = 'Updation sent for Verification!';
        header('Location: view_products.php?get_id=' . $pid);
        exit();
    }

    // // ... Add other fields as per your form

    // // Perform any necessary validation and sanitization of the updated values

    // // Update the product in the database
    // $update_query = "UPDATE `products` SET `Product_name` = '$updatedProductName', `price` = '$updatedPrice', `category` = '$updatedCategory', `address` = '$updatedAddress', `description` = '$updatedDescription' WHERE pid = '$pid'";
    // $update_result = mysqli_query($conn, $update_query);

    // if ($update_result) {
    //     // Product updated successfully
    //     header('Location: view_products.php?get_id=' . $pid);
    //     exit;
    // } else {
    //     // Failed to update the product
    //     echo "Error: " . mysqli_error($conn);
    // }
}
?>


<?php include "Header.php" ?>
<div id="post_form_main">
    <section class="Product-form">
        <form action="" method="POST" enctype="multipart/form-data">
            <h3>Product details</h3>
            <hr>
            <div class="box">
                <p>Product name <span>*</span></p>
                <input type="text" name="Product_name" required maxlength="50" placeholder="Enter Product name"
                    class="input" value="<?= $product['Product_name'] ?? '' ?>">
            </div>
            <div class="flex">
                <div class="box">
                    <p>Product price <span>*</span></p>
                    <input type="number" name="price" required min="0" max="9999999999" maxlength="10"
                        placeholder="Enter Product price" class="input" value="<?= $product['price'] ?? '' ?>">
                </div>

                <div class="box">
                    <p>Category <span>*</span></p>
                    <select name="category" required class="input">
                        <option value="electronics" <?= isset($product['category']) && $product['category'] == 'electronics' ? 'selected' : '' ?>>Electronics</option>
                        <option value="furniture" <?= isset($product['category']) && $product['category'] == 'furniture' ? 'selected' : '' ?>>Furniture</option>
                        <option value="homeDecor" <?= isset($product['category']) && $product['category'] == 'homeDecor' ? 'selected' : '' ?>>Home Decor</option>
                        <option value="clothing" <?= isset($product['category']) && $product['category'] == 'clothing' ? 'selected' : '' ?>>Clothing and Accessories</option>
                        <option value="beautyproducts" <?= isset($product['category']) && $product['category'] == 'beautyproducts' ? 'selected' : '' ?>>Beauty and Personal Care
                        </option>
                        <option value="babyproducts" <?= isset($product['category']) && $product['category'] == 'babyproducts' ? 'selected' : '' ?>>Kids and Baby</option>
                        <option value="outdoor products" <?= isset($product['category']) && $product['category'] == 'outdoor products' ? 'selected' : '' ?>>Outdoor and Recreation
                        </option>
                        <option value="sustainableresources" <?= isset($product['category']) && $product['category'] == 'sustainableresources' ? 'selected' : '' ?>>Sustainable Living
                            Resources</option>
                    </select>
                </div>
                <div class="box address-box">
                    <p>Seller address <span>*</span></p>
                    <input type="text" name="address" required maxlength="100" placeholder="Enter Product full address"
                        class="input" value="<?= $product['address'] ?? '' ?>">
                </div>

                <div class="box">
                    <p>Product description <span>*</span></p>
                    <textarea name="description" maxlength="1000" class="input" required cols="30" rows="10"
                        placeholder="Write about Product..."><?= $product['description'] ?? '' ?></textarea>
                </div>
                <div class="box">
                    <p>image 01 <span>*</span></p>
                    <input type="file" name="image_01" class="input input_img" accept="image/*" required>
                </div>
                <div class="flex">
                    <div class="box">
                        <p>image 02</p>
                        <input type="file" name="image_02" class="input input_img" accept="image/*">
                    </div>
                    <div class="box">
                        <p>image 03</p>
                        <input type="file" name="image_03" class="input input_img" accept="image/*">
                    </div>
                    <div class="box">
                        <p>image 04</p>
                        <input type="file" name="image_04" class="input input_img" accept="image/*">
                    </div>
                    <div class="box">
                        <p>image 05</p>
                        <input type="file" name="image_05" class="input input_img" accept="image/*">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-dark" name="post">Update Product</button>
        </form>
    </section>
</div>


<?php include 'Footer.php'; ?>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-JydH+9HXgOlOYXtlLDR60wpl+erpaMcFNVplRZDkoBn8sJqopO/1I2QD90uzwPYB" crossorigin="anonymous">
    </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-0DT6+F6jyl1t/ftq5X8A8fDEBw+E5H68uSNRcWj/1JkwBQz4Nfmi12T/3MxbsiEJ" crossorigin="anonymous">
    </script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="js/post_page.js"></script>
<?php
if (!empty($success_msg)) {
    foreach ($success_msg as $smsg) {
        echo '<script>
                  swal({
                    title: "Success!",
                    text: "' . $smsg . '",
                    icon: "success",
                  });
                  </script>';
    }
}
if (!empty($warning_msg)) {
    foreach ($warning_msg as $wmsg) {
        echo '<script>
                  swal({
                    title: "Warning!",
                    text: "' . $wmsg . '",
                    icon: "warning",
                  });
                  </script>';
    }
}
?>
</body>

</html>