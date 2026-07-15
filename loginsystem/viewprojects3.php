<?php
session_start();
include_once('includes/config.php');

if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $date  = $_POST['date'];

    // File upload
    $fileName = $_FILES['file']['name'];
    $fileTmp  = $_FILES['file']['tmp_name'];
    $uploadDir = "uploads/"; // create folder "uploads" in your project
    $filePath = $uploadDir . basename($fileName);

    if (move_uploaded_file($fileTmp, $filePath)) {
        // Insert data into DB
        $query = mysqli_query($con, "INSERT INTO projects(fname, lname, file, date) 
                    VALUES('$fname', '$lname', '$fileName', '$date')");

        if ($query) {
            echo "<script>alert('File uploaded and data saved successfully');</script>";
            echo "<script>window.location.href='viewprojects.php'</script>";
        } else {
            echo "<script>alert('Database error');</script>";
        }
    } else {
        echo "<script>alert('File upload failed');</script>";
    }
}
?>
