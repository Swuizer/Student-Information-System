<?php
    include('connection.php');
    $userName = $_POST['name'];
    $passWord = $_POST['pass'];
    $rollNO = $_POST['roll'];
    $depT = $_POST['dept'];
    $yeaR = $_POST['year'];
    $doB = $_POST['dob'];
    $addRess = $_POST['address'];

     $sql = "INSERT INTO student (`stname`, `password`, `roll`, `deparment`, `year`, `addr`, `DOB`) 
         VALUES ('$userName', '$passWord', '$rollNO', '$depT', '$yeaR', '$addRess', '$doB')";

    if($con->query($sql) == TRUE){
        include('inserted.html');
    }else{
        echo "Error: ".$sql."<br>";
    }
?>