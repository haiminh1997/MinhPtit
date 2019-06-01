<?php
/**
 * Created by PhpStorm.
 * User: HaiMinh
 * Date: 5/31/2019
 * Time: 8:51 AM
 */
include_once '../config.php';
if(isset($_POST['id']) && $_POST['name'] && $_POST['address'] && $_POST['salary']){
    if($_POST['name'] && $_POST['address'] && ($_POST['salary'] > 0)){
        $name = $_POST['name'];
        $address = $_POST['address'];
        $salary = $_POST['salary'];

        $sqlUpdate = "UPDATE employees SET name = '$name', address = '$address', salary = $salary
                      WHERE id=". (int) $_POST['id'];
       if(mysqli_query($connection, $sqlUpdate)){
           echo "Update thành công";
           header("location:index.php");
           exit();
       }
       else {
           echo "Update thất bại";
       }
//        $row = mysqli_fetch_assoc($result);

    }
}

?>