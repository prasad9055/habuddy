
<?php 
   include('../links.php');
   include($link.'/authentication.php');
   include ($link.'/includes/header.php');
   
 
?>


<div class="container-fluid px-4">
                        <h1 class="mt-4">Edit Category</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">DashBoard</li>
                            <li class="breadcrumb-item active">Edit Category</li>
                        </ol>
                        <?php include('../message.php') ?>
                        <div class="row">
                        <div class="col-md-12">
                       <div class="card">
                        <div class="card-header">
                            <h4>Edit Category 
                                <a href="<?=$css_link ?>/category/view-category.php" class="btn btn-primary float-end">Back</a>
                            </h4> </div>
                        <div class="card-body">

                        <?php 
                                 if(isset($_GET['category_id'])){

                                    $catid = $_GET['category_id'];

                                    $category_query = "SELECT * FROM categories WHERE id='$catid'";
                         $category_query_run=mysqli_query($con,$category_query);
                         if(mysqli_num_rows($category_query_run) >0)
                         { 
                              foreach($category_query_run as $category){
                                $id = $category['id'];
                                $category_name = $category['name'];
                                $slug = $category['slug'];
                                $description = $category['description'];
                                $meta_title = $category['meta_title'];
                                $meta_description = $category['meta_description'];
                                $meta_keyword = $category['meta_keyword'];
                                $navbar_status = $category['navbar_status'];
                                $status = $category['status'];

                              }
                              ?>

<form action="category-code.php" method="POST">
                         <div class="row">
                            
                            <input type="hidden"  name="id" value="<?=$id ?>"  />
                         <div class=" mb-3 col-md-6">
                               <label>Category Name </label>
                               <input type="text" name="category" value="<?=$category_name ?>"  class="form-control"  >
                         </div>  

                         <div class="form-group mb-3 col-md-6">
                               <label>Slug</label>
                               <input type="text" name="slug" value="<?=$slug ?>"  class="form-control">
                         </div>

                         
                         <div class="form-group mb-3 col-md-12">
                               <label>Description</label>
                               <textarea name="description" id="" cols="" rows="5" class="form-control"><?=$description ?></textarea>
                         </div>
                         
                         <div class="form-group mb-3 col-md-6">
                               <label>Meta Title</label>
                               <input type="text" name="meta_title"  value="<?=$meta_title ?>" class="form-control">
                         </div>
                         <div class="form-group mb-3 col-md-6">
                               <label>Meta Keyword</label>
                               <input type="text" name="meta_keyword"  value="<?=$meta_keyword ?>" class="form-control">
                         </div>
                         <div class="form-group mb-3 col-md-12">
                               <label>Meta Description</label>
                               <textarea name="meta_description" id="" cols="" rows="5" class="form-control"><?=$meta_description ?></textarea>
                         </div>
                         
                         <div class="form-group mb-3 col-md-6">
                               <label>Navbar Status</label>
                               <input type="checkbox" name="navbar_status" value="<?$navbar_status=='1'?'checked':'' ?>"  width="70px" height="70px" />
                         </div>
                         
                         <div class="form-group mb-3 col-md-6">
                               <label>Status</label>
                               <input type="checkbox" name="status" value="<? $status=='1'?:'checked':'' ?>"  width="70px" height="70px" />
                         </div>
                         
                         <div class="form-group mb-3 col-md-6">
                              
                               <button type="submit" name="update_category" class="btn btn-primary">Update Category</button>
                         </div>
                
                        </div>
                         </form>
  



<?php

                            }else{
                                ?>
                                

                                <div class="row">
                                
                                <div class="col-md-12">
                                
                                <h4>No Record Found</h4>
                                </div>
                                </div>

                       <?php     }
                                 }
                        ?>
                     
                                               
                        </div>
                       
                       </div>
                        </div>
                        </div>
</div>

<?php 
 // include($path.$link.'/config/dbconfig.php'); 
include($link.'/includes/footer.php'); 
include($link.'/includes/scripts.php'); 

?>