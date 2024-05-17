
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
                            <li class="breadcrumb-item active">Edit Post</li>
                        </ol>
                        <h5 class="mt-4">Edit Post  </h5>
             <form action="postcode.php" enctype="multipart/form-data" method="POST">
                <!-- Load Post Data -->
                <?php
                          if(isset($_GET['post_id'])){
                            $id = $_GET['post_id'] ;
                            $query = "select * from posts where post_id ='$id'";
                            $query_run = mysqli_query($con,$query);

                            if(mysqli_num_rows($query_run)>0){

                              foreach($query_run as $row)
                              {  
                                ?>
                                


                <div class="row">
                 <div class="col-md-9">
                 
                 <div class="form-group mb-2">
                 <span>Post ID : </span> 
                     <input class="form-control form-control-sm " type="text" readonly name="post_id" value="<?=$row['post_id']?>" style="width:300px;">
                    
                    </div>
                    
                       <div class="form-group mb-2">
                        <input type="text" name="title" value="<?=$row['title']?>" class="form-control" />
                       </div>
                       <div class="form-group mb-2">
                       <input class="form-control form-control-sm" type="text" name="slug_url" value="<?=$row['slug_url']?>" aria-label=".form-control-sm example">
                    </div>
                   
                    

                            <div class="mb-3 form-group">
                                <textarea name="description" id="editsummernote" class="form-control" rows="4">
                                <?=$row['description']?>
                                </textarea>
                            </div>

                            <div class="form-group mb-3">
                                <label class="ms-2">Enter meta title </label>
                        <input type="text" name="meta_title" value="<?=$row['meta_title']?>" class="form-control" />
                       </div>

                       <div class="form-group mb-3 ">
                       <label class="ms-2">Enter meta Description</label>
                        <input type="text" name="meta_description" value="<?=$row['meta_description']?>" class="form-control" />
                       </div>

                       <div class="form-group mb-3 ">
                       <label class="ms-2">Enter meta Keyword</label>
                        <input type="text" name="meta_keyword" value="<?=$row['meta_keyword']?>" class="form-control" />
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
                            <p><button  type="submit" name="update_btn" class="btn btn-primary text-center">Update</button></p>
                        </div> 
                 </div>
                 <!-- fetature Image Block -->
                 <div class="card mb-3">
                        <div class="card-header"><h6>Feature image</h6></div>
                        <div class="card-body">
                        <input type="hidden" name="old_image" value="<?=$row['image']?>" />
                        <p id="demo"><img src="../../uploads/posts/<?=$row['image']?>" width="200px"  height="150px"/></p>
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

                                   $post_category= $row['post_category'];

                                   if($post_category == $slug){
                                 ?>
                                    <input type="checkbox" checked="true" name="post_category" value="<?= $slug?>"><?= $name ?><br>  
                                  
                            <?php
                                   }else{
?>
                                 <input type="checkbox" name="post_category" value="<?= $slug?>"><?= $name ?><br>  

<?php
                                   }
                                }
                            }
                            ?>          
                            </fieldset> 
                           </div> 
                 </div>

             </div>


                </div>

                </form>


                <?php
                              }


                            }

                          }
                
                ?>
                      
    
<?php 
include($link.'/includes/footer.php'); 
include($link.'/includes/scripts.php'); 

?>