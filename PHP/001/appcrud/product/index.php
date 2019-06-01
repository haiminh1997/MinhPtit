<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<?php
include_once '../config.php';
$sqlSelect = "SELECT * FROM product ";
$result = mysqli_query($connection,$sqlSelect);

?>
<div class="container" style="margin-top: 50px">
    <div class="row">
        <div class="col-sm-12">
            <div>
                <a class="btn btn-success" href="add.php">Thêm SP</a>
            </div>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Tên SP</th>
                    <th scope="col">Giá tiền</th>
                    <th scope="col">Tồn kho</th>
                    <th scope="col">Nhà cung cấp</th>
                    <th scope="col">Ngày tạo</th>
                </tr>
                </thead>
                <tbody>
                <?php
                if(mysqli_num_rows($result) > 0){
                    while ($row=mysqli_fetch_assoc($result)){
                    ?>
                        <tr>
                            <th scope="row"><?php echo $row['id']?></th>
                            <td scope="row"><?php echo $row['name']?></td>
                            <td scope="row"><?php echo $row['price']?></td>
                            <td scope="row"><?php echo $row['inventory']?></td>
                            <td scope="row"><?php echo $row['company']?></td>
                            <td scope="row"><?php echo $row['date']?></td>
                            <td>
                                <div>
                                    <a class="btn btn-warning" href="edit.php?id=<?php echo $row['id']?>">
                                        Sửa SP
                                    </a>
                                </div>
                                <div>
                                    <a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']?>">
                                        Xóa SP
                                    </a>
                                </div>


                            </td>

                        </tr>

                    <?php
                    }
                } else {
                    echo "Không có bản ghi nào !!";
                }
                ?>

                </tbody>
        </div>
    </div>
</div>

</table>

</body>
</html>