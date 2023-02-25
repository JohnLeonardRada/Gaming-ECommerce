<?php 
include "connection.php";

// Read the Contents of the Image File and Convert to Binary Format
$img1 = mysqli_real_escape_string($conn, file_get_contents('C:\xampp\htdocs\ecommerce\img\products\p1.png'));
$img2 = mysqli_real_escape_string($conn, file_get_contents('C:\xampp\htdocs\ecommerce\img\products\p2.png'));
$img3 = mysqli_real_escape_string($conn, file_get_contents('C:\xampp\htdocs\ecommerce\img\products\p3.png'));
$img4 = mysqli_real_escape_string($conn, file_get_contents('C:\xampp\htdocs\ecommerce\img\products\p4.png'));
$img5 = mysqli_real_escape_string($conn, file_get_contents('C:\xampp\htdocs\ecommerce\img\products\p5.png'));
$img6 = mysqli_real_escape_string($conn, file_get_contents('C:\xampp\htdocs\ecommerce\img\products\p6.png'));
$img7 = mysqli_real_escape_string($conn, file_get_contents('C:\xampp\htdocs\ecommerce\img\products\p7.png'));
$img8 = mysqli_real_escape_string($conn, file_get_contents('C:\xampp\htdocs\ecommerce\img\products\p8.png'));

// Check if the Table is Empty
$sql = "SELECT COUNT(*) AS total FROM products";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

// If the Table is Empty, Insert the Data
if($row['total'] == 0){
    // SQL Statement to Insert Data
    $insertSql = "INSERT INTO products (product_name, product_studio, product_rating, product_price, product_image) 
        VALUES ('Genshin Impact', 'Hoyoverse', '5', 'Free', '$img1'),
            ('Grand Theft Auto V', 'Rockstar Games', '5', 'Php 996', '$img2'),
            ('God of War', 'Santa Monica Studio', '5', 'Php 2,490', '$img3'),
            ('Among Us', 'Innersloth', '5', 'Php 98', '$img4'),
            ('Valorant', 'Riot Games', '5', 'Free', '$img5'),
            ('Cyberpunk 2077', 'CD Projekt Red', '5', 'Php 2,430', '$img6'),
            ('Red Dead Redemption 2', 'Rockstar Games', '5', 'Php 2,300', '$img7'),
            ('Dead By Daylight', 'Behaviour Interactive', '5', 'Php 499.99', '$img8')";

    // Execute the SQL Statement to Insert Data
    if (mysqli_query($conn, $insertSql)) {
        echo "New products created successfully";
    } else {
        echo "Error inserting data: " . mysqli_error($conn);
    }
} else {
    echo "Data Already Exists in the Table.";
}


mysqli_close($conn);

?>