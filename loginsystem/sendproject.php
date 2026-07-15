<?php 
session_start();
include_once('includes/config.php');

// Session check (fixing the condition)
if (strlen($_SESSION['id']) == 0) {
    header('location:logout.php');
} else {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Dashboard | Registration and Login System</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>
<body class="sb-nav-fixed">
<?php include_once('includes/navbar.php'); ?>
<div id="layoutSidenav">
<?php include_once('includes/sidebar.php'); ?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Dashboard</h1>
                <hr />
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">PROJECT</li>
                </ol>

                <form method="post" action="viewprojects2.php" enctype="multipart/form-data">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-floating mb-3 mb-md-0">
                                <input class="form-control" id="fname" name="fname" type="text" placeholder="Enter project name" required />
                                <label for="fname">Project Name</label>
                            </div>
                        </div>
                                                    
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input class="form-control" id="lname" name="lname" type="text" placeholder="Enter file name" required />
                                <label for="lname">File Name</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-floating mb-3">
                        <input class="form-control" id="file" name="file" type="file" required />
                        <label for="file">Upload File</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input class="form-control" id="date" name="date" type="date" required />
                        <label for="date">Date</label>
                    </div>

                    <div class="mt-4 mb-0">
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary" name="submit">Save File</button>
                        </div>
                    </div>
                </form>

            </div>
        </main>
    </div>
<?php include('includes/footer.php'); ?>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>
</body>
</html>
<?php } ?>
