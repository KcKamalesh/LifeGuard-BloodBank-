<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="index.css?v=<?php echo time();?>">
    <title>BloodBank</title>
</head>
<body>
  <form action="select.php" method="post">
    <h1>LOGIN</h1>
    <label>Email</label>  
    <input type="Email" name="email" required>     
    <label>Password</label>
    <input type="Password" name="password" required>
    <button>Login</button>
    <p>Don't Have an account?<a href="register.php">Register Here</a></p>
    </form>
</body>
</html>