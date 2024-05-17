
<?php 
   include('../links.php');
   include($link.'/authentication.php');
   include ($link.'/includes/header.php');
   
 
?>


<div class="container-fluid px-4">
                    <h5 class="mt-4">General Settings</h5>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">DashBoard</li>
                            <li class="breadcrumb-item active">General Seetings</li>
                        </ol>
                        <?php include('../message.php') ?>

<div class="card mb-3 col-md-8">
  <form action="#" enctype="multipart/form-data" method="POST">
                        <div class="card-header"><h6>Add Logo</h6></div>
                        <div class="card-body">
                            <div class="row">
                        <div class="col-md-8"> <p id="demo"></p></div>
                        <div class="col-md-3"> <input type="file" name="image" id="imgInp"  >
                        <p id="lable">
                        <label for="imgInp" id="labelWithHTML" class="upload-btn" onclick="myFunction()">Upload Image</label></p>
                        <p id="rest"></p>
                        <input type="Submit" class="btn btn-success  content-right"  name="logo_btn" value="submit"/></div>
                        </div>
</form>
 
<div class="row mt-3">
    <div class="col-md-3">
    <?php 

         $query = "select * from logo ";
         $query_run = mysqli_query($con,$query);
         if(mysqli_num_rows( $query_run)>0){
            foreach($query_run as $row){
                ?>
               <img src="../../uploads/posts/<?= $row['logo'];?>"  width="120px" height="80px" />
             
    </div>
    <div class="col-md-2">
      
            <button class="btn btn-primary btn-sm mt-4">   
                <a href="?logo_id=<?= $row['id'];?>&status=<?= $row['status'] =='1'?'De-Active':'Active';?>" class="text-white"><?= $row['status'] =='1'?'De-Active':'Active' ; ?>
              </a> </button>
          
    </div>
    <div class="col-md-2">
   
   
        <button class="btn btn-danger btn-sm mt-4">
        <a href="general.php?delete_id=<?= $row['id']?>" class="text-white">Delete  </a></button>
       
    </div>
    <?php
            }
         }
?>
</div>
                        </div>

</div>

<?php 
       if(isset($_POST['logo_btn']))  {

        $filename = $_FILES['image']['name'];

        $query ="INSERT INTO logo (logo , status) VALUES ('$filename' ,'1') ";
        $query_run = mysqli_query($con, $query);
    
        if($query_run){
           move_uploaded_file($_FILES['image']['tmp_name'],'../../uploads/posts/'.$filename);
           $_SESSION['message']="logo Added Sucessfully";
        //   header('Location: general/general.php');
        echo "<script> location.href='general.php'; </script>";
           exit(0);
        }else{
           $_SESSION['message']="Something went wrong";
          // header('Location: general/general.php');
          echo "<script> location.href='general.php'; </script>";
           exit(0);
        }

       }


       if(isset($_GET['logo_id']))  {
        $id = $_GET['logo_id'] ;
        $status =$_GET['status'];
        $value='';
        if($status=='De-Active'){
            $value ='0';
        }else{
            $value ='1';
        }
       
        $query = "UPDATE logo set status='$value' where id='$id'";
        $query_run = mysqli_query($con,$query);

        if($query_run){
            $_SESSION['message']="logo ".$status." Sucessfully";
         //   header('Location: general/general.php');
         echo "<script> location.href='general.php'; </script>";
            exit(0);
         }else{
            $_SESSION['message']="Something went wrong";
           // header('Location: general/general.php');
           echo "<script> location.href='general.php'; </script>";
            exit(0);
         }
 
       }



       if(isset($_GET['delete_id']))  {
        $id = $_GET['delete_id'] ;
        $filename="";
        $query = "select * from logo where id ='$id' ";
         $query_run = mysqli_query($con,$query);
         if(mysqli_num_rows( $query_run)>0){
            foreach($query_run as $row){
                $filename= $row['logo'];
            }}
      
        $query = "DELETE FROM logo  where id='$id'";
        $query_run = mysqli_query($con,$query);

        if($query_run){
            unlink('../../uploads/posts/'.$filename);
            $_SESSION['message']="logo Deleted Sucessfully";
         //   header('Location: general/general.php');
         echo "<script> location.href='general.php'; </script>";
            exit(0);
         }else{
            $_SESSION['message']="Something went wrong";
           // header('Location: general/general.php');
           echo "<script> location.href='general.php'; </script>";
            exit(0);
         }
 
       }
?>

<?php 
 // include($path.$link.'/config/dbconfig.php'); 
include($link.'/includes/footer.php'); 
include($link.'/includes/scripts.php'); 

?>