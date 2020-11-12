<?php
    header("Content-type:text/html;charset=utf-8");
    //导入配置文件
    include ("../common/conn.php");
    // 开启Session
    // session_start();
    // mysql_select_db('itcast_ls');
    mysql_query("set names 'utf-8'");
    //通过post获取页面提交信息
    @$id = $_POST['id'];
    @$name = $_POST['name'];
    @$path = $_POST['path'];
    @$time = $_POST['time'];
    //更新页面
    if(isset($_POST["add"])){
        $sql="INSERT INTO ls_product(id,name,path,time) VALUES ('$id','$name','$path','$time')";
        $result = mysql_query($sql);
        if(!$result){
          echo "<script>alert('添加失败！');
          window.location.href = 'add2.php';</script>";
          exit;
        }else{
          echo "<script>alert('添加成功！');
          window.location.href = 'tupian.php';</script>";
          exit;
        }
        }


    require 'view/add2.html';
?>
