<?php

    require_once('db_conn.php');

if(isset($_GET['Del']))
{
    $UserId = $_GET['Del'];
    $query ="delete from product where id = '".$UserId."'";
    $result = mysqli_query($conn,$query);

    if($result)
    {
        header("location:product.php");
    }else{
        echo 'please check your connection';
    }


}

?>