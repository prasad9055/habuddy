
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

         <!-- Analystic  Tool code start  -->

         <div class="card mb-3 col-md-8">
             <form action="#" enctype="multipart/form-data" method="POST">
                        <div class="card-header"><h6>Add Google Analystic code</h6></div>
                        <div class="card-body">
                             <div class="row">
                             <div class="mb-3">

  <textarea class="form-control" name="analystic_code" id="exampleFormControlTextarea1" rows="3" required></textarea>
  <div class="col-auto mt-2 text-end">
    <button type="submit" name="analystic_btn" class="btn btn-primary mb-3">Confirm identity</button>
  </div>
</div>

   </div>
      </div>
     
     <div class="row">
    

      <?php 

            $query = "select * from analystic" ;
            $query_run = mysqli_query($con,$query);
            if(mysqli_num_rows( $query_run)>0){
               foreach($query_run as $row){
                   ?>
                  <div class="col-md-7">
                <pre><?= $row['analystic_code']?><pre>
                
       </div>
       <div class="col-md-2">
         
               <button class="btn btn-primary btn-sm mt-4">   
                   <a href="?analystic_id=<?= $row['id'];?>&status=<?= $row['status'] =='1'?'De-Active':'Active';?>" class="text-white"><?= $row['status'] =='1'?'De-Active':'Active' ; ?>
                 </a> </button>
             
       </div>
       <div class="col-md-2">
      
      
           <button class="btn btn-danger btn-sm mt-4">
           <a href="general.php?delete_analystic_id=<?= $row['id']?>" class="text-white">Delete  </a></button>
          
       </div>
              
       <?php
               }
            }


                  if(isset($_POST['analystic_btn'])){

                     $analystic = $_POST['analystic_code'] ;
                   
                  $query = "INSERT INTO analystic (analystic_code,status) VALUES('$analystic','1')" ;
                  $query_run = mysqli_query($con,$query);
                  if($query_run){
                     $_SESSION['message']="Site Identity Conform Sucessfully";
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



                  if(isset($_GET['analystic_id']))  {
                     $id = $_GET['analystic_id'] ;
                     $status =$_GET['status'];
                     $value='';
                     if($status=='De-Active'){
                         $value ='0';
                     }else{
                         $value ='1';
                     }
                    
                     $query = "UPDATE analystic set status='$value' where id='$id'";
                     $query_run = mysqli_query($con,$query);
             
                     if($query_run){
                         $_SESSION['message']="Analystic code ".$status." Sucessfully";
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
             
             
             
                    if(isset($_GET['delete_analystic_id']))  {
                     $id = $_GET['delete_analystic_id'] ;
                     $query = "DELETE FROM analystic  where id='$id'";
                     $query_run = mysqli_query($con,$query);
             
                     if($query_run){
                         $_SESSION['message']="analystic Code Deleted Sucessfully";
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
 </div>

      </div>




      <!-- Analystic code end -->



           <!-- Google WebMaster Tool code start  -->

           <div class="card mb-3 col-md-8">
             <form action="#" enctype="multipart/form-data" method="POST">
                        <div class="card-header"><h6>Add Google Web-Master code</h6></div>
                        <div class="card-body">
                             <div class="row">
                             <div class="mb-3">

  <textarea class="form-control" name="webmaster_code" id="exampleFormControlTextarea1" rows="3" required></textarea>
  <div class="col-auto mt-2 text-end">
    <button type="submit" name="webmaster_btn" class="btn btn-primary mb-3">Confirm identity</button>
  </div>
</div>

   </div>
      </div>
     
     <div class="row">
    

      <?php 

            $query = "select * from webmaster" ;
            $query_run = mysqli_query($con,$query);
            if(mysqli_num_rows( $query_run)>0){
               foreach($query_run as $row){
                   ?>
                  <div class="col-md-7">
                <pre><?= $row['webmaster_code']?><pre>
                
       </div>
       <div class="col-md-2">
         
               <button class="btn btn-primary btn-sm mt-4">   
                   <a href="?webmaster_id=<?= $row['id'];?>&status=<?= $row['status'] =='1'?'De-Active':'Active';?>" class="text-white"><?= $row['status'] =='1'?'De-Active':'Active' ; ?>
                 </a> </button>
             
       </div>
       <div class="col-md-2">
      
      
           <button class="btn btn-danger btn-sm mt-4">
           <a href="general.php?delete_webmaster_id=<?= $row['id']?>" class="text-white">Delete  </a></button>
          
       </div>
              
       <?php
               }
            }


                  if(isset($_POST['webmaster_btn'])){

                     $webmaster = $_POST['webmaster_code'] ;
                   
                  $query = "INSERT INTO webmaster (webmaster_code,status) VALUES('$webmaster','1')" ;
                  $query_run = mysqli_query($con,$query);
                  if($query_run){
                     $_SESSION['message']="Site Identity Conform Sucessfully";
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



                  if(isset($_GET['webmaster_id']))  {
                     $id = $_GET['webmaster_id'] ;
                     $status =$_GET['status'];
                     $value='';
                     if($status=='De-Active'){
                         $value ='0';
                     }else{
                         $value ='1';
                     }
                    
                     $query = "UPDATE webmaster set status='$value' where id='$id'";
                     $query_run = mysqli_query($con,$query);
             
                     if($query_run){
                         $_SESSION['message']="webmaster code ".$status." Sucessfully";
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
             
             
             
                    if(isset($_GET['delete_webmaster_id']))  {
                     $id = $_GET['delete_webmaster_id'] ;
                     $query = "DELETE FROM webmaster  where id='$id'";
                     $query_run = mysqli_query($con,$query);
             
                     if($query_run){
                         $_SESSION['message']="webmaster Code Deleted Sucessfully";
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
 </div>

      </div>


      <!-- Web Master code end -->

      
           <!-- General SEO code start  -->

           <div class="card mb-3 col-md-8">
             <form action="#" enctype="multipart/form-data" method="POST">
                        <div class="card-header"><h6>Add General SEO </h6></div>
                        <div class="card-body">
                             <div class="row">

                                <?php 
                                 $query = "select * from general_seo order by id DESC limit 1 ";
                                 $id='';
                                 $title='';
                                 $description='';
                                 $keywords='';

                                 $query_run = mysqli_query($con,$query);
                                 if($query_run){
                                    foreach($query_run as $row){
                                    
                                        $id=$row['id'];
                                        $title=$row['title'];
                                        $description=$row['description'];
                                        $keywords=$row['keywords'];

                                    }

                                 }

                                  if($id !=''){
                                 $delete_query = "DELETE FROM `general_seo` WHERE id NOT IN ('$id') " ;
                                  $query_run = mysqli_query($con, $delete_query);
                                  
                                  }

                                ?>



                             <div class="mb-3">
                             <input class="form-control form-control-sm mb-4" type="text" name="title" value="<?=$title?>" placeholder="Site - Title " required>
                             <input class="form-control form-control-sm mb-4" type="text" name="description" value="<?=$description?>"  placeholder="Site - Description " required>
                             <input class="form-control form-control-sm mb-2" type="text" name="keywords"  value="<?=$keywords?>"  placeholder="Site - Key-words" required>
  <div class="col-auto mt-2 text-end">
    <button type="submit" name="seo_btn" class="btn btn-primary mb-3">Submit</button>
  </div>
</div>
<?php
         if(isset($_POST['seo_btn'])){

           $seo_title = $_POST['title'];
           $seo_description = $_POST['description'];
           $seo_keywords = $_POST['keywords'];

           $query ="INSERT INTO general_seo (title,description,keywords)values('$seo_title','$seo_description','$seo_keywords')";
           $query_run = mysqli_query($con,$query);

              if($query_run){
                         $_SESSION['message']="meta -data Added Sucessfully";
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



      </div>
      </div>
      </div>
      <!-- SEO code end -->


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