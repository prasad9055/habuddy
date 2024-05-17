
<?php
    error_reporting(E_ALL);
?>

<?php 
   include('../../admin/links.php');
   
   include($link.'/authentication.php');
   include ($link.'/includes/header.php');
?>

<div class="container-fluid px-4">
                        <h1 class="mt-4">View Categories</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">DashBoard</li>
                            <li class="breadcrumb-item active">view Categories</li>
                        </ol>
                        <?php include('../message.php') ?>
                        <div class="row">
                        <div class="col-md-12">
                       <div class="card">
                        <div class="card-header">
                            <h4>All Categories</h4> </div>
                        <div class="card-body">
  
                           <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Category</th>
                                    <th>slug</th>
                                    <th>Discrption</th>
                                    <th>Meta Title</th>
                                    <th>Meta Discription</th>
                                    <th>Meta Keyword</th>
                                    <th>Status</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                               <?php 
                                      $query="SELECT * FROM categories";
                                      $query_run = mysqli_query($con,$query);
                                      if(mysqli_num_rows($query_run) > 0)
                                      {
                                           foreach($query_run as $row)
                                                { ?>
                                                <tr>
                                                      <td><?= $row['id'];?></td>
                                                      <td><?= $row['name'];?></td>
                                                      <td><?= $row['slug'];?></td>
                                                      <td><?= $row['description'];?></td>
                                                      <td><?= $row['meta_title'];?></td>
                                                      <td><?= $row['meta_description'];?></td>
                                                      <td><?= $row['meta_keyword'];?></td>
                                                      <td><?php
                                                
                                                      if( $row['status']=="1"){
                                                        echo 'Active';
                                                      }else{
                                                        echo 'In Active';
                                                      }

                                                      
                                                      ?></td>
                                                      <td><a href="<?=$css_link ?>/category/category-edit.php?category_id=<?= $row['id'];?>" class="btn btn-success">Edit</a></td>
                                                      <td><a href="<?=$css_link ?>/category/category-code.php?id=<?= $row['id'];?>"><button type="button"  class="btn btn-danger">Delete</button></a></td>
                                                      

                                                 </tr>
 

                                                <?php

                                                }

                                      }else {
                                        ?>

                                          <tr>
                                            <td colspan="6"> No Records Founds</td>
                                          </tr>
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


<?php 
 // include($path.$link.'/config/dbconfig.php'); 
include($link.'/includes/footer.php'); 
include($link.'/includes/scripts.php'); 

?>