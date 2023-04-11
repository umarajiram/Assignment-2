<?php

$server = "localhost" ;
$username = "root" ;
$password = "" ;
$dbname = "asmnt" ;

$conn = mysqli_connect($server, $username, $password, $dbname) ;

    if(isset($_POST['submit']))
    {
        if(!empty($_POST['productName']) && !empty($_POST['modelNo']) && !empty($_POST['cost']) && !empty($_POST['discount']) && !empty($_POST['image'])&& !empty($_POST['quantity']) && !empty($_POST['category']) && !empty($_POST['sub_category']) && !empty($_POST['sub_description']) &&!empty($_POST['description']))
     {
        $productName = $_POST['productName'];
        $original_price = $_POST['cost'];
        $discount = $_POST['discount'];
        $selling_price = $original_price-(($original_price*$discount)/100);
        $quantity= $_POST['quantity'];
        $modelNo= $_POST['modelNo'];
        $category= $_POST['category'];
        $sub_category= $_POST['sub_category'];
        $image= $_POST['image'];
        $sub_description = $_POST['sub_description'];
        $description= $_POST['description'];

        $query = "insert into product(productna,cost,sellingCost,quantity,model,category,sub_category,image,subDescription,description) values('$productName', '$original_price', '$selling_price', '$quantity' , '$modelNo', '$category', '$sub_category', '$image', '$sub_description', '$description' )";

        $run = mysqli_query($conn,$query) or die(myaqli_error());

        if($run){
       header("location:product.php");
        }else{
        echo "product not added";
        }

        }else{
        echo "all fields required" ;
        }
    }
?>