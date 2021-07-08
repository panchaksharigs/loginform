<?php

include('cong.php');

if(isset($_POST['update'])){
    $fname=$_POST['name'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $password=$_POST['password'];
    $user_id=$_POST['user_id'];

    $udp="UPDATE `student` SET `name`='$fname',`email`='$email',`address`='$address',`password`='$password'
     WHERE `id`='$user_id'";



    //$upd="UPDATE  'student' SET  'name'='$fname','email'='$email','address'='$address','password'='$password'
    //where 'id'='$user_id'";
    $result=mysqli_query($conn,$udp);
    //print_r($result);
    //echo $result;
      if($result==1){
         echo "updated successfully";
    }else{
       echo "error"  .mysqli_error($conn);
   }
    
}

  if(isset($_GET['id'])){
    $user_id=$_GET['id'];
    $sql="SELECT * FROM student where id='$user_id'";
    $result=mysqli_query($conn,$sql);
    $total=mysqli_num_rows($result);
    
   if($total>0){
        
        while($row=mysqli_fetch_assoc($result)){
           
            $fname=$row['name'];
            $email=$row['email'];
            $address=$row['address'];
            $password=$row['password'];
            $id=$row['id'];
          }
         ?>
         <link rel="stylesheet" type="text/css" href="styleup.css">
        <form action="" method="post">
            <div class="in-grp">
                <label>name</label>
                <input type="text" name="name" value="<?php echo $fname; ?>"required>
                <input type="hidden" name="user_id" value="<?php echo $id; ?>">
             </div>

             <div class="in-grp">
                <label>Email  </label>
                <input type="email" name="email" value="<?php echo $email; ?>"  required>
             </div>  

             <div class="in-grp">
                <label>address </label>
                <input type="text" name="address" value="<?php echo $address; ?>"required>
             </div>

             <div class="in-grp">
                <label> password </label>
                <input type="password" name="password" value="<?php echo $password; ?>"required>
             </div>

             <div class="in-grp">
                
                <button type="submit" name="update" value="update" class="flex-container">update</button>
             </div>
             <button>
                <a class="btn btn-info" href="view.php">HOME</a>
         </button>
            
        </form>
        </body>
        </html>
        <?php

        }
        else{
        header('location:view.php');
      }        
     
}

?>


