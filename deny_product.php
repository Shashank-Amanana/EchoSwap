<?php
include "config.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['deny'])) {
    $productId = $_POST['product_id'];
    echo $productId;
    // Delete the product from the temporary table
    $query = "DELETE FROM temporary_products WHERE pid = '$productId'";
    $stmt = $conn->query($query);
    
    // Redirect the admin back to the admin interface
    header("Location: admin.php");
    exit();
}
?>
