<?php
class index{
    function int(){

      $smarty=new Smarty();
        $smarty->setTemplateDir('D:/wamp/www/shk/2006/server/mvc/application/template/');
        $smarty->setCompileDir('D:/wamp/www/shk/2006/server/mvc/application/compile/');

//        $smarty->setConfigDir('/web/www.example.com/guestbook/configs/');
        $smarty->setCacheDir('D:/wamp/www/shk/006/server/mvc/cache/');
//        加@防止数据库信息泄露
       $db=@new mysqli("localhost","root","123456","security","3308");
//        var_dump($db);
//        数据库连接失败的信息
        if(mysqli_connect_error()){
            dir("数据库连接错误");
        }
        $db->query("set names utf8");
//        结果集是一个对象然后->方法，获取具体数据
        $result=$db->query("select * from teacher");
//        var_dump($result);
        $data=array();
//        while ($row=$result->fetch_assoc()){
//            $data[]=($row);
//        }
//

//        $data=array(
//            0 =>
//                array (
//                    'name' => '孙恒奎',
//                    'age' => '25',
//                    'sex' => '1',
//                    'banji' => '1',
//                ),
//            1 =>
//                array (
//                    'name' => '孙恒奎',
//                    'age' => '21',
//                    'sex' => '1',
//                    'banji' => '1',
//                ),
//            2 =>
//                array (
//                    'name' => '七千万e',
//                    'age' => '22',
//                    'sex' => '2',
//                    'banji' => '1',
//                ),
//            3 =>
//                array (
//                    'id' => '3',
//                    'name' => '七千1',
//                    'age' => '22',
//                    'sex' => '2',
//                    'banji' => '1',
//                ),
//        );
$smarty->assign("data",$data);
$smarty->display("index.html");
    }
}