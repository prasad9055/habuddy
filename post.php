
<?php 
session_start();
include('includes/header.php'); ?>
<?php
                   if(isset($_GET['post_id'])){
                    $id= $_GET['post_id'];
                        
                     $query ="select * from posts where slug_url='$id' ";
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
<?php 
$top_adcode ='';
$middle_adcode = '';
$bottom_adcode ='';

$query = "select * from adds where placed_at ='a_top' and status='1' order by id DESC ";
$query_run = mysqli_query($con,$query);
if(mysqli_num_rows($query_run)>0){
foreach($query_run as $row){
    $top_adcode = $row['add_code'];
}
}

$query = "select * from adds where placed_at ='a_middle' and status='1' order by id DESC ";
$query_run = mysqli_query($con,$query);
if(mysqli_num_rows($query_run)>0){
foreach($query_run as $row){
    $middle_adcode = $row['add_code'];
}
}

$query = "select * from adds where placed_at ='a_bottom' and status='1' order by id DESC ";
$query_run = mysqli_query($con,$query);
if(mysqli_num_rows($query_run)>0){
foreach($query_run as $row){
    $bottom_adcode = $row['add_code'];
}
}

            
?>


<div class="container-fuild p-3" style="background-color:#f4f4f4;">
   <div class="container">
     <div class="row">
        <!-- main content start -->
      <div class="col-md-8 mt-10" >
 
          <div class="row bg-white rounded mb-3"> 
      <?php
       
         if(isset($_GET['post_id'])){

             $id= $_GET['post_id'];
          
             $viewcount='';
            $query = "select * from posts where slug_url='$id' ";
            $query_run = mysqli_query($con,$query);

            if(mysqli_num_rows($query_run)>0){

                foreach($query_run as $row){
                   $post_id =  $row['post_id'] ;
                    ?>
                    <!-- single blog post coding start here -->
                   

                 <p>
                 <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="text-muted">
              <ol class="breadcrumb">
              <li class="breadcrumb-item">Home</li>
              <li class="breadcrumb-item"><?=$row['post_category']?></li>
              <li class="breadcrumb-item"><?=$row['title']?></li>
  </ol>
</nav>
<?php

$old = $row['created_at'];
$new = date('Y-m-d', strtotime($old));
$viewcount =$row['viewcount']+1 ;
 ?>
            <!--top Add_code here -->    
            <p><?=$top_adcode?></p>
            </p>
                 <h1 class="h4"><?= $row['title']?></h1>
                  <p class="text-muted" style="font-size:12px"><span>views : (<?= $row['viewcount']?>)
                </span> <span> published : <?=$new?></span>
                <span> category : <?=$row['post_category']?></span> </p>
                 
                  <img src="<?=base_url('uploads/posts/')?><?=$row['image']?>" class="border" height="350px"/>
                  
                  <div class="row mt-4">
                    <?=$row['description']?>
                  </div>
                 <!--top Add_code here -->    
            <p><?=$bottom_adcode?></p>
             <?php  
              }
            }
            
            $countupdate = "update posts set viewcount='$viewcount' where post_id='$post_id' " ;
            $query_run = mysqli_query($con,$countupdate);

         }else {
            echo ' No Post id Found ' ;
         }
        
?>
        </div>


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
