<?php

include('cong.php');
if(isset($_POST['register'])){
    $fname=$_POST['name'];
    $email=$_POST['email'];
    $address=($_POST['address']);
    $password=($_POST['password']);


    
        $sql="INSERT INTO student ( name,email,address,password)
        VALUES('$fname','$email','$address','$password')";
        $result=mysqli_query($conn,$sql);

        if($result){
            echo "record added ";
        }
        else{
            echo "something worng";
        }
    }

?>
<html>
    
    <head>
        <title>user details</title>
        <link rel="stylesheet" type="text/css" href="styleup.css">
    </head>
    <body >
        <div class="header">
            <h2>user information</h2>
        </div>
        <form action="" method="post">
            <div class="in-grp">
                <label>name</label>
                <input type="text" name="name"required>
             </div>

             <div class="in-grp">
                <label>Email  </label>
                <input type="email" name="email"   required>
             </div>  

             <div class="in-grp">
                <label>address </label>
                <input type="text" name="address"required>
             </div>

             <div class="in-grp">
                <label> password </label>
                <input type="password" name="password"required>
             </div>

             <div class="in-grp">
                
                <button type="submit" name="register"  class="btn">register</button>
             </div>
            <button>
            <a  class="btn btn-info" href="view.php">home</a>
          </button>
        </form>
    </body>
</html>