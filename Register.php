<?php
      session_start();
      $pwd_expression = "/(^[A-Z])(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-])/";
      $ps_regex="/^[A-Z](?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])(?=\S*[\W])\S*$/";
      $letters = "/(^[A-Z][a-z]+)(\s)([A-Z][a-z]+)(\s)([A-Z][a-z]+)(\s)([A-Z][a-z]+)/";
      $filter = "/([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/";
      $pfilter= "/[0-9]{14}/";


    // $_SESSION["username"]=$_POST["userName"];
    // $_SESSION["email"]=$_POST["registerEmail"];
    // $_SESSION["phone"]=$_POST["phoneNumber"];
    // $_SESSION["password"]=$_POST["registerPass"];
    // $_SESSION["confirmpassword"]=$_POST["registerConfPass"];
    $us= $em= $ps= $cps= $tl= $bd="none";

// define variables and set to empty values
$userErr = $emailErr = $telErr = $passwordErr = $cpasswordErr =  $dateErr = "";
// $username = $email = $telefone = $password = $cpassword = $birthdate =  "";

      if (isset($_POST["submit"]))
        {
            $bdate=$_POST["date"];
            $ndate= date("Y-m-d");
            $diff = date_diff(date_create($bdate), date_create($ndate));


            // for full name check
            if (empty($_POST["userName"]))
            {

                $userErr="please insert your full name ";
                $us="block";

            }
            else if (!preg_match($letters, $_POST["userName"])) 
            {
                // echo 123;
                // echo '<style type="css">
                //        #name {
                //                display: block;
                //              }
                //      </style>';
                $userErr="the name should be like this: Joe Sam Mon Doe ";
                $us="block";
            }

            //for Email check  
            else if (empty($_POST["registerEmail"]))
            {
                $emailErr="Please insert your email";
                $em="block";
            }
            else if (!preg_match($filter, $_POST["registerEmail"]))
            {
                $emailErr="Email should be like this: test@test.com";
                $em="block";
            }
            
            //for phone number check
            else if (empty($_POST["phoneNumber"]))
            {
                $telErr="Please insert your phone number";
                $tl="block";
            }
            else if (!preg_match($pfilter, $_POST["phoneNumber"]))
            {
                $telErr="phone number should contain 14 digits only";
                $tl="block";
            }
            
            // for password check
            else if (empty($_POST["registerPass"]))
            {
                $passwordErr="Please insert your Password";
                $ps="block";
            }
            else if (!preg_match($ps_regex,$_POST["registerPass"]))
            {
                $passwordErr="password must start with capital letter and be at least 8 charectes, and contain minimum of 1 number,small letter,special charecter,";
                $ps="block";
            }
            
            // for confirmation password check
            else if (empty($_POST["registerConfPass"]))
            {
                $cpasswordErr="Please insert your confirmation password";
                $cps="block";
            }
            else if ($_POST["registerConfPass"] != $_POST["registerPass"])
            {
                $cpasswordErr="Password does not match";
                $cps="block";
            }
            

            // for birth date check
            else if (empty($_POST["date"]))
            {
                $dateErr="Please insert your birth date";
                $bd="block";
            }
            else if ($diff->format('%y') < 18) 
            {
                    $dateErr="You must be at least 18 years old";
                    $bd="block";

                            // echo '<script>alert("Sorry You must be older than 18")</script>';
                            // echo "$bdate <br> $ndate <br>".$diff->format('%y');
            }
            else 
            {
                $_SESSION["username"]=$_POST["userName"];
                $_SESSION["email"]=$_POST["registerEmail"];
                $_SESSION["phone"]=$_POST["phoneNumber"];
                $_SESSION["password"]=$_POST["registerPass"];
                $_SESSION["confirmpassword"]=$_POST["registerConfPass"];

                header("location: login.php");

            }
                   
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

        <input type="text" name="userName" placeholder="Full name"> 
        <span style="color:rgba(255, 255, 255, 0.745); display:<?php echo $us ?>">
        <?php echo $userErr ?>
        </span>
        
        <input type="text" name="registerEmail" placeholder="Email" >
        <span style="color:rgba(255, 255, 255, 0.745); display:<?php echo $em ?>">
        <?php echo $emailErr ?>
        </span>

        <input type="tel" name="phoneNumber" placeholder="Phone # (14 digits) " pattern="[0-9]{14}" >
        <span style="color:rgba(255, 255, 255, 0.745); display:<?php echo $tl ?>">
        <?php echo $telErr ?>
        </span>
        
        <input type="password" name="registerPass" placeholder="Password" >
        <span style="color:rgba(255, 255, 255, 0.745); display:<?php echo $ps ?>">
        <?php echo $passwordErr ?>
        </span>

        <input type="password" name="registerConfPass" placeholder="Confirm Password" >
        <span style="color:rgba(255, 255, 255, 0.745); display:<?php echo $cps ?>">
        <?php echo $cpasswordErr ?>
        </span>

        <input type="date" name="date" >
        <span style="color:rgba(255, 255, 255, 0.745); display:<?php echo $bd ?>">
        <?php echo $dateErr ?>
        </span>

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