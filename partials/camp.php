<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Donation Camps</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color:rgb(244, 238, 238);
            color: #333;
            overflow-x: hidden;
        }
        .camp-banner {
            text-align: center;
            background-color:rgb(205, 101, 101);
            color: white;
            padding: 80px 20px;
            position: relative;
        }
        .camp-banner::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
        }
        .camp-banner h1, .camp-banner p {
            position: relative;
            z-index: 2;
            animation: fadeIn 1.5s ease-in;
        }
        .camp-banner h1 {
            font-size: 3rem;
            margin: 0;
        }
        .camp-banner p {
            font-size: 1.5rem;
            margin: 10px 0;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .camp-details {
            margin: 40px auto;
            max-width: 1200px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            padding: 20px;
        }
        .camp-card {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s;
        }
        .camp-card:hover {
            transform: translateY(-10px);
        }
        .camp-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        .camp-card .content {
            padding: 15px;
            text-align: center;
        }
        .camp-card h4 {
            margin: 0 0 10px;
            color: #e63946;
            font-size: 1.5rem;
        }
        .camp-card p {
            margin: 0 0 15px;
            font-size: 1rem;
            color: #555;
        }
        .register-link {
            display: inline-block;
            padding: 10px 20px;
            font-size: 1rem;
            color: #fff;
            background: #e63946;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            text-align: center;
            transition: background 0.3s;
        }
        .register-link:hover {
            background: #d32f2f;
        }
        @media (max-width: 768px) {
            .camp-banner h1 {
                font-size: 2.5rem;
            }
            .camp-banner p {
                font-size: 1.2rem;
            }
            .camp-card img {
                height: 150px;
            }
            .camp-card h4 {
                font-size: 1.2rem;
            }
            .camp-card p {
                font-size: 0.9rem;
            }
            .register-link {
                font-size: 0.9rem;
                padding: 8px 16px;
            }
        }
        @media (max-width: 480px) {
            .camp-banner h1 {
                font-size: 2rem;
            }
            .camp-banner p {
                font-size: 1rem;
            }
            .camp-card h4 {
                font-size: 1rem;
            }
            .camp-card p {
                font-size: 0.8rem;
            }
            .register-link {
                font-size: 0.8rem;
                padding: 6px 12px;
            }
        }
    </style>
</head>
<body>

<div class="camp-banner">
    <h1>Blood Donation Camps</h1>
    <p>Be a hero! Find a camp near you and donate blood to save lives.</p>
</div>

<div class="camp-details">
    <div class="camp-card">
        <img src="img/do.jpg" alt="City Hall">
        <div class="content">
            <h4>City Hall, surat</h4>
            <p>Date: 25th January 2025</p>
            <a href="regcamp.php" class="register-link">Register</a>
        </div>
    </div>

    <div class="camp-card">
        <img src="img/support.jpg" alt="Community Center">
        <div class="content">
            <h4>Community hall, surat</h4>
            <p>Date: 10th February 2025</p>
            <a href="regcamp.php" class="register-link">Register</a>
        </div>
    </div>

    <div class="camp-card">
        <img src="img/men.jpg" alt="High School">
        <div class="content">
            <h4>High School , surat</h4>
            <p>Date: 5th March 2025</p>
            <a href="regcamp.php" class="register-link">Register</a>
        </div>
    </div>
    <div class="camp-card">
        <img src="img/donation.jpg" alt="High School">
        <div class="content">
            <h4>NCC camp , surat</h4>
            <p>Date: 14th March 2025</p>
            <a href="regcamp.php" class="register-link">Register</a>
        </div>
    </div>
    <div class="camp-card">
        <img src="img/company.jpg" alt="High School">
        <div class="content">
            <h4>raktdan kendra, surat</h4>
            <p>Date: 18th March 2025</p>
            <a href="regcamp.php" class="register-link">Register</a>
        </div>
    </div>
    <div class="camp-card">
        <img src="img/school.jpg" alt="High School">
        <div class="content">
            <h4>college campus, surat</h4>
            <p>Date: 23th March 2025</p>
            <a href="regcamp.php" class="register-link">Register</a>
        </div>
    </div>
</div>

</body>
</html>
