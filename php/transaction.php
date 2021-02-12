<?php
$con=mysqli_connect("localhost:3308","root","",'customers');
$query="select *from transfer";
$result= mysqli_query($con,$query);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>All Customers</title>
  </head>
  <body>
<table align="center" border="1px" style="width:600px;line-height:40px;">
  <H1 align="center">TRANSACTION HISTORY</H1>
  <tr>
    <th > Transaction Email-ID </th>
    <th> Amount_Received </th>
    <th> Previou_Balance </th>
    <th> TimeStamp </th>
  </tr>
  <?php
     while($rows=mysqli_fetch_assoc($result))
     {
    ?>   <tr>
           <td ><?php echo $rows['Transaction_emailID']; ?></td>
           <td><?php echo $rows['Amount_Received']; ?></td>
           <td><?php echo $rows['Previou_Balance']; ?></td>
           <td><?php echo $rows['Timestamp']; ?></td>
           </tr>
<?php
}
  ?>


</table>

<form  action="index.html" method="post">
  <a style="align:center" href="../index.html">BACK TO HOME PAGE</a>
</form>

  </body>
</html>
