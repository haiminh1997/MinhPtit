<?php
/**
 * Created by PhpStorm.
 * User: HaiMinh
 * Date: 6/2/2019
 * Time: 8:28 AM
 */
abstract  class Dongvat {
    /*
     * Khai báo một phương thức abstract trong abstract class.
        Chỉ có thể định nghĩa chứ k đc viết code
     */
    abstract public function getName();
    /*
     * Khai báo một phương thức bình thường trong abstract class.
        Có thể  viết code
    Không thể khai báo 1 phương thức abstract trog class bình thường
     */
    public function setName(){
        //code
    }

    /*
     * Không thể khởi tạo 1 class abstract
     * $person = new Person();
     */


}

/*
 * Phải định nghĩa lại các phương thức abstract của abstract class đó khi kế thừa.
 */

class  ConTrau extends Dongvat {
    public function getName()
    {
        // TODO: Implement getName() method.
        return $this->name;
    }
}

