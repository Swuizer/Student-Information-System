<?php
    // include_once('adminLogin.html');
    include_once('connection.php');
    $result = mysqli_query($con,"select * from student where stname in ('$userName')");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information System</title>
     <link rel="stylesheet" href="adminStyle.css">
</head>
<body>
    <nav class="navber">
        <div class="title">
            Student Information System
        </div>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="admin.php">Admin</a></li>
            <li><a href="#" class="active">Student Data</a></li>
        </ul>
    </nav>
    <section>
        <div>
            <h1 class="secAdmin">Netaji Mahavidyalaya, Department of BCA, Group 1</h1>
        </div>
        <div class="tab">
            <?php
                if(mysqli_num_rows($result) > 0){
            ?>
            <table>
            <tr>
                <th class="tableData" id="heading">Name</th>
                <th class="tableData" id="heading">Roll</th>
                <th class="tableData" id="heading">Department</th>
                <th class="tableData" id="heading">Year</th>
                <th class="tableData" id="heading">Address</th>
                <th class="tableData" id="heading">DOB</th>
            </tr>
            <?php
                $i=0;
                while($row = mysqli_fetch_array($result)){
            ?>
            <tr>
                <td class="tableData"><?php echo $row["stname"];?></td>
                <td class="tableData"><?php echo $row["roll"];?></td>
                <td class="tableData"><?php echo $row["deparment"];?></td>
                <td class="tableData"><?php echo $row["year"];?></td>
                <td class="tableData"><?php echo $row["addr"];?></td>
                <td class="tableData"><?php echo $row["DOB"];?></td>
            </tr>
            <?php
                $i++;
                }
            ?>
            </table>
            <?php
            }else{
                echo "No result found";
            }
            ?>
        </div>
        <div class="btn">
            <li><a href="insertNext.html">Insert</a></li>
            <li><a href="edit.html">Edit</a></li>
        </div>
    </section>
</body>
</html>