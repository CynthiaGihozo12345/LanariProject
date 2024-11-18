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
    <style>
        button{
            width: 20%;
            height: 80px;
            border: none;
            margin-left: 15px;
            background-color:darkseagreen;
            
        }
     
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
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
    <br>
    <h3>
    <?php
    include 'connection.php';

    // Query to count the number of customers
    $s = "SELECT COUNT(Customer_Id) as total FROM Customer";

    // Execute the query
    $q = mysqli_query($conn, $s);

    // Fetch the result
    if ($q) {
        $row = mysqli_fetch_assoc($q);
        echo "Total Customers: " . $row['total'];
    } else {
        echo "Error: " . mysqli_error($conn); // Debugging output in case of a query error
    }
    ?>
</h3>

    <a href="viewCustomer.php"><button style="border-radius: 10px;margin:24px;">Customer</button></a>
    <button style="border-radius: 10px;margin:24px;">Sales</button>
    <button style="border-radius: 10px;margin:24px;">Stock</button>
    <button style="border-radius: 10px;margin:24px;">Supplier</button>
    <?php
    include 'connection.php';

    // Query to count the number of customers
    $s = "SELECT COUNT(Company_Id) as total FROM Company";

    // Execute the query
    $q = mysqli_query($conn, $s);

    // Fetch the result
    if ($q) {
        $row = mysqli_fetch_assoc($q);
        echo "Total Company: " . $row['total'];
    } else {
        echo "Error: " . mysqli_error($conn); // Debugging output in case of a query error
    }
    ?><br>
    <a href="viewCompany.php"><button style="border-radius: 10px;margin:24px;">Company</button></a>
    <button style="border-radius: 10px;margin:24px;">Branches</button>
    
    </div>
    </div>
    <!-- <div class="footer"></div> -->
   </div> 
</body>

</html>