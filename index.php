
<?php 

session_start();
include('includes/header.php');

  $title="index page";

include('includes/meta-data.php');

?>

<?php include('includes/navbar.php'); ?>


<div class="container-fuild p-3" style="background-color:#f4f4f4;">
   <div class="container">
     <div class="row">
        <!-- main content start -->
      <div class="col-md-8" >

          <!-- Education -->
          <!-- single row start -->
      <div class="row mb-5 bg-white rounded ">
             <h3 class="text-primary fs-5 p-2">Education</h3>
            <?php 
                    $query = "select * from posts where post_category='edu' and status='1' order by post_id DESC";
                    $query_run = mysqli_query($con,$query);
                    if(mysqli_num_rows( $query_run)>0){
                        $count=0;
                        foreach($query_run as $row){
                            ?>
     <!-- single Post Start -->
     <div class="card post-card" style="width: 10rem; margin:12px; padding:0px;">
             <a href="post/<?=$row['slug_url']?> "  style="text-decoration:none; color:#000;">
  <img src="uploads/posts/<?=$row['image']?> " class="card-img-top" alt="...">
  <div class="card-body" style="padding:4px; font-size:15px;">
  <h2 class="post-title"><?=$row['title']?> </h2>
    <p class="card-text" style="font-size:14px; text-align:justify;"><?=$row['meta_description']?> </p>
  </div></a>
</div>
               <!-- single post End -->


                      <?php 
                     $count++;
                     if($count == '4'){
                        break;
                     } 
                    }
                    }
            ?>
                  <span class="text-center mb-3"><a href="<?=base_url('category/')?><?=$row['post_category']?>">
    <button type="button" class="btn btn-outline-primary btn-sm">More articles</button></a>
<span>
       </div>     
       <!-- single row end --> 

<!-- Tech  -->
       <!-- single row start -->
       <div class="row mb-5 bg-white rounded ">
             <h3 class="text-primary fs-5 p-2">Technical</h3>
            <?php 
                    $query = "select * from posts where post_category='Technical' and status='1' order by post_id DESC";
                    $query_run = mysqli_query($con,$query);
                    if(mysqli_num_rows( $query_run)>0){
                        $count=0;
                        foreach($query_run as $row){
                            ?>
     <!-- single Post Start -->
     <div class="card post-card" style="width: 10rem; margin:12px; padding:0px;">
     <a href="post/<?=$row['slug_url']?> "  style="text-decoration:none; color:#000;">
  <img src="uploads/posts/<?=$row['image']?> " class="card-img-top" alt="...">
  <div class="card-body" style="padding:4px; font-size:15px;">
  <h2 class="post-title"><?=$row['title']?> </h2>
    <p class="card-text" style="font-size:14px; text-align:justify;"><?=$row['meta_description']?> </p>
  </div></a>
</div>
               <!-- single post End -->


                      <?php 
                     $count++;
                     if($count == '4'){
                        break;
                     } 
                    }
                    }
            ?>
                 
               
             

               <span class="text-center mb-3"><a href="<?=base_url('category/')?><?=$row['post_category']?>">
    <button type="button" class="btn btn-outline-primary btn-sm ">More articles</button></a>
<span>
       </div>     
       <!-- single row end --> 

       <!-- world -->
              <!-- single row start -->
      <div class="row mb-5 bg-white rounded ">
             <h3 class="text-primary fs-5 p-2">World News</h3>
            <?php 
                    $query = "select * from posts where post_category='world-news' and status='1' order by post_id DESC";
                    $query_run = mysqli_query($con,$query);
                    if(mysqli_num_rows( $query_run)>0){
                        $count=0;
                        foreach($query_run as $row){
                            ?>
     <!-- single Post Start -->
     <div class="card post-card" style="width: 10rem; margin:12px; padding:0px;">
     <a href="post/<?=$row['slug_url']?> "  style="text-decoration:none; color:#000;">
  <img src="uploads/posts/<?=$row['image']?> " class="card-img-top" alt="...">
  <div class="card-body" style="padding:4px; font-size:15px;">
  <h2 class="post-title"><?=$row['title']?> </h2>
    <p class="card-text" style="font-size:14px; text-align:justify;"><?=$row['meta_description']?> </p>
  </div></a>
</div>
               <!-- single post End -->


                      <?php 
                     $count++;
                     if($count == '4'){
                        break;
                     } 
                    }
                    }
            ?>
                 
               
             

               <span class="text-center mb-3"><a href="<?=base_url('category/')?><?=$row['post_category']?>">
    <button type="button" class="btn btn-outline-primary btn-sm ">More articles</button></a>
<span>
       </div>     
       <!-- single row end --> 

       <!-- Ques & Ans  -->
              <!-- single row start -->
      <div class="row mb-5 bg-white rounded ">
             <h3 class="text-primary fs-5 p-2">Ques & Ans</h3>
            <?php 
                    $query = "select * from posts where post_category='form' and status='1' order by post_id DESC";
                    $query_run = mysqli_query($con,$query);
                    if(mysqli_num_rows( $query_run)>0){
                        $count=0;
                        foreach($query_run as $row){
                            ?>
     <!-- single Post Start -->
     <div class="card post-card" style="width: 10rem; margin:12px; padding:0px;">
             <a href="post/<?=$row['slug_url']?> "  style="text-decoration:none; color:#000;">
  <img src="uploads/posts/<?=$row['image']?> " class="card-img-top" alt="...">
  <div class="card-body" style="padding:4px; font-size:15px;">
  <h2 class="post-title"><?=$row['title']?> </h2>
    <p class="card-text" style="font-size:14px; text-align:justify;"><?=$row['meta_description']?> </p>
  </div></a>
</div>
               <!-- single post End -->


                      <?php 
                     $count++;
                     if($count == '4'){
                        break;
                     } 
                    }
                    }
            ?>
                 
               
             

               <span class="text-center mb-3"><a href="<?=base_url('category/')?><?=$row['post_category']?>">
    <button type="button" class="btn btn-outline-primary btn-sm ">More articles</button></a>
<span>
       </div>     
       <!-- single row end --> 
       



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
