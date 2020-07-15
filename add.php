<?php
    $id=$_POST["productid"];
    $name=$_POST["productname"];
    $price=$_POST["productprice"];
    $description=$_POST["productdescription"];
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="product_catlog";
    $conn=mysqli_connect($servername, $username, $password);
    if(!$conn)
        die("Connection failed: " . mysqli_connect_error());
    if(mysqli_select_db($conn,"product_catlog")==FALSE){
        $query="CREATE DATABASE product_catlog";
        if (mysqli_query($conn,$query)== FALSE)
            die("Error creating database: " . mysqli_error($conn));
        mysqli_close($conn);
        $conn=mysqli_connect($servername,$username,$password,$dbname);
        if(!$conn)
            die("Connection failed: " . mysqli_connect_error());
        $query="create table products(
            productid VARCHAR(20) NOT NULL,
            productname VARCHAR(100) NOT NULL,
            productprice VARCHAR(50) NOT NULL,
            productdescription VARCHAR(200)
            )";
            mysqli_query($conn,$query);
            mysqli_close($conn);
    }
    $conn=mysqli_connect($servername,$username,$password,$dbname);
    if(!$conn)
        die("Connection failed: " . mysqli_connect_error());
    $query = "insert into products(productid,productname,productprice,productdescription) 
    VALUES('$id','$name','$price','$description')";
    if(mysqli_query($conn,$query))
        echo "Data successfully added to data";
    mysqli_close($conn);
?>