<?php
/**
 * Created by PhpStorm.
 * User: HaiMinh
 * Date: 5/31/2019
 * Time: 11:00 AM
 */
include_once '../config.php';
if(isset($_GET['id'])){
    $product_id = (int) $_GET['id'];
    $sqlDel = "DELETE FROM product WHERE id=".$product_id;
    if( mysqli_query($connection,$sqlDel)){
        echo "Xóa thành công!!!";
        header("location:index.php");
    }
    else {
        echo "Xóa không thành công!!";
    }
}
?>