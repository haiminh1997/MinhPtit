<?php
/**
 * Created by PhpStorm.
 * User: HaiMinh
 * Date: 5/31/2019
 * Time: 11:00 AM
 */
include_once '../config.php';
if(isset($_POST['id']) && $_POST['name'] && $_POST['price'] && $_POST['inventory'] && $_POST['company'] && $_POST['date']){
    if($_POST['name'] && $_POST['price'] && $_POST['inventory'] && $_POST['company'] && $_POST['date']){
        $name = $_POST['name'];
        $price = $_POST['price'];
        $inventory = $_POST['inventory'];
        $company = $_POST['company'];
        $date = $_POST['date'];

        $sqlUpdate = "UPDATE product SET  name='$name',price='$price',inventory='$inventory',
                      company='$company',date='$date' WHERE id=". (int) $_POST['id'];
        if(mysqli_query($connection,$sqlUpdate)){
            echo "Update thành công";
            header("location:index.php");
            exit();
        }
        else {
            echo "Update thất bại";
        }
    }
}
?>