<?php
require"connection.php";
if(isset($_POST['add'])){
    $name=$_POST['name'];
    $contact=$_POST['contact'];
    $address=$_POST['address'];
    $insert="insert into Customer(FullName,Contact_Info,Address)VALUES('$name','$contact','$address')";
    $q=mysqli_query($conn,$insert);
    if($q){
        header("location:viewCustomer.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>product</title>
    <link rel="stylesheet" href="index.css">
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
   <div>
    
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
            <h2>Welcome to Stock and Sales Management</h2>
        </center>
    </div>
    <div class="left">
    <form action="#" method="POST">

    <a href="viewCustomer.php" class="btn btn-primary">View Customer</a><br><br>
            <div class="container">
            <H2>Fill Customer Information</H2>
            <input type="text" name="name" placeholder="Enter Customer Name" class="form-control" required><br><br>
            <input type="text" name="contact" placeholder="Enter Contact_Info" class="form-control" required><br><br>
            <input type="text" name="address" placeholder="Enter Address" class="form-control" required><br><br>

            <input type="submit" name="add" value="Add Customer" class="btn btn-primary">
            </div>
        
    </form>
    </div>
    </div>
    <!-- <div class="footer"></div> -->
   </div> 
</body>

</html>