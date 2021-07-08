<?php
include('cong.php');
?>
<html>
    <head>
        <title>HOME</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        
    </head>
     <body>
         <div class="container">
             <h2>HOME</h2>
             <table class="table">
                 <thead>
                     <tr>
                         <th>id</th>
                         <th>name</th>
                         <th>email</th>
                         <th>address</th>
                         <th>action</th>
                    </tr>
                 </thead>
                 <tbody>
                 <?php
        require_once('cong.php');
        $conn=mysqli_connect('localhost','root','','mycrud');
        $result=mysqli_query($conn,"select * from student ");
        $cnt=1;
        while($row=mysqli_fetch_array($result)){
            ?>
            <tr>
                     <td><?php echo $row['id'];?></td>   
                     <td><?php echo $row['name'];?></td>
                       <td><?php echo $row['email'];?></td>
                      <td><?php echo $row['address'];?></td>
                     <td><a class="btn btn-info" href="update.php?id=<?php echo $row['id']; ?>">edit</a>  <a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>

               </tr>
                <?php
                $cnt=$cnt+1;
        
        }
        ?>
                
                     
                 </tbody>
              </table>
            </div>
      </body>
</html>
