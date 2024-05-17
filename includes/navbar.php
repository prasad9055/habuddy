<div class="container">
  <div class="row">
  <div class="col-md-3">
   
  <?php 
       $query = "select * from logo where status='1'";
       $query_run = mysqli_query($con,$query);
       
       if($query_run){
          foreach($query_run as $row)
          {
            ?>
       <a href="<?=base_url('')?>"> <img src="<?=base_url('uploads/posts/')?><?=$row['logo'] ;?>" width="180px" height="90px" /></a>
         
         <?php
         }
       }
    ?>
   </div>
   <!-- google adsense code start heder part -->
  <div class="col-md-6 mt-4"> 
 
  <?php 
       $query = "select * from adds where placed_at='header' and status='1'";
       $query_run = mysqli_query($con,$query);
       
       if($query_run){
          foreach($query_run as $row)
          {
            ?>
        <?=$row['add_code'] ?>
         
         <?php
         }
       }
    ?>

  </div>

  <div class="col-md-3 mt-4">
  <nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <form class="d-flex">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>

  </div>
  </div>

</div>

<div class="container-fuild bg-primary p-2 header-bottom header-sticky">
<div class="container">
  <div class="row">
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary ">
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav  mb-2 mb-lg-0 ">
     
     <!-- menu bar coding start -->
    <?php 
            $query = "select * from categories where navbar_status ='1' and status = '1' ";
            $query_run = mysqli_query($con,$query);

            if(mysqli_num_rows($query_run)>0){

              foreach($query_run as $row){
                ?>
                 <li class="nav-item ">
        <a class="nav-link text-white" href="<?=base_url('category/')?><?= $row['slug']?>"><?= $row['name']?> </a> 
      </li> 
            <?php
              }

            }
    ?> 
     
     
   
    </ul>
  </div>

  <!-- Login session code start -->
  <div class="dropdown">
  <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
  <?php if(isset($_SESSION['auth_user'])) {
     echo $_SESSION['auth_user']['user_name'] ; 
  } else {
    echo 'User Login';
  }?>
  </button>
  <ul class="dropdown-menu">
       <!--register start-->
       <?php  if(isset($_SESSION['auth_user'])) : ?>
            <li><a class="dropdown-item" href="#">My Profile</a></li>
            <li>
            <form action="logout" method="POST">
              <button type="submit" name="logout_btn" class="dropdown-item" >Logout</button>
            </form>
          </li>
        <?php  else : ?>

            <li><a class="dropdown-item" href="<?=base_url('login')?>">Login</a></li>
            <li> <a class="dropdown-item"  href="<?=base_url('register')?>">Register</a></li>
            
      <?php  endif ;   ?>
  </ul>
</div>

</nav>
  </div>
</div>
        </div>