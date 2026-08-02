<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ultra Modern Notification System</title>
    <style>
        /* Base Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #2b5876, #4e4376);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .notification-container {
            position: relative;
        }

        .notification-icon {
            position: relative;
            width: 60px;
            height: 60px;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #fff;
            border-radius: 50%;
            box-shadow: 8px 8px 16px #1f2d3d, -8px -8px 16px #5b6d7d;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .notification-icon:hover {
            transform: scale(1.1);
            box-shadow: 4px 4px 12px #1f2d3d, -4px -4px 12px #5b6d7d;
        }

        .notification-icon span {
            position: absolute;
            top: -5px;
            right: -5px;
            background: #ff3e55;
            color: white;
            padding: 4px 8px;
            border-radius: 50%;
            font-size: 12px;
            font-weight: bold;
            box-shadow: 0 0 12px rgba(255, 62, 85, 0.7);
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.2); }
            100% { transform: scale(1); }
        }

        .dropdown {
            position: absolute;
            top: 70px;
            right: 0;
            width: 360px;
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(15px);
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 12px 32px rgba(0, 0, 0, 0.3);
            transform: translateY(-20px);
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
            max-height: 400px;
            overflow-y: auto;
        }

        .dropdown.active {
            transform: translateY(0);
            opacity: 1;
            visibility: visible;
        }

        .dropdown div {
            padding: 15px;
            margin-bottom: 10px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 12px;
            box-shadow: inset 2px 2px 6px rgba(0, 0, 0, 0.1);
            transition: background 0.3s ease;
        }

        .dropdown div:hover {
            background: rgba(255, 255, 255, 0.4);
        }

        .dropdown small {
            display: block;
            color: #eee;
            margin-top: 5px;
            font-size: 12px;
        }

        .mark-read-btn {
            width: 100%;
            padding: 12px;
            background: linear-gradient(135deg, #ff416c, #ff4b2b);
            color: white;
            border: none;
            border-radius: 12px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .mark-read-btn:hover {
            background: linear-gradient(135deg, #ff4b2b, #ff416c);
        }

        /* Custom Scrollbar */
        .dropdown::-webkit-scrollbar {
            width: 6px;
        }

        .dropdown::-webkit-scrollbar-track {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
        }

        .dropdown::-webkit-scrollbar-thumb {
            background: rgba(255, 255, 255, 0.5);
            border-radius: 10px;
        }

        @media (max-width: 600px) {
            .dropdown {
                width: 90vw;
            }
        }
    </style>
</head>
<body>

    <div class="notification-container">
        <div class="notification-icon" onclick="toggleDropdown()">
            <img src="https://www.svgrepo.com/show/1514/bell.svg" alt="Notifications" width="30">
            <span id="notificationCount">0</span>
        </div>

        <div class="dropdown" id="notificationDropdown">
            <div id="notificationsList">Loading notifications...</div>
            <button class="mark-read-btn" onclick="markNotificationsAsRead()">Mark All as Read</button>
        </div>
    </div>

    <script>
        function fetchNotifications() {
            fetch('fetch_notifications.php')
                .then(response => response.json())
                .then(data => {
                    const list = document.getElementById('notificationsList');
                    const count = document.getElementById('notificationCount');
                    list.innerHTML = '';

                    if (data.length > 0) {
                        count.textContent = data.length;
                        data.forEach(notification => {
                            list.innerHTML += `
                                <div>
                                    <strong>${notification.message}</strong>
                                    <small>${notification.created_at}</small>
                                </div>`;
                        });
                    } else {
                        count.textContent = '0';
                        list.innerHTML = '<div>No new notifications.</div>';
                    }
                });
        }

        function toggleDropdown() {
            const dropdown = document.getElementById('notificationDropdown');
            dropdown.classList.toggle('active');
        }

        function markNotificationsAsRead() {
            fetch('mark_notifications.php', { method: 'POST' })
                .then(() => {
                    fetchNotifications();
                });
        }

        setInterval(fetchNotifications, 10000);
        fetchNotifications();
    </script>

</body>
</html>
