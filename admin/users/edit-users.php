
<?php 
 include('../links.php');
   include($link.'/authentication.php');
   include ($link.'/includes/header.php');
   
 
?>


<div class="container-fluid px-4">
                        <h1 class="mt-4">Users</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">DashBoard</li>
                            <li class="breadcrumb-item active">Edit User</li>
                        </ol>
                        <div class="row">
                        <div class="col-md-12">
                       <div class="card">
                        <div class="card-header">
                            <h4>Edit user</h4> </div>
                        <div class="card-body">
                     
                         <form action="user-update.php" method="POST">
                         <div class="row">

                        <?php 
                        
                        if(isset($_GET['id'])){

                             
                         $user_id = $_GET['id'];
                         $user_query = "SELECT * FROM users WHERE id='$user_id'";
                         $user_query_run=mysqli_query($con,$user_query);
                         if(mysqli_num_rows($user_query_run) >0)
                         { 
                              foreach($user_query_run as $user){
                                $fname = $user['fname'];
                                $lname = $user['lname'];
                                $email = $user['email'];
                                $password = $user['password'];
                                $role_as = $user['role_as'];
                                $status = $user['status'];

                              }

                            ?> 
                            
                            <input type="hidden"  name="user_id" value="<?=$user_id  ?>"/>
                         <div class=" mb-3 col-md-6">
                               <label>First Name </label>
                               <input type="text" name="fname"  class="form-control" value="<?=$fname?>" >
                         </div>  

                         <div class="form-group mb-3 col-md-6">
                               <label>Last Name</label>
                               <input type="text" name="lname"  class="form-control" value="<?=$lname?>">
                         </div>

                         
                         <div class="form-group mb-3 col-md-6">
                               <label>email</label>
                               <input type="email" name="email"  class="form-control" value="<?=$email?>">
                         </div>
                         
                         <div class="form-group mb-3 col-md-6">
                               <label>Password</label>
                               <input type="text" name="password"  class="form-control" value="<?=$password?>" >
                         </div>
                         
                         <div class="form-group mb-3 col-md-6">
                               <label>Role as</label>
                              <select name="role_as" required class="form-control">
                                <option value="">-- select Option --</option>
                                <option value="1" <?= $role_as == '1' ? 'selected' :''; ?>>Admin</option>
                                <option value="0" <?= $role_as == '0' ? 'selected' :''; ?>>User</option>
                              </select>
                         </div>
                         
                         <div class="form-group mb-3 col-md-6">
                               <label>Status</label>
                               <input type="checkbox" name="status"   <?= $status == '1' ? 'checked':''; ?>  width="70px" height="70px" />
                         </div>
                         
                         <div class="form-group mb-3 col-md-6">
                              
                               <button type="submit" name="update_user" class="btn btn-primary">Update User</button>
                         </div>




<?php
                        
                    }
                    else {
              ?>
                        <div class="row">
                       
                     <div class=" mb-3 col-md-6">
                          <h4>No Records Found</h4>
                     </div>
                     </div>

                <?php  
                  }}
                   ?>
                
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