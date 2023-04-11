<?php

    require_once("db_conn.php");

if(isset($_POST['update']))
{

    $userID = $_GET['ID'];
    $UserProductSubCategory = $_POST['product_subcategory'];
   
    $query = "update subcategory set product_subcategory = '".$UserProductSubCategory."' where id='".$userID."'";

    $result = mysqli_query($conn,$query);

    if($result){

        header("location:viewSubCategory.php");

    }else{

        echo 'plaese check the query';
    }

}else{

    header("location:editSubCategory.php");
}

?>