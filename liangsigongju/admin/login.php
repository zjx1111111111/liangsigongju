<?php
   header('Content-type:text/html; charset=utf-8');
   include ("../common/conn.php");
   // 开启Session
   session_start();
   //获取$_POST用户名和密码
   @$username = $_POST['user'];
   @$password = $_POST['pass'];
   //查看数据库itcast_ls
   mysql_select_db('itcast_ls');
   //查看表ls_admin用户名与密码和传输值是否相等
   $sql = "select *from ls_admin where name='$username' and password='$password'";

   //result必需规定由 mysqli_query()、mysqli_store_result() 或 mysqli_use_result() 返回的结果集标识符。
   $result = mysql_query($sql);
   $num = mysql_num_rows($result);// 函数返回结果集中行的数量
   if(isset($_POST["denglu"])){
         //获取$_POST用户名和密码
   if($num==0){
  
      echo "<script>alert('用户名或者密码输入错误，请重新输入！')</script>";
      }else{
      echo "<script>alert('输入正确，即将为您跳转')</script>";
      // 处理完附加项后跳转到登录成功的首页
      header('location:index.php');
   }
}



   
   
   require 'view/login.html';
?>