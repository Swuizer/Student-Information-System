<?php
    include('connection.php');

    $userName = $_POST['name'];
    $passWord = $_POST['pass'];
    $depT = $_POST['dept'];
    $yeaR = $_POST['year'];
    $doB = $_POST['dob'];
    $addRess = $_POST['address'];

    $result = mysqli_query($con,"select * from student where stname in ('$userName') and password in ('$passWord')");
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_array($result);
    }else{
        echo "No result found";
    }

    $sql = "UPDATE `student` SET `stname`='$userName',`password`='$passWord',`deparment`='$depT',
        `year`='$yeaR',`addr`='$addRess',`DOB`='$doB' WHERE `roll` = '$row[roll]'";

    if($con->query($sql) == TRUE){
        include('updated.html');
    }else{
        echo "Error: ".$sql."<br>";
    }
?>