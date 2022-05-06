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

    $users=[
        [
            'id' => "Admin",
            'name' => 'Anas',
            'email' => 'anas@gmail.com',
            'phone' => 96245451235878,
            'password' => 'RRbnv*654',
            'bdate' => '1994-5-28',
        ],
        [
            'id' => "User 1",
            'name' => 'Ali',
            'email' => 'ali@gmail.com',
            'phone' => 96645451235878,
            'password' => 'DDbnv*654',
            'bdate' => '1997-5-25',
        ],
        [
            'id' => "User2",
            'name' => 'Ibra',
            'email' => 'ibra@gmail.com',
            'phone' => 96845451235878,
            'password' => 'CCbnv*654',
            'bdate' => '2000-5-13',
        ]
        ];
        
        $us="none";
        
    if (!empty($_SESSION)) {
        array_push($users, $_SESSION);
    }

?>

<?php if(!empty($users)): ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin page</title>
    <style>
        td,th,tr {
            border: 2px solid black;
        }
    </style>
</head>
<body>
    <table >
        <tr>
            <td>ID</td>
            <?php foreach($users as $user): ?>
            <td><?php echo $user['id']; ?></td>
            <?php endforeach; ?>
        </tr>
        <tr>
            <td>name</td>
        
            <?php foreach($users as $user): ?>
            <td><?php echo $user['name']; ?></td>
        <?php endforeach; ?>
        </tr>
        <tr>
            <td>E-mail</td>
            <?php foreach($users as $user): ?>
            <td><?php echo $user['email']; ?></td>
            <?php endforeach; ?>
        </tr>
        <tr>
            <td>Phone #</td>
            <?php foreach($users as $user): ?>
            <td><?php echo $user['phone']; ?></td>
            <?php endforeach; ?>
        </tr>
        <tr>
            <td>Password</td>
            <?php foreach($users as $user): ?>
            <td><?php echo $user['password']; ?></td>
            <?php endforeach; ?>
        </tr>
        <tr>
            <td>Birth Date</td>
            <?php foreach($users as $user): ?>
            <td><?php echo $user['bdate']; ?></td>
            <?php endforeach; ?>
        </tr>
</body>
</html>
<?php endif; ?>