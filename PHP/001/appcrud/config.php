<?php
/**
 * Created by PhpStorm.
 * User: HaiMinh
 * Date: 5/30/2019
 * Time: 7:04 PM
 */
/*
 * Tạo ra 4 hằng số để kết nối đến CSDL
 * khai báo hằng số mặc định
 */

// khai báo hằng số
define("SERVERNAME","localhost");
define("USERNAME","root");
define("PASSWORD","");
define("DBNAME","appcrud");
$connection = mysqli_connect(SERVERNAME,USERNAME,PASSWORD,DBNAME);
/*
 * Kiểm tra xem có lỗi k,nếu lỗi thì ngắt chương trình
 */
if (!$connection) {
    die("Kết nối CSDL lỗi : " . mysqli_connect_error());
}
//else {
//    echo "Kết nối CSDL thành công";
//}
?>