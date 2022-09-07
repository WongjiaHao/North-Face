<?php
/*
 * @Author: Wenjiahao
 * @Date: 2022-08-31 20:21:32
 * @LastEditors: wenjiahao
 * @LastEditTime: 2022-09-02 18:56:47
 * @FilePath: \North-face\PHP\register.php
 * @Description: 
 */
$userTel=$_GET['userTel'];
$link=mysqli_connect("localhost",'root','','northface');
mysqli_set_charset($link,"utf8");
$sql="select * from user where userTel='$userTel'";
$result=mysqli_query($link,$sql);
if($row=mysqli_fetch_assoc($result)){
    echo "1";
}else{
    echo "0";
}
mysqli_close($link);

?>
