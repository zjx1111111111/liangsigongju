<?php
header('Content-type:text/html; charset=utf-8');
include ("common/conn.php");
// 开启Session
session_start();
//获取$_POST用户名和密码
@$code = $_POST['fangwei'];
//查看数据库itcast_ls
mysql_select_db('itcast_ls');
//查看表ls_fangwei code和传输值是否相等
$sql = "select *from ls_fangwei where code='$code' ";

//result必需规定由 mysqli_query()、mysqli_store_result() 或 mysqli_use_result() 返回的结果集标识符。
$result = mysql_query($sql);
$num = mysql_num_rows($result);// 函数返回结果集中行的数量
if(isset($_POST["chaxun"])){
      
if($num==0){

   echo "<script>alert('防伪码识别错误，假的！')</script>";
   }else{
   echo "<script>alert('防伪码识别成功，正品！')</script>";
   // 处理完附加项后跳转到登录成功的首页
   // header('location:kehu_fang.php');
}
}

   


   require 'view/kehu_fang.html';
?>