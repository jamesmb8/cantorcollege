<?php>

require_once('db.php');
$query = "select * from courses";
$result = mysqli_query($conn,$query);



?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table class = "courseListTable">
        <tr class = "headerTable">
            <td>Course ID</td>
            <td>Course Name</td>
        </tr>
        <tr>
            <?php

            while($row = mysqli_fetch_assoc($result))
            {
                    ?>
            </tr>
                   
            <?php

            }

            ?>
            

        
    </table>
</body>
</html>