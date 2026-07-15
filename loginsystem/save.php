<?php
include("includes/config.php");

if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $file = $_POST['file'];

    // Insert into table
    $query = "INSERT INTO projects (fname, lname, file) 
              VALUES ('$fname', '$lname', '$file')";

    if (mysqli_query($con, $query)) {
        echo "Data saved successfully!";
    } else {
        echo "Error: " . mysqli_error($con);
    }
}
?>
