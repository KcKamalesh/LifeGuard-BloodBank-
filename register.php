<Html>  
 <head>   
   <link rel="stylesheet" href="register.css?v=<?php echo time();?>">
     <title>Registration Page </title> 
 </head>  
<body> 
<form action="insert.php" method="post">  
  <h1>Register</h1>
  <label>Name</label> 
  <input type="text" name="name" size="15" required> 
  <label>Gender</label>
  <div class="gender-details">
  <input type="radio" id="Male" name="Gender" value="Male">
  <label for="Male">Male</label>
  <input type="radio" id="Female" name="Gender" value="Female">
  <label for="Female">Female</label>
  <input type="radio" id="Others" name="Gender" value="Others">
  <label for="Others">Others</label></div> 
  <label>Email</label>  
  <input type="Email" name="email" required>     
  <label>Password</label>
  <input type="Password" name="password" required> 
  <label>Re_type password</label> 
  <input type="Password" name="repassword" required> 
  <button name="Submit">Register</button> 
  <p>If already have account <a href="index.php">Login Here</a></p>
</form> 
</body>  
</html>  