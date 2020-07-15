<?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="product_catlog";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn){
        die("Connection failed: " . mysqli_connect_error());
    }
    $sql = "SELECT productid, productname, productprice , productdescription FROM products";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<br> Product Id: ". $row["productid"]. " - Product Name: ". $row["productname"]. " - Product Price: " . $row["productprice"] . " - Product Description: " . $row["productdescription"] . "<br>";
        }
    }
     mysqli_close($conn);
?>