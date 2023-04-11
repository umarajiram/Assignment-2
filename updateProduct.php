<?php

    require_once("db_conn.php");

if(isset($_POST['update']))
{

    $userID = $_GET['ID'];
    $UserProduct = $_POST['productna'];
    $UserCost = $_POST['cost'];
    $UserDiscount = $_POST['discount'];
    $UserSelling_price = $UserCost-(($UserCost*$UserDiscount)/100);
    $UserQuantity = $_POST['quantity'];
    $UserModel = $_POST['model'];
    $UserCategory = $_POST['category'];
    $UserSub_category = $_POST['sub_category'];
    $Userimage = $_POST['image'];
    $UserDescription = $_POST['description'];
    $UsersubDescription = $_POST['subDescription'];
   
    $query = "update product set productna = '".$UserProduct."', cost = '".$UserCost."',sellingCost='".$UserSelling_price."', discount = '".$UserDiscount."', quantity = '".$UserQuantity."', model = '".$UserModel."', category='".$UserCategory."', sub_category='".$UserSub_category."', image='".$Userimage."', description = '".$UserDescription."', subDescription = '".$UsersubDescription."' where id='".$userID."'";

    $result = mysqli_query($conn,$query);

    if($result){

        header("location:product.php");

    }else{

        echo 'plaese check the query';
    }

}else{

    header("location:product.php");
}

?>