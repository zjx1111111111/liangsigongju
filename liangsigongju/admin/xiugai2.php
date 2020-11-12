<?php
    header("Content-type:text/html;charset=utf-8");
    //导入配置文件
    include ("../common/conn.php");
    // 开启Session
    // session_start();
    // mysql_select_db('itcast_ls');
    mysql_query("set names 'utf-8'");
    //查询表
    $sql = "SELECT * FROM ls_admin";
    //执行语句
    $rs_result = mysql_query($sql);
    //返回结果集
    $row = mysql_fetch_assoc($rs_result);
    //通过post获取页面提交信息
    @$password = $_POST['password'];
    //更新页面
    if(isset($_POST["pass"])){
    $sql="update ls_admin set password='$password'";
    $result = mysql_query($sql);
    if(!$result){
      echo "<script>alert('密码修改失败！');
      window.location.href = 'xiugai2.php';</script>";
      exit;
    }else{
      echo "<script>alert('密码修改成功！');
      window.location.href = 'chakan.php';</script>";
      exit;
    }
    }
  
                 


    require 'view/xiugai2.html';
?>