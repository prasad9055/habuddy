
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
                        <h1 class="mt-4">Edit Ad    </h1>
                       
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                            <li class="breadcrumb-item active">Edit Ad</li>
                        </ol>
                        <div class="row">
                 <div class="col-md-12">
                       <div class="card">
                          <div class="card-header">
                            <h4>Edit Ad</h4> </div>
                            <div class="card-body">
                            <form action="addscode.php" method="POST">
                        <?php
                            if(isset($_GET['ad_id'])){

                               $adid= mysqli_real_escape_string($con,$_GET['ad_id']);
                            
                               $query = "select * from adds where id ='$adid' "; 
                               $query_run = mysqli_query($con,$query);
                               if(mysqli_num_rows($query_run) >0 ){
                                   foreach($query_run as $ad){
                                    $place_at =$ad['placed_at'];
                                    $add_size =$ad['add_size'];
                                    $add_code =$ad['add_code'];
                                    $status =$ad['status'];


                                   }
                                 
                                ?>


                                    
                            <div class="col-md-12">
                                <div class="row">
                                <div class="form-group mb-3 col-md-6">
                                    <input type="hidden" name="id" value="<?=$adid?>"/>
                               <label>Add Placed At</label>
                              <select name="placed_at" required class="form-control">
                                <option value="header" <?=$place_at =='header'? 'selected':''?> >Place At Header</option>
                                <option value="sidebar"  <?=$place_at =='sidebar'? 'selected':''?>>Place At Sidebar</option>
                                <option value="a_top"  <?=$place_at =='a_top'? 'selected':''?>>Place At Atricle-Top</option>
                                <option value="a_middle"  <?=$place_at =='a_middle'? 'selected':''?>>Place At Article-midle</option>
                                <option value="a_bottom"  <?=$place_at =='a_bottom'? 'selected':''?>>Place At Atricle-bottom</option>
                                <option value="footer"  <?=$place_at =='footer'? 'selected':''?>>Place At footer</option>
                              </select>
                         </div>
                                <div class="form-group mb-3 col-md-6">
                                <label>Add Size</label>
                                <input type="text" class="form-control" name="add_size" value="<?=$add_size?>" />  
                                </div>
                                </div>
                                <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label>Place a Ad Code</label>
                                <textarea name="add_code" id="addcode" cols=""  rows="5" class="form-control"> <?=$add_code?></textarea>  
                                </div>
                                </div>
                                <div class="row">
                                <div class="form-group mb-3 col-md-6">
                                    <lable>Status</lable>
                                <select name="status" required class="form-control">
                                 <option value="1" <?=$status =='1'? 'selected':''?>>Enable</option>
                                 <option value="0" <?=$status =='0'? 'selected':''?>>Disable</option> 
                               </select>
                                </div>
                                <div class="form-group mb-3 col-md-6">
                              
                                <input type="submit" class="btn btn-primary mt-4" name="update_add" />  
                                </div>
                                </div>
                            </div>
                            </div>
                           


                               <?php
                               }
                               else {

                                $_SESSION['message']= "Ad Id NOT FOUND";
                                  echo "<script> location.href='view-ads.php'; </script>";
                                  exit(0);
                               }
                            
                            }
                            else{

                               
                            }

                        ?>
 

 </form>
                          </div>
                     </div>
                  </div>
                </div>




<?php 
include($link.'/includes/footer.php'); 
include($link.'/includes/scripts.php'); 

?>