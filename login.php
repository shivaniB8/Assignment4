<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
      <title>Registration Form</title>
</head>
<body>
  <div class="container"></div>
       <div class="header">
            <h2>Log In</h2> 
       </div>
      <form action="login.php" method="post" >
            <div>
                  <label for="Username">Username</label>
                  <input type="text" name="Username" required >
            </div>
             
            <div>
                  <label for="Password">Password</label>
                  <input type="Password" name="Password_1" required>
            </div>
            
            <button type="submit" name="login_user"> Log In</button>
             <p>Not a user?<a href="registration.php"><b>Register here</b></a></p>

      </form>
</body>
</html>
