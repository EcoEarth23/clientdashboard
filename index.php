<?php
session_start();
if (isset($_SESSION["username"])) {
    header("Location: redirect.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eco Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <section class="hero">
        <div class="hero-content">
            <h1>Sustainable Corporate Gifting</h1>
            <p>Thoughtful, responsible, and impactful gifts that leave a lasting impression, not a footprint.</p>
            <div class="hero-buttons">
                <button onclick="openModal('login')" class="btn primary-btn">Login</button>
                <button onclick="openModal('register')" class="btn secondary-btn">Register</button>
                <!--<a href="#services" class="btn primary-btn">Explore Gifts</a>
                <a href="#contact" class="btn secondary-btn">Get a Quote</a>-->
            </div>
        </div>
    </section>
    <!--<div class="container">
        <div class="hero">
            <h1>Welcome to EcoFeelia</h1>
            <p>Make an impact with every choice!</p>
            <button onclick="openModal('login')">Login</button>
            <button onclick="openModal('register')">Register</button>
        </div>
    </div>-->

    <!-- Modal for Login & Register -->
    <div id="modal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <div id="login-form" class="form-container">
                <h2>Login</h2>
                <form action="login.php" method="POST">
                    <input type="text" name="username" placeholder="Username" required>
                    <input type="password" name="password" placeholder="Password" required>
                    <button type="submit">Login</button>
                </form>
            </div>

            <div id="register-form" class="form-container">
                <h2>Register</h2>
                <form action="register.php" method="POST">
                    <input type="text" name="username" placeholder="Username" required>
                    <input type="email" name="email" placeholder="Email" required>
                    <input type="password" name="password" placeholder="Password" required>
                    <button type="submit">Register</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        function openModal(formType) {
            document.getElementById("modal").style.display = "block";
            document.getElementById("modal").classList.add("fade-in");

            if (formType === "login") {
                document.getElementById("login-form").style.display = "block";
                document.getElementById("register-form").style.display = "none";
            } else {
                document.getElementById("register-form").style.display = "block";
                document.getElementById("login-form").style.display = "none";
            }
        }

        function closeModal() {
            document.getElementById("modal").classList.remove("fade-in");
            document.getElementById("modal").classList.add("fade-out");

            setTimeout(() => {
                document.getElementById("modal").style.display = "none";
                document.getElementById("modal").classList.remove("fade-out");
            }, 300);
        }

        window.onclick = function(event) {
            if (event.target == document.getElementById("modal")) {
                closeModal();
            }
        }
    </script>
</body>
</html>

