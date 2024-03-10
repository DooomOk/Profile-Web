<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<nav id="desktop-nav">
      <div class="logo">JULES BUMATAY</div>
      <div>
        <ul class="nav-links"> 
          <li><a href="about.php">About</a></li>
          <li><a href="exp.php">Experience</a></li>
          <li><a href="projects.php">Projects</a></li>
          <li><a href="contacts.php">Contacts</a></li>
        </ul>
      </div>
    </nav>
    <nav id="hamburger-nav">
      <div class="logo">Jules Bumatay</div>
      <div class="hamburger-menu">
        <div class="hamburger-icon" onclick="toggleMenu()">
          <span></span>
          <span></span>
          <span></span>
        </div>
        <div class="menu-links">
          <li><a href="about.phpt" onclick="toggleMenu()">About</a></li>
          <li><a href="exp.php" onclick="toggleMenu()">Experience</a></li>
          <li><a href="projects.php" onclick="toggleMenu()">Projects</a></li>
          <li><a href="contacts.php" onclick="toggleMenu()">Contacts</a></li>
        </div>
      </div>
    </nav>
    <section id="profile">
        <div class="section__pic-container">
            <img src="hihi.png" alt="Jules Bumatay profile pictureS">
         </div>  
        <div class="section__text">
          <p class="section__text__p1">Welcome To My Personal Website!</p>
          <h1 class="title">Jules Bumatay</h1>
          <p class="section__text__p2">I'm a 20-year-old BSIT student. You can find all my projects and information on my website. </p>
          <div class="btn-container">
            <button class="btn btn-color-2" onclick="window.open('CV.pdf')">Download CV</button>
            <button class="btn btn-color-1" onclick="location.href='./contacts.php'">Contact Info</button>
          </div>
          <div id="socials-container">
              <img src="linkedin.png" alt="My LinkedIn profile"
              class="icon linkedin" 
              onclick="location.href='https://www.linkedin.com/in/jules-bumatay-9707ab288/?originalSubdomain=ph'"/>
              <img src="github.png" alt="My Github profile"
              class="icon github" 
              onclick="location.href='https://github.com/DooomOk'"/>
          </div>
        </div>
    </section>
    <script src="script.js"></script>
</body>
</html>
