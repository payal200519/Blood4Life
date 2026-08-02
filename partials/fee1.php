<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit Feedback</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
            background: linear-gradient(135deg, #ff9a9e, #fad0c4);
            animation: fadeIn 1s ease-in-out;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
            width: 90%;
            max-width: 500px;
            text-align: center;
            position: relative;
        }
        h2 {
            color: #333;
        }
        input, textarea, button {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            transition: 0.3s;
        }
        input:focus, textarea:focus {
            border-color: #007bff;
            box-shadow: 0 0 8px rgba(0, 123, 255, 0.5);
        }
        .rating {
            display: flex;
            justify-content: center;
            gap: 5px;
        }
        .star {
            font-size: 30px;
            cursor: pointer;
            transition: transform 0.2s;
        }
        .star:hover, .star.active {
            transform: scale(1.2);
        }
        .submit-btn {
            background: #28a745;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 16px;
            transition: 0.3s;
        }
        .submit-btn:hover {
            background: #218838;
        }
        .back-button {
            display: block;
            margin-top: 10px;
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
            transition: 0.3s;
        }
        .back-button:hover {
            color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Submit Feedback</h2>
        <input type="text" id="name" placeholder="Enter your name" required>
        <textarea id="message" placeholder="Write your feedback" rows="4" required></textarea>
        
        <div class="rating">
            <span class="star" data-value="1">😡</span>
            <span class="star" data-value="2">🙁</span>
            <span class="star" data-value="3">😐</span>
            <span class="star" data-value="4">🙂</span>
            <span class="star" data-value="5">😍</span>
        </div>

        <button class="submit-btn" onclick="submitFeedback()">Submit Feedback</button>
        <a href="fee.php" class="back-button">View Feedback</a>
    </div>

    <script>
        let selectedRating = 0;

        document.querySelectorAll('.star').forEach(star => {
            star.addEventListener('click', function () {
                selectedRating = this.getAttribute('data-value');
                document.querySelectorAll('.star').forEach(s => s.classList.remove('active'));
                this.classList.add('active');
            });
        });

        function submitFeedback() {
            const name = document.getElementById('name').value;
            const message = document.getElementById('message').value;

            if (!name || !message || selectedRating === 0) {
                alert("Please fill in all fields and provide a rating.");
                return;
            }

            const feedbackData = JSON.parse(localStorage.getItem("feedback")) || [];
            feedbackData.push({ name, message, rating: selectedRating });
            localStorage.setItem("feedback", JSON.stringify(feedbackData));

            alert(`Thank you, ${name}! Your feedback has been submitted.`);
            window.location.href = "fee.php";
        }
    </script>
</body>
</html>
