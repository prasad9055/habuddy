<?php
 
   include('../links.php');
   include($link.'/authentication.php');
  
   
?>


<?php
if(isset($_POST['update_user'])){

    $user_id= $_POST['user_id'];
    $fname= $_POST['fname'];
    $lname= $_POST['lname'];
    $email= $_POST['email'];
    $password= $_POST['password'];
    $role_as= $_POST['role_as'];
    $status = $_POST['status']== true ? '1':'0';

    $query = "update users set fname='$fname', lname='$lname', email='$email', password='$password', role_as='$role_as',
     status='$status' where id='$user_id' ";
     $query_run=mysqli_query($con,$query);

   if($query_run){
          $_SESSION['message']="User Updated Successfully" ;
          header("Location: ../users/users.php");
          exit(0);
   }

}
?>