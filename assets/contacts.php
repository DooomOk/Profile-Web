<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacts</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  
<section id="contacts">
        <p class="section__text__p1">Get in Touch</p>
        <h1 class="title">Contact Me</h1>
     
        <div class="contact-info-upper-container">
            <div class="contact-info-container">
              <img src="email.png" 
              alt="Email Icon" 
              class="icon contact-icon email-icon"/>
              <p><a href="mailto:domonly000@gmail.com">domonly000@gmail.com</a></p>
            </div>
            <div class="contact-info-container">
              <img src="linkedin.png" 
              alt="LinkedIn Icon" 
              class="icon contact-icon"/>
              <p><a href="https://www.linkedin.com/in/jules-bumatay-9707ab288/?originalSubdomain=ph">LinkedIn</a></p>

            </div>
        </div>
        
        <div class="message-container">
            <div id="message-button-container">
                <button id="show-message-btn" class="btn btn-color-1">Message</button>
            </div>
            <div class="message-section hidden">
                <textarea id="message" placeholder="Write your message here..."></textarea>
                <button id="send-message-btn" class="btn btn-color-1">Send Message</button>
            </div>
        </div>

        <div id="message-popup" class="popup hidden">
            <div class="popup-content">
                <p>Your message has been sent!</p>
                <button id="close-popup-btn" class="btn btn-color-1">Close</button>
            </div>
        </div>

    </section>
    <footer>
      <nav>
        <button id="logout-btn" class="btn btn-color-1 hidden">Logout</button>
        <div class="nav-links-containers">
          <ul class="nav-links"> 
            <li><a href="index.php">Profile </a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="exp.php">Experience</a></li>
            <li><a href="projects.php">Projects</a></li>
            <li><a href="contacts.php">Contacts</a></li>
          </ul>
        </div>
      </nav>
      <p>Copyright &#169; 2023 Jules Bumatay. All Rights Reserved.</p>
    </footer>
    <script src="script.js"></script>
</body>
</html>
