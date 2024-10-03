<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="test1.css" />
    <title>DuoChat Registration Form</title>
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
        ?>
        <form class="registration-login-form" action="handle_Registration.php" method="post">
		    <h2 class="registration-login-title" >Registration Form</h2>
            <div>
                <label for="firstname">First Name:</label>
                <input type="text" placeholder="Enter First Name" id="firstname" name="firstname"
                    required onblur="validateRequiredField('firstname', 'First Name', 'firstnameError');">
                <div id="firstnameError" class="registration-error"></div>
            </div>
            <div>
                <label for="lastname">Last Name:</label>
                <input type="text" placeholder="Enter Last Name" id="lastname" name="lastname"
                    required onblur="validateRequiredField('lastname', 'Last Name', 'lastnameError');">
                <span id="lastnameError" class="registration-error"></span>
            </div>
            <div>
                <label for="mobilenumber">Mobile Number:</label>
                <input type="number" placeholder="Enter Mobile Number" id="mobilenumber"
                    name="mobilenumber" required>
                <span id="mobilenumberError" class="registration-error"></span>
            </div>
            <div>
                <label for="email">Email:</label>
                <input type="email" placeholder="Enter Email" id="email" name="email" required>
                <span id="emailError" class="registration-error"></span>
            </div>
            <div>
                <label for="password">Password:</label>
                <input type="password" placeholder="Enter Password" id="password" name="password"
                    required>
                <span id="passwordError" class="registration-error"></span>
            </div>
            <input class="register-login-button" type="submit" value="Register">
			<p class="registration-login-text">Already a member? <a href="handle_login.php">Sign In</a></p>
        </form>
     
    </div>
	<footer>
        <p>&copy; 2024 DuoChat App. All rights reserved.</p>
    </footer>
    <script src="register.js"></script>
</body>

</html>
