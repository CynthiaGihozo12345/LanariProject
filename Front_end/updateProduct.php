
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
require"connection.php";
$id=$_GET['Product_id'];
$s="select * from Products where Product_id='$id'";
$q=mysqli_query($conn,$s);
if(mysqli_num_rows($q)>0){
    while($row=mysqli_fetch_assoc($q)){
?>
<form action="#" method="POST">
    
</form>
</body>
</html>