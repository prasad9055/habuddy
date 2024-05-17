<?php 
   include('../links.php');
   include($link.'/authentication.php');
?>

<?php  

 if(isset($_POST['add_submit'])){
   $placed_at = mysqli_real_escape_string($con, $_POST['placed_at']);
   $add_size = mysqli_real_escape_string($con, $_POST['add_size']);
   $add_code = mysqli_real_escape_string($con, $_POST['add_code']);
   $status = mysqli_real_escape_string($con, $_POST['status']);
  
  $query = "INSERT INTO adds (placed_at, add_size, add_code, status) VALUES 
  ('$placed_at','$add_size','$add_code','$status')";
   $query_run = mysqli_query($con,$query);
   
    if($query_run){
            
      $_SESSION['message']="Ad was Added Sucessfully";
      header("Location: add-new-ad.php");
      exit(0);
         
    }else 
    {
      $_SESSION['message']="Ad was Added Sucessfully";
      header("Location: add-new-ad.php");
      exit(0);
    }


   
        
 }
 else{

 }


 if(isset($_POST['update_add'])){
   $id = mysqli_real_escape_string($con, $_POST['id']);
   $placed_at = mysqli_real_escape_string($con, $_POST['placed_at']);
   $add_size = mysqli_real_escape_string($con, $_POST['add_size']);
   $add_code = mysqli_real_escape_string($con, $_POST['add_code']);
   $status = mysqli_real_escape_string($con, $_POST['status']);
  
  $query = "UPDATE adds SET placed_at='$placed_at', add_size='$add_size',add_code='$add_code',status='$status' 
  where id ='$id' ";

   $query_run = mysqli_query($con,$query);
   
    if($query_run){
            
      $_SESSION['message']="Ad Updated Sucessfully";
      header("Location: view-ads.php");
      exit(0);
         
    }else 
    {
      $_SESSION['message']="Some Thing Wrong !";
      header("Location: edit-add.php");
      exit(0);
   } 
        
 }
 else{

  
 }


 if(isset($_GET['id']))
 {
      $id = $_GET['id'] ;

      $query = " DELETE FROM adds where id='$id' ";
      $query_run = mysqli_query($con,$query);

      if($query_run)
      {
           $_SESSION['message']="Ad Deleted Successfully";
           echo "<script> location.href='view-ads.php'; </script>";
           exit(0);
      }
      else{

         $_SESSION['message']="Something Wrong !";
         echo "<script> location.href='view-ads.php'; </script>";
         exit(0);
      }

 }
 else{}




?>