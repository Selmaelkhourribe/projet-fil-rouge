<?php
$con= mysqli_connect('localhost','root','','frelearn');  

if($con){
    
    //  echo 'connection is working';
   
}
else{
    die(mysqli_error($con));
}

?> 
