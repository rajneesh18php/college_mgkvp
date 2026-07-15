<?php 
include('config.php'); 

$id = $_GET['id']; 
$result = $conn->query("SELECT * FROM students WHERE id=$id");
$student = $result->fetch_assoc();

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $course = $_POST['course'];

    $sql = "UPDATE students SET name='$name', email='$email', course='$course' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "Student Updated Successfully!";
        header("Location: view_students.php");
        exit;
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
</head>
<body>
    <h2>Edit Student</h2>
    <form method="POST">
        <input type="text" name="name" value="<?= $student['name'] ?>" required><br><br>
        <input type="email" name="email" value="<?= $student['email'] ?>" required><br><br>
        <input type="text" name="course" value="<?= $student['course'] ?>" required><br><br>
        <button type="submit" name="update">Update</button>
    </form>
</body>
</html>
