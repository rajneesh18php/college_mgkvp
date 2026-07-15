<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Home | Registration and Login System </title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>

        <style>
    body {
        background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        min-height: 100vh;
    }

    #welcome-section {
        background: #ffffffcc; /* semi-transparent white */
        border: 4px solid #0077b6; /* bold border */
        border-radius: 20px;
        padding: 40px;
        margin-top: 50px;
        box-shadow: 0px 10px 25px rgba(0, 0, 0, 0.3);
        animation: fadeIn 1.5s ease-in-out;
    }

    .welcome-section h2 {
        color: #0077b6;
        font-weight: bold;
    }
#bg-warning {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-warning-rgb), var(--bs-bg-opacity)) !important;
}

    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
</style>
    </head>
    <body>
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.php">mahatma gandhi kashi vidyapeeth</a>
            <!-- Sidebar Toggle-->

            <!-- Navbar Search-->
             <section>
                  </nav>
             <?php
// Set your timezone (important for correct time)
date_default_timezone_set("Asia/Kolkata"); 

// Current date
$currentDate = date("l, d M Y"); // Example: Thursday, 04 Sep 2025

// Current time
$currentTime = date("h:i A"); // Example: 07:45 AM
?>

<p>📅 Today is: <b><?php echo $currentDate; ?></b></p>
<p>⏰ Current Time: <b><?php echo $currentTime; ?></b></p>
</section>

          
        
        <div id="layoutSidenav">
       
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4"> Student Registration & Login </h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              
                        </ol>
        <div class="row" >
                            <div class="col-xl-4 col-md-6" >
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Not Registered Yet</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="signup.php">Signup Here</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
<div class="col-xl-4 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Already Registered</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="login.php">Login Here</a>
                                    </div>
                                </div>
                            </div>

<div class="col-xl-4 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Admin Panel</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="admin">Login Here</a>
                          
                                    </div>
                                </div>
                            </div>

                            </div>
                        <!-- <div style="height: 100vh"></div> -->
                         
            
                    </div>

<section class="mt-5"   id="welcome-section">
    <div class="card shadow-sm p-4">
        <h2 class="mb-3 text-center"   id="bg-warning"><marquee>Welcome to the Student Technology Portal</marquee></h2>
        <p>
            Our system is built to empower students with the right tools for learning and growth. 
            From <b>online registration</b> to <b>secure login</b> and a powerful <b>admin management panel</b>, 
            this platform connects technology with education to make learning simpler and smarter.
        </p>

        <h4 class="mt-4">🌟 Key Features for Students</h4>
        <ul>
            <li>📚 Easy and secure student registration & profile management</li>
            <li>💻 Access to study materials, assignments, and project details</li>
            <li>📊 Technology-driven user management with admin control</li>
            <li>🔒 Data security with modern authentication system</li>
            <li>🚀 A digital platform to stay connected with your academic journey</li>
        </ul>

        <h4 class="mt-4"   class="p-3 mb-2 bg-body-secondary">💡 Why Technology in Education?</h4>
        <p>
            In today’s world, technology is not just a tool — it’s a necessity.  
            Students can learn beyond classrooms, collaborate on projects, and explore 
            endless resources. This portal is designed to bring all these benefits together 
            in one place, helping you achieve more with less effort.
        </p>
</div>
</section>
<section   id="welcome-section">
    <div class="card mt-4 p-3 border-3 border-warning">



        <div class="card mt-4 p-3 border-3 border-success">
    <h4 class="text-success">🎉 Upcoming Events</h4>
    <p>👉 Tech Fest 2025 – <b>20th October</b> | Coding Challenge & Robotics</p>
    <p>👉 Annual Sports Day – <b>1st November</b></p>
</div>


    <h4 class="text-warning">🔗 Quick Links</h4>
    <ul>
        <li><a   class="btn btn-primary"  role="button" href="timetable2.php">📅 View Timetable</a></li><br>
        <li><a  class="btn btn-primary" href="result.php">📊 Check Results</a></li></br>
        <li><a class="btn btn-primary"  href="library.php">📚 Digital Library</a></li><br>
        <li><a  class="btn btn-primary" href="assignments.php">📝 Upload Assignments</a></li>
    </ul>
</div>
</section>

                </main>
               <!-- ===== Footer Section ===== -->
<footer class="text-white mt-5" style="background: linear-gradient(135deg, #0077b6, #00b4d8); border-top: 5px solid #023e8a;">
    <div class="container py-4">
        <div class="row">
            <!-- About -->
            <div class="col-md-4">
                <h5>📘 About</h5>
                <p>
                    Student Management System built for digital learning and technology-driven education.
                    Manage students, track progress, and access resources securely.giving for our best future
                </p>
            </div>

            <!-- Quick Links -->
            <div class="col-md-4">
                <h5>🔗 Links</h5>
                <ul class="list-unstyled">
                    <li><a href="index.php" class="text-white text-decoration-none">🏠 Home</a></li>
                    <li><a href="signup.php" class="text-white text-decoration-none">📝 Register</a></li>
                    <li><a href="login.php" class="text-white text-decoration-none">🔑 Login</a></li>
                   
                </ul>
            </div>

            <!-- Contact -->
            <div class="col-md-4">
                <h5>📞 Contact Us</h5>
                <p>Email: <a href="mailto:admin@school.com" class="text-white">kumarajneesh12@school.com</a></p>
                <p>Phone: +91 7080463532</p>
                <p>📍 Location: New Delhi, India</p>
            </div>
        </div>
        <hr class="bg-light">
        <div class="text-center">
            <p class="mb-0">© <?php echo date("Y"); ?> Student Management System | Designed with ❤️ by Rajneesh</p>
        </div>
    </div>
</footer>

              

   <?php include_once('includes/footer.php');?>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
