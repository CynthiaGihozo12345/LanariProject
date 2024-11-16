<?php
include'connection.php';
if(isset($_POST['login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $s="select * from users where Email='$email' and Password='$password'";
    $q=mysqli_query($conn,$s);
    if(mysqli_num_rows($q)>0){
        while($row=mysqli_fetch_assoc($q)){
         $email=$row['Email'];
         $password=$row['Password'];
         $name=$row['Name'];
         session_start();
         $_SESSION['Email']=$email;
         $_SESSION['Name']=$name;
        }
        echo "<script>
                alert('Welcome ');
                window.location.href = 'home.php';
            </script>";
    }
   
        echo "<script>
                alert('you have n't account, Create Account ');
                window.location.href = 'register.php';
            </script>";
    
}
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
    <style>
        /* General Body Styling */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f4f8; /* Light gray-blue background */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Form Container Styling */
        .form-container {
            background: #ffffff; /* White form background */
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2); /* Box shadow for depth */
            width: 100%;
            max-width: 400px;
            background-color: oldlace;
        }

        /* Header Styling */
        h3 {
            text-align: center;
            color: #333333;
            margin-bottom: 20px;
            font-size: 1.5rem;
        }

        /* Fieldset Styling */
        fieldset {
            border: 1px solid #cccccc;
            padding: 20px;
            border-radius: 10px;
            background-color: #f9f9f9; /* Light gray background inside fieldset */
        }

        legend {
            font-size: 1.2rem;
            color: #007bff;
            font-weight: bold;
            padding: 0 10px;
        }

        /* Label Styling */
        label {
            display: block;
            font-size: 1rem;
            color: #333333;
            margin-bottom: 5px;
        }

        /* Input Styling */
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #cccccc;
            border-radius: 5px;
            font-size: 1rem;
            background-color: #fafafa; /* Light input background */
            box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1); /* Inner shadow for depth */
            margin-bottom: 20px;
        }

        input[type="email"]:focus,
        input[type="password"]:focus {
            border-color: #007bff; /* Blue border on focus */
            outline: none;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5); /* Glow effect on focus */
        }

        /* Submit Button Styling */
        input[type="submit"] {
            display: block;
            width: 100%;
            padding: 10px;
            font-size: 1rem;
            font-weight: bold;
            color: white;
            background-color: #007bff; /* Blue background */
            border: none;
            border-radius: 5px;
            cursor: pointer;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2); /* Button shadow */
            transition: background-color 0.3s, box-shadow 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #0056b3; /* Darker blue on hover */
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3); /* Hover shadow */
        }

        /* Link Styling */
        a {
            display: inline-block;
            margin-top: 15px;
            font-size: 0.9rem;
            color: #007bff; /* Blue text */
            text-decoration: none;
            transition: color 0.3s;
        }

        a:hover {
            color: #0056b3; /* Darker blue on hover */
            text-decoration: underline; /* Underline on hover */
        }

        /* Required Indicator Styling */
        sup {
            color: red;
        }

        /* Responsive Design */
        @media (max-width: 480px) {
            .form-container {
                padding: 20px;
            }

            label,
            input,
            a {
                font-size: 0.9rem;
            }

            input[type="submit"] {
                padding: 8px;
                font-size: 0.9rem;
            }
        }
    </style>
</head>
<body>
    <div class="form-container">
        <form action="#" method="POST">
            <h3>Sales and Stock Management</h3>
            <fieldset>
                <legend>Login</legend>
                <label for="email">Email Address <sup>*</sup></label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>

                <label for="password">Password <sup>*</sup></label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
                
                <input type="submit" name="login" value="Login">
                <a href="register.php">Create Account</a><br>
                <a href="#">Forgot Password?</a>
            </fieldset>
        </form>
    </div>
</body>
</html>
