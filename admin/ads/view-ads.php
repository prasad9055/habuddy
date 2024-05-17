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
    <h1 class="mt-4">View Ads </h1>

    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
        <li class="breadcrumb-item active">View Ads</li>
    </ol>
    <div class="row">
        <div class="col-md-12">
            <div class="card">

                <div class="card-body">
                    <div class="col-md-12">
                    
                        <div class="row">
                            <div class="col-md-12 bg-dark bg-gradient text-white rounded p-1 mb-3">
                                <h5>Header Ads</h5>
                            </div>
                            <div class="col-md-12 mb-3">
                              <table class="table table-border">
                                <thead class="table-primary">
                                  <th>s.no</th>
                                  <th>placed at</th>
                                  <th>ad size</th>
                                  <th>ad code</th>
                                  <th>status</th>
                                  <th>Edit</th>
                                  <th>Delete</th>
                                </thead>
                                <tbody>
                                  <?php 
                                        $query= "select * from adds where placed_at='header'";
                                        $query_run =mysqli_query($con,$query);
                                        if(mysqli_num_rows($query_run) > 0){
                                          $count =1;
                                          foreach($query_run as $ad){
                                            ?>
                                            <tr>
                                                <td><?=$count++?></td>
                                                <td><?=$ad['placed_at']?></td>
                                                <td><?=$ad['add_size']?></td>
                                                <td><?=$ad['add_code']?></td>
                                                <td><?=$ad['status']=='1'?'Enable':'Disable'?></td>
                                               <td><a href="<?=$css_link ?>/ads/edit-add.php?ad_id=<?= $ad['id'];?>" class="btn btn-success">Edit</a></td>
                                                <td><a href="<?=$css_link ?>/ads/addscode.php?id=<?= $ad['id'];?>"><button type="button"  class="btn btn-danger">Delete</button></a></td>
                                                      
                                              </tr>

                                       <?php   }
                                        }
                                        else{
                                          ?>
                                           <td col-span="6"> NO Records Found</td>
                                          <?php
                                         
                                        }
                                  ?>
                      
                                 
                                </tbody>
                              </table>

                            </div>
                        </div>

                        
                        <div class="row">
                            <div class="col-md-12 bg-dark bg-gradient text-white rounded p-1 mb-3">
                                <h5>Sidebar Ads</h5>
                            </div>
                            <div class="col-md-12 mb-3">
                              <table class="table table-border">
                                <thead class="table-primary">
                                  <th>s.no</th>
                                  <th>placed at</th>
                                  <th>ad size</th>
                                  <th>ad code</th>
                                  <th>status</th>
                                  <th>Edit</th>
                                  <th>Delete</th>
                                </thead>
                                <tbody>
                                  <?php 
                                        $query= "select * from adds where placed_at='sidebar'";
                                        $query_run =mysqli_query($con,$query);
                                        if(mysqli_num_rows($query_run) > 0){
                                          $count =1;
                                          foreach($query_run as $ad){
                                            ?>
                                            <tr>
                                                <td><?=$count++?></td>
                                                <td><?=$ad['placed_at']?></td>
                                                <td><?=$ad['add_size']?></td>
                                                <td><?=$ad['add_code']?></td>
                                                <td><?=$ad['status']=='1'?'Enable':'Disable'?></td>
                                                <td><a href="<?=$css_link ?>/ads/edit-add.php?ad_id=<?= $ad['id'];?>" class="btn btn-success">Edit</a></td>
                                                <td><a href="<?=$css_link ?>/ads/addscode.php?id=<?= $ad['id'];?>"><button type="button"  class="btn btn-danger">Delete</button></a></td>
                                                 </tr>

                                       <?php   }
                                        }
                                        else{
                                          ?>
                                           <td col-span="6"> NO Records Found</td>
                                          <?php
                                         
                                        }
                                  ?>
                      
                                 
                                </tbody>
                              </table>

                            </div>
                        </div>
                      
                        <div class="row">
                            <div class="col-md-12 bg-dark bg-gradient text-white rounded p-1 mb-3">
                                <h5>Article Top Ads</h5>
                            </div>
                            <div class="col-md-12 mb-3">
                              <table class="table table-border">
                                <thead class="table-primary">
                                  <th>s.no</th>
                                  <th>placed at</th>
                                  <th>ad size</th>
                                  <th>ad code</th>
                                  <th>status</th>
                                  <th>Edit</th>
                                  <th>Delete</th>
                                </thead>
                                <tbody>
                                  <?php 
                                        $query= "select * from adds where placed_at='a_top'";
                                        $query_run =mysqli_query($con,$query);
                                        if(mysqli_num_rows($query_run) > 0){
                                          $count =1;
                                          foreach($query_run as $ad){
                                            ?>
                                            <tr>
                                                <td><?=$count++?></td>
                                                <td><?=$ad['placed_at']?></td>
                                                <td><?=$ad['add_size']?></td>
                                                <td><?=$ad['add_code']?></td>
                                                <td><?=$ad['status']=='1'?'Enable':'Disable'?></td>
                                                <td><a href="<?=$css_link ?>/ads/edit-add.php?ad_id=<?= $ad['id'];?>" class="btn btn-success">Edit</a></td>
                                                <td><a href="<?=$css_link ?>/ads/addscode.php?id=<?= $ad['id'];?>"><button type="button"  class="btn btn-danger">Delete</button></a></td>
                                                </tr>

                                       <?php   }
                                        }
                                        else{
                                          ?>
                                           <td col-span="6"> NO Records Found</td>
                                          <?php
                                         
                                        }
                                  ?>
                      
                                 
                                </tbody>
                              </table>

                            </div>
                        </div>
                      
                        <div class="row">
                            <div class="col-md-12 bg-dark bg-gradient text-white rounded p-1 mb-3">
                                <h5>Article Middle Ads</h5>
                            </div>
                            <div class="col-md-12 mb-3">
                              <table class="table table-border">
                                <thead class="table-primary">
                                  <th>s.no</th>
                                  <th>placed at</th>
                                  <th>ad size</th>
                                  <th>ad code</th>
                                  <th>status</th>
                                  <th>Edit</th>
                                  <th>Delete</th>
                                </thead>
                                <tbody>
                                  <?php 
                                        $query= "select * from adds where placed_at='a_middle'";
                                        $query_run =mysqli_query($con,$query);
                                        if(mysqli_num_rows($query_run) > 0){
                                          $count =1;
                                          foreach($query_run as $ad){
                                            ?>
                                            <tr>
                                                <td><?=$count++?></td>
                                                <td><?=$ad['placed_at']?></td>
                                                <td><?=$ad['add_size']?></td>
                                                <td><?=$ad['add_code']?></td>
                                                <td><?=$ad['status']=='1'?'Enable':'Disable'?></td>
                                                <td><a href="<?=$css_link ?>/ads/edit-add.php?ad_id=<?= $ad['id'];?>" class="btn btn-success">Edit</a></td>
                                                <td><a href="<?=$css_link ?>/ads/addscode.php?id=<?= $ad['id'];?>"><button type="button"  class="btn btn-danger">Delete</button></a></td>
                                                </tr>

                                       <?php   }
                                        }
                                        else{
                                          ?>
                                           <td col-span="6"> NO Records Found</td>
                                          <?php
                                         
                                        }
                                  ?>
                      
                                 
                                </tbody>
                              </table>

                            </div>
                        </div>
                      
                        <div class="row">
                            <div class="col-md-12 bg-dark bg-gradient text-white rounded p-1 mb-3">
                                <h5>Article Bottom Ads</h5>
                            </div>
                            <div class="col-md-12 mb-3">
                              <table class="table table-border">
                                <thead class="table-primary">
                                  <th>s.no</th>
                                  <th>placed at</th>
                                  <th>ad size</th>
                                  <th>ad code</th>
                                  <th>status</th>
                                  <th>Edit</th>
                                  <th>Delete</th>
                                </thead>
                                <tbody>
                                  <?php 
                                        $query= "select * from adds where placed_at='a_bottom'";
                                        $query_run =mysqli_query($con,$query);
                                        if(mysqli_num_rows($query_run) > 0){
                                          $count =1;
                                          foreach($query_run as $ad){
                                            ?>
                                            <tr>
                                                <td><?=$count++?></td>
                                                <td><?=$ad['placed_at']?></td>
                                                <td><?=$ad['add_size']?></td>
                                                <td><?=$ad['add_code']?></td>
                                                <td><?=$ad['status']=='1'?'Enable':'Disable'?></td>
                                                <td><a href="<?=$css_link ?>/ads/edit-add.php?ad_id=<?= $ad['id'];?>" class="btn btn-success">Edit</a></td>
                                                <td><a href="<?=$css_link ?>/ads/addscode.php?id=<?= $ad['id'];?>"><button type="button"  class="btn btn-danger">Delete</button></a></td>
                                                 </tr>

                                       <?php   }
                                        }
                                        else{
                                          ?>
                                           <td col-span="6"> NO Records Found</td>
                                          <?php
                                         
                                        }
                                  ?>
                      
                                 
                                </tbody>
                              </table>

                            </div>
                        </div>
                      
                        <div class="row">
                            <div class="col-md-12 bg-dark bg-gradient text-white rounded p-1 mb-3">
                                <h5>Footer Ads</h5>
                            </div>
                            <div class="col-md-12 mb-3">
                              <table class="table table-border">
                                <thead class="table-primary">
                                  <th>s.no</th>
                                  <th>placed at</th>
                                  <th>ad size</th>
                                  <th>ad code</th>
                                  <th>status</th>
                                  <th>Edit</th>
                                  <th>Delete</th>
                                </thead>
                                <tbody>
                                  <?php 
                                        $query= "select * from adds where placed_at='footer'";
                                        $query_run =mysqli_query($con,$query);
                                        if(mysqli_num_rows($query_run) > 0){
                                          $count =1;
                                          foreach($query_run as $ad){
                                            ?>
                                            <tr>
                                                <td><?=$count++?></td>
                                                <td><?=$ad['placed_at']?></td>
                                                <td><?=$ad['add_size']?></td>
                                                <td><?=$ad['add_code']?></td>
                                                <td><?=$ad['status']=='1'?'Enable':'Disable'?></td>
                                                <td><a href="<?=$css_link ?>/ads/edit-add.php?ad_id=<?= $ad['id'];?>" class="btn btn-success">Edit</a></td>
                                                <td><a href="<?=$css_link ?>/ads/addscode.php?id=<?= $ad['id'];?>"><button type="button"  class="btn btn-danger">Delete</button></a></td>
                                                </tr>

                                       <?php   }
                                        }
                                        else{
                                          ?>
                                           <td col-span="6"> NO Records Found</td>
                                          <?php
                                         
                                        }
                                  ?>
                      
                                 
                                </tbody>
                              </table>

                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>




    <?php 
include($link.'/includes/footer.php'); 
include($link.'/includes/scripts.php'); 

?>