<?php
include "connection.php";

// Select all products from the database
$sql = "SELECT * FROM products
        LIMIT 8";
$result = mysqli_query($conn, $sql);

// Check if there are any products
if (mysqli_num_rows($result) > 0) {
  // Start the product section
  echo '<h2>Highest Rated Games</h2>';
  echo '<p>Most Played</p>';
  echo '<div class="pro-container">';

  // Loop through the products and generate the HTML for each product
  while ($row = mysqli_fetch_assoc($result)) {
    echo '<div class="pro">';
    echo '<img src="data:image/png;base64,' . base64_encode($row['product_image']) . '" alt="" />';
    echo '<div class="desc">';
    echo '<span>' . $row['product_studio'] . '</span>';
    echo '<h5>' . $row['product_name'] . '</h5>';
    echo '<div class="star">';
          for ($i = 0; $i < $row['product_rating']; $i++) {
              echo '<i class="fas fa-star"></i>';
          }
    echo '</div>';
    echo '<h4>' . $row['product_price'] . '</h4>';
    echo '</div>';
    echo '<a href="#"><i class="fa fa-cart-shopping fa-xl cart"></i></a>';
    echo '</div>';
  }

  // End the product section
  echo '</div>';
  
} else {
  echo 'No products found.';
}

mysqli_close($conn);

?>
