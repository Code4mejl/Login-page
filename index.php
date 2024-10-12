<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register & Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container" id="signup" style="display:none;"></div>
        <h1 class="form-title">Register</h1>
        <form method="post" action="register.php">
            <div class="input-group">
              <i class="fas fa-user"></i>
              <input type="text" name= "fName" id="fName" placeholder="First Name"required>
               <label for="fName">First Name</label>
            </div>
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="lName" id="lname" placeholder="Last Name"required>
                <label for="lName">Last Name</label>
            </div>
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" id="Email" placeholder="Email"required>
                <label for="Email">Email</label>
            </div>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="assword" name="password" id="password" placeholder="Password"required>
                <label for="Password">Password</label>

            </div>
            <input type="submit" class="btn" value ="Sign Up">
 
            
        </form>
        <p class="or">
            -----------------------or---------------------------
        </p>
        <div class ="icons">
            <i class="fab fa-google"></i>
            <i class="fab fa-facebook"></i>
            <div class="links">
                <p>Already Have  Account?</p>
                <button id="signInButton">Sign In</button>
            </div>
        </div>



        <div class="container" id="signIn">
            <h1 class="form-title">Sign In</h1>
            <form method="post" action="register.php">

                <div class="input-group">
                    <i class="fas fa-envelope"></i>
                    <input type="email" name="email" id="Email" placeholder="Email"required>
                    <label for="Email">Email</label>
                </div>
                <div class="input-group">
                    <i class="fas fa-lock"></i>
                    <input type="assword" name="password" id="password" placeholder="Password"required>
                    <label for="Password">Password</label>
    
                </div>

                <p class="recover">
                    <a href="#">Recover Password</a>
                </p>
                <input type="submit" class="btn" value ="Sign In">
     
                
            </form>
            <p class="or">
                -----------------------or---------------------------
            </p>
            <div class ="icons">
            </p>
            <div class ="icons">
                <i class="fab fa-google"></i>
                <i class="fab fa-facebook"></i>
                <div class="links">

            <p>Don't have account yet?</p>
            <button id="signUpButton">Sign Up</button>



    </div>
    </div>
    <script src="script.js"></script>




</body>
</html>