<?php

    $username = $_POST['username'];
    $password = $_POST['password'];

    $conn = mysqli_connect("localhost", "root", "Shubham@00", "quiz");
    $result = ("INSERT INTO user
    values ('$username','$password')");
    if(mysqli_query($conn,$result)==true)
    {
        echo "$username, You have Successfuly registered";
        header("Location: ../index.php");
    }
    else{
        echo "registration failed";
    }
    
?>