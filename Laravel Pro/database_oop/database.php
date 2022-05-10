<?php
require "config.php";
class DB{
    //Thuộc tính
    public $conn;
    //Phương thức

    //Phương thức tự động khởi tạo kế nối DB
    function __construct()
    {
        $this ->connection();
    }
    //Phương thức kết nối db
    function connection(){
        $this -> conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

        if ( $this -> conn -> connect_error){
            die("Kết nối không thành công:".$this ->connect_error);
        } else {
            echo "đã kết nối CSDL";
        }
    }
    //Phương thức insert  dữ liệu

//    $data = array(
//    'colum1' -> 'value1',
//    'colum2' -> 'value2',
//    'colum3' -> 'value3',
//);
    function insert($table, $data){
        //  insert into table_name (colum1, colum2, colum3, .....)
        // values ( valu1, valu2, valu3....)

    }
}
$db = new DB;

