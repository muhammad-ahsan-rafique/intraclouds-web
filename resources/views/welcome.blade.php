<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>IntraClouds</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Arial', sans-serif;
    }

    /* BODY */
    body {
      line-height: 1.6;
      background-color: rgb(208, 228, 244);
      padding-top: 80px; /* Leaves space for fixed navbar */
    }
    html {
  scroll-padding-top: 100px; /* equal to navbar height + small margin */
  scroll-behavior: smooth;   /* optional: makes scrolling smooth */
}


    /* NAVIGATION BAR */
    .navbar {
      background: rgb(27, 47, 91);
      padding: 1rem 2rem;
      position: fixed;
      width: 100%;
      top: 0;
      z-index: 1000;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    .logo-area {
      display: flex;
      align-items: center;
      gap: 1rem;
    }

    .logo-area img {
      width: 250px;
      height: auto;
      max-height: 50px;
      object-fit: contain;
      border-radius: 10px;
      margin-left: -10px;
    }

    .nav-links {
      list-style: none;
      display: flex;
      gap: 2rem;
    }

    .nav-links a {
      color: rgb(255, 255, 255);
      text-decoration: none;
      font-weight: 500;
      transition: color 0.3s;
    }

    .nav-links a:hover {
      color: rgb(80, 178, 200);
    }

    /* Italic Company Name Below Navbar */
    .company-name {
      text-align: center;
      margin: 1rem 0;
      font-style: italic;
      font-size: 1.2rem;
      color: #333;
    }

    /* HERO SECTION */
    .hero {
      height: 85vh;
      background: linear-gradient(rgba(37, 67, 108, 0.7), rgba(46, 46, 46, 0.7)),
        url('images/baf.png') center/cover;
      background-size: 80% auto;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      color: white;
    }

    .hero-content {
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
      padding: 2rem;
      max-width: 1200px;
      margin: 0 auto;
    }

    .hero h1 {
      font-size: 3rem;
      margin-bottom: 1.5rem;
    }

    .hero p {
      font-size: 1.2rem;
      margin-bottom: 2rem;
    }

    /* SERVICES GRID */
    .services-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 2rem;
      margin: 3rem 2rem;
    }

    .service-card {
      background: rgb(27, 47, 91);
      padding: 2rem;
      border-radius: 10px;
      box-shadow: 0 2px 10px rgba(234, 234, 234, 1);
      transition: transform 0.3s;
      text-align: center;
      color: white;
    }

    .service-card img {
      width: 60px;
      height: 60px;
      object-fit: contain;
      margin-bottom: 1.5rem;
    }

    .service-card:hover {
      transform: translateY(-5px);
    }

    /* HIGHLIGHT SECTION */
    .highlight-section {
      background: rgb(27, 47, 91);
      color: white;
      padding: 0;
      border-radius: 10px;
      margin: 0;
      display: flex;
      align-items: center;
      gap: 1rem; /* Reduced gap for compactness */
      background-size: cover;
      background-position: center;
    }

    .highlight-image {
      flex: 1;
      height: 300px; /* Reduced from 450px */
      border-radius: 8px;
      overflow: hidden;
    }

    .highlight-image img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
    }

    .highlight-content {
      flex: 1;
      padding: 1rem; /* Added padding for better text spacing */
    }

    /* CONTACT SECTION */
    .contact-section {
      background: white;
      padding: 2rem;
      border-radius: 10px;
      margin: 2rem;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
      text-align: center;
    }

    .contact-container {
      max-width: 1200px;
      margin: 0 auto;
    }

    .contact-container h2 {
      color: #1B2F5B;
      margin-bottom: 1rem;
    }

    .contact-container p {
      color: #666;
      font-size: 1rem;
      margin-bottom: 2rem;
    }

    .contact-list {
      list-style: none;
      display: flex;
      flex-direction: row;
      gap: 1.5rem;
      justify-content: center;
      align-items: center;
      flex-wrap: wrap;
    }

    .contact-item {
      display: flex;
      align-items: center;
      gap: 0.75rem;
      background: #f8f9fa;
      padding: 0.75rem 1.5rem;
      border-radius: 8px;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
      transition: transform 0.3s, background 0.3s;
    }

    .contact-item:hover {
      transform: translateY(-3px);
      background: #e9ecef;
    }

    .contact-item img {
      width: 40px;
      height: 40px;
      object-fit: contain;
    }

    .contact-item a {
      color: #1da1f2;
      text-decoration: none;
      font-size: 1.1rem;
      transition: color 0.3s;
    }

    .contact-item a:hover {
      color: #0c85d0;
    }

    /* CORE TECHNOLOGIES SECTION */
    .core-technologies {
      background-color: #1B2F5B;
      color: #fff;
      padding: 4rem 2rem;
      margin-top: 2rem;
    }

    .tech-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 2rem;
      max-width: 1200px;
      margin: 0 auto 2rem auto;
    }

    .tech-header h2 {
      font-size: 2rem;
    }

    .tech-header a {
      color: #4bc0d9;
      text-decoration: none;
      font-weight: bold;
    }

    .tech-grid {
      display: flex;
      flex-direction: row;
      gap: 2rem;
      max-width: 1200px;
      margin: 0 auto;
      flex-wrap: nowrap;
    }

    .tech-category {
      background: rgba(255, 255, 255, 0.1);
      padding: 1.5rem;
      border-radius: 10px;
      transition: transform 0.3s, box-shadow 0.3s;
      text-align: center;
      flex: 1;
    }

    .tech-category:hover {
      transform: translateY(-5px);
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    }

    .tech-category h3 {
      font-size: 1.5rem;
      margin-bottom: 1rem;
      color: #4bc0d9;
    }

    .tech-icons {
      display: flex;
      justify-content: center;
      gap: 1rem;
      flex-wrap: wrap;
    }

    .cloud-computing .tech-icons {
      flex-wrap: nowrap;
    }

    .tech-item {
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .tech-item img {
      width: 60px;
      height: 60px;
      object-fit: contain;
      margin-bottom: 0.5rem;
    }

    .tech-item p {
      font-size: 0.9rem;
    }

    /* FOOTER */
    .footer {
      background: rgb(27, 47, 91);
      color: rgb(255, 255, 255);
      text-align: left;
      padding: 1rem 2rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .footer a {
      color: rgb(80, 178, 200);
      text-decoration: none;
      margin-left: 1rem;
      transition: color 0.3s;
    }

    .footer a:hover {
      color: rgb(255, 255, 255);
    }

    /* MEDIA QUERIES */
    @media (max-width: 768px) {
      .navbar {
        flex-direction: column;
        align-items: flex-start;
      }
      .nav-links {
        flex-direction: column;
      }
      .highlight-section {
        flex-direction: column;
      }
      .contact-section {
        flex-direction: column;
        text-align: center;
      }
      .contact-list {
        flex-direction: column;
        gap: 1rem;
      }
      .contact-item {
        width: 100%;
        justify-content: center;
      }
      .tech-header {
        flex-direction: column;
        gap: 1rem;
      }
      .tech-grid {
        flex-direction: column;
        flex-wrap: wrap;
      }
      .cloud-computing .tech-icons {
        flex-wrap: wrap;
      }
      .footer {
        flex-direction: column;
        text-align: center;
      }
      .footer a {
        margin: 0.5rem 0;
      }
    }
  </style>
</head>
<body>
  <!-- NAVIGATION BAR -->
  <nav class="navbar">
    <div class="logo-area">
      <img src="images/nlogo.png" alt="Company Logo">
    </div>
    <ul class="nav-links">
      <li><a href="#home">Home</a></li>
      <li><a href="#services">Services</a></li>
      <li><a href="#about">About</a></li>
      <li><a href="#contact">Contact</a></li>
    </ul>
  </nav>

  <!-- HERO SECTION -->
  <div class="hero" id="home">
    <div class="hero-content">
      <h1>We Transform Ideas Into Technology</h1>
      <h3>Innovative solutions for your digital transformation journey</h3>
      <h3>Checking Invalidation Pipeline</h3>
    </div>
  </div>

  <!-- SERVICES GRID -->
  <div class="services-grid" id="services">
    <div class="service-card">
      <img src="images/cloud2.png" alt="Cloud Services Logo">
      <h3>CLOUD SERVICES</h3>
      <p>Accelerate innovation with seamless DevOps on AWS, Azure, and GCP. We deliver automated, scalable, and secure cloud solutions to streamline your business operations.</p>
      <p class="italic-text"></p>
    </div>
    <div class="service-card">
      <img src="images/AI.png" alt="AI/Computer Vision Logo">
      <h3>AI / COMPUTER VISION</h3>
      <p>Transform data into intelligence with our AI and Computer Vision solutions. From automation to real-time image analysis, we build smart systems that drive business impact.</p>
      <p class="italic-text"></p>
    </div>
    <div class="service-card">
      <img src="images/web.png" alt="Web Development Logo">
      <h3>WEB DEVELOPMENT</h3>
      <p>Build modern, responsive, and scalable websites tailored to your business. We craft seamless digital experiences with cutting-edge technologies.</p>
      <p class="italic-text"></p>
    </div>
    <div class="service-card">
      <img src="images/mobile-app.png" alt="Mobile App Development Logo">
      <h3>MOBILE APP DEVELOPMENT</h3>
      <p>Create powerful and user-friendly mobile apps for iOS and Android. We deliver seamless performance and engaging experiences that connect with your users.</p>
      <p class="italic-text"></p>
    </div>
  </div>

  <!-- HIGHLIGHT SECTION -->
  <section class="highlight-section" id="about">
    <div class="highlight-image">
      <img src="images/about.jpg" alt="Highlight Image">
    </div>
    <div class="highlight-content">
      <h2>About Us</h2>
      <p>
       At IntraClouds, we empower businesses with next-gen cloud and DevOps solutions, specializing in AWS, Azure, and Google Cloud. Our core expertise lies in building scalable, secure, and automated infrastructures that drive innovation, reduce costs, and ensure operational excellence. From cloud migration to DevOps automation, our 24/7 expert support keeps your production environments optimized and resilient.
      </p>
      <br>
      <p>
       Alongside our cloud expertise our full array of digital solutions, which include web development, mobile app development, and AI services, complement our cloud expertise and help businesses utilize smart, innovative, and futuristic technologies to unlock growth.
      </p>
      
    </div>
  </section>

  <!-- CORE TECHNOLOGIES SECTION -->
  <section class="core-technologies">
    <div class="tech-header">
      <h2>Our Core Technologies</h2>
    </div>
    <div class="tech-grid">
      <div class="tech-category cloud-computing">
        <h3>Cloud Computing</h3>
        <div class="tech-icons">
          <div class="tech-item">
            <img src="images/AWS.png" alt="AWS">
            <p>AWS</p>
          </div>
          <div class="tech-item">
            <img src="images/azurenew.png" alt="Azure">
            <p>Azure</p>
          </div>
          <div class="tech-item">
            <img src="images/Google Cloud.png" alt="Google Cloud">
            <p>GCP</p>
          </div>
        </div>
      </div>
      <div class="tech-category">
        <h3>Containerization</h3>
        <div class="tech-icons">
          <div class="tech-item">
            <img src="images/dockernew.png" alt="Docker">
            <p>Docker</p>
          </div>
          <div class="tech-item">
            <img src="images/kubernetes.png" alt="Kubernetes">
            <p>Kubernetes</p>
          </div>
        </div>
      </div>
      <div class="tech-category">
        <h3>Web Development</h3>
        <div class="tech-icons">
          <div class="tech-item">
            <img src="images/rjs.png" alt="React JS">
            <p>React JS</p>
          </div>
          <div class="tech-item">
            <img src="images/njs.png" alt="Node JS">
            <p>Node JS</p>
          </div>
          <div class="tech-item">
            <img src="images/ts.png" alt="TypeScript">
            <p>TypeScript</p>
          </div>
        </div>
      </div>
      <div class="tech-category">
        <h3>VCS & CI/CD</h3>
        <div class="tech-icons">
          <div class="tech-item">
            <img src="images/Git.png" alt="GitHub">
            <p>GitHub</p>
          </div>
          <div class="tech-item">
            <img src="images/bit.png" alt="BitBucket">
            <p>BitBucket</p>
          </div>
          <div class="tech-item">
            <img src="images/Jenkins.png" alt="Jenkins">
            <p>Jenkins</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CONTACT SECTION -->
  <div class="contact-section" id="contact">
    <div class="contact-container">
      <h2>Get in Touch</h2>
      <p>Reach out to us for inquiries or collaboration opportunities.</p>
      <ul class="contact-list">
        <li class="contact-item">
          <img src="images/email.png" alt="Email Icon">
          <a href="mailto:ahsan.malik1010@gmail.com">ahsan.malik1010@gmail.com</a>
        </li>
        <li class="contact-item">
          <img src="images/linkdin.png" alt="LinkedIn Icon">
          <a href="https://www.linkedin.com/company/intraclouds" target="_blank">LinkedIn</a>
        </li>
        <li class="contact-item">
          <img src="images/call.png" alt="Phone Icon">
          <a href="tel:+923143330888">+923143330888</a>
        </li>
        <li class="contact-item">
          <img src="images/website.png" alt="Website Icon">
          <a href="https://www.intraclouds.com" target="_blank">www.intraclouds.com</a>
        </li>
      </ul>
    </div>
  </div>

  <!-- FOOTER -->
  <footer class="footer">
    <span>© 2025 INTRACLOUDS (SMC-PRIVATE) LIMITED</span>
    <div>
      <a href="#">Terms of Use</a> | <a href="#">Privacy Policy</a>
    </div>
  </footer>
</body>
</html>
