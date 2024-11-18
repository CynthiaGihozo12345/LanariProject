<?php
session_start();
if(isset($_SESSION['FullName'])){
  $name=$_SESSION['FullName'];
  
}
else{
    echo"
    <script>
    alert('please login first ');
    window.location.href='index.php';
    </script>
     
    ";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>branch </title>
    <link rel="stylesheet" href="index.css">
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
  
    <div class="body">
    <div class="nav">
    <ul>
           <li><img src="images/logo.png" alt="" style="width: 150px; height:100px; border-radius:20px; "></li>
            <li><img src="images/home.png" alt="" style="width: 30px; height:35px; "><a href="home.php">Dashboard</a></li>
            <li><img src="images/company.png" alt="" style="width: 30px; height:35px; "><a href="company.php">Company</a></li>
            <li><img src="images/branch.png" alt="" style="width: 30px; height:35px; "><a href="branch.php">Branches</a></li>
            <li><a href="#">Order</a></li>
            <li><img src="images/product.jpg" alt="" style="width: 30px; height:35px; "><a href="product.php">Product</a></li>
            <li><img src="images/sales.png" alt="" style="width: 30px; height:35px; "><a href="sales.php">sales</a></li>
            <li><img src="images/loan.jpg" alt="" style="width: 30px; height:35px; "><a href="loan.php">Loan</a></li>
            <li><img src="images/customer.png" alt="" style="width: 30px; height:35px; "><a href="customer.php">Customer</a></li>
            <li><img src="images/report.jpg" alt="" style="width: 30px; height:35px; "><a href="report.php">Report</a></li>
            
        </ul>
    </div>
    <div class="header">
        <center>
            <br>
            <h2>Welcome to Stock and Sales Management @
                <?php
                echo $name;
                ?>
               
            </h2>
            <a href="logout.php" style="float: right;margin-top:-40px;color:white;">Logout</a>
        </center>
    </div>
    <div class="left" style="margin: 5px;">
    <a href="branch.php" class="btn btn-primary">Add Branch</a><br>
        <h2>Branch Information</h2>
    <table border="1">
        <tr>
            <th>Branch_id</th>
            <th>Company_id</th>
            <th>Branch_Name</th>
            <th>Location</th>
            <th>Contact</th>
            <th>Created_At</th>
            <th colspan="2">Action</th>
            <?php
require"connection.php";
$s="select * from Branches";
$q=mysqli_query($conn,$s);
if(mysqli_num_rows($q)>0){
    while($row=mysqli_fetch_assoc($q)){
?>
        </tr>
        <tr><td><?php echo $row['Branch_id'] ?></td>
        <td><?php echo $row['Company_id'] ?></td>
        <td><?php echo $row['Name'] ?></td>
        <td><?php echo $row['Location'] ?></td>
        <td><?php echo $row['Contact'] ?></td>
        <td><?php echo $row['Created_at'] ?></td>
        <td>
            <a href="#" class="btn btn-warning">Delete</a>&nbsp;
            <a href="#" class="btn btn-success">Update</a>
        </td>
        </tr>
        <?php
        }}
        ?>
    </table>
    </div>
    </div>
    <!-- <div class="footer"></div> -->
   </div> 
</body>

</html>

