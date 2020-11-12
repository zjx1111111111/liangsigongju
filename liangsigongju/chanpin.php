<?php
  header("Content-type:text/html;charset=utf-8");
  //导入配置文件
  include ("common/conn.php");
  // 开启Session
  session_start();
  mysql_select_db('itcast_ls');
  mysql_query("set names 'utf-8'");
  //查询表
  $sql = "SELECT * FROM ls_product";
  //执行语句
  $rs_result = mysql_query($sql);
  // //返回结果集
 //  $row = mysql_fetch_assoc($rs_result);
   


   require 'view/chanpin.html';
?>