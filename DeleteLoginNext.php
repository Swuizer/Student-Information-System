<?php
    include('connection.php');
    $userName = $_POST['user'];
    $passWORD = $_POST['pass'];

    $sql = "select * from student where stname in ('$userName') and password in ('$passWORD')";

    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

    if($count == true){
        include('delete.php');
    }else{
        echo "<h1>Login failed, Invalid Username or Password.</h1>";
    }
?>