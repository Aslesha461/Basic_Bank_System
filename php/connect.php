<?php
$con=mysqli_connect("localhost:3308","root","",'customers');
if($con){
  echo "connected";
}else{
  echo "error while connecting...";
}

 ?>
