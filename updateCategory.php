<?php

    require_once("db_conn.php");

if(isset($_POST['update']))
{

    $userID = $_GET['ID'];
    $UserProductCategory = $_POST['product_category'];
   
    $query = "update category set product_category = '".$UserProductCategory."' where id='".$userID."'";

    $result = mysqli_query($conn,$query);

    if($result){

        header("location:viewCategory.php");

    }else{

        echo 'plaese check the query';
    }

}else{

    header("location:editCategory.php");
}

?>