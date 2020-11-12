<?php
header("content-type:text/html;charset=utf-8");
//连接数据库
$conn = mysql_connect("www.myphp.com","root","root")or die("连接数据库失败");
mysql_select_db('itcast_ls');
//设置编码
mysql_query("SET NAMES UTF8")

?>