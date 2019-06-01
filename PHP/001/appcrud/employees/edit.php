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
$name = '';
$address = '';
$salary = '';


if(isset($_GET['id'])){
    $employee_id = (int) $_GET['id'];
    $sqlSelect = "SELECT * FROM employees WHERE id=". $employee_id;
    $result = mysqli_query($connection,$sqlSelect);
    $row = mysqli_fetch_assoc($result);

    $name = isset($row['name']) ?  $row['name'] : '';
    $address = isset($row['address']) ? $row['address'] : '';
    $salary = isset($row['salary']) ? $row['salary'] : '';
}
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Sửa nhân viên</h1>
            <div>
                <form  name="create" action="update.php" method="post">
                    <input type="hidden" name="id" value="<?php  echo (int) $_GET['id']?>">
                    <div class="form-group">
                        <label >Tên</label>
                        <input type="text" class="form-control"  name="name" value="<?php echo $name?>">
                    </div>
                    <div class="form-group">
                        <label >Địa chỉ</label>
                        <input type="text" class="form-control"  name="address" value="<?php echo $address?>">
                    </div>
                    <div class="form-group">
                        <label >Lương</label>
                        <input type="text" class="form-control"  name="salary" value="<?php echo $salary?>">
                    </div>

                    <button type="submit" class="btn btn-primary">Cập nhật</button>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>