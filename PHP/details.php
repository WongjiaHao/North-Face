<?php
/*
 * @Author: Wenjiahao
 * @Date: 2022-09-02 20:57:06
 * @LastEditors: wenjiahao
 * @LastEditTime: 2022-09-02 21:28:10
 * @FilePath: \North-face\PHP\details.php
 * @Description: 
 */
$goodsId = $_GET['Id'];
$link = mysqli_connect('localhost','root','','test');
mysqli_set_charset($link,'utf8');
$sql = "SELECT * FROM sheet1 WHERE goods_id='$goodsId'";
$result = mysqli_query($link,$sql);
if($row=mysqli_fetch_assoc($result)){
    echo json_encode($row);
}
mysqli_close($link);

?>