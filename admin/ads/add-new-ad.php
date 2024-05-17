
<?php
    error_reporting(E_ALL);
?>
<?php 
   include('../links.php');
   include($link.'/authentication.php');
   include ($link.'/includes/header.php');
?>

<div class="container-fluid px-4">
<?php include('../message.php') ?>
                        <h1 class="mt-4">Add New Ad    </h1>
                       
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                            <li class="breadcrumb-item active">Add New Ad</li>
                        </ol>
                <div class="row">
                 <div class="col-md-12">
                       <div class="card">
                          <div class="card-header">
                            <h4>Add New Ad</h4> </div>
                            <div class="card-body">
                            <form action="addscode.php" method="POST">
                                    
                            <div class="col-md-12">
                                <div class="row">
                                <div class="form-group mb-3 col-md-6">
                               <label>Add Placed At</label>
                              <select name="placed_at" required class="form-control">
                                <option value="">-- Choose Option --</option>
                                <option value="header">Place At Header</option>
                                <option value="sidebar">Place At Sidebar</option>
                                <option value="a_top">Place At Atricle-Top</option>
                                <option value="a_middle">Place At Article-midle</option>
                                <option value="a_bottom">Place At Atricle-bottom</option>
                                <option value="footer">Place At footer</option>
                              </select>
                         </div>
                                <div class="form-group mb-3 col-md-6">
                                <label>Add Size</label>
                                <input type="text" class="form-control" name="add_size" />  
                                </div>
                                </div>
                                <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label>Place a Ad Code</label>
                                <textarea name="add_code" id="addcode" cols=""  rows="5" class="form-control"></textarea>  
                                </div>
                                </div>
                                <div class="row">
                                <div class="form-group mb-3 col-md-6">
                                    <lable>Status</lable>
                                <select name="status" required class="form-control">
                                 <option value="1">Enable</option>
                                 <option value="0">Disable</option> 
                               </select>
                                </div>
                                <div class="form-group mb-3 col-md-6">
                              
                                <input type="submit" class="btn btn-primary mt-4" name="add_submit" />  
                                </div>
                                </div>
                            </div>
                            </div>
                            </form>
                          </div>
                     </div>
                  </div>
                </div>




<?php 
include($link.'/includes/footer.php'); 
include($link.'/includes/scripts.php'); 

?>