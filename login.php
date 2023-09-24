<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>login</title>
        <link rel="stylesheet" href="./style.css">
        
    </head>
    <body>  
        <div class="container">
            <h1 class="heading">Login-form</h1>
            <form name="myform" method="post" action="connect.php" onsubmit="return validateform()" >  
                <label for="name">Name</label>
                <input type="text" name="name" placeholder="enter your name" pattern="[A-Za-z]+"><br/>  
                <br/>
                <label for="password">Password</label>
                <input type="password" name="password" placeholder="enter your password"><br/>  
                <br/>
                <input class="click" type="submit" value="login">  
                
                
                <br/>
                <p>Don't have an account? <a href="./register-form/register.php">Register Now</a></p>
                
                
                </form>  
        </div>
        
    <script src="./script.js"></script>
    </body>
</html>