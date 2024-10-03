<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="test1.css" />
    <title>DuoChat Login</title>
    <script src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous">
    </script>
</head>

<body class="registration-login-page">
    <nav>
        <h1 class="end">DuoChat App</h1>
        <div class="nav-items">
            <span class="background" id="background"></span>
            <a href="#profile">
                <span class="material-symbols-outlined">person</span>
            </a>
        </div>
    </nav>
    <div class="registration-login-container">
        <!-- Display session message if it exists -->
        <?php
        session_start();
        if (isset($_SESSION['error-message'])) {
            echo '<p id="errorMessage" class="error">' . $_SESSION['error-message'] . '</p>';
            // Unset session message variable after displaying it
            unset($_SESSION['error-message']);
        }
        if (isset($_SESSION['success-message'])) {
            echo '<p id="successMessage" class="success">' . $_SESSION['success-message'] . '</p>';
            // Unset success session message variable after displaying it
            unset($_SESSION['success-message']);
        }
        ?>
        <form class="registration-login-form" action="handle_login.php" method="post">
		<h2 class="registration-login-title">Login</h2>
            <div>
                <label for="email">Email:</label>
                <input type="text" placeholder="Enter Email" id="email" name="email" required>
            </div>
            <div>
                <label for="password">Password:</label>
                <input type="password" placeholder="Enter Password" id="password"
                    name="password" required>
            </div>
            <input class="register-login-button" type="submit" value="Login">
			<p class="registration-login-text">Not Yet Registered? <a href="handle_registration.php">Sign Up</a></p>
		</form>
    </div>
	<footer>
        <p>&copy; 2024 DuoChat App. All rights reserved.</p>
    </footer>
    <script>
        // Automatically hide error message after 5 seconds
        setTimeout(function () {
            var errorMessage = document.getElementById('errorMessage');
            var successMessage = document.getElementById('successMessage');
            if (errorMessage) {
                errorMessage.style.display = 'none';
            }
            if (successMessage) {
                successMessage.style.display = 'none';
            }
        }, 5000); // 5000 milliseconds = 5 seconds
    </script>
</body>

</html>
