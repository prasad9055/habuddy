<?php
    error_reporting(E_ALL);
?>
<?php 
 include('../links.php');
   include($link.'/authentication.php');
?>

<?php 
if(isset($_POST['post-add'])){

    $title = mysqli_real_escape_string($con,$_POST['title']);
    $slug_url = mysqli_real_escape_string($con,$_POST['slug_url']);
    $description = mysqli_real_escape_string($con,$_POST['description']);
    $meta_title = mysqli_real_escape_string($con, $_POST['meta_title']);
    $meta_description =  mysqli_real_escape_string($con,$_POST['meta_description']);
    $meta_keyword =  mysqli_real_escape_string($con,$_POST['meta_keyword']);
    $status =  mysqli_real_escape_string($con,$_POST['status']);
    $post_category =  mysqli_real_escape_string($con,$_POST['post_category']);
    $filename = $_FILES['image']['name'];

    //rename image file with timestamp 

  //  $image_extension = pathinfo($filename,PATHINFO_EXTENSION);
  //  $filename = time().'.'.$image_extension 
  
  $query = "INSERT INTO posts( `title`, `description`, `image`, `meta_title`, `meta_description`, `meta_keyword`, `post_category`, `status`,`slug_url`)
                        VALUES ('$title', '$description', '$filename', '$meta_title', '$meta_description',  '$meta_keyword', '$post_category', '$status','$slug_url')"; 
     $query_run = mysqli_query($con, $query);
    
     if($query_run){
        move_uploaded_file($_FILES['image']['tmp_name'],'../../uploads/posts/'.$filename);
        $_SESSION['message']="Post Added Sucessfully";
        header('Location: add-new-post.php');
        exit(0);
     }else{
        $_SESSION['message']="Something went wrong";
        header('Location: add-new-post.php');
        exit(0);
     }

}

if(isset($_POST['update_btn'])){

   $post_id = mysqli_real_escape_string($con,$_POST['post_id']);
   $title = mysqli_real_escape_string($con,$_POST['title']);
   $slug_url = mysqli_real_escape_string($con,$_POST['slug_url']);
   $description = mysqli_real_escape_string($con,$_POST['description']);
   $meta_title = mysqli_real_escape_string($con, $_POST['meta_title']);
   $meta_description =  mysqli_real_escape_string($con,$_POST['meta_description']);
   $meta_keyword =  mysqli_real_escape_string($con,$_POST['meta_keyword']);
   $status =  mysqli_real_escape_string($con,$_POST['status']);
   $post_category =  mysqli_real_escape_string($con,$_POST['post_category']);
   $old_image =  mysqli_real_escape_string($con,$_POST['old_image']);
   $filename = $_FILES['image']['name'];

   if($filename == null){
      $filename =  $old_image ;
   }else{
      move_uploaded_file($_FILES['image']['tmp_name'],'../../uploads/posts/'.$filename);
   }

   

   //rename image file with timestamp 

 //  $image_extension = pathinfo($filename,PATHINFO_EXTENSION);
 //  $filename = time().'.'.$image_extension 
 
 $query = "UPDATE  posts SET `title`='$title', 
  `description`='$description',
   `image`='$filename',
    `meta_title`='$meta_title',
     `meta_description`='$meta_description',
      `meta_keyword`='$meta_keyword',
       `post_category`='$post_category',
        `status`='$status',
        `slug_url`='$slug_url' where post_id='$post_id'"; 
   
   $query_run = mysqli_query($con, $query);
   
    if($query_run){
    
       $_SESSION['message']="Post Updated Sucessfully";
       header('Location: add-new-post.php');
       exit(0);
    }else{
       $_SESSION['message']="Something went wrong";
       header('Location: add-new-post.php');
       exit(0);
    }

}

if(isset($_GET['trash_id'])){

   $post_id = $_GET['trash_id'] ;
   $query = "update posts set trash='1' ,status='0' where post_id='$post_id'";
   $query_run = mysqli_query($con,$query);
   if($query_run){
    
      $_SESSION['message']="Post Added into Trash Sucessfully";
      header('Location: view-posts.php');
      exit(0);
   }else{
      $_SESSION['message']="Something went wrong";
      header('Location: view-posts.php');
      exit(0);
   }

}


if(isset($_GET['restore_id'])){

   $post_id = $_GET['restore_id'] ;
   $query = "update posts set trash='0' ,status='1' where post_id='$post_id'";
   $query_run = mysqli_query($con,$query);
   if($query_run){
    
      $_SESSION['message']="Post Restored Sucessfully";
      header('Location: view-posts.php');
      exit(0);
   }else{
      $_SESSION['message']="Something went wrong";
      header('Location: view-posts.php');
      exit(0);
   }

}

if(isset($_GET['delete_id'])){

   $post_id = $_GET['delete_id'] ;
   $query = "delete from posts where post_id='$post_id'";
   $query_run = mysqli_query($con,$query);
   if($query_run){
    
      $_SESSION['message']="Post Deleted Sucessfully";
      header('Location: view-posts.php');
      exit(0);
   }else{
      $_SESSION['message']="Something went wrong";
      header('Location: view-posts.php');
      exit(0);
   }

}


?>