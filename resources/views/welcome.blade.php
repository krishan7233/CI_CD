<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Krishan Mohan Pandey | Portfolio</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      background: #f5f7fb;
      color: #222;
      line-height: 1.6;
    }

    header {
      background: linear-gradient(135deg, #1e3c72, #2a5298);
      color: white;
      padding: 80px 20px;
      text-align: center;
    }

    header h1 {
      font-size: 48px;
      margin-bottom: 10px;
    }

    header p {
      font-size: 20px;
      opacity: 0.9;
    }

    .btn {
      display: inline-block;
      margin-top: 20px;
      padding: 12px 24px;
      background: white;
      color: #1e3c72;
      border-radius: 30px;
      text-decoration: none;
      font-weight: 600;
      transition: 0.3s ease;
    }

    .btn:hover {
      background: #dfe9f3;
    }

    .container {
      max-width: 1200px;
      margin: auto;
      padding: 60px 20px;
    }

    .section-title {
      text-align: center;
      font-size: 36px;
      margin-bottom: 40px;
      color: #1e3c72;
    }

    .about {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 40px;
      align-items: center;
    }

    .about img {
      width: 100%;
      border-radius: 20px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    }

    .about-text p {
      margin-bottom: 15px;
      font-size: 17px;
    }

    .skills {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
      gap: 20px;
      margin-top: 40px;
    }

    .skill-card {
      background: white;
      padding: 25px;
      border-radius: 15px;
      text-align: center;
      box-shadow: 0 4px 12px rgba(0,0,0,0.08);
      transition: 0.3s ease;
    }

    .skill-card:hover {
      transform: translateY(-5px);
    }

    .projects {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
      gap: 30px;
      margin-top: 40px;
    }

    .project-card {
      background: white;
      border-radius: 18px;
      overflow: hidden;
      box-shadow: 0 5px 15px rgba(0,0,0,0.08);
      transition: 0.3s ease;
    }

    .project-card:hover {
      transform: translateY(-6px);
    }

    .project-content {
      padding: 25px;
    }

    .project-content h3 {
      margin-bottom: 12px;
      color: #1e3c72;
    }

    .contact {
      background: #1e3c72;
      color: white;
      text-align: center;
      padding: 60px 20px;
      margin-top: 50px;
    }

    .contact p {
      margin: 10px 0;
      font-size: 18px;
    }

    footer {
      text-align: center;
      padding: 20px;
      background: #102542;
      color: white;
    }

    @media(max-width:768px) {
      header h1 {
        font-size: 34px;
      }

      .section-title {
        font-size: 28px;
      }
    }
  </style>
</head>
<body>

  <header>
    <h1>Krishan Mohan Pandey</h1>
    <p>Full Stack Developer | Laravel | React.js | Node.js</p>
    <a href="#contact" class="btn">Contact Me</a>
  </header>

  <section class="container">
    <h2 class="section-title">About Me</h2>

    <div class="about">
      <div>
        <img src="https://media.licdn.com/dms/image/v2/D4E35AQGwQ-tAwQf9Xw/profile-framedphoto-shrink_800_800/B4EZ1nqonDJ4Ag-/0/1775560723190?e=1779130800&v=beta&t=9HMH6Ik-ngavQV28S3q26vqKsS7KtHtJqyzpZHRkrOg" alt="Profile Image">
      </div>

      <div class="about-text">
        <p>
          I am a passionate Full Stack Developer with 5+ years of experience in building scalable web applications and APIs.
        </p>

        <p>
          I specialize in PHP, Laravel, React.js, Node.js, Vue.js, MySQL, JavaScript, and REST API development.
        </p>

        <p>
          I enjoy solving real-world problems, developing modern applications, and continuously learning new technologies.
        </p>
      </div>
    </div>
  </section>

  <section class="container">
    <h2 class="section-title">Skills</h2>

    <div class="skills">
      <div class="skill-card">PHP</div>
      <div class="skill-card">Laravel</div>
      <div class="skill-card">React.js</div>
      <div class="skill-card">Node.js</div>
      <div class="skill-card">Vue.js</div>
      <div class="skill-card">MySQL</div>
      <div class="skill-card">JavaScript</div>
      <div class="skill-card">REST APIs</div>
      <div class="skill-card">jQuery</div>
      <div class="skill-card">Git & GitHub</div>
      <div class="skill-card">Bootstrap</div>
      <div class="skill-card">AWS Basics</div>
    </div>
  </section>

  <section class="container">
    <h2 class="section-title">Projects</h2>

    <div class="projects">
      <div class="project-card">
        <div class="project-content">
          <h3>E-Commerce Platform</h3>
          <p>
            Developed a complete e-commerce application with product management, cart system, checkout flow, authentication, and order management using Laravel and React.js.
          </p>
        </div>
      </div>

      <div class="project-card">
        <div class="project-content">
          <h3>Task Management System</h3>
          <p>
            Built a task management application with role-based authentication, notifications, AJAX operations, and API integrations.
          </p>
        </div>
      </div>

      <div class="project-card">
        <div class="project-content">
          <h3>Blog & CMS System</h3>
          <p>
            Created a dynamic blog management system with SEO support, banners, categories, image uploads, and admin dashboard features.
          </p>
        </div>
      </div>
    </div>
  </section>

  <section class="contact" id="contact">
    <h2>Contact Me</h2>
    <p><strong>Name:</strong> Krishan Mohan Pandey</p>
    <p><strong>Email:</strong> kmpandey7233@gmail.com</p>
    <p><strong>Location:</strong> India</p>
    <p><strong>LinkedIn:</strong> linkedin.com/in/krishan-mohan-pandey-2198571a0</p>
  </section>

  <footer>
    <p>© 2026 Krishan Mohan Pandey. All Rights Reserved.</p>
  </footer>

</body>
</html>