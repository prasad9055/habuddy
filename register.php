
<?php 
session_start();
if(isset($_SESSION['auth'])){

   
    $_SESSION['message']="you already Registered in !" ;
   header("Location: index.php");
   exit(0);
}

include('includes/header.php'); ?>
<?php include('includes/navbar.php'); ?>


     <div class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <?php  include('message.php'); ?>
                    <div class="card">
                        <div class="card-header">
                            <h4>Register</h4>
                        </div>
                        <div class="card-body">
                    <form action="registercode.php" method="POST">
                        <div class="form-group mb-3">
                               <label>First Name </label>
                               <input type="text" required name="fname" placeholder="Enter First Name" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                               <label>Last Name</label>
                               <input type="text"  name="lname" placeholder="Enter Last Name" class="form-control" required >
                            </div>
                            <div class="form-group mb-3">
                               <label>Email id </label>
                               <input type="email" name="email" placeholder="Enter Email Address" class="form-control" required>
                            </div>

                            <div class="form-group mb-3">
                               <label>Password </label>
                               <input  type="password" name="password" placeholder="Enter Password" class="form-control" required>
                            </div>

                            <div class="form-group mb-3">
                               <label> Conform Password </label>
                               <input  type="password" name="cpassword" placeholder="Enter Conform Password" class="form-control" required>
                            </div>

                            <div class="form-group mb-3">
                               <button type="submit" name="register_btn" class="btn btn-primary">Register</button>
                            </div>
                   </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
     </div>

<?php include('includes/footer.php'); ?>
