
<?php 
session_start();
include('includes/header.php'); ?>

<?php
                   if(isset($_GET['post_id'])){
                     $category =$_GET['post_id'] ;
                     $query ="select * from categories where slug='$category' ";
                     $query_run = mysqli_query($con,$query);
                     if(mysqli_num_rows($query_run)>0){
                        
                        foreach($query_run as $row){
                           $title=$row['meta_title'];
                           $description=$row['meta_description'];
                           $keywords=$row['meta_keyword'];
                        }
                    } }?>
<?php include('includes/meta-data.php'); ?>
<?php include('includes/navbar.php'); ?>


<div class="container-fuild p-3" style="background-color:#f4f4f4;">
   <div class="container">
     <div class="row">
        <!-- main content start -->
      <div class="col-md-8" >
         <!-- single blog loop code start -->
              <?php 
                   if(isset($_GET['post_id'])){
                     $category =$_GET['post_id'] ;
                    $query ="select * from posts where post_category='$category' and status='1' order by post_id DESC ";
                     $query_run = mysqli_query($con,$query);
                     if(mysqli_num_rows($query_run)>0){
                        
                        foreach($query_run as $row){
?>
<a href="<?=base_url('post/')?><?=$row['slug_url']?>" style="text-decoration:none; color:#000;">
 <div class="row bg-white rounded shadow p-3 mb-3">
             <div class="col-md-3">
                <img src="<?=base_url('uploads/posts/')?><?=$row['image']?>" width="160px" height="100px " />
             </div>   
             <div class="col-md-8">
                <h3 class="h6 text-danger"><?=$row['title']?> </h3>
                <p> <?=$row['meta_description']?> </p>
                <small class="text-muted">views :<?=$row['viewcount']?></small>
             </div>  
         </div>
                        </a>


          <?php   
                     }

                     }

                   }
              ?>
     
        
        <!-- single blog loop code end  -->
      
      </div>
       <!-- main content end -->

        <!-- sidebar start -->
        <div class="col-md-4" style="padding-left:30px;">
        <?php include('includes/sidebar.php'); ?>
          </div>
       <!-- side bar end  -->
     </div>
   </div>
</div>
 

<?php include('includes/footer.php'); ?>
