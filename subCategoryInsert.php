<?php

$server = "localhost" ;
$username = "root" ;
$password = "" ;
$dbname = "asmnt" ;

$conn = mysqli_connect($server, $username, $password, $dbname) ;

    if(isset($_POST['submit']))
    {
        if(!empty($_POST['product_subcategory']))
     {

        $product_subcategory= $_POST['product_subcategory'];

        $query = "insert into subcategory(product_subcategory) values('$product_subcategory')";

        $run = mysqli_query($conn,$query) or die(myaqli_error());

        if($run){
       header("location:viewSubCategory.php");
        }else{
        echo "product_subcategory not added";
        }

        }else{
        echo "field is required" ;
        }
    }
?>