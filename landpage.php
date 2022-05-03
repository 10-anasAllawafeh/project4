<?php
     if (isset($_POST["signup"])) {
        header('location: Register.php');
     } 
     else if (isset($_POST["login"])) {
        header("location: login.php");
    }

?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styleL+H.css">
    <title>HomePage</title>
</head>
<body>
    
    <form id="homeForm" method="POST" action="<?php echo $_SERVER["PHP_SELF"] ?>">
     <h2 id="h2welcoming"> Welcome to the PHP first Project .... it is a simple Login page where you will be able to : Sign Up ,Log In and Enter your Welcome page depending if you are user or admin. <br> Let's start ?!
    </h2>

        <button type="submit" id="submitt" style="display: block;" name="signup">Sign Up</button>

        <button type="submit" id="submitt" value="" placeholder="" style="display: block;" name="login">Log In</button>

        <!-- <p>Already have an Account? <a href="./login.php" id="a11">Login Now!</a></p> -->
        
    </form>
    <!-- <form action="" id="registerForm">
        
        <div id="subdiv"> <a href="../Homepage/index.html" id="sub">Go to homepage</a></div>
        <button type="submit" id="submit" value="" placeholder="">SignUp</button>
        <p>Already have an Account? <a href="../Login Page/index.html" id="a11"> Login Now!</a></p>
    
    </form> -->

    <ul id="ul1"></ul>
    <ul id="ul2"></ul>
    <ul id="ul3"></ul>
    <ul id="ul4"></ul>
    <ul id="ul5"></ul>
    <ul id="ul6"></ul>
    <ul id="ul7"></ul>
    <ul id="ul8"></ul>
    <ul id="ul9"></ul>
    <ul id="ul99"></ul>
</body>
</html>