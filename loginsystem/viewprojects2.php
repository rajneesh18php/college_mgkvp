<?php
session_start();
include_once('includes/config.php');

if (strlen($_SESSION['id']) == 0) {
    header('location:logout.php');
    exit();
}

if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    // $date  = $_POST['date'];

    // Handle file upload
    $filename = $_FILES["file"]["name"];
    $tempname = $_FILES["file"]["tmp_name"];
    $folder   = "uploads/" . $filename;

    // Create uploads folder if not exists
    if (!is_dir("uploads")) {
        mkdir("uploads", 0777, true);
    }

    if (move_uploaded_file($tempname, $folder)) {
        // Insert into DB
        $query = mysqli_query($conn, "INSERT INTO projects(fname, lname, file, date) 
                                     VALUES('$fname','$lname','$filename','$date')");
        if ($query) {
            $msg = "Project saved successfully!";
        } else {
            $msg = "Error: " . mysqli_error($con);
        }
    } else {
        $msg = "File upload failed!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Projects</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4">Uploaded Projects</h2>
    <?php if(isset($msg)) { echo "<div class='alert alert-info'>$msg</div>"; } ?>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Project Name</th>
                <th>File Name</th>
                <th>File</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $result = mysqli_query($con, "SELECT * FROM projects ORDER BY id DESC");
        while($row = mysqli_fetch_array($result)) {
        ?>
            <tr>
                <td><?php echo htmlspecialchars($row['fname']); ?></td>
                <td><?php echo htmlspecialchars($row['lname']); ?></td>
                <td><a href="uploads/<?php echo $row['file']; ?>" target="_blank">View File</a></td>
                <td><?php echo $row['date']; ?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>
</body>
</html>
