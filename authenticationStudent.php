<?php
    include('connection.php');
    $userName = $_POST['user'];
    $passWord = $_POST['pass'];

    $sql = "select * from student where stname = '$userName' and password = '$passWord'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

    if($count == 1){
        include('retriveStudentPersonalData.php');
    }else{
        echo "<h1>Login failed, Invalid Username or Password.</h1>";
    }
?>