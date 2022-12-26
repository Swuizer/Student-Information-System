<?php
    $result = mysqli_query($con,"select * from student where stname = '$userName'");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="indexStyle.css">
    <title>Student Information System</title>
</head>
<body>
<nav class="navber">
        <div class="title">
            Student Information System
        </div>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="admin.php">Admin</a></li>
            <li><a href="studentLogin.html" class="active">Student Login</a></li>
        </ul>
    </nav>
    <section>
        <div class="container">
            <div class="leftSide">
                <div class="sec">
                    Netaji Mahavidyalaya
                </div>
                <div class="pera">
                    Department of BCA
                </div>
            </div>
            <div class="rightSide" align="center">
                <div class="pera">
                    <h4>Student Personal Information</h4>
                </div>
                <?php
                    if(mysqli_num_rows($result) > 0){
                        $row = mysqli_fetch_array($result)
                ?>
                <table align="center">
                <tr>
                    <th class="tableData" id="heading">Name</th>
                    <td class="tableData"><?php echo $row["stname"];?></td>
                </tr>
                <tr>
                    <th class="tableData" id="heading">Roll</th>
                    <td class="tableData"><?php echo $row["roll"];?></td>
                </tr>
                <tr>
                    <th class="tableData" id="heading">Department</th>
                    <td class="tableData"><?php echo $row["deparment"];?></td>
                </tr>
                <tr>
                    <th class="tableData" id="heading">Year</th>
                    <td class="tableData"><?php echo $row["year"]." Year";?></td>
                </tr>
                <tr>
                    <th class="tableData" id="heading">DOB</th>
                    <td class="tableData"><?php echo $row["DOB"];?></td>
                </tr>
                <tr>
                    <th class="tableData" id="heading">Address</th>
                    <td class="tableData"><?php echo $row["addr"];?></td>
                </tr>
                </table>
                <?php
                    }else{
                        echo "No result found";
                    }
                ?>
            </div>
        </div>
    </section>
    <!-- Update -->
</body>
</html>