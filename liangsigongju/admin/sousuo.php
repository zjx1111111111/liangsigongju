<?php
    header("Content-type:text/html;charset=utf-8");
    //导入配置文件
    include ("../common/conn.php");
    // 开启Session
    session_start();
    mysql_select_db('itcast_ls');
    mysql_query("set names 'utf-8'");
    
    
    if(isset($_POST["sousuo"])){
        //通过post获取页面提交信息
    @$search = $_POST['search'];
    if($search==''){
        echo "<script>alert('查询的标题不能为空!');
        window.location.href='wenzi.php';</script>";
        die;
    }else{
        $sql = "SELECT * FROM ls_wenzhang where title = '$search'";
        $result = mysql_query($sql);
        $rs = mysql_num_rows($result);
        if($rs==0){
            echo "<script>alert('没有查询结果!');
            window.location.href='wenzi.php';</script>";
            exit;
        }

    }
}

   require 'view/sousuo.html';
?>