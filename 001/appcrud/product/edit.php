<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
<?php
include_once '../config.php';
$name = '';
$price = '';
$inventory = '';
$company = '';
$date = '';

if(isset($_GET['id'])){
    $product_id = (int) $_GET['id'];
    $sqlEdit = "SELECT * FROM product WHERE id=".$product_id;
    $result = mysqli_query($connection,$sqlEdit);
    $row = mysqli_fetch_assoc($result);

    $name = isset($row['name']) ? $row['name'] : '';
    $price = isset($row['price']) ? $row['price'] : '' ;
    $inventory = isset($row['inventory']) ? $row['inventory'] : '';
    $company = isset($row['company']) ? $row['company'] : '';
    $date = isset($row['date']) ? $row['date'] : '' ;
}
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Sửa sản phẩm</h1>
            <div>
                <form  name="create" action="update.php" method="post">
                    <input type="hidden" name="id" value="<?php  echo (int) $_GET['id']?>">
                    <div class="form-group">
                        <label >Tên SP</label>
                        <input type="text" class="form-control"  name="name" value="<?php echo $name?>">
                    </div>
                    <div class="form-group">
                        <label >Giá tiền</label>
                        <input type="text" class="form-control"  name="price" value="<?php echo $price?>">
                    </div>
                    <div class="form-group">
                        <label >Tồn kho</label>
                        <input type="text" class="form-control"  name="inventory" value="<?php echo $inventory?>">
                    </div>
                    <div class="form-group">
                        <label >Nhà cung cấp</label>
                        <input type="text" class="form-control"  name="company" value="<?php echo $company?>">
                    </div>
                    <div class="form-group">
                        <label >Ngày</label>
                        <input type="text" class="form-control"  name="date" value="<?php echo $date?>">
                    </div>

                    <button type="submit" class="btn btn-primary">Cập nhật</button>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>