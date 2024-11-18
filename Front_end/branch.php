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
    $company=$_POST['company'];
    $name=$_POST['name'];
    $location=$_POST['location'];
    $contact=$_POST['contact'];
    $insert="insert into Branches(Company_Id,Name,Location,Contact)VALUES('$company','$name','$location','$contact')";
    $q=mysqli_query($conn,$insert);
    if($q){
        header("location:viewBranch.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>branch</title>
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

<a href="viewBranch.php" class="btn btn-primary">View Branch</a><br><br>
        <div class="container">
        <H2>Fill Branch Information</H2>
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
        <input type="text" name="name" placeholder="Enter Branch Name" class="form-control" required><br><br>
        <input type="text" name="location" placeholder="Enter Branch Location" class="form-control" required><br><br>
        <input type="number" name="contact" placeholder="Enter Branch Contact" class="form-control" required><br><br>
      
        <input type="submit" name="add" value="Add Branch" class="btn btn-primary">
        </div>
    
</form>
    </div>
    </div>
    <!-- <div class="footer"></div> -->
   </div> 
</body>
</html>