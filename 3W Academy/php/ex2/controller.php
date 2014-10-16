<?php

$email = $_POST["email"].PHP_EOL;

echo $email;

if(isset($_POST["email"]) == false or empty($_POST["email"]) == true or Filter_var($_POST["email"],
        FILTER_VALIDATE_EMAIL) == false)
    {
        header("Location: http://localhost/AlexH%20(192.168.1.2)/php/ex2/?m=fail");
        exit;
    }

else
    {
       $file = "email.txt";
       file_put_contents($file, $email, FILE_APPEND | LOCK_EX);
       header("Location: http://localhost/AlexH%20(192.168.1.2)/php/ex2/?m=ok");
       exit;
    }

