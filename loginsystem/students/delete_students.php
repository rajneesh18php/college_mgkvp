<?php
include('config.php');

$id = $_GET['id'];
$sql = "DELETE FROM students WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Student Deleted Successfully!";
    header("Location: view_students.php");
    exit;
} else {
    echo "Error: " . $conn->error;
}
?>
