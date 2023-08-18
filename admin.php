<?php include 'admin_header.php' ?>
<!-- The sidebar -->
<!-- Page content -->
<div class="content" style="padding-left: 8.5rem;padding-right: 8.5rem; ">
    <br>
    <br>
    <h1 id="lstng-Categories" class="lstng-listings-header section" data-content="website-headlines">
        Pending Requests
    </h1>
    <br>
    <br>
    <?php
    // Assuming you have established a database connection
    
    // Fetch all pending products from the temporary table
    $query = "SELECT * FROM temporary_products";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            // Display the product details in a card
            echo "<div class='product-card' style='width: 300px; border: 1px solid #ccc; border-radius: 5px; padding: 10px; margin-bottom: 10px; background-color: #f9f9f9;'>";
            echo "<h3 style='margin-top: 0;font-weight:bold'>" . $row['Product_name'] . "</h3>";
            echo "<br>";
            echo "<p style='width: 100%; word-wrap: break-word;'>" . $row['description'] . "</p>";
            echo "<p style='color:red'>Price: ₹" . $row['price'] . "</p>";
            echo "<br>";

            // Photos
            echo "<div id='productCarousel' class='carousel slide' data-ride='carousel'>";
            echo "<div class='carousel-inner'>";
            for ($i = 1; $i <= 5; $i++) {
               if (!empty($row['image_0' . $i . ''])) { 
                $photoUrl = "uploaded_files/" . $row['image_0' . $i . ''] . ""; // Adjust the path to the actual location of the photos
                echo "<div class='carousel-item" . ($i == 1 ? " active" : "") . "'>";
                echo "<img src='" . $photoUrl . "' alt='Product Photo'>";
                echo "</div>";
               }
            }
            echo "</div>";

            // Previous and Next buttons
            echo "<a class='carousel-control-prev' href='#productCarousel' role='button' data-slide='prev' style='color:black'>";
            echo "<span class='carousel-control-prev-icon' aria-hidden='true'></span>";
            echo "<span class='sr-only'>Previous</span>";
            echo "</a>";
            echo "<a class='carousel-control-next' href='#productCarousel' role='button' data-slide='next' style='color:black'>";
            echo "<span class='carousel-control-next-icon' aria-hidden='true'></span>";
            echo "<span class='sr-only'>Next</span>";
            echo "</a>";
            echo "</div>";
            // Accept Button
            echo "<form action='approve_product.php' method='POST'>";
            echo "<input type='hidden' name='product_id' value='" . $row['pid'] . "'>";
            echo "<button class='btn btn-dark' type='submit' name='approve' style='margin-top: 5px; background-color: #4CAF50; color: white; border: none; padding: 10px 20px; text-align: center; text-decoration: none; display: inline-block; font-size: 14px; cursor: pointer; border-radius: 5px; width:100%;'>Accept</button> ";
            echo "</form>";

            // Deny Button
            echo "<form action='deny_product.php' method='POST'>";
            echo "<input type='hidden' name='product_id' value='" . $row['pid'] . "'>";
            echo "<button class='btn btn-dark' type='submit' name='deny' style='margin-top: 5px; background-color: #f44336; color: white; border: none; padding: 10px 20px; text-align: center; text-decoration: none; display: inline-block; font-size: 14px; cursor: pointer; border-radius: 5px; width:100%;'>Deny</button> ";
            echo "</form>";

            echo "</div>";
        }
    } else {
        echo "No pending products.";
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>


</div>
</body>

</html>