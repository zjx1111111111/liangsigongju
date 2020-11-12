<?php
$id = $_GET['id'];
include ("../common/conn.php");
$sql = "delete from ls_product where id='".$id."'";
mysql_query($sql,$conn);
$mark  = mysql_affected_rows();//返回影响行数
if($mark>0){
    echo "<script>alert('删除成功！');
    window.location.href = 'tupian.php';</script>";
    exit;
}else{
    echo "<script>alert('删除失败！');
    window.location.href = 'tupian.php';</script>";
    exit;
}
mysql_close($conn);
?>