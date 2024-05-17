
<?php
    error_reporting(E_ALL);
?>

<?php 
   include('../../admin/links.php');
   
   include($link.'/authentication.php');
   include ($link.'/includes/header.php');
?>

<div class="container-fluid px-4">
                       <ol class="breadcrumb mb-4">
                        <li><h4 class="mt-4">View Posts</h4></li>
                        <li><button class="btn btn-outline-primary btn-sm mx-2 mt-4"> Add New </button></li>
                        </ol>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">DashBoard</li>
                            <li class="breadcrumb-item active">view Posts</li>
                        </ol>
                        <?php include('../message.php') ?>
                        <div class="row">
                        <div class="col-md-12">
                          <?php
                             $All = 0;
                             $pub = 0;
                             $tra = 0;
                             $unpub = 0;

                             $query = "select * from posts" ;
                             $query_run = mysqli_query($con,$query);
                             if( mysqli_num_rows($query_run) > 0){
                              $All =  mysqli_num_rows($query_run);
                             
                             }
                           
                            
                             $publish = "select * from posts where status='1'" ;
                             $publish_run = mysqli_query($con,$publish);
                             if(mysqli_num_rows($publish_run)>0){
                              $pub =  mysqli_num_rows($publish_run);
                             
                             }
                            
                             $unpublish = "select * from posts where status='0' and trash='0'" ;
                             $unpublish_run = mysqli_query($con,$unpublish);
                             if(mysqli_num_rows($unpublish_run)>0){
                              $unpub =  mysqli_num_rows($unpublish_run);
                             
                             }
                            

                             $trash = "select * from posts where status='0' and trash='1' " ;
                             $trash_run = mysqli_query($con,$trash);
                             if(mysqli_num_rows($trash_run)> 0){
                              $tra =  mysqli_num_rows($trash_run);
                             
                             }
                            
                            


                          ?>
                       <ul class="list-inline">
                        <li  class="list-inline-item"> <a href="?id=All">All (<?=$All ?>)</a> |</li> 
                        <li  class="list-inline-item"><a href="?id=published">Publishied (<?=$pub ?>) </a>|</li>
                        <li  class="list-inline-item"><a href="?id=unpublished">UnPublishied (<?=$unpub ?>) </a>|</li>
                        <li  class="list-inline-item"><a href="?id=trashed">Trashed (<?=$tra ?>)</a></li>
                      </ul>
                        <table id="myTable" class="table table-bordered table-sm ">
                        <thead class="table-light p-3">
                          <tr>  
                          <th >image</th>
                            <th >Title</th>
                            <th>Category</th>
                            <th>Meta Description</th>
                            <th>Meta Keywords</th>
                            <th>status</th>
                         </tr>
                          </thead>
                          <tbody>

                            <?php
                            $id='';
                             if(isset($_GET['id'])){
                            $id = $_GET['id'];
                              }
                                 if($id == 'published'){

                                  $query = "select * from posts where status='1' order by post_id DESC " ;
                                  $query_run = mysqli_query($con,$query);
                                  if(mysqli_num_rows($query_run) > 0)
                                  {
                                   foreach($query_run as $row)
                                   { ?>
                              <tr>
                              <td><img src="../../uploads/posts/<?= $row['image'];?>"  width="60px" height="50px"/></td>

                                 <td class="tiptext font-weight-bold"><h6><?= $row['title'];?></h6>
                                    <ul class="list-inline description" >
                                      <li class="list-inline-item text-dark ">id :<?= $row['post_id'];?> | </li>
                                      <li class="list-inline-item"><a href="edit-post.php?post_id=<?= $row['post_id'];?>" >Edit </a> |</li>
                                    <li class="list-inline-item">  <a href="postcode.php?trash_id=<?= $row['post_id'];?>" >Trash </a></li>
                                   </ul>
                                </td>

                                 <td><p class="font-weight-bold"><?= $row['post_category'];?></P></td>
                                 <td><p class="font-weight-bold"><?= $row['meta_description'];?></P></td>
                                 <td><p class="font-weight-bold"><?= $row['meta_keyword'];?></P></td>
                                 <?php  $status = $row['status'];?>
                                 <td><p class="font-weight-bold"><?= $status =='1'?'public':'private' ;?></P></td>
                               </tr>
   
                                   <?php
                                   }
                                  }

                                 }elseif($id == 'unpublished'){

                                  $query = "select * from posts where status='0' and trash='0'  order by post_id DESC " ;
                                  $query_run = mysqli_query($con,$query);
                                  if(mysqli_num_rows($query_run) > 0)
                                  {
                                   foreach($query_run as $row)
                                   { ?>
                              <tr>
                              <td><img src="../../uploads/posts/<?= $row['image'];?>"  width="60px" height="50px"/></td>

                                 <td class="tiptext font-weight-bold"><h6><?= $row['title'];?></h6>
                                    <ul class="list-inline description" >
                                      <li class="list-inline-item text-dark ">id :<?= $row['post_id'];?> | </li>
                                      <li class="list-inline-item"><a href="edit-post.php?post_id=<?= $row['post_id'];?>" >Edit </a> |</li>
                                    <li class="list-inline-item">  <a href="postcode.php?trash_id=<?= $row['post_id'];?>" >Trash </a></li>
                                   </ul>
                                </td>

                                 <td><p class="font-weight-bold"><?= $row['post_category'];?></P></td>
                                 <td><p class="font-weight-bold"><?= $row['meta_description'];?></P></td>
                                 <td><p class="font-weight-bold"><?= $row['meta_keyword'];?></P></td>
                                 <?php  $status = $row['status'];?>
                                 <td><p class="font-weight-bold"><?= $status =='1'?'public':'private' ;?></P></td>
                               </tr>
   
                                   <?php
                                   }
                                  }

                                 }
                                 
                                 elseif($id == 'trashed'){

                                  $query = "select * from posts where status='0' and trash='1'  order by post_id DESC " ;
                                  $query_run = mysqli_query($con,$query);
                                  if(mysqli_num_rows($query_run) > 0)
                                  {
                                   foreach($query_run as $row)
                                   { ?>
                              <tr>
                              <td><img src="../../uploads/posts/<?= $row['image'];?>"  width="60px" height="50px"/></td>

                                 <td class="tiptext font-weight-bold"><h6><?= $row['title'];?></h6>
                                    <ul class="list-inline description" >
                                      <li class="list-inline-item text-dark ">id :<?= $row['post_id'];?> | </li>
                                    <li class="list-inline-item">  <a href="postcode.php?restore_id=<?= $row['post_id'];?> " >Restore Post </a></li>
                                   </ul>
                                </td>

                                 <td><p class="font-weight-bold"><?= $row['post_category'];?></P></td>
                                 <td><p class="font-weight-bold"><?= $row['meta_description'];?></P></td>
                                 <td><p class="font-weight-bold"><?= $row['meta_keyword'];?></P></td>
                                 <td><p class="font-weight-bold"><a href="postcode.php?delete_id=<?= $row['post_id'];?> "><button class="btn btn-outline-danger btn-sm mt-2">Perminent Delete</button></a></P></td>
                               </tr>
   
                                   <?php
                                   }
                                  }


                                 }else{
                                 
                                  $query = "select * from posts where status='1' or status= '0' and trash ='0'  order by post_id DESC" ;
                                  $query_run = mysqli_query($con,$query);
                                  if(mysqli_num_rows($query_run) > 0)
                                  {
                                   foreach($query_run as $row)
                                   { ?>
                              <tr>
                              <td><img src="../../uploads/posts/<?= $row['image'];?>"  width="60px" height="50px"/></td>

                                 <td class="tiptext font-weight-bold"><h6><?= $row['title'];?></h6>
                                    <ul class="list-inline description" >
                                      <li class="list-inline-item text-dark ">id :<?= $row['post_id'];?> | </li>
                                      <li class="list-inline-item"><a href="edit-post.php?post_id=<?= $row['post_id'];?>" >Edit </a>|</li>
                                    <li class="list-inline-item">  <a href="postcode.php?trash_id=<?= $row['post_id'];?>" >Trash </a></li>
                                   </ul>
                                </td>

                                 <td><p class="font-weight-bold"><?= $row['post_category'];?></P></td>
                                 <td><p class="font-weight-bold"><?= $row['meta_description'];?></P></td>
                                 <td><p class="font-weight-bold"><?= $row['meta_keyword'];?></P></td>
                                 <?php  $status = $row['status'];?>
                                 <td><p class="font-weight-bold"><?= $status =='1'?'public':'private' ;?></P></td>
                               </tr>
   
                                   <?php
                                   }
                                  }


                                 }
                            ?>

                              


                            <?php  
                              
                            ?>
                          </tbody>
                       </table>

                       
                     
                        </div>
                        </div>
</div>


<?php 
 // include($path.$link.'/config/dbconfig.php'); 
include($link.'/includes/footer.php'); 
include($link.'/includes/scripts.php'); 

?>