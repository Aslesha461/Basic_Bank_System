<?php
$con=mysqli_connect("localhost:3308","root","",'customers');
$query="select *from customer";
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
  <H1 align="center">ALL RECORDS</H1>
  <tr>
    <th > ID </th>
    <th> Name </th>
    <th> Email </th>
    <th> Balance </th>
  </tr>
  <?php
     while($rows=mysqli_fetch_assoc($result))
     {
    ?>   <tr>
           <td ><?php echo $rows['Cust_ID']; ?></td>
           <td><?php echo $rows['Name']; ?></td>
           <td><?php echo $rows['Email_ID']; ?></td>
           <td><?php echo $rows['Balance']; ?></td>
           </tr>
<?php
}
  ?>
</table>

<form  action="index.html" method="post">
  <a href="../index.html">BACK TO HOME PAGE</a>
</form>
  </body>
</html>
