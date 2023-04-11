<?php

$server = "localhost" ;
$username = "root" ;
$password = "" ;
$dbname = "asmnt" ;

$conn = mysqli_connect($server, $username, $password, $dbname) ;

    if(isset($_POST['submit']))
    {
        if(!empty($_POST['product_category']))
     {

        $product_category= $_POST['product_category'];

        $query = "insert into category(product_category) values('$product_category')";

        $run = mysqli_query($conn,$query) or die(myaqli_error());

        if($run){
       header("location:viewCategory.php");
        }else{
        echo "product_category not added";
        }

        }else{
        echo "field is required" ;
        }
    }
?>