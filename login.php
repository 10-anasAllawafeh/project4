<?php
  session_start();


  

// if ($_SESSION["name"] != '') {

// $users=[
//     [
//         'id' => 1,
//         'name' => 'Anas',
//         'email' => 'anas@gmail.com',
//         'phone' => 96245451235878,
//         'password' => 'RRbnv*654',
//         'bdate' => '1994-5-28',
//     ],
    // [
    //     'id' => 2,
    //     'name' => 'Ali',
    //     'email' => 'ali@gmail.com',
    //     'phone' => 96645451235878,
    //     'password' => 'DDbnv*654',
    //     'bdate' => '1997-5-25',
    // ],
    // [
    //     'id' => 3,
    //     'name' => 'Ibra',
    //     'email' => 'ibra@gmail.com',
    //     'phone' => 96845451235878,
    //     'password' => 'CCbnv*654',
    //     'bdate' => '2000-5-13',
    // ]
    // ];

    // $keys=['id','name','email','phone','password','bdate'];
    // $length=[1];


//     $user=
//     [
//     // "name" => [],
//     // "email" => [],
//     // "phone" => [],
//     // "password" => [],
//     // "bdate" => [],
//     ];
//     $suser=[];

//   if (!empty($_SESSION['name'])){
//   foreach ($length as $value) 
//   {
//     array_push($user, $_SESSION["id"],$_SESSION["name"], $_SESSION["email"], $_SESSION["phone"], $_SESSION["password"], $_SESSION["bdate"]);
//     // array_push($users["email"], $_SESSION["email"]);
//     // array_push($users["phone"], $_SESSION["phone"]);
//     // array_push($users["password"], $_SESSION["password"]);
//     // array_push($users["bdate"], $_SESSION["bdate"]);
//   }
// }
// $suser=array_combine($keys,$user);
// array_push($users, $suser);


//   }
  



    
    $us="none";

// print_r($users);

print_r($_SESSION['users']);
file_put_contents('array.txt',json_encode($_SESSION));

if (isset($_POST['submit'])) 
{
    $lemail=$_POST['email'];
    $lpassword=$_POST['password'];
    if ($lemail == 'anas@gmail.com' && $lpassword == 'RRbnv*654') 
        {
            header('location: admin.php');
            // break;
        }

    else {
        foreach($_SESSION['users'] as $user )
        {
            if ($lemail == $user['email'] && $lpassword == $user['password'])
            {
                
                $_SESSION['name']=$user['name'];
                $_SESSION['email']=$user['email'];
                $_SESSION['phone']=$user['phone'];
                $user['LLDate']=date("d-m-Y H:i:s");
                $_SESSION['users'];

                header('location: welcome.php');
                // break;

            }
        }
    }
    
    // for ($i=0 ; $i < count ($users) ;$i++)
    // {
    //     if ($lemail == 'anas@gmail.com' && $lpassword == 'RRbnv*654') 
    //     {
    //         $_SESSION=$suser;
    //         header('location: admin.php');
    //         break;
    //     }
    //     else if ($lemail == $users[$i]['email'] && $lpassword == $users[$i]['password'])
    //     {
    //         $_SESSION=$users[$i];
    //         header('location: welcome.php');
    //         break;        
    //     }
    // }
    $us="block";
    
}


//   setcookie('name', $_SESSION["name"],time() + 86400 * 30);
//   setcookie('email', $_SESSION["email"],time() + 86400 * 30);
//   setcookie('phone', $_SESSION["phone"],time() + 86400 * 30);
//   setcookie('password', $_SESSION["password"],time() + 86400 * 30);
//   setcookie('bdate', $_SESSION["bdate"],time() + 86400 * 30);



?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./stylerreg.css">
    <title>Login</title>
</head>
<body>
    <h1>Log In</h1>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" id="LoginForm" method="POST">

        <input type="email" id="loginEmail" placeholder="Email" name="email">
        <input type="password" id="loginPass" placeholder="Password" name="password">
        <p style="display: <?php echo $us?>; color:red"> Wrong Email or Password</p>
        <button type="submit" id="submit1" name='submit' value="" placeholder="">Log in</button>
        
        
    
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
</html>