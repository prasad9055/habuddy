<?php 
 include('../links.php');
   include($link.'/authentication.php');
?>



<?php
if(isset($_GET['id'])){

    $user_id= $_GET['id'];
   
    $query = "DELETE FROM users WHERE id='$user_id' ";
     $query_run=mysqli_query($con,$query);

   if($query_run){
          $_SESSION['message']="User Deleted Successfully" ;
          header("Location: ../users/users.php");
          exit(0);
   }

}
?>