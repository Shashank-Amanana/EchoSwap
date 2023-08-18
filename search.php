<?php
// include "config.php";
if (isset($_POST["search"])) {
    $searchTerm = $_POST['searchTerm'];

    $escapedSearchTerm = mysqli_real_escape_string($conn, $searchTerm);

    $searchQuery = "SELECT * FROM products WHERE Product_name LIKE '%$escapedSearchTerm%'";

    // Execute the search query
    $result = mysqli_query($conn, $searchQuery);
    ?>
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
    <div class="product" style="display:none">
   <?php
}
?> 