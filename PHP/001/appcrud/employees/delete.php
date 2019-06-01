<?php
/**
 * Created by PhpStorm.
 * User: HaiMinh
 * Date: 5/30/2019
 * Time: 8:05 PM
 */
include_once '../config.php';
if(isset($_GET['id'])){
    $employee_id = (int) $_GET['id'];
    $sqlDele = "DELETE FROM employees WHERE id=". $employee_id;
    if(mysqli_query($connection,$sqlDele)){
        echo "Xóa thanh công";
        header("location:index.php");
    }
    else {
        echo "Xóa thất bại";
    }
}

?>