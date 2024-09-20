<?php include './database/database.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Nazmus Saif</title>

  <!-- favicon -->
  <link rel="shortcut icon" href="./images/logo.png" type="image/png" />

  <!-- custom css link -->
  <link rel="stylesheet" href="./css/style.css" />

  <!-- google font link (poppins) -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet" />

  <!-- jquery -->
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>

<body>
  <!-- MAIN -->
  <main>
    <!-- SIDEBAR -->
    <aside class="sidebar" item-sidebar>
      <div class="sidebar-info">
        <figure class="avatar-box">
          <img src="./images/my-avatar.png" alt="Nazmus Saif Picture" width="80" />
        </figure>
        <div class="info-content">
          <h1 class="name" title="Nazmus Saif">Nazmus Saif</h1>
          <p class="title">Computer Engineer</p>
        </div>
        <button class="info-more-btn" item-sidebar-btn>
          <span>Show Contacts</span>
          <ion-icon name="chevron-down"></ion-icon>
        </button>
      </div>

      <div class="sidebar-info-more">
        <div class="separator"></div>

        <ul class="contacts-list">
          <li class="contact-item">
            <div class="icon-box">
              <ion-icon name="mail-outline"></ion-icon>
            </div>
            <div class="contact-info">
              <p class="contact-title">Email</p>
              <a class="contact-link">nzsaif10@gmail.com</a>
            </div>
          </li>

          <li class="contact-item">
            <div class="icon-box">
              <ion-icon name="phone-portrait-outline"></ion-icon>
            </div>
            <div class="contact-info">
              <p class="contact-title">Phone</p>
              <a class="contact-link">+880 1758-871858</a>
            </div>
          </li>

          <li class="contact-item">
            <div class="icon-box">
              <ion-icon name="calendar-outline"></ion-icon>
            </div>
            <div class="contact-info">
              <p class="contact-title">Birthday</p>
              <time datetime="1999-12-20">20 December, 1999</time>
            </div>
          </li>

          <li class="contact-item">
            <div class="icon-box">
              <ion-icon name="location-outline"></ion-icon>
            </div>
            <div class="contact-info">
              <p class="contact-title">Location</p>
              <address>B-Baria, Bangladesh</address>
            </div>
          </li>
        </ul>

        <div class="separator"></div>

        <!-- social icon list -->
        <ul class="social-list">
          <li class="social-item">
            <a href="https://www.linkedin.com/in/nzsaif" class="social-link" target="_blank">
              <ion-icon name="logo-linkedin"></ion-icon>
            </a>
          </li>
          <li class="social-item">
            <a href="https://www.facebook.com/profile.php?id=100080676383719" class="social-link" target="_blank">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>
          <li class="social-item">
            <a href="https://github.com/Nazmus-Saif" class="social-link" target="_blank">
              <ion-icon name="logo-github"></ion-icon>
            </a>
          </li>
        </ul>
      </div>
    </aside>

    <!-- MAIN CONTENT -->
    <div class="main-content">
      <!-- navbar -->
      <nav class="navbar">
        <ul class="navbar-list">
          <li class="navbar-item">
            <button class="navbar-link active" item-nav-link>About</button>
          </li>
          <li class="navbar-item">
            <button class="navbar-link" item-nav-link>Resume</button>
          </li>
          <li class="navbar-item">
            <button class="navbar-link" item-nav-link>Portfolio</button>
          </li>
          <li class="navbar-item">
            <button class="navbar-link" item-nav-link>Blog</button>
          </li>
          <li class="navbar-item">
            <button class="navbar-link" item-nav-link>Contact</button>
          </li>
          <li class="navbar-item">
            <button class="navbar-link" id="theme-button">
              <img src="./images/theme.png" alt="Theme Button" class="rotating-image" />
            </button>
          </li>
        </ul>
      </nav>

      <!-- ABOUT -->
      <article class="about active" data-page="about">
        <header>
          <h2 class="h2 article-title">About me</h2>
        </header>

        <!-- about section -->
        <section class="about-text">
            <p>Assalamu-Alaikum! I’m Nazmus Saif, a dedicated Software Engineer specializing in web development and machine learning. I hold a BSc in Computer Science and Engineering from Eastern University, where I built a strong foundation in programming, data structures, and algorithms.</p>
            <p>I’m passionate about transforming complex problems into user-friendly, functional solutions. My expertise lies in developing dynamic, responsive web applications that prioritize functionality and user experience. I focus on creating designs that are not only visually appealing but also intuitive and easy to navigate.</p>
            <p>I’m always looking to expand my skill set and stay up-to-date with the latest industry trends. Whether it’s learning about cutting-edge technologies like artificial intelligence or contributing to open-source projects, I thrive on continuous learning and innovation.</p>
        </section>

        <!-- career goals -->
        <section class="career-goals">
            <h3 class="h3 career-goals-title">Career Goals</h3>
            <div class="career-goal-box">
                <p class="career-goal-text">I’m currently seeking opportunities to work as a Software Engineer or Junior Web Developer, where I can apply my skills in problem-solving, back-end development, and web technologies to create impactful digital solutions.</p>
            </div>
        </section>

        <!-- services section -->
        <section class="service">
          <h3 class="h3 service-title">My Expertise</h3>
          <ul class="service-list">
            <li class="service-item">
              <div class="service-icon-box">
                <img src="./images/icon-dev.svg" alt="Web Development Icon" width="40" />
              </div>
              <div class="service-content-box">
                <h4 class="h4 service-item-title">Web Development</h4>
                <p class="service-item-text">
                  High-quality development of sites.
                </p>
              </div>
            </li>

            <li class="service-item">
              <div class="service-icon-box">
                <img src="./images/icon-design.svg" alt="design icon" width="40" />
              </div>
              <div class="service-content-box">
                <h4 class="h4 service-item-title">Web Design</h4>
                <p class="service-item-text">
                  Modern and high-quality design.
                </p>
              </div>
            </li>

            <li class="service-item">
              <div class="service-icon-box">
                <img src="./images/ml.png" alt="Machine Learning Icon" width="40" />
              </div>
              <div class="service-content-box">
                <h4 class="h4 service-item-title">Machine Learning</h4>
                <p class="service-item-text">
                  Applying cutting-edge Machine Learning techniques to drive
                  into innovation.
                </p>
              </div>
            </li>

            <li class="service-item">
              <div class="service-icon-box">
                <img src="./images/nlp.png" alt="NLP Icon" width="40" />
              </div>
              <div class="service-content-box">
                <h4 class="h4 service-item-title">
                  Natural language Processing
                </h4>
                <p class="service-item-text">
                  The power of language understanding and processing to create
                  intelligent solutions.
                </p>
              </div>
            </li>
          </ul>
        </section>

        <!-- comments -->
        <section class="comments">
          <h3 class="h3 comments-title">Comments</h3>
          <ul class="comments-list has-scrollbar">
            <!-- print the comments from database -->
            <?php include "./handlers/showComment.php"; ?>
          </ul>
        </section>

        <div class="add-comment">
          <button class="add-comment-button" item-add-comment-button>
            Add Comment
          </button>
        </div>

        <!-- add comment floating form -->
        <div class="comment-form-floating-container" item-comment-form-floating-container>
          <div class="comment-form-floating-div-overlay" item-comment-form-floating-div-overlay></div>
          <section class="comment-form-floating-div" item-comment-form-floating-div>
            <button class="comment-form-close-btn" item-comment-form-floating-close-btn>
              <ion-icon name="close-outline"></ion-icon>
            </button>
            <form action="./handlers/addComment.php" id="comment-form" class="comment-form" method="POST" item-comment-form>
              <input type="text" name="name" class="form-input" placeholder="Your Name" required item-comment-form-input />
              <textarea name="comment" class="form-input" placeholder="Your Comment" required item-comment-form-input></textarea>
              <button class="post-comment-button" type="submit" name="submit" disabled item-comment-form-btn>
                <ion-icon name="send-outline"></ion-icon>
              </button>
            </form>
          </section>
        </div>

        <!-- comment show floating div -->
        <div class="comment-show-floating-container" item-comment-show-floating-container>
          <div class="comment-show-floating-div-overlay" item-comment-show-floating-div-overlay></div>
          <section class="comment-show-floating-div">
            <button class="comment-show-floating-div-close-btn" item-comment-show-floating-div-close-btn>
              <ion-icon name="close-outline"></ion-icon>
            </button>

            <div class="comment-show-floating-div-img-wrapper">
              <figure class="comment-show-floating-div-avatar-box">
                <img src="" alt="Commenter Image" width="80" item-comment-show-floating-div-img />
              </figure>
              <img src="./images/icon-quote.svg" alt="Quote Icon" />
            </div>

            <div class="comment-show-floating-div-content">
              <h4 class="h4 comment-show-floating-div-commenter-name" item-comment-show-floating-div-commenter-name>
              </h4>
              <time item-comment-show-floating-div-time></time>
              <div item-comment-show-floating-div-text></div>
            </div>
          </section>
        </div>
      </article>

      <!-- RESUME -->
      <article class="resume" data-page="resume">
        <header>
          <h2 class="h2 article-title">Resume</h2>
        </header>

        <!-- download resume section -->
        <div class="download-resume">
          <button class="download-resume-button" onclick="downloadResume()">
              Download
          </button>
        </div>

        <!-- educations section -->
        <section class="timelines">
          <div class="title-wrapper">
            <div class="icon-box">
              <ion-icon name="book-outline"></ion-icon>
            </div>
            <h3 class="h3">Education</h3>
          </div>

          <ol class="timelines-list">
            <li class="timeline-item">
              <h4 class="h4 timeline-item-title">
                Eastern University, Dhaka, Bangladesh
              </h4>
              <span>Jan 2020 - Jan 2024</span>
              <p class="timeline-text">
                Bachelor of Science in Computer Science and Engineering.
              </p>
            </li>
          </ol>
        </section>

        <!-- experiences section -->
        <section class="timelines">
          <div class="title-wrapper">
            <div class="icon-box">
              <ion-icon name="book-outline"></ion-icon>
            </div>
            <h3 class="h3">Experience</h3>
          </div>

          <ol class="timelines-list">
            <li class="timeline-item">
              <h4 class="h4 timeline-item-title">Interview in Microsoft</h4>
              <span>Sep 2023</span>
              <p class="timeline-text">
              I recently interviewed with Microsoft and scored 65%. The interview focused on GPT, a groundbreaking 
              technology in NLP that powers ChatGPT and has transformed how we interact with and understand language.
              </p>
            </li>

            <li class="timeline-item">
              <h4 class="h4 timeline-item-title">Programming Instructor</h4>
              <span>Mar 2023 - May 2023</span>
              <p class="timeline-text">
                Seasonal Programming Instructor, Eastern University, Dhaka, Bangladesh.
              </p>
            </li>

            <li class="timeline-item">
              <h4 class="h4 timeline-item-title">Sales Manager</h4>
              <span>Feb 2019 - Nov 2019</span>
              <p class="timeline-text">
                Full-time Sales Manager, Sumash Tech, Bashundhara City, Dhaka, Bangladesh.
              </p>
            </li>
          </ol>
        </section>

        <!-- skills section -->
        <section class="skills">
          <h3 class="h3 skill-title">Skills</h3>
          <ul class="skills-list content-card">
              <li class="skill-item">
                  <div class="title-wrapper">
                      <h5 class="h5">Programming Languages</h5>
                      <p class="timeline-text">Python, C/C++, Java, SQL, PHP, JavaScript</p>
                  </div>
              </li>
              <li class="skill-item">
                  <div class="title-wrapper">
                      <h5 class="h5">Web Development</h5>
                      <p class="timeline-text">HTML, CSS, JavaScript, Bootstrap, jQuery, React</p>
                  </div>
              </li>
              <li class="skill-item">
                  <div class="title-wrapper">
                      <h5 class="h5">Backend</h5>
                      <p class="timeline-text">PHP, Node.js, MySQL, Database Management (DBMS)</p>
                  </div>
              </li>
              <li class="skill-item">
                  <div class="title-wrapper">
                      <h5 class="h5">Frameworks & Libraries</h5>
                      <p class="timeline-text">TensorFlow, PyTorch, Scikit-Learn, NLTK</p>
                  </div>
              </li>
              <li class="skill-item">
                  <div class="title-wrapper">
                      <h5 class="h5">Tools</h5>
                      <p class="timeline-text">Git, Docker, AWS, Azure, VS Code, PyCharm, Jupyter Notebooks, Google Colab</p>
                  </div>
              </li>
              <li class="skill-item">
                  <div class="title-wrapper">
                      <h5 class="h5">Machine Learning</h5>
                      <p class="timeline-text">Supervised Learning, Neural Networks, NLP, Deep Learning, LLMs</p>
                  </div>
              </li>
              <li class="skill-item">
                  <div class="title-wrapper">
                      <h5 class="h5">Others</h5>
                      <p class="timeline-text">Figma (UI/UX design), Selenium (automation testing)</p>
                  </div>
              </li>
          </ul>
        </section>

        <!-- certifications section -->
        <section class="certifications">
          <h3 class="h3 certification-title">Certifications</h3>
          <ul class="certifications-list content-card">
            <li class="certification-item">
              <div class="title-wrapper">
                <h5 class="h5">Software Engineer</h5>
              </div>
              <div class="cetification-details">
                <p class="timeline-text">Issued Mar 2024</p>
                <p class="timeline-text">Credential ID B9A0FEC87083</p>
              </div>
            </li>

            <li class="certification-item">
              <div class="title-wrapper">
                <h5 class="h5">Software Engineer Intern</h5>
              </div>
              <div class="cetification-details">
                <p class="timeline-text">Issued Mar 2024</p>
                <p class="timeline-text">Credential ID 335310144489</p>
              </div>
            </li>

            <li class="certification-item">
              <div class="title-wrapper">
                <h5 class="h5">JavaScript (Intermediate)</h5>
              </div>
              <div class="cetification-details">
                <p class="timeline-text">Issued Apr 2024</p>
                <p class="timeline-text">Credential ID 3D79A976BCD5</p>
              </div>
            </li>

            <li class="certification-item">
              <div class="title-wrapper">
                <h5 class="h5">JavaScript (Basic)</h5>
              </div>
              <div class="cetification-details">
                <p class="timeline-text">Issued Apr 2024</p>
                <p class="timeline-text">Credential ID 7826B3EB96B5</p>
              </div>
            </li>

            <li class="certification-item">
              <div class="title-wrapper">
                <h5 class="h5">Rest API (Intermediate)</h5>
              </div>
              <div class="cetification-details">
                <p class="timeline-text">Issued Mar 2024</p>
                <p class="timeline-text">Credential ID 57AAD36D224E</p>
              </div>
            </li>

            <li class="certification-item">
              <div class="title-wrapper">
                <h5 class="h5">Problem Solving (Intermediate)</h5>
              </div>
              <div class="cetification-details">
                <p class="timeline-text">Issued Feb 2024</p>
                <p class="timeline-text">Credential ID 0F347F6645AD</p>
              </div>
            </li>

            <li class="certification-item">
              <div class="title-wrapper">
                <h5 class="h5">Problem Solving (Basic)</h5>
              </div>
              <div class="cetification-details">
                <p class="timeline-text">Issued Mar 2024</p>
                <p class="timeline-text">Credential ID 6054E95D0DD9</p>
              </div>
            </li>

            <li class="certification-item">
              <div class="title-wrapper">
                <h5 class="h5">Python (Basic)</h5>
              </div>
              <div class="cetification-details">
                <p class="timeline-text">Issued Feb 2024</p>
                <p class="timeline-text">Credential ID 3C8EDA2AC34D</p>
              </div>
            </li>

            <li class="certification-item">
              <div class="title-wrapper">
                <h5 class="h5">SQL (Advanced )</h5>
              </div>
              <div class="cetification-details">
                <p class="timeline-text">Issued Feb 2024</p>
                <p class="timeline-text">Credential ID B5AF08BD79A4</p>
              </div>
            </li>

            <li class="certification-item">
              <div class="title-wrapper">
                <h5 class="h5">SQL (Intermediate)</h5>
              </div>
              <div class="cetification-details">
                <p class="timeline-text">Issued Feb 2024</p>
                <p class="timeline-text">Credential ID 6713BD927142</p>
              </div>
            </li>

            <li class="certification-item">
              <div class="title-wrapper">
                <h5 class="h5">SQL (Basic)</h5>
              </div>
              <div class="cetification-details">
                <p class="timeline-text">Issued Feb 2024</p>
                <p class="timeline-text">Credential ID 08A1462676C1</p>
              </div>
            </li>

            <li class="certification-item">
              <div class="title-wrapper">
                <h5 class="h5">Java (Basic)</h5>
              </div>
              <div class="cetification-details">
                <p class="timeline-text">Issued Mar 2024</p>
                <p class="timeline-text">Credential ID 4D878C83635C</p>
              </div>
            </li>
          </ul>
        </section>
      </article>

      <!-- PORTFOLIO -->
      <article class="portfolio" data-page="portfolio">
        <header>
          <h2 class="h2 article-title">Portfolio</h2>
        </header>

        <section class="projects">
          <ul class="filter-list">
            <li class="filter-item">
              <button class="active" item-filter-btn>All</button>
            </li>
            <li class="filter-item">
              <button item-filter-btn>Applications</button>
            </li>
            <li class="filter-item">
              <button item-filter-btn>Web Development</button>
            </li>
            <li class="filter-item">
              <button item-filter-btn>Publications</button>
            </li>
            <li class="filter-item">
              <button item-filter-btn>Others</button>
            </li>
            <div class="add-portfolio-item">
              <button class="add-portfolio-item-button" item-add-portfolio-item-button>
                Add
              </button>
            </div>
          </ul>

          <div class="filter-select-box">
            <button class="filter-select" item-select>
              <div class="select-value" item-select-value>
                Select category
              </div>
              <div class="select-icon">
                <ion-icon name="chevron-down"></ion-icon>
              </div>
            </button>
            <ul class="select-list">
              <li class="select-item">
                <button item-select-option>All</button>
              </li>
              <li class="select-item">
                <button item-select-option>Applications</button>
              </li>
              <li class="select-item">
                <button item-select-option>Web Development</button>
              </li>
              <li class="select-item">
                <button item-select-option>Others</button>
              </li>
            </ul>
          </div>

          <ul class="project-list">
            <li class="project-item active" item-filter-option data-category="applications" portfolio-details-div>
              <div>
                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>
                  <img src="./images/project-1.png" alt="Sentiment Analysis Image" loading="lazy" item-portfolio-details-img />
                </figure>
                <h3 class="project-title">Sentiment Analysis Model</h3>
                <p class="project-category">Applications</p>
                <div class="portfolio-details-text" item-portfolio-details-text>
                  <p>
                    A machine learning based model which I build to detect the sentiment of a sentence. This model gives 97%
                    accuracy.
                  </p>
                </div>
              </div>
            </li>

            <li class="project-item active" item-filter-option data-category="applications" portfolio-details-div>
              <div>
                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>
                  <img src="./images/project-2.png" alt="Intelligent Voice Assistant Image" loading="lazy" item-portfolio-details-img />
                </figure>
                <h3 class="project-title">Intelligent Voice Assistant</h3>
                <p class="project-category">Application</p>
                <div class="portfolio-details-text" item-portfolio-details-text>
                  <p>
                    This is an AI which is powered by ChatGPT API and nltk.
                    This AI is performed its tasks by taking input in voice
                    form. Lot's of taks such as music playing, video playing,
                    browsing, youtube searching, file creating editing
                    deleting copy past app opening closing etc. the AI is able
                    to do. This AI is designed & build by Python.
                  </p>
                </div>
              </div>
            </li>

            <li class="project-item active" item-filter-option data-category="web development" portfolio-details-div>
              <div>
                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>
                  <img src="./images/project-3.png" alt="Flex Image" loading="lazy" item-portfolio-details-img />
                </figure>
                <h3 class="project-title">Flex</h3>
                <p class="project-category">Web Development</p>
                <div class="portfolio-details-text" item-portfolio-details-text>
                  <p>
                    Flex is a free movie streaming and downloading platform.
                    Almost all kind of movies we have uploaded in this
                    website. The searching, streaming and downloading movies
                    is pretty much easy rather than others platform. This
                    website is build by HTML, CSS, Javascript, PHP and SQL.
                  </p>
                </div>
              </div>
            </li>

            <li class="project-item active" item-filter-option data-category="others" portfolio-details-div>
              <div>
                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>
                  <img src="./images/project-4.jpg" alt="Smart Home & Gardening Image" loading="lazy" item-portfolio-details-img />
                </figure>
                <h3 class="project-title">Smart Home & Gardening</h3>
                <p class="project-category">
                  Computer Peripheral & Interfacing
                </p>
                <div class="portfolio-details-text" item-portfolio-details-text>
                  <p>
                    This is a hardware and coding based project. This project
                    control a house staff by a mobile app house staff such as
                    Light, Fan, Door, Window, TV, Freeze etc and can give water to plants when needed. This project is
                    build using Arduino Uno R3.
                  </p>
                </div>
              </div>
            </li>
          </ul>

          <!-- add portfolio item floating form -->
          <div class="portfolio-item-floating-form-container" item-portfolio-item-floating-form-container>
            <div class="portfolio-item-floating-form-overlay" item-portfolio-item-floating-form-overlay></div>
            <section class="portfolio-item-floating-form-div" item-portfolio-item-floating-form-div>
              <button class="portfolio-item-floating-form-close-btn" item-portfolio-item-floating-form-close-btn>
                <ion-icon name="close-outline"></ion-icon>
              </button>
              <form action="./handlers/showPortfolioDetails.php" id="portfolio-item-floating-form" class="portfolio-item-floating-form" method="POST" item-portfolio-item-floating-form>
                <label for="image" class="form-label label1">Item Cover Image</label>
                <input type="file" name="image" accept="image/*" class="form-input form-input-img" required item-portfolio-item-form-input />
                <input type="text" name="name" class="form-input" placeholder="Item Name" required item-portfolio-item-form-input />
                <input type="text" name="category" class="form-input" placeholder="Item Category" required item-portfolio-item-form-input />
                <textarea name="description" class="form-input" placeholder="Item Description" required item-portfolio-item-form-input></textarea>
                <button class="post-portfolio-item-button" type="submit" name="submit" disabled item-portfolio-item-form-btn>
                  <ion-icon name="send-outline"></ion-icon>
                </button>
              </form>
            </section>
          </div>
        </section>

        <!-- portfolio details floating div -->
        <div class="portfolio-details-floating-container" item-portfolio-details-floating-container>
          <div class="portfolio-details-floating-div-overlay" item-portfolio-details-floating-div-overlay></div>
          <section class="portfolio-details-floating-div" item-portfolio-details-floating-div>
            <button class="portfolio-details-floating-div-close-btn" item-portfolio-details-floating-div-close-btn>
              <ion-icon name="close-outline"></ion-icon>
            </button>
            <div class="portfolio-details-floating-div-content">
              <h4 class="h4 portfolio-details-floating-div-title" item-portfolio-details-floating-div-title>
                Details
              </h4>
              <time item-portfolio-details-floating-div-time>10 Jan, 2024</time>
              <p class="portfolio-details-floating-div-text" item-portfolio-details-floating-div-text></p>
            </div>
          </section>
        </div>
      </article>

      <!-- BLOG -->
      <article class="blog" data-page="blog">
        <header>
          <h2 class="h2 article-title">Blog</h2>
        </header>
        <section class="blog-posts">
          <ul class="blog-posts-list">
            <li class="blog-post-item">
              <div>
                <figure class="blog-banner-box">
                  <img src="./images/blog-1.jpg" alt="Blog Poster" loading="lazy" />
                </figure>
                <div class="blog-content">
                  <div class="blog-meta">
                    <p class="blog-category">Life</p>
                    <span class="dot"></span>
                    <time datetime="2022-02-23">Jan 04, 2024</time>
                  </div>
                  <h3 class="h3 blog-item-title">Opodesh</h3>
                  <p class="blog-text">
                    There is always a room to grow. So don't be disappointed
                    in life.
                  </p>
                </div>
              </div>
            </li>
          </ul>
        </section>
      </article>

      <!-- CONTACT -->
      <article class="contact" data-page="contact">
        <header>
          <h2 class="h2 article-title">Contact</h2>
        </header>
        <section>
          <h3 class="h3 contact-intro-title">DON'T BE SHY!</h3>
          <p class="contact-intro-text">
            Feel free to get in touch with me. I am always open to discussing
            new projects, creative ideas or opportunities to be part of your
            visions.
          </p>
        </section>
        <!-- mapbox section -->
        <section class="mapbox" data-mapbox>
          <figure>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d966837.0308937537!2d91.01012787995195!3d23.969153016799304!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2sbd!4v1704128066131!5m2!1sen!2sbd" width="400" height="300" loading="lazy">
            </iframe>
          </figure>
        </section>
        <!-- contact form section -->
        <section class="contact-form">
          <h3 class="h3 form-title">Contact Form</h3>
          <form id="contact-form" method="POST" item-contact-form>
            <div class="input-wrapper">
              <input type="email" name="email" class="form-input" placeholder="Your Email" required item-contact-form-input />
              <input type="text" name="name" class="form-input" placeholder="Your Name" required item-contact-form-input />
              <input type="text" name="subject" class="form-input" placeholder="Your Subject" required item-contact-form-input />
            </div>
            <textarea name="message" class="form-input" placeholder="Your Message" required item-contact-form-input></textarea>
            <button class="form-btn" type="submit" name="send" disabled item-contact-form-btn>
              <span>Send</span>
              <ion-icon name="send-outline"></ion-icon>
            </button>
          </form>
        </section>
        <!-- toggle alert message div after submit the contact form -->
        <div id="contact-form-alert-message" class="alert hide"></div>
      </article>
    </div>
  </main>

  <!-- custom js link -->
  <script src="./script/script.js" defer></script> <!-- defer is used to load the script after the html is loaded -->

  <!-- ionicon link -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>