
<?php
    error_reporting(E_ALL);
?>
<?php 
   include('../links.php');
   include($link.'/authentication.php');
   include ($link.'/includes/header.php');
?>

<div class="container-fluid py-4 bg-light">
<?php include('../message.php') ?>
                      
                       
                        <ol class="breadcrumb mb-4 mt-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                            <li class="breadcrumb-item active">Add New Post</li>
                        </ol>
                        <h5 class="mt-4">Add New Post   </h5>
             <form action="postcode.php" enctype="multipart/form-data" method="POST">
                <div class="row">
                 <div class="col-md-9">
                       <div class="form-group mb-2">
                        <input type="text" name="title" placeholder="Enter title Here" class="form-control" />
                       </div>
                       <div class="form-group mb-2">
                       <input class="form-control form-control-sm" type="text" name="slug_url" placeholder="slug-url" aria-label=".form-control-sm example">
                    </div>
                            <div class="mb-3 form-group">
                                <textarea name="description" id="summernote" class="form-control" rows="4"></textarea>
                            </div>

                            <div class="form-group mb-3">
                                <label class="ms-2">Enter meta title </label>
                        <input type="text" name="meta_title" placeholder="Enter meta title Here" class="form-control" />
                       </div>

                       <div class="form-group mb-3 ">
                       <label class="ms-2">Enter meta Description</label>
                        <input type="text" name="meta_description" placeholder="Enter meta description Here" class="form-control" />
                       </div>

                       <div class="form-group mb-3 ">
                       <label class="ms-2">Enter meta Keyword</label>
                        <input type="text" name="meta_keyword" placeholder="Enter meta keyword Here" class="form-control" />
                       </div>


                      

                  </div>
                  <!--side bar start -->
             <div class="col-md-3">
                    <!--publish block design--> 
                  <div class="card mb-3">
                        <div class="card-header"><h6> Publish</h6></div>
                        <div class="card-body">
                            <p>Visibility :  <select name="status" >
                                <option value="1">Public</option>
                                <option value="0">Private</option>
                            </select> </p>
                            <p><button  type="submit" name="post-add" class="btn btn-primary text-center">Publish</button></p>
                        </div> 
                 </div>
                 <!-- fetature Image Block -->
                 <div class="card mb-3">
                        <div class="card-header"><h6>Feature image</h6></div>
                        <div class="card-body">
                        <p id="demo"></p>
                        <input type="file" name="image" id="imgInp"  >
                        <p id="lable">
                        <label for="imgInp" id="labelWithHTML" class="upload-btn" onclick="myFunction()">Upload Image</label></p>
                        <p id="rest"></p>
                       
                        </div> 
                 </div>
                        <!-- Add Category Block -->
                       
                        <div class="card mb-3">
                        <div class="card-header">
                            <h6>select  Category</h6></div>
                        <div class="card-body">
                        <fieldset>    
                        <?php 
                            $query = "select * from categories where status= 1 ";
                            $query_run = mysqli_query($con,$query);
                            if($query_run){
                                foreach($query_run as $category){
                                   $name = $category['name'] ;
                                   $slug = $category['slug'] ;
                                   
                              ?>      
                              <input type="checkbox" name="post_category" value="<?= $slug?>"><?= $name ?><br>  
                                    
                             <?php   }
                            }
                            ?>          
                            </fieldset> 
                           </div> 
                 </div>

             </div>


                </div>

                </form>


    
<?php 
include($link.'/includes/footer.php'); 
include($link.'/includes/scripts.php'); 

?>