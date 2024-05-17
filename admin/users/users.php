
<?php
    error_reporting(E_ALL);
?>

<?php 
   include('../../admin/links.php');
   
   include($link.'/authentication.php');
   include ($link.'/includes/header.php');
?>

<?php 
   //include('authentication.php');
  // $path = $_SERVER['DOCUMENT_ROOT'];
 //  $path = "includes/header.php";
 //  include($path);

   include($link.'/config/dbconfig.php'); 
?>




<div class="container-fluid px-4">
                        <h1 class="mt-4">Users</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">DashBoard</li>
                            <li class="breadcrumb-item active">users</li>
                        </ol>
                        <?php include('../message.php') ?>
                        <div class="row">
                        <div class="col-md-12">
                       <div class="card">
                        <div class="card-header">
                            <h4>Registered users</h4> </div>
                        <div class="card-body">
  
                           <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                               <?php 
                                      $query="SELECT * FROM users";
                                      $query_run = mysqli_query($con,$query);
                                      if(mysqli_num_rows($query_run) > 0)
                                      {
                                           foreach($query_run as $row)
                                                { ?>
                                                <tr>
                                                      <td><?= $row['id'];  ?></td>
                                                      <td><?= $row['fname'];  ?></td>
                                                      <td><?= $row['email'];  ?></td>
                                                      <td><?php
                                                
                                                      if( $row['role_as']=="1"){
                                                        echo 'Admin';
                                                      }else{
                                                        echo 'User';
                                                      }

                                                      
                                                      ?></td>
                                                      <td><a href="<?=$css_link ?>/users/edit-users.php?id=<?= $row['id'];?>" class="btn btn-success">Edit</a></td>
                                                      <td><a href="<?=$css_link ?>/users/user-delete.php?id=<?= $row['id'];?>"><button type="button"  class="btn btn-danger">Delete</button></a></td>
                                                      

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