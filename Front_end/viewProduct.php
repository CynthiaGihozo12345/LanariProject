
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            <h2>Welcome to Stock and Sales Management</h2>
        </center>
    </div>
    <div class="left">
    <a href="product.php" class="btn btn-primary">Add Product</a><br>
        <h2>Added Products</h2>
    <table border="1">
        <tr>
            <th>Product_id</th>
            <th>Product_Name</th>
            <th>Description</th>
            <th>Category</th>
            <th>Price</th>
            <th>Created_At</th>
            <th colspan="2">Action</th>
            <?php
require"connection.php";
$s="select * from Products";
$q=mysqli_query($conn,$s);
if(mysqli_num_rows($q)>0){
    while($row=mysqli_fetch_assoc($q)){
?>
        </tr>
        <tr>
        <td><?php echo $row['Product_Id'] ?></td>
        <td><?php echo $row['Name'] ?></td>
        <td><?php echo $row['Description'] ?></td>
        <td><?php echo $row['Category'] ?></td>
        <td><?php echo $row['Price'] ?></td>
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

