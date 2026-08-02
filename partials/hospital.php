<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Login</title>
    <link rel="stylesheet" href="hospital.css">
    <style>
        .input-group {
            position: relative;
            margin-bottom: 1rem;
        }
        .input-group input {
            width: 100%;
            padding-right: 2.5rem;
        }
        .input-group .toggle-password-icon {
            position: absolute;
            top: 29%;
            right: 0.75rem;
            transform: translateY(-50%);
            cursor: pointer;
            font-size: 1.25rem;
            color: #888;
        }
        .input-group .toggle-password-icon:hover {
            color: #333;
        }
    </style>
 <?php
         $servername="localhost";
         $username= "root";
         $password="";
         $dbname= "project";

         $conn = new mysqli($servername, $username, $password, $dbname);
         if($_SERVER["REQUEST_METHOD"]=='POST')
         {
            $uname= $_POST['username'];
            $password= $_POST['password'];
         }
         if(isset($_POST['login']))
         {
            $sql="INSERT INTO `hlogin`(`username`,`password`) VALUES ('$uname','$password')";
            $result=mysqli_query($conn,$sql);
        
         }
    ?> 
</head>
<body>
    <form method="post" id="loginForm" >
    <div class="login-container">
        <!-- Left Section -->
        <div class="left-section">
            <div class="content">
                <h1>Welcome Back!</h1>
                <p>Access your hospital account securely. Manage your data, appointments, and more in one place.</p>
                <img src="img/hos.jpg" alt="Hospital Illustration">
            </div>
        </div>
        <!-- Right Section -->
        <div class="right-section">
            <div class="form-container">
                <h2>Login to Your Account</h2>
                <form class="login-form" id="loginForm" novalidate>
                    <div class="input-group">
                        <input type="text" id="username" name="username" placeholder=" " aria-describedby="usernameError" required>
                        <label for="username">Username or Email</label>
                        <small class="error-message" id="usernameError"></small>
                    </div>
                    <div class="input-group">
                        <input type="password" id="password" name="password" placeholder=" " aria-describedby="passwordError" required>
                        <label for="password">Password</label>
                        <span class="toggle-password-icon" id="togglePassword">👁️</span>
                        <small class="error-message" id="passwordError"></small>
                    </div>
                    <div class="actions">
                        <label>
                            <input type="checkbox" name="remember"> Remember Me
                        </label>
                        <a href="#" class="forgot-password">Forgot Password?</a>
                    </div>
                    <button type="submit" class="btn-submit" name="login" onclick="redirectToPage()">Login</button>
                </form>
                <footer>
                    <p>New user <a href="hregister.php">Register</a></p>
                </footer>
            </div>
        </div>
    </div>
    <script>
    function redirectToPage() {
      window.location.href = "http://localhost/Blood4Life/"; // Replace with your page path
    }
  </script>
    <script>
        const form = document.getElementById('loginForm');
        const username = document.getElementById('username');
        const password = document.getElementById('password');
        const usernameError = document.getElementById('usernameError');
        const passwordError = document.getElementById('passwordError');
        const togglePassword = document.getElementById('togglePassword');

        // Toggle Password Visibility
        togglePassword.addEventListener('click', () => {
            const isPasswordVisible = password.type === 'text';
            password.type = isPasswordVisible ? 'password' : 'text';
            togglePassword.textContent = isPasswordVisible ? '👁️' : '🙈';
        });

        // Validation Functions
        const isEmail = (value) => /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value);
        const isStrongPassword = (value) =>
            /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/.test(value);

        const showError = (input, message, errorElement) => {
            errorElement.textContent = message;
            input.classList.add('invalid');
        };

        const clearError = (input, errorElement) => {
            errorElement.textContent = '';
            input.classList.remove('invalid');
        };

        form.addEventListener('submit', (event) => {
            let isValid = true;

            // Validate Username/Email
            if (username.value.trim() === '') {
                isValid = false;
                showError(username, 'Username or email is required.', usernameError);
            } else if (username.value.includes('@') && !isEmail(username.value)) {
                isValid = false;
                showError(username, 'Please enter a valid email address.', usernameError);
            } else {
                clearError(username, usernameError);
            }

            // Validate Password
            if (password.value.trim() === '') {
                isValid = false;
                showError(password, 'Password is required.', passwordError);
            } else if (!isStrongPassword(password.value)) {
                isValid = false;
                showError(
                    password,
                    'Password must be at least 8 characters long, include an uppercase letter, a lowercase letter, a number, and a special character.',
                    passwordError
                );
            } else {
                clearError(password, passwordError);
            }

            if (!isValid) {
                event.preventDefault();
            }
        });

        // Real-Time Validation
        username.addEventListener('input', () => {
            if (username.value.trim() === '' || (username.value.includes('@') && !isEmail(username.value))) {
                showError(username, 'Invalid username or email.', usernameError);
            } else {
                clearError(username, usernameError);
            }
        });

        password.addEventListener('input', () => {
            if (!isStrongPassword(password.value)) {
                showError(
                    password,
                    'Weak password. Include uppercase, lowercase, number, and special character.',
                    passwordError
                );
            } else {
                clearError(password, passwordError);
            }
        });
    </script>
    </form>
</body>
</html>
