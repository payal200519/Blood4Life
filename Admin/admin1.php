<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Login - Blood Bank System</title>
  <link rel="stylesheet" href="admin1.css">
</head>

<body>
  <div class="login-container">
    <div class="login-form">
      <h2>Admin Login</h2>
      <form id="loginForm" method="POST">
        <div class="form-group">
          <label for="username">Username:</label>
          <input type="text" id="username" name="username" required>
        </div>
        <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" id="password" name="password" required>
        </div>
        
        <button type="submit" id="submitBtn" onclick="myfun()">Login</button>
        
        <p id="error-message" style="color: red; display: none;">Invalid Username or Password</p>
      </form>
    </div>
  </div>

<script>
  document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault();

    const username = document.getElementById('username').value.trim();
    const password = document.getElementById('password').value.trim();
    const errorMessage = document.getElementById('error-message');

    // Example validation
    if (username === 'minal' && password === '123') {
        alert('Login successful!');
        errorMessage.style.display = 'none';
    } else {
        errorMessage.textContent = 'Invalid username or password!';
        errorMessage.style.display = 'block';
    }
});

  function myfun()
   {
    window.location.href = "ad.php";
  }
  </script>
  
</body>
</html>




