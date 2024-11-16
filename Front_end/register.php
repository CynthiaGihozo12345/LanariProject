<?php
include'connection.php';
if(isset($_POST['register'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];
    $role=$_POST['role'];
    if($password==$cpassword){
        $insert="insert into users(FullName,Email,Password,Role)values('$name','$email','$password','$role')";
        $q=mysqli_query($conn,$insert);
        if ($q) {
            echo "<script>
                alert('Account created successfully');
                window.location.href = 'index.php';
            </script>";
        }
    }
    

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #e3f2fd; /* Soft blue background for the page */
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.form-container {
    background: linear-gradient(to bottom, #ffffff, #f1f1f1); /* Subtle gradient background for the form */
    padding: 20px 30px;
    border-radius: 10px;
    box-shadow: 0 10px 15px rgba(0, 0, 0, 0.2); /* Enhanced box shadow for depth */
    max-width: 400px;
    width: 100%;
}

h3 {
    text-align: center;
    color: #333;
    margin-bottom: 20px;
}

fieldset {
    border: none;
    padding: 0;
}

.form-group {
    margin-bottom: 15px;
}

label {
    display: block;
    font-size: 14px;
    color: #333;
    margin-bottom: 5px;
}

input[type="text"],
input[type="email"],
input[type="password"],
select {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 14px;
    background-color: #fafafa; /* Light background for input fields */
    box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1); /* Inner shadow for inputs */
}

input[type="text"]:focus,
input[type="email"]:focus,
input[type="password"]:focus,
select:focus {
    border-color: #007BFF;
    outline: none;
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
}

select {
    appearance: none;
}

sup {
    color: red;
}

.submit-btn {
    display: block;
    width: 100%;
    padding: 10px;
    background: linear-gradient(to right, #007BFF, #0056b3); /* Gradient button background */
    color: #fff;
    font-size: 14px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background 0.3s ease, box-shadow 0.3s ease;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Shadow for button */
}

.submit-btn:hover {
    background: linear-gradient(to right, #0056b3, #004080);
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3); /* Intensify shadow on hover */
}

@media (max-width: 480px) {
    .form-container {
        padding: 15px;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"],
    select {
        font-size: 12px;
    }
}

   </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registartion page</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  
<form action="#" method="POST">
        <div class="form-container">
            <h3>Sales and Stock Management</h3>
            <fieldset>
                <div class="form-group">
                    <label for="name">Name <sup>*</sup></label>
                    <input type="text" id="name" name="name" placeholder="Enter your name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email Address <sup>*</sup></label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password <sup>*</sup></label>
                    <input type="password" id="password" name="password" placeholder="Enter your password" required>
                </div>
                <div class="form-group">
                    <label for="confirm-password">Confirm Password <sup>*</sup></label>
                    <input type="password" id="confirm-password" name="cpassword" placeholder="Confirm your password" required>
                </div>
                <div class="form-group">
                    <label for="role">Role <sup>*</sup></label>
                    <select id="role" name="role" required>
                        <option value="">Select a role</option>
                        <option value="admin">Admin</option>
                        <option value="manager">Manager</option>
                        <option value="store-keeper">Store-Keeper</option>
                        <option value="supplier">Supplier</option>
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit" class="submit-btn" name="register">Register</button>
                   <p>Already have Account <a href="index.php">Login</a></p>
                </div>
            </fieldset>
        </div>
    </form>
  
</body>
</html>