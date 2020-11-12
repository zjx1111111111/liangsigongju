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
    @$title = $_POST['title'];
    @$thumb = $_POST['thumb'];
    @$time = $_POST['time'];
    @$content = $_POST['content'];
    //更新页面
    if(isset($_POST["add"])){
        $sql="INSERT INTO ls_wenzhang(id,title,thumb,time,content) VALUES ('$id','$title','$thumb','$time','$content')";
        $result = mysql_query($sql);
        if(!$result){
          echo "<script>alert('添加失败！');
          window.location.href = 'add.php';</script>";
          exit;
        }else{
          echo "<script>alert('添加成功！');
          window.location.href = 'wenzi.php';</script>";
          exit;
        }
        }


    require 'view/add.html';
?>
