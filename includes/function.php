<?php 

function base_url($part_url){
   //  echo 'http://localhost/habuddy/'.$part_url;

  //  echo 'https://haabuddy.com/'.$part_url;
   
    echo 'https://haabuddy.com/dev/'.$part_url;
}

function base_url_return($part_url){

//   return 'http://localhost/habuddy/'.$part_url;

//    return 'https://haabuddy.com/'.$part_url;

    return 'https://haabuddy.com/dev/'.$part_url;
}

function include_link($url){
   return '../../admin/'.$url;
}

?>
