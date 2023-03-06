<?php 
include "connection.php";
ob_start();

// SQL Statement to Create the Table
$sql = "CREATE TABLE products (
    id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    product_name VARCHAR(100) NOT NULL,
    product_studio VARCHAR(100) NOT NULL,
    product_rating VARCHAR(10) NOT NULL,
    product_price VARCHAR(50) NOT NULL,
    product_image LONGBLOB NOT NULL
)";

// Execute the SQL Statement to Create the Table
if (mysqli_query($conn, $sql)) {
    print "Table products created successfully";
} else {
    print "Error creating table: " . mysqli_error($conn);
}

ob_end_clean();
mysqli_close($conn);

?>