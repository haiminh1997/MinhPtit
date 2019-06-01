<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
<?php
/*
 * Nạp kết nối CSDL
 */
include_once '../config.php';
if(isset($_POST['name']) && isset($_POST['price']) && isset($_POST['inventory']) && isset($_POST['company']) && isset($_POST['date'])){
    if(!empty($_POST['name']) && ($_POST['price']) > 0 && ($_POST['inventory']) > 0 && !empty($_POST['company']) &&  !empty($_POST['date']) ) {
        $name = $_POST['name'];
        $price = $_POST['price'];
        $inventory = $_POST['inventory'];
        $company = $_POST['company'];
        $date = $_POST['date'];

        $sqlInsert = "INSERT INTO product(name,price,inventory,company,date) VALUES ('$name','$price','$inventory','$company','$date')";
        if(mysqli_query($connection,$sqlInsert)){
            echo "Thêm thành công!!";
            header('location: index.php');
            exit();
        }
        else {
            echo "Thêm thất bại!!!";
        }
    }
}

?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Tạo mới sản phẩm</h1>
            <div>
                <form  name="create" action="" method="post">
                    <div class="form-group">
                        <label >Tên SP</label>
                        <input type="text" class="form-control"  name="name" >
                    </div>
                    <div class="form-group">
                        <label >Giá tiền</label>
                        <input type="text" class="form-control"  name="price" >
                    </div>
                    <div class="form-group">
                        <label >Tồn kho</label>
                        <input type="text" class="form-control"  name="inventory" >
                    </div>
                    <div class="form-group">
                        <label >Nhà cung cấp</label>
                        <input type="text" class="form-control"  name="company" >
                    </div>
                    <div class="form-group">
                        <label >Ngày</label>
                        <input type="text" class="form-control"  name="date" >
                    </div>

                    <button type="submit" class="btn btn-primary">Thêm SP</button>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>