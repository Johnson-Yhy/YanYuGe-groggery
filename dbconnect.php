<?php
  $db_link=mysqli_connect("localhost", 
                          "root",       
                          "root",        
                          "hb5272230");  
  
  if(!$db_link)
  {
    die("错误提示: " . mysqli_connect_error());
  }
  
 
  mysqli_query($db_link,"SET NAMES 'utf8'"); 
 
 
?>

