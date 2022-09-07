 <?php
 $userTel=$_GET['userTel'];
 $userPassword=$_GET['userPassword'];
 $link=mysqli_connect("localhost",'root','','northface');
 mysqli_set_charset($link,"utf8");
 $sql="INSERT INTO user(userTel,userPassword) VALUES('$userTel','$userPassword')";
 $result=mysqli_query($link,$sql);
 if($result){
     echo "1";
 }else{
     echo "0";
 }
 mysqli_close($link);
 
 ?>
