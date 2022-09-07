<?php
$userTel=$_POST['userTel'];
$userPassword=$_POST['userPassword'];
// echo $userTel;
// echo $userPassword;
$link=mysqli_connect("localhost",'root','','northface');
mysqli_set_charset($link,"utf8");
$sql="SELECT * from user where userTel='$userTel' and userPassword='$userPassword'";
$result=mysqli_query($link,$sql);
if($row=mysqli_fetch_assoc($result)){
    echo "1";
}else{
    echo "0";
}
mysqli_close($link);

?>