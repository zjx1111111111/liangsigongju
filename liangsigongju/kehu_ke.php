<?php
  header("Content-type:text/html;charset=utf-8");
  //导入配置文件
  include ("common/conn.php");
  // 开启Session
  // session_start();
  // mysql_select_db('itcast_ls');
  mysql_query("set names 'utf-8'");
  //通过post获取页面提交信息
  @$id = $_POST['id'];
  @$title = $_POST['title'];
  @$phone = $_POST['phone'];
  @$content = $_POST['content'];
  //更新页面
  if(isset($_POST["tijiao"])){
      $sql="INSERT INTO ls_fankui(id,title,phone,content) VALUES ('$id','$title','$phone','$content')";
      $result = mysql_query($sql);
      if(!$result){
        echo "<script>alert('提交失败！');
        window.location.href = 'kehu_ke.php';</script>";
        exit;
      }else{
        echo "<script>alert('提交成功！');
        window.location.href = 'kehu.php';</script>";
        exit;
      }
      }
   


   require 'view/kehu_ke.html';
?>