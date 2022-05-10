<?php
//Bài tập  oop
class User
{
    private $username;
    private $password;
    private $db_username = "cuong";
    private $db_password = "123453";

    public function setInfo($username,$password)
    {
        //Nhập giá trị cho $username, $password;
        $this -> username = $username;
        $this -> password =  $password;

    }

    public  function checklogin()
    {
        //Kiểm tra thông tin nhập vào với thông tin $db_username và $db_password
    if (($this->username == $this->db_username) && ($this->password ==$this->db_password ) )
    {
        echo "xin chào ".$this -> username;
    } else {
        echo "user name không tồn tại trong hệ thống";
    }

       /*
        * Nếu khớp thông tin thì xuất lên màn hình " xin chào: unitop ";
        *  Ngược lại: Xuất lên màn hình " User name không tồn tại trong hệ thống";
        */

    }
}
 $u = new User;
 $u ->setInfo("cuong",'123453');
 $u -> checkLogin();