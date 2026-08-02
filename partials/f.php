<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Login & Forgot Password</title>
  <style>
    /* Basic styling for the layout */
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      background-color: #f4f4f4;
      font-family: Arial, sans-serif;
    }
    .card {
      background: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
      width: 350px;
      text-align: center;
      margin: 10px;
    }
    input {
      width: 100%;
      padding: 10px;
      margin: 10px 0;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    button {
      width: 100%;
      padding: 10px;
      background-color: #007bff;
      border: none;
      color: #fff;
      border-radius: 5px;
      cursor: pointer;
    }
    button:hover {
      background-color: #0056b3;
    }
    .link {
      color: #007bff;
      cursor: pointer;
      margin-top: 10px;
      display: block;
      text-decoration: underline;
    }
    .message {
      margin-top: 10px;
      font-size: 14px;
    }
    .success {
      color: green;
    }
    .error {
      color: red;
    }
  </style>
</head>
<body>
  <!-- Login Form -->
  <div class="card" id="login-form">
    <h2>Login</h2>
    <input type="email" id="login-email" placeholder="Email" />
    <input type="password" id="login-password" placeholder="Password" />
    <button onclick="login()">Login</button>
    <span class="link" onclick="showForgotPassword()">Forgot Password?</span>
    <p id="login-message" class="message"></p>
  </div>

  <!-- Forgot Password Form (hidden initially) -->
  <div class="card" id="forgot-password-form" style="display: none;">
    <h2>Reset Password</h2>
    <input type="email" id="forgot-email" placeholder="Enter your email" />
    <input type="password" id="new-password" placeholder="New Password" />
    <input type="password" id="confirm-password" placeholder="Confirm New Password" />
    <button onclick="updatePassword()">Update Password</button>
    <span class="link" onclick="showLogin()">Back to Login</span>
    <p id="forgot-message" class="message"></p>
  </div>

  <script>
    // Global object to store user credentials dynamically.
    let users = {};

    // Simulate login (or registration if the user doesn't exist yet).
    function login() {
      const email = document.getElementById("login-email").value;
      const password = document.getElementById("login-password").value;
      const messageEl = document.getElementById("login-message");

      if (!email || !password) {
        messageEl.textContent = "Please enter both email and password.";
        messageEl.className = "message error";
        return;
      }
      // If user doesn't exist, "register" them.
      if (!users[email]) {
        users[email] = password;
        messageEl.textContent = "User registered and login successful!";
        messageEl.className = "message success";
      } else {
        // Check if password matches the stored password.
        if (users[email] === password) {
          messageEl.textContent = "Login successful!";
          messageEl.className = "message success";
        } else {
          messageEl.textContent = "Invalid email or password.";
          messageEl.className = "message error";
        }
      }
    }

    // Show the Forgot Password form.
    function showForgotPassword() {
      document.getElementById("login-form").style.display = "none";
      document.getElementById("forgot-password-form").style.display = "block";
    }

    // Return to the Login form.
    function showLogin() {
      document.getElementById("forgot-password-form").style.display = "none";
      document.getElementById("login-form").style.display = "block";
    }

    // Update the user's password if the email exists.
    function updatePassword() {
      const email = document.getElementById("forgot-email").value;
      const newPassword = document.getElementById("new-password").value;
      const confirmPassword = document.getElementById("confirm-password").value;
      const messageEl = document.getElementById("forgot-message");

      if (!users[email]) {
        messageEl.textContent = "Email not found.";
        messageEl.className = "message error";
        return;
      }
      if (!newPassword || !confirmPassword) {
        messageEl.textContent = "Please fill in all fields.";
        messageEl.className = "message error";
        return;
      }
      if (newPassword !== confirmPassword) {
        messageEl.textContent = "Passwords do not match.";
        messageEl.className = "message error";
        return;
      }

      // Update the password.
      users[email] = newPassword;
      messageEl.textContent = "Password updated successfully!";
      messageEl.className = "message success";

      // Redirect back to login after a short delay.
      setTimeout(() => {
        showLogin();
        document.getElementById("login-email").value = email;
        document.getElementById("login-password").value = "";
        // Clear forgot password fields.
        document.getElementById("forgot-email").value = "";
        document.getElementById("new-password").value = "";
        document.getElementById("confirm-password").value = "";
        document.getElementById("forgot-message").textContent = "";
        document.getElementById("login-message").textContent = "";
      }, 2000);
    }
  </script>
</body>
</html>
