<?php
session_start();
include_once('includes/config.php');

// Check login
if (!isset($_SESSION['id'])) {
    header('location:logout.php');
    exit;
}

$msg = "";

// If form submitted
if (isset($_POST['submit'])) {
    $fname = mysqli_real_escape_string($con, $_POST['fname']);
    $lname = mysqli_real_escape_string($con, $_POST['lname']);
    // $date = $_POST['date'];

    // File upload handling
    if (isset($_FILES['file']) && $_FILES['file']['error'] == 0) {
        $targetDir = "uploads/";
        if (!is_dir($targetDir)) {
            mkdir($targetDir, 0777, true);
        }

        $filename = basename($_FILES['file']['name']);
        $targetFilePath = $targetDir . time() . "_" . $filename;

        if (move_uploaded_file($_FILES['file']['tmp_name'], $targetFilePath)) {
            // Save to DB
            $sql = "INSERT INTO projects(fname, lname, filename, file_path, project_date) 
                    VALUES('$fname','$lname','$filename','$targetFilePath','$date')";
            if (mysqli_query($con, $sql)) {
                $msg = "Project saved successfully!";
            } else {
                $msg = "Database error: " . mysqli_error($con);
            }
        } else {
            $msg = "File upload failed!";
        }
    } else {
        $msg = "Please select a file!";
    }
}

// Fetch all projects
$result = mysqli_query($con, "SELECT * FROM projects ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>View Projects</title>
    <link href="css/styles.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="sb-nav-fixed">

<?php include_once('includes/navbar.php'); ?>
<div id="layoutSidenav">
    <?php include_once('includes/sidebar.php'); ?>
    <div id="layoutSidenav_content">
        <main class="container mt-4">
            <h2>Uploaded Projects</h2>
            <p style="color:green;"><?= $msg; ?></p>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>File Name</th>
                        <th>File</th>
                        <th>Date</th>
                        <th>Uploaded At</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                        <tr>
                            <td><?= $row['id']; ?></td>
                            <td><?= htmlspecialchars($row['fname']); ?></td>
                            <td><?= htmlspecialchars($row['lname']); ?></td>
                            <td><a href="<?= $row['file_path']; ?>" target="_blank"><?= $row['filename']; ?></a></td>
                            <td><?= $row['project_date']; ?></td>
                            <td><?= $row['created_at']; ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </main>
    </div>
</div>

</body>
</html>
