<?php   
session_start();
include('admin/config/dbconfig.php');
include('includes/function.php');

if(isset($_POST['login_btn']))
{
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $password = mysqli_real_escape_string($con,$_POST['password']);

   $login_query = "SELECT * FROM users WHERE email='$email' AND password='$password' LIMIT 1 " ;
   $login_query_run = mysqli_query($con,$login_query);
  
     if(mysqli_num_rows($login_query_run)>0)
     {
         foreach($login_query_run as $data){
            $user_id = $data['id'];
            $user_name = $data['fname'];
            $user_email = $data['email'];
            $role_as = $data['role_as'];

         }  

           $_SESSION['auth']=true;
           $_SESSION['role_as']=$role_as ;
           $_SESSION['auth_user']=[
            'user_id'=> $user_id,
            'user_name'=> $user_name,
            'user_email'=>$user_email,
           ];

           if($_SESSION['role_as'] == '1')
           {
            $_SESSION['message']="Welcome to Dash Board";
           $url =  base_url('admin/dashboard.php');
            header("Location: https:haabuddy.com/admin/dashboard/dashboard.php");
            exit(0);

           }
           elseif($_SESSION['role_as'] == '0')
           {
            $_SESSION['message']="You are Logged in !";
            header("Location: index.php");
            exit(0);
           }
     }
     else
     {
        $_SESSION['message']="Invalid Credentials";
        header("Location: login.php");
        exit(0);
     }
     

}
else{

    $_SESSION['message']="Provide Valid Credentials";
    header("Location: login.php");
    exit(0);

}


?>