<?php
     session_start();

    // $file='array.txt';
    //     echo readfile($file);
        // $_SESSION=json_encode($file);
        // echo $_SESSION;

    // if (file_exists($file)) {
        // $users=readfile($file);
        // print_r($users[0]);

        // echo readfile($file);
        // $handle=fopen($file, 'r');
        // $contents=fread($handle, count($file));
        // fclose($handle);
        // echo $contents;

    
    // }
    // print_r($_SESSION);
    $id= 1;

    // $users= $_SESSION['users'];
    // [
        // [
            // 'id' => "Admin",
            // 'name' => 'Anas',
            // 'email' => 'anas@gmail.com',
            // 'phone' => 96245451235878,
            // 'password' => 'RRbnv*654',
            // 'bdate' => '1994-5-28',
        // ],
        // [
        //     'id' => "User 1",
        //     'name' => 'Ali',
        //     'email' => 'ali@gmail.com',
        //     'phone' => 96645451235878,
        //     'password' => 'DDbnv*654',
        //     'bdate' => '1997-5-25',
        // ],
        // [
        //     'id' => "User2",
        //     'name' => 'Ibra',
        //     'email' => 'ibra@gmail.com',
        //     'phone' => 96845451235878,
        //     'password' => 'CCbnv*654',
        //     'bdate' => '2000-5-13',
        // ]
        // ];
        
        $us="none";
        
    // if (!empty($_SESSION)) {
    //     array_push($users, $_SESSION);
    // }

?>

<?php if(!empty($_SESSION)): ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin page</title>
    <link rel="stylesheet" href="styleL+H.css">
    <style>
        table{
            color:rgba(255, 255, 255, 0.745);
            background-color: #76b852;
            height: 50vh;
            display: inline-grid;
            justify-content: center;
            align-items: center;
            width: 80%;
            margin: 3% 0%;
            padding-top: 0%;
           border-radius: 50px;
           /* border: 2px solid black; */

        }
        table,th,td {
            border: 1px solid white;
            border-collapse: collapse;
            border-radius: 25px;
            /* border-right: 2px solid black ; */
        }
    </style>
</head>
<body>
    <table >
    <tr>
            <th>Id</th>
            <th>Full name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Password</th>
            <th>Birth Date</th>
            <th>Account Create Date</th>
            <th>Last Login Date</th>
    </tr>
    <tr>
        <?php foreach($_SESSION['users'] as $value): ?>
            <?php
             if ($value["id"] == 'Admin') 
            {
                $id='Admin';
            }
            else
            {
                $id='user';
            }
            ?>

            <?php echo "<tr>
                    <td><h3>$id</h3></td>
                    <td><h3>".$value["name"]."</h3></td>
                    <td><h3>".$value["email"]."</h3></td>
                    <td><h3>".$value["phone"]."</h3></td>
                    <td><h3>".$value["password"]."</h3></td>
                    <td><h3>".$value["bdate"]."</h3></td>
                    <td><h3>".$value["createDate"]."</h3></td>
                    <td><h3>".$value["LLDate"]."</h3></td>



                </tr>";
            $id++;
        
        ?>
            <?php endforeach; ?>
    </tr>
    </table >
    <button type="submit" id="submitt" style="display: block;" name="signup"><a href="./landpage.php" role="button">Log out</a></button>



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
<?php endif; ?>