<?php include('config.php'); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Student List</title>
</head>
<body>
    <h2>Student Records</h2>
    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th><th>Name</th><th>Email</th><th>Course</th><th>Created</th>
        </tr>
        <?php
        $result = $conn->query("SELECT * FROM students");
        while($row = $result->fetch_assoc()){
            echo "<tr>
                    <td>".$row['id']."</td>
                    <td>".$row['name']."</td>
                    <td>".$row['email']."</td>
                    <td>".$row['course']."</td>
                    <td>".$row['created_at']."</td>
                  </tr>";
        }
        ?>
    </table>
</body>
</html>
