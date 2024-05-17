
<?php 
   include('../links.php');
   include($link.'/authentication.php');
   include ($link.'/includes/header.php');
   
 
?>


<div class="container-fluid px-4">
                        <h1 class="mt-4">Add Category</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">DashBoard</li>
                            <li class="breadcrumb-item active">Add Category</li>
                        </ol>
                        <?php include('../message.php') ?>
                        <div class="row">
                        <div class="col-md-12">
                       <div class="card">
                        <div class="card-header">
                            <h4>Add Category 
                                <a href="<?=$css_link ?>/category/view-category.php" class="btn btn-primary float-end">View Categories</a>
                            </h4> </div>
                        <div class="card-body">
                     
                         <form action="category-code.php" method="POST">
                         <div class="row">
                            
                            
                         <div class=" mb-3 col-md-6">
                               <label>Category Name </label>
                               <input type="text" name="category"  class="form-control"  >
                         </div>  

                         <div class="form-group mb-3 col-md-6">
                               <label>Slug</label>
                               <input type="text" name="slug"  class="form-control">
                         </div>

                         
                         <div class="form-group mb-3 col-md-12">
                               <label>Description</label>
                               <textarea name="description" id="" cols="" rows="5" class="form-control"></textarea>
                         </div>
                         
                         <div class="form-group mb-3 col-md-6">
                               <label>Meta Title</label>
                               <input type="text" name="meta_title"  class="form-control">
                         </div>
                         <div class="form-group mb-3 col-md-6">
                               <label>Meta Keyword</label>
                               <input type="text" name="meta_keyword"  class="form-control">
                         </div>
                         <div class="form-group mb-3 col-md-12">
                               <label>Meta Description</label>
                               <textarea name="meta_description" id="" cols="" rows="5" class="form-control"></textarea>
                         </div>
                         
                         <div class="form-group mb-3 col-md-6">
                               <label>Navbar Status</label>
                               <input type="checkbox" name="navbar_status"   width="70px" height="70px" />
                         </div>
                         
                         <div class="form-group mb-3 col-md-6">
                               <label>Status</label>
                               <input type="checkbox" name="status"   width="70px" height="70px" />
                         </div>
                         
                         <div class="form-group mb-3 col-md-6">
                              
                               <button type="submit" name="add_category" class="btn btn-primary">Add Category</button>
                         </div>
                
                        </div>
                         </form>
                         
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