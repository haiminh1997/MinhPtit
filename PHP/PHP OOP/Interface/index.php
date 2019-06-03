<?php
/**
 * Created by PhpStorm.
 * User: HaiMinh
 * Date: 6/2/2019
 * Time: 9:08 AM
 */
interface DongVat {
    //Chỉ được khai báo phương thức chứ không được định nghĩa chúng trong interface.
         public function setName();
         public function getName();
    //Trong interface chúng ta chỉ được khai báo hằng không thể khai báo biến.
        const CONNGUOI = false;
    /*
     * Không thể khởi tạo 1 interface
     * $dongvat = new DongVat();
     */

}
    // các lớp interface có thể kế thừa
class ConTrau implements DongVat {
    public function getName()
    {
        // TODO: Implement getName() method.
    }
    public function setName()
    {
        // TODO: Implement setName() method.
    }
}

// 1 class có thể implement nhiều interface
//Các lớp implement lại interface thì phải khai báo và định nghĩa lại các phương thức có trong interface.
class ConNghe  implements DongVat  {
    public function setName()
    {
        // TODO: Implement setName() method.
    }
    public function getName()
    {
        // TODO: Implement getName() method.
    }
}

