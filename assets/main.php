<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Personal Web</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css" />
    
  </head>
  <body>
    <nav id="desktop-nav">
      <div class="logo">Jules Bumatay</div>
      <div>
        <ul class="nav-links"> 
          <li><a href="#about">About</a></li>
          <li><a href="#experience">Experience</a></li>
          <li><a href="#projects">Projects</a></li>
          <li><a href="#contacts">Contacts</a></li>
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
          <li><a href="#about" onclick="toggleMenu()">About</a></li>
          <li><a href="#experience" onclick="toggleMenu()">Experience</a></li>
          <li><a href="#projects" onclick="toggleMenu()">Projects</a></li>
          <li><a href="#contacts" onclick="toggleMenu()">Contacts</a></li>
        </div>
      </div>
    </nav>
    <section id="profile">
      <!--  
        <div class="section__pic-container">
            <img src="./meow/profile-pic.png" alt="Jules Bumatay profile pictureS">
         </div>  -->
        <div class="section__text">
          <p class="section__text__p1">Welcome To My Personal Website!</p>
          <h1 class="title">Jules Bumatay</h1>
          <p class="section__text__p2">I'm a 20-year-old BSIT student. You can find all my projects and information on my website. </p>
          <div class="btn-container">
            <button class="btn btn-color-2" onclick="window.open('./meow/CV.pdf')">Download CV</button>
            <button class="btn btn-color-1" onclick="location.href='./#contacts'">Contact Info</button>
          </div>
          <div id="socials-container">
              <img src="./meow/linkedin.png" alt="My LinkedIn profile"
              class="icon linkedin" 
              onclick="location.href='https://www.linkedin.com/in/jules-bumatay-9707ab288/?originalSubdomain=ph'"/>
              <img src="./meow/github.png" alt="My Github profile"
              class="icon github" 
              onclick="location.href='https://github.com/DooomOk'"/>
          </div>
        </div>
    </section>
    <section id="about">
      <p class="section__text__p1">Get To Know More</p>
      <h1 class="title">About Me</h1>
      <div class="section-container">
        <div class="section__pic-container">
          <img src="./meow/about-pic.jpg" 
            alt="Profile picture"
            class="about-pic"/>
        </div>
        <div class="about-details-containers">
          <div class="about-containers">
            <div class="details-containers">
              <img 
                src="./meow/experience.png" 
                alt="Experience icon"
                class="icon" />
              <h3>Experience</h3>
              <p>None <br> BSIT Student</p>
            </div>
            <div class="details-containers">
              <img 
                src="./meow/education.png" 
                alt="Education icon"
                class="icon" />
              <h3>Educational Background</h3>
              <p>BS. Information Technology-MI<br>2nd Year</p>
            </div>
          </div>
          <div class="text-container">
            <p>Hello, I'm Jules Bumatay, but you can call me "Dom." 
               I am a 2nd-year BSIT student at National University Fairview. 
               While I don't particularly enjoy studying, it's a necessity I can't ignore. 
               In my free time, I love playing the guitar and reading manga. Additionally, 
               I am a member of a band, where I serve as a rhythm guitarist. 
               I am also proficient in playing bass and piano.</p>
          </div>
        </div>
      </div>
      <button class="arrow" 
      onclick="location.href='./#experience'">Experience</button>
    </section>
    <section id="experience">
      <p class="section__text__p1">Explore My</p>
      <h1 class="title">Experience</h1>
      <div class="experience-details-container">
        <div class="about-containers">
          <div class="details-containers">
            <h2 class="experience-sub-title">Frontend Development</h2>
            <div class="article-container">
              <article>
                <img src="./meow/checkmark.png" 
                alt="Experience Icon"
                class="icon" />
                <div>
                  <h3>HTML</h3>
                  <P>Intermediate</P>
                </div>
              </article>
              <article>
                <img src="./meow/checkmark.png" 
                alt="Experience Icon"
                class="icon" />
                <div>
                  <h3>CSS</h3>
                  <P>Intermediate</P>
                </div>
              </article>
              <article>
                <img src="./meow/checkmark.png" 
                alt="Experience Icon"
                class="icon" />
                <div>
                  <h3>JavaScript</h3>
                  <P>Basic</P>
                </div>
              </article>
            </div>
          </div>
          <div class="details-containers">
            <h2 class="experience-sub-title">Other Programming Language Proficiency</h2>
            <div class="article-container">
              <article>
                <img src="./meow/checkmark.png" 
                alt="Experience Icon"
                class="icon" />
                <div>
                  <h3>MySQL</h3>
                  <P>Basic</P>
                </div>
              </article>
              <article>
                <img src="./meow/checkmark.png" 
                alt="Experience Icon"
                class="icon" />
                <div>
                  <h3>Python</h3>
                  <P>Intermediate</P>
                </div>
              </article>
              <article>
                <img src="./meow/checkmark.png" 
                alt="Experience Icon"
                class="icon" />
                <div>
                  <h3>Java</h3>
                  <P>Basic</P>
                </div>
              </article>
            </div>
          </div>
        </div>
      </div>
      <button class="arrow" 
      onclick="location.href='./#projects'">Projects</button>
    </section>
    <section id="projects">
      <p class="section__text__p1">Browse My Recent</p>
      <h1 class="title">Projects</h1>
      <div class="experience-details-container">
        <div class="details-containers color-container">
            <img src="./meow/project-1.jpg" 
            alt="Project 1"
            class="project-img" />
            <img src="./meow/project-2.jpg" 
            alt="Project 2"
            class="project-img" />
            <img src="./meow/project-3.jpg" 
            alt="Project 3"
            class="project-img" />
        </div>
      </div>
      <button class="arrow" 
      onclick="location.href='./#contacts'">Contacts</button>
    </section>
    <section id="contacts">
        <p class="section__text__p1">Get in Touch</p>
        <h1 class="title">Contact Me</h1>
     
        <div class="contact-info-upper-container">
            <div class="contact-info-container">
              <img src="./meow/email.png" 
              alt="Email Icon" 
              class="icon contact-icon email-icon"/>
              <p><a href="mailto:domonly000@gmail.com">domonly000@gmail.com</a></p>
            </div>
            <div class="contact-info-container">
              <img src="./meow/linkedin.png" 
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
        <div class="nav-links-containers">
          <ul class="nav-links"> 
            <li><a href="#about">About</a></li>
            <li><a href="#experience">Experience</a></li>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#contacts">Contacts</a></li>
          </ul>
        </div>
      </nav>
      <p>Copyright &#169; 2023 Jules Bumatay. All Rights Reserved.</p>
    </footer>
    <script src="script.js"></script>
  </body>
</html>