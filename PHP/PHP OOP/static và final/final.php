<?php
/**
 * Created by PhpStorm.
 * User: HaiMinh
 * Date: 6/2/2019
 * Time: 9:29 AM
 */
/*
 * Khi một class được khai báo là final
 * thì không lớp nào có thể kế thừa nó và nó chỉ có thể khởi tạo được thôi.
 */
 final class DongVat {

}

/*
 * Khi chúng ta khai báo một phương thức là final
 * thì không có một phương thức nào có thể override(ghi đè lại được)
 */
class ConNguoi {
     private $sochan = 2;
     final public function getSochan(){
         return $this->sochan;
     }
}