
<?php 
 include('../links.php');
   include($link.'/authentication.php');
?>

<?php
  // add category Code Start here 
  if(isset($_POST['add_category']))
  {

     $category = $_POST['category'];
     $slug = $_POST['slug'];
     $description = $_POST['description'];
     $meta_title = $_POST['meta_title'];
     $meta_keyword = $_POST['meta_keyword'];
     $meta_description = $_POST['meta_description'];
     $navbar_status = $_POST['navbar_status']==true ?'1':'0';
     if(isset($_POST['status'])){
      $status ='1';
     }else{
      $status ='0';
     }
    


     $query = "INSERT INTO categories (name, slug, description, meta_title, meta_description, meta_keyword, navbar_status, status)
      VALUES('$category', '$slug', '$description','$meta_title','$meta_description','$meta_keyword', '$navbar_status', '$status')";

     $query_run = mysqli_query($con,$query);

     if($query_run)
     {
            $_SESSION['message']="Category Added Sucessfully";
            header("Location: ../category/add-category.php");
          exit(0);
     }
     else 
     {
        $_SESSION['message']="Something Wrong .. check All fields";
        header("Location: ../category/add-category.php");
          exit(0);
     }
   

  }

?>



<?php  
// update Category 

if(isset($_POST['update_category']))
{
  $id=$_POST['id'];
  $category = $_POST['category'];
  $slug = $_POST['slug'];
  $description = $_POST['description'];
  $meta_title = $_POST['meta_title'];
  $meta_keyword = $_POST['meta_keyword'];
  $meta_description = $_POST['meta_description'];
  $navbar_status = $_POST['navbar_status']==true ?'1':'0';
  if(isset($_POST['status'])){
   $status ='1';
  }else{
   $status ='0';
  }
 
  $query = "UPDATE categories SET name='$category',slug='$slug', description='$description',meta_title='$meta_title',
  meta_description='$meta_description', meta_keyword='$meta_keyword', navbar_status='$navbar_status', status='$status' where id='$id' ";

 $query_run = mysqli_query($con,$query);

 if($query_run)
 {
        $_SESSION['message']="Category updated Sucessfully";
        header("Location: ../category/view-category.php");
      exit(0);
 }
 else 
 {
    $_SESSION['message']="Something Wrong .. check All fields";
    header("Location: ../category/view-category.php");
      exit(0);
 }



}



?>


<?php
// delete Category Code Start Here 
if(isset($_GET['id'])){

    $category_id= $_GET['id'];
   
    $query = "DELETE FROM categories WHERE id='$category_id' ";
     $query_run=mysqli_query($con,$query);

   if($query_run){
          $_SESSION['message']="Category Deleted Successfully" ;
          header("Location: ../category/view-category.php");
          exit(0);
   }

}
?>