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
<?php
require"connection.php";
if(isset($_POST['add'])){
    $product=$_POST['product'];
    $company=$_POST['company'];
    $branch=$_POST['branch'];
    $quantity=$_POST['quantity'];
    $price=$_POST['price'];
    $status=$_POST['status'];
    $total=$quantity*$price;
    $insert="insert into sales(Product_Id,Company_Id,Branch_Id,Quantity,Unit_Price,TotalAmount,Status)VALUES('$product','$company','$branch','$quantity','$price','$total','$status')";
    $q=mysqli_query($conn,$insert);
    if($q){
        header("location:viewSales.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>product</title>
    <link rel="stylesheet"  type="text/css" href="index.css">
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
            <br>
            <h2>Welcome to Stock and Sales Management @
                <?php
                echo $name;
                ?>
               
            </h2>
            <a href="logout.php" style="float: right;margin-top:-40px;color:white;">Logout</a>
        </center>
    </div>
    <div class="left">
    <form action="#" method="POST">

    <a href="viewSales.php" class="btn btn-primary">View Sales</a><br><br>
            <div class="container">
            <H2>Fill Sales Information</H2>
            <select name="product" id="" class="form-control">
          <option value="">Select Product name</option>
          <?php
          $s="select * from products";
          $q=mysqli_query($conn,$s);
          while($row=mysqli_fetch_assoc(($q))){
          ?>
          <option value="<?php echo $row['Product_Id']?>">
            <?php echo $row['Name']?>
          </option>
          <?php } ?>
        </select><br>
        <select name="company" id="" class="form-control">
          <option value="">Select company name</option>
          <?php
          $s="select * from Company";
          $q=mysqli_query($conn,$s);
          while($row=mysqli_fetch_assoc(($q))){
          ?>
          <option value="<?php echo $row['Company_Id']?>">
            <?php echo $row['Name']?>
          </option>
          <?php } ?>
        </select><br>
        <select name="branch" id="" class="form-control">
          <option value="">Select Branch Name</option>
          <?php
          $s="select * from branches";
          $q=mysqli_query($conn,$s);
          while($row=mysqli_fetch_assoc(($q))){
          ?>
          <option value="<?php echo $row['Branch_id']?>">
            <?php echo $row['Name']?>
          </option>
          <?php } ?>
        </select><br>
           
            <input type="number" name="quantity" placeholder="Enter Quantity" class="form-control" required><br>
            <input type="number" name="price" placeholder="Enter Price" class="form-control" required><br>
            <select name="status" id="" class="form-control">
          <option>Choose Status</option>
          <option> payed</option>
          <option> Not payed</option>
        </select ><br>
            <input type="submit" name="add" value="Record Sales" class="btn btn-primary">

            </div>
        
    </form>
    </div>
    </div>
    <!-- <div class="footer"></div> -->
   </div> 
</body>

</html>