
<div class="container-fuild bg-dark p-100">
<div class="container">
   <div class="row">
    <div class="col-md-4">
         
    <?php 
       $query = "select * from logo where status='1'";
       $query_run = mysqli_query($con,$query);
       
       if($query_run){
          foreach($query_run as $row)
          {
            ?>
        <img src="<?=base_url('uploads/posts/')?><?=$row['logo'] ;?>" width="180px" height="90px" class="mt-3" />
         
         <?php
         }
       }
    ?>

    </div>  
    <div class="col-md-4">
        <P class="text-white mt-4">@All Rights Received by Haabuddy </p>
    </div>
    <div class="col-md-4 text-white ">
        <h5 class="mt-2">important Links</h5>
        <ul class="list-unstyled ">
          <li><a href="about-us" class="text-decoration-white">About us </a></li>
          <li><a href="privacy-policy" class="text-decoration-white">privacy Policy </a></li>
          <li><a href="terms-and-conditions" class="text-decoration-white">Terms & Conditions </a></li>
          <li><a href="disclaimer" class="text-decoration-white">Disclamier </a></li>
          <li><a href="contact-us" class="text-decoration-white">Contact us </a></li>
    </ul>
    </div>
   </div>
</div>
</div>

<script src="assets/js/jquery.min.js"></script>

<script src="assets/js/boostrap.min.js"></script>


</body>
</html>