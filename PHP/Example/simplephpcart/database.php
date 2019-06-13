<?php
/**
 * Created by PhpStorm.
 * User: HaiMinh
 * Date: 6/12/2019
 * Time: 3:14 PM
 */
class Database
{
    public $host = "localhost";
    public $user = "root";
    public $password = "";
    public $database = "simple_shop";
    public $connection;
    /*
     * phương thức khởi tạo*/
    public function __construct()
    {
        $this->connection = $this->connectDatabase();
    }
    /*
     * phương thức kết nối đến csdl*/
    public function connectDatabase()
    {
        $connection = mysqli_connect($this->host,$this->user,$this->password,$this->database);
        return $connection;
    }
    /*
     * phương thức chạy câu truy vấn sql*/
    public function runQuery($sql)
    {
        $data = array();
        $result = mysqli_query($this->connection, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
        return $data;
    }
    /*
     * phương thức đếm số bản ghi trong câu lệnh query*/
    public function numRows($sql){
        $result = mysqli_query($this->connection,$sql);
        $count = mysqli_num_rows($result);
        return $count;
    }
}