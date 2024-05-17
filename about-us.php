
<?php 

session_start();
include('includes/header.php');

  $title="About - us ";
  $description="";
  $keywords="" ;

include('includes/meta-data.php');

?>

<?php include('includes/navbar.php'); ?>


<div class="container-fuild p-3" style="background-color:#f4f4f4;">
   <div class="container">
     <div class="row">
        <!-- main content start -->
      <div class="col-md-8" >
      <div style="font-family: Sans-serif ;background-color:rgb(248,249,250);padding:18px;color:black"><br><h2 style="font-family: Sans-serif ;color:black;">About Us !</h2>
<h2 style="font-family: Sans-serif ;text-align: center;">Welcome To <span id="W_Name1" >Haabuddy</span></h2>
<p><span id="W_Name2">Haabuddy</span> is a Professional <span id="W_Type1">Education ,technical , world news</span> Platform. Here we will only provide you with interesting content that you will enjoy very much. We are committed to providing you the best of <span id="W_Type2">Education ,technical , world news</span>, with a focus on reliability and <span id="W_Spec">Tech tutorial , tech form</span>. we strive to turn our passion for <span id="W_Type3">Education ,technical , world news</span> into a thriving website. We hope you enjoy our <span id="W_Type4">Education ,technical , world news</span> as much as we enjoy giving them to you.</p>
<p>I will keep on posting such valuable anf knowledgeable information on my Website for all of you. Your love and support matters a lot.</p>
<p style="font-weight: bold; text-align: center;">Thank you For Visiting Our Site<br><br>
<span style="color: blue; font-size: 16px; font-weight: bold; text-align: center;">Have a great day !</span></p></div><br><br>

      </div>
       <!-- main content end -->

        <!-- sidebar start -->
        <div class="col-md-4" style="padding-left:30px;">
        <?php include('includes/sidebar.php'); ?>
          </div>
       <!-- side bar end  -->
     </div>
   </div>
</div>
 

<?php include('includes/footer.php'); ?>
