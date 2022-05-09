<?php 
session_start();
print_r($_SESSION['users']);
$name=$_SESSION['name'];
$dname=ltrim($name," ");
$email=$_SESSION['email'];
$phone=$_SESSION['phone'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleL+H.css">
    <title>Welcome page</title>
</head>
<body>
    <form>
     <h3>Full Name : <?php echo $name  ?> <br>
     Email : <?php echo $email  ?> <br>
     Phone Number : <?php echo $phone  ?> <hr>
    </h3>

    <h1>Welocme <?php echo $dname  ?>, thank you for signing in</h1>
    <button type="submit" id="submitt" style="display: block;" name="signup"><a href="./landpage.php" role="button">Log out</a></button>
    </form>
</body>
</html>