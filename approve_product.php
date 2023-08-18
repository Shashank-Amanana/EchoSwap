<?php
include 'config.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['approve'])) {
    $productId = $_POST['product_id'];
    $check_query = "SELECT COUNT(*) AS count FROM `products` WHERE pid = '$productId'";
    $check_result = mysqli_query($conn, $check_query);
    $row = mysqli_fetch_assoc($check_result);
    $productExists = $row['count'] > 0;

    // Fetch the product details from the temporary table
    $query = "SELECT * FROM temporary_products WHERE pid = '$productId'";
    $result = $conn->query($query);
    $product = $result->fetch_assoc();
    if ($productExists) {
        // Update the existing product in the products table
        $update_query = "UPDATE `products` SET `Product_name`= '" . $product['Product_name'] . "',`address`= '" . $product['address'] . "',`price`='" . $product['price'] . "',`category`='" . $product['category'] . "',`image_01`='" . $product['image_01'] . "',`image_02`='" . $product['image_02'] . "',`image_03`='" . $product['image_03'] . "',`image_04`='" . $product['image_04'] . "',`image_05`='" . $product['image_05'] . "',`description`='" . $product['description'] . "' WHERE `pid`='$productId'";
        $update_result = mysqli_query($conn, $update_query);

        if ($update_result) {
            // Product updated successfully
            // Delete the product from the temporary table after updating
            $delete_query = "DELETE FROM `temporary_products` WHERE pid = '$productId'";
            $delete_result = mysqli_query($conn, $delete_query);

            if ($delete_result) {
                // Product deleted from the temporary table successfully
                // Redirect to a page indicating successful verification and update
                header('Location: admin.php');
                exit;
            } else {
                // Failed to delete the product from the temporary table
                echo "Error: " . mysqli_error($conn);
            }
        } else {
            // Failed to update the product
            echo "Error: " . mysqli_error($conn);
        }
    } else {

        // Insert the product into the approved products table
        $query = "INSERT INTO `products`(`id`, `pid`, `Product_name`, `address`, `price`, `category`, `image_01`, `image_02`, `image_03`, `image_04`, `image_05`, `description`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("ssssisssssss", $product['id'], $product['pid'], $product['Product_name'], $product['address'], $product['price'], $product['category'], $product['image_01'], $product['image_02'], $product['image_03'], $product['image_04'], $product['image_05'], $product['description']);
        $stmt->execute();
        $stmt->close();

        // Delete the product from the temporary table
        $query = "DELETE FROM temporary_products WHERE pid = '$productId'";
        $stmt = $conn->query($query);

        // Redirect the admin back to the admin interface
        header("Location: admin.php");
        exit();
    }
}
?>