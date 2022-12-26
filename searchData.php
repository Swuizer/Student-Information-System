<?php
    include('connection.php');
    $userName = $_POST['searchTxt'];

    $sql = "select * from student where stname in ('$userName')";

    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

    if($count == true){
        include('searchResult.php');
    }else{
        echo "<h1>Login failed, Invalid Username or Password.</h1>";
    }
?>