<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blood Donor Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: url('https://media.gettyimages.com/id/629170686/photo/cute-technicians-in-laboratory-of-blood-bank-working.jpg?s=612x612&w=0&k=20&c=tqjxEquCOliunQ6Ojnbp614kM3OzQBAnzVGthDnolTU=') no-repeat center center fixed;
      background-size: cover;
      margin: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      color: #333;
    }
    body::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: inherit;
  filter: brightness(0.5);
  z-index: -1;
}

    .form-container {
      background: rgba(255, 255, 255, 0.9);
      padding: 20px 30px;
      border-radius: 10px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 400px;
    }

    .form-container h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #e63946;
    }

    .form-group {
      position: relative;
      margin-bottom: 20px;
    }

    .form-group label {
      position: absolute;
      top: 50%;
      left: 10px;
      transform: translateY(-50%);
      color: #e63946;
      font-size: 14px;
      pointer-events: none;
      transition: all 0.3s ease;
    }

    .form-group input,
    .form-group textarea,
    .form-group select {
      width: 100%;
      padding: 10px;
      border: 1px solid #ddd;
      border-radius: 5px;
      font-size: 16px;
      outline: none;
      background: linear-gradient(to right, #fff, #f8f8f8);
      transition: all 0.3s ease;
    }

    .form-group input:hover,
    .form-group textarea:hover,
    .form-group select:hover {
      box-shadow: 0 0 8px rgba(230, 57, 70, 0.6);
    }

    .form-group input:focus,
    .form-group textarea:focus,
    .form-group select:focus {
      border-color: #e63946;
      background: linear-gradient(to right, #ffe5e5, #ffffff);
    }

    .form-group input:focus + label,
    .form-group textarea:focus + label,
    .form-group select:focus + label,
    .form-group input:not(:placeholder-shown) + label,
    .form-group textarea:not(:placeholder-shown) + label,
    .form-group select:not([value=""]) + label {
      top: -10px;
      font-size: 12px;
      color: #e63946;
      background: white;
      padding: 0 5px;
    }

    .form-group textarea {
      resize: none;
    }

    .error-message {
      color: red;
      font-size: 12px;
      margin-top: 5px;
    }

    button {
      width: 100%;
      background: #e63946;
      color: white;
      padding: 10px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
      transition: background 0.3s ease, transform 0.3s ease;
    }

    button:hover {
      background: #cc2936;
      transform: scale(1.05);
    }
    .d1{
        color: red;
    }
    .r1{
        display: flex;
    }
  </style>
</head>
<body>
  <?php
     $servername="localhost";
     $username="root";
     $password="";
     $database="project";

     $conn = mysqli_connect($servername,$username,$password,$database);
     if($conn)
     {
      echo "connected";
     }
     else{
      echo "not connected";
     }
     if($_SERVER['REQUEST_METHOD']=='POST')
     {
        
        $name=$_POST['name'];
        $phoneno=$_POST['phoneno'];
        $email=$_POST['email'];
        $age=$_POST['age'];
        $gender=$_POST['gender'];
        $bloodgroup=$_POST['bloodgroup'];
        $address=$_POST['address'];
        
     }
     if(isset($_POST['insert']))
     {
      $sql="INSERT INTO `donar1` ( `name`, `phoneno`, `email`, `age`, `gender`,`bloodgroup`, `address`) VALUES ('$name', '$phoneno', '$email', '$age', '$gender','$bloodgroup', '$address')";
        $result = mysqli_query($conn,$sql);
            
           }   
     
  ?>
  <div class="form-container">
    <h2>Blood Donor Form</h2>
    <form method="POST" action="donor.php">
      <div class="form-group">
        <input type="text" id="name" placeholder=" " name="name" required />
        <label for="name">Full Name</label>
        <div class="error-message" id="nameError"></div>
      </div>

      

      <div class="form-group">
        <input type="tel" id="phone" placeholder=" " pattern="[0-9]{10}" name="phoneno" required />
        <label for="phone">Mobile Number</label>
        <div class="error-message" id="phoneError"></div>
      </div>
      <div class="form-group">
        <input type="email" id="email" placeholder=" " name="email" required />
        <label for="email">Email Address</label>
        <div class="error-message" id="emailError"></div>
      </div>
      <div class="form-group">
        <input type="text" id="age" placeholder=" " name="age" required />
        <label for="age">Age</label>
        <div class="error-message" id="emailError"></div>
      </div>
      <div class="form-group">
        <select id="gender" name="gender" required>
          <option value="" disabled selected hidden></option>
          <option value="male">Male</option>
          <option value="female">Female</option>
          <option value="other">Other</option>
          
        </select>
        <label for="bloodGroup">Gender</label>
        <div class="error-message" id="bloodGroupError"></div>
      </div>
      

      <div class="form-group">
        <select id="bloodGroup" name="bloodgroup" required>
          <option value="" disabled selected hidden></option>
          <option value="A+">A+</option>
          <option value="A-">A-</option>
          <option value="B+">B+</option>
          <option value="B-">B-</option>
          <option value="O+">O+</option>
          <option value="O-">O-</option>
          <option value="AB+">AB+</option>
          <option value="AB-">AB-</option>
        </select>
        <label for="bloodGroup">Blood Group</label>
        <div class="error-message" id="bloodGroupError"></div>
      </div>
      <div class="form-group">
        <textarea id="address" placeholder=" " rows="3" name="address" required></textarea>
        <label for="address">Address</label>
        <div class="error-message" id="addressError"></div>
      </div>
      



      <button type="submit" value="insert" name="insert">Submit</button>
    </form>
  </div>

  <script>
    document.getElementById('donorForm').addEventListener('submit', function(event) {
      event.preventDefault();
      let valid = true;

      // Name Validation
      const name = document.getElementById('name');
      const nameError = document.getElementById('nameError');
      if (name.value.trim() === '') {
        nameError.textContent = 'Name is required.';
        valid = false;
      } else {
        nameError.textContent = '';
      }

      // Email Validation
      const email = document.getElementById('email');
      const emailError = document.getElementById('emailError');
      const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!emailRegex.test(email.value.trim())) {
        emailError.textContent = 'Enter a valid email address.';
        valid = false;
      } else {
        emailError.textContent = '';
      }

      // Phone Validation
      const phone = document.getElementById('phone');
      const phoneError = document.getElementById('phoneError');
      if (!phone.value.match(/^[0-9]{10}$/)) {
        phoneError.textContent = 'Enter a valid 10-digit phone number.';
        valid = false;
      } else {
        phoneError.textContent = '';
      }

      // Address Validation
      const address = document.getElementById('address');
      const addressError = document.getElementById('addressError');
      if (address.value.trim() === '') {
        addressError.textContent = 'Address is required.';
        valid = false;
      } else {
        addressError.textContent = '';
      }

      // Blood Group Validation
      const bloodGroup = document.getElementById('bloodGroup');
      const bloodGroupError = document.getElementById('bloodGroupError');
      if (!bloodGroup.value) {
        bloodGroupError.textContent = 'Please select a blood group.';
        valid = false;
      } else {
        bloodGroupError.textContent = '';
      }

      // Amount Validation
      const amount = document.getElementById('amount');
      const amountError = document.getElementById('amountError');
      if (amount.value <= 0 || amount.value === '') {
        amountError.textContent = 'Enter a valid donation amount.';
        valid = false;
      } else {
        amountError.textContent = '';
      }

      // First Time Donor Validation
      const firstTimeYes = document.getElementById('firstTimeYes');
      const firstTimeNo = document.getElementById('firstTimeNo');
      const firstTimeError = document.getElementById('firstTimeError');
      if (!firstTimeYes.checked && !firstTimeNo.checked) {
        firstTimeError.textContent = 'Please indicate if this is your first time donating blood.';
        valid = false;
      } else {
        firstTimeError.textContent = '';
      }

      if (valid) {
        alert('Form submitted successfully!');
        // Form submission logic here
      }
    });
  </script>
</body>
</html>
