<?php
     session_start();

    $file='array.txt';
        echo readfile($file);
        // $_SESSION=json_encode($file);
        // echo $_SESSION;

    if (file_exists($file)) {
        // $users=readfile($file);
        // print_r($users[0]);

        // echo readfile($file);
        // $handle=fopen($file, 'r');
        // $contents=fread($handle, count($file));
        // fclose($handle);
        // echo $contents;

    
    }
    // print_r($_SESSION);



?>