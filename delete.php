<?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="product_catlog";
    $id = $_POST['productid'];
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn){
        die("Connection failed: " . mysqli_connect_error());
    }
    $sql = "SELECT productid FROM products WHERE productid = ".$id;
    $result = mysqli_query($conn,$sql);
    if($result->num_rows == 0){
        die("The product does'nt exist");
    }
    $sql="DELETE FROM products WHERE productid = ".$id;
    if(mysqli_query($conn,$sql)){
        echo "Record deleted successfully";
    }
    else{
        echo "Deletion Error: ".mysqli_error($conn);
    }
    mysqli_close($conn);
?>