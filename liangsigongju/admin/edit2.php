<?php
    header("Content-type:text/html;charset=utf-8");
    //导入配置文件
    include ("../common/conn.php");
    // 开启Session
    // session_start();
    // mysql_select_db('itcast_ls');
    mysql_query("set names 'utf-8'");
    //查询表
    $sql = "SELECT * FROM ls_product";
    //执行语句
    $rs_result = mysql_query($sql);
    //返回结果集
    $row = mysql_fetch_assoc($rs_result);
    //通过post获取页面提交信息
    @$id = $_POST['id'];
    @$name = $_POST['name'];
    @$path = $_POST['path'];
    @$time = $_POST['time'];
    //更新页面
    if(isset($_POST["message"])){
    $sql="update ls_product set name='$name',path='$path',time='$time' where id='$id'";
    $result = mysql_query($sql);
    if(!$result){
      echo "<script>alert('图片修改失败！');
      window.location.href = 'edit2.php';</script>";
      exit;
    }else{
      echo "<script>alert('图片修改成功！');
      window.location.href = 'tupian.php';</script>";
      exit;
    }
    }
  
                 


    require 'view/edit2.html';
?>