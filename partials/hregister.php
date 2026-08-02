<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transparent Hospital Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: url('re.jpg') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2);
            padding: 20px;
            max-width: 900px;
            display: flex;
            flex-direction: row;
            gap: 20px;
        }

        .form-left {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .form-left img {
            max-width: 100%;
            height: auto;
            border-radius: 15px;
        }

        .form-right {
            flex: 2;
            display: flex;
            flex-direction: column;
        }

        .form-header {
            text-align: center;
            margin-bottom: 20px;
            color: #ffffff;
        }

        .form-header h2 {
            margin: 0;
        }

        .form-body {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
        }

        .form-group {
            flex: 1 1 45%;
            display: flex;
            flex-direction: column;
            position: relative;
        }

        .form-group label {
            color: #ffffff;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .form-group input,
        .form-group select {
            padding: 10px;
            border-radius: 8px;
            border: 1px solid rgba(255, 255, 255, 0.5);
            background: rgba(255, 255, 255, 0.2);
            color: #ffffff;
            font-size: 14px;
        }

        .form-group select {
            background: rgba(235, 229, 229, 0.2);
            color: #ffffff;
        }

        .form-group select option {
            background-color: #ffffff;
            color: #000000;
        }

        .form-group input::placeholder {
            color: #ffffff;
            opacity: 0.7;
        }

        .form-group input:focus,
        .form-group select:focus {
            outline: none;
            border-color: #6c63ff;
            
        }

        .form-group .error-message {
            color: white;
            font-size: 12px;
            margin-top: 5px;
            display: none;
        }

        .form-footer {
            text-align: center;
            margin-top: 20px;
        }

        .form-footer button {
            padding: 10px 20px;
            border: none;
            border-radius: 8px;
            background: #6c63ff;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .form-footer button:hover {
            background: #5750d5;
        }

        .form-footer p {
            color: #ffffff;
            margin-top: 10px;
        }

        .form-footer a {
            color: #6c63ff;
            text-decoration: none;
        }

        .form-footer a:hover {
            text-decoration: underline;
        }
    </style>
    <?php
           $servername="localhost";
           $username="root";
           $password="";
           $dbname= "project";

           $conn = mysqli_connect($servername, $username, $password, $dbname);
            if($_SERVER["REQUEST_METHOD"]== "POST"){
                //$id=$_POST['txtid'];
                $hname=$_POST['hospital_name'];
                $cno= $_POST['contact_number'];
                $email=$_POST['email'];
                $state= $_POST['state'];
                $city=$_POST['city'];
                $password= $_POST['password'];
                $cpsw= $_POST['confirm_password'];
            }
            if(isset($_POST['register'])){
                $sql="INSERT INTO `hregister`(`hname`, `cno`, `email`, `state`, `city`, `password`, `cpsw`) VALUES ('$hname','$cno','$email','$state','$city','$password','$cpsw')";
                $result = mysqli_query( $conn, $sql);
                
            }
    ?>
    <script>
        function validateForm(event) {
            const form = document.getElementById('registration-form');
            let isValid = true;

            const fields = [
                {
                    element: form['hospital_name'],
                    message: 'Hospital Name must be 3-50 characters long.',
                    validator: value => /^[A-Za-z0-9 ]{3,50}$/.test(value)
                },
                {
                    element: form['contact_number'],
                    message: 'Contact Number must be a valid 10-digit number.',
                    validator: value => /^[0-9]{10}$/.test(value)
                },
                {
                    element: form['email'],
                    message: 'Please enter a valid email address.',
                    validator: value => /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value)
                },
                {
                    element: form['password'],
                    message: 'Password must be at least 8 characters long, include an uppercase letter, lowercase letter, number, and special character.',
                    validator: value => value.length >= 8 && /[A-Z]/.test(value) && /[a-z]/.test(value) && /[0-9]/.test(value) && /[!@#$%^&*]/.test(value)
                },
                {
                    element: form['confirm_password'],
                    message: 'Passwords do not match.',
                    validator: value => value === form['password'].value
                }
            ];

            fields.forEach(field => {
                const errorElement = field.element.nextElementSibling;
                if (!field.validator(field.element.value.trim())) {
                    isValid = false;
                    errorElement.textContent = field.message;
                    errorElement.style.display = 'block';
                } else {
                    errorElement.style.display = 'none';
                }
            });

            if (!isValid) event.preventDefault();
        }

        function populateCities() {
            const cities = ['Ahmedabad', 'Surat', 'Vadodara', 'Rajkot', 'Bhavnagar', 'Jamnagar', 'Junagadh', 'Gandhinagar'];
            const citySelect = document.getElementById('city');
            citySelect.innerHTML = '<option value="" disabled selected>Select City</option>';
            cities.forEach(city => {
                const option = document.createElement('option');
                option.value = city;
                option.textContent = city;
                citySelect.appendChild(option);
            });
        }

        document.addEventListener('DOMContentLoaded', populateCities);
    </script>
</head>
<body>
    <form method="POST" id="registration-form">
    <div class="form-container">
        <div class="form-left">
            <img src="hospital.jpg" alt="Hospital Illustration">
        </div>
        <div class="form-right">
            <div class="form-header">
                <h2>Hospital Registration</h2>
            </div>
            <form id="registration-form" onsubmit="validateForm(event)">
                <div class="form-body">
                    <div class="form-group">
                        <label for="hospital-name">Hospital Name</label>
                        <input type="text" id="hospital-name" name="hospital_name" placeholder="Enter Hospital Name" required>
                        <span class="error-message"></span>
                    </div>
                    <div class="form-group">
                        <label for="contact-number">Contact Number</label>
                        <input type="tel" id="contact-number" name="contact_number" placeholder="Enter Contact Number" required>
                        <span class="error-message"></span>
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" placeholder="Enter Email Address" required>
                        <span class="error-message"></span>
                    </div>
                    <div class="form-group">
                        <label for="state">State</label>
                        <select id="state" name="state" required>
                            <option value="Gujarat">Gujarat</option>
                        </select>
                        <span class="error-message"></span>
                    </div>
                    <div class="form-group">
                        <label for="city">City</label>
                        <select id="city" name="city" required>
                            <option value="" disabled selected>Select City</option>
                        </select>
                        <span class="error-message"></span>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" placeholder="Enter Password" required>
                        <span class="error-message"></span>
                    </div>
                    <div class="form-group">
                        <label for="confirm-password">Confirm Password</label>
                        <input type="password" id="confirm-password" name="confirm_password" placeholder="Confirm Password" required>
                        <span class="error-message"></span>
                    </div>
                </div>
                <div class="form-footer">
                    <button type="submit" name="register">Register</button>
                    <p>Already have an account? <a href="hospital.php">Login</a></p>
                </div>
            </form>
        </div>
    </div>
    </form>
</body>
</html>