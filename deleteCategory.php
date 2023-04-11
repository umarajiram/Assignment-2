<?php

    require_once('db_conn.php');

if(isset($_GET['Del']))
{
    $UserId = $_GET['Del'];
    $query ="delete from category where id = '".$UserId."'";
    $result = mysqli_query($conn,$query);

    if($result)
    {
        header("location:viewCategory.php");
    }else{
        echo 'please check your connection';
    }


}

?>