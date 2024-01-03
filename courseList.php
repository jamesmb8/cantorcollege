<?php

require_once('db.php');
$query = "select * from courses";
$result = mysqli_query($con,$query);



?>




<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/stylesMobile.css">
    <link
      rel="stylesheet"
      href="css/styles.css"
      media ="only screen and (min-width : 720px)"
    />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table class = "courseListTable">
        <tr class = "headerTable">
            <td>Course ID</td>
            <td>Course Name</td>
            <td>Ucas Code</td>
        </tr>
        <tr>
        <?php

            while($row = mysqli_fetch_assoc($result))
            {

                ?>
                <td><?php echo $row["CourseID"] ?></td>
                <td><?php echo $row["CourseTitle"] ?></td>
                <td><?php echo $row["UcasCode"] ?></td>
                


            </tr>
                <?php
            }
            
            ?>





        
            
            

        
    </table>
</body>
</html>