


<title><?=$title?></title>
<meta name="description" content="<?=$description?>">
  <meta name="keywords" content="<?=$keywords?>">

  <!-- Analystic Code Start Here -->
<?php  
   $query = "select * from analystic where status='1'" ;
   $query_run = mysqli_query($con,$query);
   if(mysqli_num_rows( $query_run)>0){
      foreach($query_run as $row){
      
       echo  $row['analystic_code'] ;
 
      }
   }


?>

<!-- Web Master Tool Code Start Here --> 
<?php

$query = "select * from webmaster where status='1' " ;
$query_run = mysqli_query($con,$query);
if(mysqli_num_rows( $query_run)>0){
   foreach($query_run as $row){
     echo  $row['webmaster_code'] ; 
   }
}

?>

</head>
<body>
