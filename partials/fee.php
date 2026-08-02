<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Display</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
            background: linear-gradient(135deg, #ff9a9e, #fad0c4);
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            width: 90%;
            max-width: 600px;
            text-align: center;
            animation: fadeIn 1s ease-in-out;
            position: relative;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        h2 {
            color: #333;
        }
        .feedback-list {
            margin-top: 20px;
        }
        .feedback-item {
            background: #f8f9fa;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            text-align: left;
            position: relative;
            transition: transform 0.3s;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }
        .feedback-item:hover {
            transform: scale(1.05);
        }
        .feedback-item h3 {
            margin: 0;
            color: #007bff;
        }
        .rating {
            font-size: 20px;
        }
        .message {
            font-style: italic;
            margin-top: 5px;
        }
        .delete-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            background: #dc3545;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
        }
        .delete-btn:hover {
            background: #c82333;
        }
        .back-button, .clear-all-button {
            margin-top: 20px;
            padding: 10px 15px;
            border: none;
            background: #007bff;
            color: white;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            transition: 0.3s;
            text-decoration: none;
        }
        .clear-all-button {
            background: #ff5733;
            margin-left: 10px;
        }
        .back-button:hover {
            background: #0056b3;
        }
        .clear-all-button:hover {
            background: #d62c1a;
        }
        .animated-button {
            position: absolute;
            top: -10px;
            right: -10px;
            background: #28a745;
            color: white;
            padding: 10px;
            border-radius: 50%;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            cursor: pointer;
            animation: pulse 1.5s infinite;
        }
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.1); }
            100% { transform: scale(1); }
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>User Feedback</h2>
        <div id="feedback-list" class="feedback-list"></div>
        <a href="fee1.php" class="back-button">Go Back</a>
        <button class="clear-all-button" onclick="clearAllFeedback()">Clear All Feedback</button>
        <button class="animated-button" onclick="addDummyFeedback()">+</button>
    </div>
    <script>
        function loadFeedback() {
            const feedbackList = document.getElementById("feedback-list");
            const feedbackData = JSON.parse(localStorage.getItem("feedback")) || [];
            feedbackList.innerHTML = "";
            
            if (feedbackData.length === 0) {
                feedbackList.innerHTML = "<p>No feedback available yet.</p>";
                return;
            }
            
            feedbackData.forEach((feedback, index) => {
                const feedbackItem = document.createElement("div");
                feedbackItem.classList.add("feedback-item");
                feedbackItem.innerHTML = `
                    <h3>${feedback.name}</h3>
                    <div class="rating">⭐ ${feedback.rating}</div>
                    <p class="message">${feedback.message}</p>
                    <button class="delete-btn" onclick="deleteFeedback(${index})">Delete</button>
                `;
                feedbackList.appendChild(feedbackItem);
            });
        }
        
        function deleteFeedback(index) {
            let feedbackData = JSON.parse(localStorage.getItem("feedback")) || [];
            feedbackData.splice(index, 1);
            localStorage.setItem("feedback", JSON.stringify(feedbackData));
            loadFeedback();
        }
        
        function clearAllFeedback() {
            localStorage.removeItem("feedback");
            loadFeedback();
        }
        
        function addDummyFeedback() {
            let feedbackData = JSON.parse(localStorage.getItem("feedback")) || [];
            const newFeedback = {
                name: "Guest User",
                rating: "5",
                message: "This website is amazing! Love the UI!"
            };
            feedbackData.push(newFeedback);
            localStorage.setItem("feedback", JSON.stringify(feedbackData));
            loadFeedback();
        }
        
        window.onload = loadFeedback;
    </script>
</body>
</html>
