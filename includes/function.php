<?php 

function base_url($part_url){
   echo 'http://localhost/habuddy/'.$part_url;
}

function base_url_return($part_url){

   return 'http://localhost/habuddy'.$part_url;
}

function include_link($url){
   return '../../admin/'.$url;
}

?>