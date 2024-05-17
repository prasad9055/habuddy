   <!-- single social followers sidebar row start --> 
   <div class="row mb-3">
                <div class="col-md-12 bg-white rounded  p-1 ">
                    <h5 class="text-center mt-2">Social Media</h5>
                    <button type="button" class="btn btn-primary btn-sm m-3">
            <span><img src="<?=base_url('uploads/posts/icon-fb.png')?>"/></span> Face book <span class="badge bg-secondary">4</span>
              </button>  
              <button type="button" class="btn btn-danger btn-sm m-3">
            <span><img src="<?=base_url('uploads/posts/icon-fb.png')?>"/></span> Youtube <span class="badge bg-secondary">4</span>
              </button>  
              <button type="button" class="btn btn-danger btn-sm m-3">
            <span><img src="<?=base_url('uploads/posts/icon-fb.png')?>"/></span> Instagram <span class="badge bg-secondary">4</span>
              </button>  
              <button type="button" class="btn btn-primary btn-sm m-3">
            <span><img src="<?=base_url('uploads/posts/icon-fb.png')?>"/></span> twitter <span class="badge bg-secondary">4</span>
              </button>  
              </div>
        </div>
          <!-- single social followers sidebar row end --> 

        <!-- single Adsense sidebar row start -->  
          <div class="row mb-3 rounded">
           <div class="card">
                   <div class="card-body">
                   Ad code here 
                        </div>
             </div>
          </div>
 <!-- single Adsense sidebar row end -->  


  <!-- single Most recent posts sidebar row start -->  
  <div class="row mb-3 rounded">
           <div class="card">
           <h5 class="h5 text-center m-2">Most Popular Posts</h5>
            <!-- card bordy start -->      
          <?php  
                    $count=0;
                  $query = "select * from posts where status='1' order by viewcount DESC";
                  $query_run = mysqli_query($con,$query);
                  if(mysqli_num_rows( $query_run)>0){
                    foreach($query_run as $row){
                        ?>
              <div class="card-body border">
                    <a href="<?=base_url('post/')?><?=$row['slug_url']?>" style="text-decoration:none; color:#000;">
                    <div class="row">
                        <div class="col-md-4">  <img src="<?=base_url('uploads/posts/')?><?=$row['image']?>" width="90px" height="90px" /></div>
                        <div class="col-md-7"> 
                        <span style="font-size:13px; font-weight:500"> <?=$row['title']?></span>
                        <span style="font-size:13px;"> <?=$row['meta_description']?></span>
                        </span>
                    </div>
                    <div class="col-md-12 text-muted text-end" style="font-size:12px;">
                  
                    <small>views : <?=$row['viewcount']?></small>
                    <small>category : <?=$row['post_category']?></small> 
                     
                    </div>
                    </div>
</a>
                        </div>

            <?php

                      $count++;
                      if($count == '5'){
                        break;
                      }
                    }

                  }
          
          ?>
          
                         <!-- card bordy end -->  



                    
             </div>
          </div>
 <!-- single Most recent posts sidebar row end --> 