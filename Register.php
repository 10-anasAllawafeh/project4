<?php
      session_start();
      $pwd_expression = "/(^[A-Z])(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-])/";
      $letters = "/(^[A-Z][a-z]+)(\s)([A-Z][a-z]+)(\s)([A-Z][a-z]+)(\s)([A-Z][a-z]+)/";
    //   $filter = "/([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/";


    // $_SESSION["username"]=$_POST["userName"];
    // $_SESSION["email"]=$_POST["registerEmail"];
    // $_SESSION["phone"]=$_POST["phoneNumber"];
    // $_SESSION["password"]=$_POST["registerPass"];
    // $_SESSION["confirmpassword"]=$_POST["registerConfPass"];
    $ww="none";

// define variables and set to empty values
$emailErr = $userErr = $passwordErr = $cpasswordErr = $firstErr = $lastErr = $teamErr = "";
// $email = $username = $password = $cpassword = $firstname = $lastname = $teamname = "";

      if (isset($_POST["submit"]))
        {
            if (!preg_match($letters, $_POST["userName"])) {
                // echo 123;
                // echo '<style type="css">
                //        #name {
                //                display: block;
                //              }
                //      </style>';
                // $userErr="wrong name ";
                $ww="block";
            }
        //     $bdate=$_POST["date"];
        //     $ndate= date("Y-m-d");
        //     $diff = date_diff(date_create($bdate), date_create($ndate));
        //   if ($diff->format('%y') < 18) 
        //   {
        //     echo '<script>alert("Sorry You must be older than 18")</script>';
        //     // echo "$bdate <br> $ndate <br>".$diff->format('%y');
        //   }
            
        }


?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./stylerreg.css">
    <title>Registration</title>
</head>
<body>
    <h1>Registration Form</h1>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST" id="registerForm">

        <input type="text" name="userName" placeholder="User name" > <span style="color:aliceblue; display:<?php echo $ww ?>">wrong name span</span>
        
        <input type="text" name="registerEmail" placeholder="Email" >
        <input type="tel" name="phoneNumber" placeholder="Phone # (14 digits) " pattern="[0-9]{14}" >
        <input type="password" name="registerPass" placeholder="Password" >
        <input type="password" name="registerConfPass" placeholder="Confirm Password" >
        <input type="date" name="date" >

        <button type="submit" id="submit" value="" placeholder="" name="submit">SignUp</button>
        <p>Already have an Account? <a href="./login.php" id="a11"> Login Now!</a></p>
    
    </form>

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
<script src="app.js"></script>
</html>