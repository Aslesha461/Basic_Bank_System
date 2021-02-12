<?php

if(isset($_POST['submit'])){
  $con=$con=mysqli_connect("localhost:3308","root","",'customers');


  $AM=$_POST['amount'];
  $email=$_POST['email'];
  $query="select Balance from customer where Email_ID='$email'";
   $r=mysqli_query($con,$query);
  while($rows=mysqli_fetch_assoc($r)){
    $balance=$rows['Balance'];
  }
echo"original balance :".$balance;
$nbalance=$balance+$AM;
echo"Updated balance :".$balance;
   $sql = "UPDATE customer SET  Balance='$nbalance' WHERE Email_ID='$email'";
   $result=mysqli_query($con,$sql);
   if(! $result ) {
      echo'<script type="text/javascriot"> alert("!! TRANSFER ERROR !!");</script>';
   }else {
     echo'<script type="text/javascriot"> alert("!! TRANSFER ERROR !!");</script>';
 $in="insert into transfer(Transaction_emailID,	Amount_Received,Previou_Balance)values('$email','$AM','$nbalance')";
$result2=mysqli_query($con,$in);
if($result2){
  echo "transaction saved";
}
   }


}
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/transfer.css">

    <title>Money Transfer</title>
  </head>
  <body align="center">

     <form  class="m1" action="" method="post">
       <h1 >Transfer Money </h1><br>
       <input type="text" name="email" placeholder="Enter Email_ID" ><br><br>
       <input type="number" name="amount" placeholder="Enter Amount in Rs"><br><br>
       <input type="submit" name="submit"><br>

     </form>
<form  action="index.html" method="post">
  <a style="align:center" href="../index.html">BACK TO HOME PAGE</a>
</form>



  </body>
</html>
