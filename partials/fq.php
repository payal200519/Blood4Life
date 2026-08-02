<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>BLOOD4life</title>

  <!-- Bootstrap & Font Awesome -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" />
  <script src="https://kit.fontawesome.com/9bbc1cd7b1.js" crossorigin="anonymous"></script>

  <!-- AOS (optional) -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link rel="stylesheet" href="about.css" />




  <!-- Custom Styles -->
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      margin: 0;
      padding: 0;
      background: linear-gradient(to right, #f7f8fa, #e8edf3);
    }

    header h1 {
      text-align: center;
      margin: 2rem auto 1rem;
      font-size: 2.5rem;
      color: #b30000;
    }

    .container {
      max-width: 1200px;
      margin: auto;
      background: white;
      padding: 2rem;
      border-radius: 10px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    .faq-item {
      margin-bottom: 1rem;
    }

    .faq-item button {
      background: #c0392b;
      color: white;
      border: none;
      padding: 1rem;
      width: 100%;
      border-radius: 6px;
      font-size: 1.1rem;
      text-align: left;
      cursor: pointer;
      transition: background 0.3s ease;
    }

    .faq-item button:hover {
      background: #e74c3c;
    }

    .faq-item .content {
      display: none;
      background: #f1f1f1;
      padding: 1rem;
      border-radius: 0 0 6px 6px;
      animation: slideDown 0.3s ease-in-out forwards;
    }

    @keyframes slideDown {
      from {
        opacity: 0;
        transform: translateY(-10px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    /* Chat Application */
    .chat-container {
      position: fixed;
      bottom: 20px;
      right: 20px;
      width: 320px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
      border-radius: 10px;
      background: #fff;
      z-index: 1000;
      font-size: 1rem;
    }

    .chat-header {
      background: #e74c3c;
      color: white;
      padding: 1rem;
      font-weight: bold;
      text-align: center;
      cursor: pointer;
      border-radius: 10px 10px 0 0;
      position: relative;
    }

    .chat-header .close-chat {
      position: absolute;
      top: 10px;
      right: 15px;
      background: none;
      border: none;
      color: white;
      font-size: 1.2rem;
      cursor: pointer;
    }

    .chat-body {
      display: none;
      flex-direction: column;
      height: 350px;
      padding: 1rem;
    }

    .chat-body .messages {
      flex: 1;
      overflow-y: auto;
      border: 1px solid #ccc;
      padding: 0.5rem;
      margin-bottom: 0.5rem;
      border-radius: 5px;
      background: #f9f9f9;
    }

    .user-message,
    .bot-message {
      margin-bottom: 0.5rem;
      padding: 0.5rem;
      border-radius: 6px;
    }

    .user-message {
      background: #c0392b;
      color: white;
      text-align: right;
    }

    .bot-message {
      background: #ecf0f1;
      color: #2c3e50;
      text-align: left;
    }

    .chat-body .input-area {
      display: flex;
      gap: 0.5rem;
    }

    .chat-body input {
      flex: 1;
      padding: 0.5rem;
      border-radius: 5px;
      border: 1px solid #ccc;
    }

    .chat-body button {
      padding: 0.5rem 1rem;
      background: #c0392b;
      color: white;
      border: none;
      border-radius: 5px;
    }

    .chat-body button:hover {
      background: #a93226;
    }
  </style>
</head>
<body>
<div id="preloader">
    <div id="status">&nbsp;</div>
  </div>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center navbars">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a class="loga" href="index.php">BLOOD4LIFE</a></h1>
      

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="http://localhost/Blood4Life/" class="active" class="acl" class="nsd" id="home">HOME</a></li>

          <li class="dropdown"><a href="" class="acl"><span>ABOUT</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="about.php" >About</a></li>
              <ul>
                  <li><a href="j1.php">Blood journey</a></li>
                  <li><a href="location.php">Location</a></li>
                </ul>
              <li><a href="fq.php" >FAQ</a></li>
              <li><a href="camp.php" >Blood Donation Camp</a></li>
              <li><a href="j1.php" >Blood journey</a></li> 
              <li><a href="fee.php" >Feedback</a></li> 

              </li>
            </ul>
          </li>
          <li><a href="donor.php" class="acl">DONOR</a></li>
          <li><a href="gal.php" class="acl">GALLERY</a></li>
          <li><a href="search.php" class="acl">SEARCH</a></li>

          <li><a href="contact.php" class="acl">CONTACT</a></li>
          <li><a href="login.php" class="getstarted" class="acl"><span class="bi bi-person-fill" data-icon="" data-inline="false"></span>&nbspLOGIN</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <header>
    <h1>Frequently Asked Questions</h1>
  </header>

  <div class="container">
    <div class="faq-section">
      <div class="faq-item">
        <button onclick="toggleContent(this)">Types of Blood</button>
        <div class="content">There are four major blood groups: A, B, AB, and O.</div>
      </div>

      <div class="faq-item">
        <button onclick="toggleContent(this)">How Many Units of Blood Can Be Donated?</button>
        <div class="content">Usually, 1 unit (approx. 470 ml) per donation session.</div>
      </div>

      <div class="faq-item">
        <button onclick="toggleContent(this)">Process to Receive Blood Using Website</button>
        <div class="content">Go to our 'Request Blood' section, fill out the form, and we will assist you immediately.</div>
      </div>

      <div class="faq-item">
        <button onclick="toggleContent(this)">Who can donate?</button>
        <div class="content">Anyone aged 16–65 years and weighing at least 50 kg.</div>
      </div>
      <div class="faq-item">
                <button onclick="toggleContent(this)">Can you get HIV/disease from donating?</button>
                <div class="content">No, not at all. All needles and lancets are sterile and used only once. Our staffs are well trained and follow strict standardized procedures.</div>
                </div>
        <div class="faq-item">
                <button onclick="toggleContent(this)">After how long should I donate blood?</button>
                <div class="content">After every 3 months for males and after 4 months for females </div>
                </div> 
                <div class="faq-item">
                <button onclick="toggleContent(this)">How long does it take for my body to replenish the blood I have donated?</button>
                <div class="content">Fluid part (plasma) is replaced within 24 hrs, while the cells part is replaced within two weeks.</div>
                </div>    

      <div class="faq-item">
        <button onclick="toggleContent(this)">How many lives can a unit of blood save?</button>
        <div class="content">One unit can help save up to 3 lives through its components.</div>
      </div>
    </div>
    
  </div>

  <!-- Chat -->
  <div class="chat-container">
    <div class="chat-header" onclick="toggleChat()">Hi! Need help?
      <button class="close-chat" onclick="closeChat(event)">&times;</button>
    </div>
    <div class="chat-body">
      <div class="messages" id="chatMessages"></div>
      <div class="input-area">
        <input type="text" id="chatInput" placeholder="Ask a question..." />
        <button onclick="sendMessage()">Send</button>
      </div>
    </div>
  </div>

  <!-- JS -->
  <script>
    function toggleContent(button) {
      const content = button.nextElementSibling;
      content.style.display = content.style.display === 'block' ? 'none' : 'block';
    }

    function toggleChat() {
      const chatBody = document.querySelector('.chat-body');
      chatBody.style.display = chatBody.style.display === 'flex' ? 'none' : 'flex';
    }

    function closeChat(e) {
      e.stopPropagation();
      document.querySelector('.chat-body').style.display = 'none';
    }

    function sendMessage() {
      const input = document.getElementById('chatInput');
      const msgBox = document.getElementById('chatMessages');
      const text = input.value.trim();

      if (!text) return;

      // User message
      msgBox.innerHTML += `<div class="user-message">${text}</div>`;

      // Bot reply
      let reply = "I'm not sure. Please ask more specific.";
      const lowerText = text.toLowerCase();

      if (lowerText.includes("blood types")) {
        reply = "There are four major blood groups: A, B, AB, and O.";
      } else if (lowerText.includes("donate") && lowerText.includes("limit")) {
        reply = "You can donate once every 3 months if male, and every 4 months if female.";
      } else if (lowerText.includes("request blood")) {
        reply = "You can request blood by visiting our 'Search' or 'Request' section.";
      }

      msgBox.innerHTML += `<div class="bot-message">${reply}</div>`;
      input.value = '';
      msgBox.scrollTop = msgBox.scrollHeight;
    }
  </script>

</body>
</html>
