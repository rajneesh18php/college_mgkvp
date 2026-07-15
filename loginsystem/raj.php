<?php
echo "<h1>rajneesh</h1>";
?>

<!-- ===== Dynamic Footer Section ===== -->
<footer class="text-white mt-5" 
        style="background: linear-gradient(135deg, #0077b6, #00b4d8); border-top: 5px solid #023e8a;">
    <div class="container py-4">
        <div class="row">
            <!-- About -->
            <div class="col-md-4">
                <h5>📘 About</h5>
                <p>
                    Student Management System helps institutions manage students, courses, and records 
                    with the power of technology.
                </p>
            </div>

            <!-- Quick Links -->
            <div class="col-md-4">
                <h5>🔗 Quick Links</h5>
                <ul class="list-unstyled">
                    <li><a href="index.php" class="text-white text-decoration-none">🏠 Home</a></li>
                    <li><a href="signup.php" class="text-white text-decoration-none">📝 Register</a></li>
                    <li><a href="login.php" class="text-white text-decoration-none">🔑 Login</a></li>
                    <li><a href="admin" class="text-white text-decoration-none">⚙️ Admin Panel</a></li>
                </ul>
            </div>

            <!-- Contact -->
            <div class="col-md-4">
                <h5>📞 Contact Us</h5>
                <p>Email: <a href="mailto:admin@school.com" class="text-white">admin@school.com</a></p>
                <p>Phone: +91 98765 43210</p>
                <p>📍 Location: New Delhi, India</p>
            </div>
        </div>
        <hr class="bg-light">

        <!-- Dynamic Info -->
        <div class="text-center">
            <p class="mb-0">
                © <?php echo date("Y"); ?> Student Management System | 
                <?php 
                    $hours = date("H");
                    if ($hours < 12) {
                        echo "Good Morning 🌞";
                    } elseif ($hours < 18) {
                        echo "Good Afternoon 🌤️";
                    } else {
                        echo "Good Evening 🌙";
                    }
                ?>
                | Designed with ❤️ by Rajneesh
            </p>
        </div>
    </div>
</footer>
