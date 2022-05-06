<?php 
session_start();
// print_r($_SESSION);
$name=$_SESSION['name'];
$email=$_SESSION['email'];
$phone=$_SESSION['phone'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome page</title>
</head>
<body>
     <h4>Full Name : <?php echo $name  ?> <br>
     Email : <?php echo $email  ?> <br>
     Phone Number : <?php echo $phone  ?> <hr>
    </h4>

    <h1>Welocme <?php echo $name  ?>, thank you for signing in</h1>
</body>
</html>