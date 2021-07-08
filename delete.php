<?php

include('cong.php');

if(isset($_GET['id'])){
    $user_id=$_GET['id'];


$sql="DELETE FROM `student` WHERE `id`='$user_id'";


$result=mysqli_query($conn,$sql);


  if($result==1){
    echo "deleted";
  }else{
  echo "error"  .mysqli_error($conn);
 }




}
?>