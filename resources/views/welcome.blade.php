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

    .nav-toggle {
      display: none;
      width: 30px;
      height: 30px;
      background: transparent;
      border: none;
      cursor: pointer;
      position: absolute;
      right: 1.5rem;
      top: 50%;
      transform: translateY(-50%);
      z-index: 1000;
      padding: 0;
    }

    .hamburger {
      display: block;
      position: relative;
      width: 20px;
      height: 2px;
      background: white;
      margin: 0 auto;
      transition: background 0.3s ease;
    }

    .hamburger::before,
    .hamburger::after {
      content: '';
      position: absolute;
      width: 20px;
      height: 2px;
      background: white;
      left: 0;
      transition: all 0.3s ease;
    }

    .hamburger::before {
      top: -6px;
    }

    .hamburger::after {
      bottom: -6px;
    }

    @media (max-width: 768px) {
      .logo-area img {
        width: 180px;
        margin-left: 0;
      }
      
      .navbar {
        padding: 0.75rem 1rem;
      }

      .nav-toggle {
        display: block;
      }

      .nav-links {
        position: fixed;
        background: rgb(27, 47, 91);
        top: 0;
        right: 0;
        height: auto;
        width: 100%;
        transform: translateX(100%);
        transition: transform 0.3s ease-out;
        padding: 4rem 2rem 2rem;
      }

      .nav-links.nav-open {
        transform: translateX(0);
      }

      /* New hamburger animation */
      .nav-toggle.nav-open .hamburger {
        background: transparent;
      }

      .nav-toggle.nav-open .hamburger::before {
        transform: translateY(6px) rotate(45deg);
      }

      .nav-toggle.nav-open .hamburger::after {
        transform: translateY(-6px) rotate(-45deg);
      }
    }

    @media (max-width: 480px) {
      .logo-area img {
        width: 150px;
      }
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
      padding: 1rem;
      max-width: 1200px;
      margin: 0 auto;
    }

    .hero h1 {
      font-size: 3rem;
      margin-bottom: 1.5rem;
      line-height: 1.2;
      color: white; /* Explicitly set to white */
    }

    .hero h3 {
      font-size: 1.2rem;
      margin-bottom: 1rem;
      line-height: 1.5;
      color: white; /* Explicitly set to white */
    }

    @media (max-width: 768px) {
      .hero h1 {
        font-size: 2rem;
        color: white; /* Ensure white color on smaller screens */
      }
      .hero h3 {
        font-size: 1.1rem;
        color: white; /* Ensure white color on smaller screens */
      }
    }

    @media (max-width: 480px) {
      .hero h1 {
        font-size: 1.8rem;
        color: white; /* Ensure white color on smaller screens */
      }
      .hero h3 {
        font-size: 1rem;
        color: white; /* Ensure white color on smaller screens */
      }
    }

    /* SERVICES GRID */
    .services-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 2rem;
      margin: 3rem 1rem;
      padding: 0 0.5rem;
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
      display: flex;
      gap: 4rem;
      background: linear-gradient(135deg, rgb(27, 47, 91) 0%, rgb(20, 35, 70) 100%);
      margin: 2rem;
      border-radius: 20px;
      overflow: hidden;
      box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
    }

    .contact-left {
      flex: 1;
      padding: 4rem;
      display: flex;
      flex-direction: column;
      justify-content: center;
      position: relative;
      min-width: 300px;
    }

    .contact-left h2 {
      font-size: 3rem;
      color: white;
      margin-bottom: 1.5rem;
      position: relative;
    }

    .contact-left h2::after {
      content: '';
      position: absolute;
      bottom: -10px;
      left: 0;
      width: 60px;
      height: 4px;
      background: #4bc0d9;
      border-radius: 2px;
    }

    .contact-left p {
      color: #e0e0e0;
      font-size: 1.1rem;
      line-height: 1.6;
      margin-bottom: 2rem;
    }

    .contact-highlight {
      margin-top: auto;
      padding: 1.5rem;
      background: rgba(75, 192, 217, 0.1);
      border-left: 4px solid #4bc0d9;
      border-radius: 0 10px 10px 0;
    }

    .contact-highlight span {
      color: #ffffff;
      font-size: 1.2rem;
      font-weight: 500;
    }
    
    .contact-right {
      flex: 1.5;
      background: rgba(255, 255, 255, 0.03);
      padding: 4rem;
      display: flex;
      align-items: center;
      min-width: 300px;
    }

    .contact-grid {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 2rem;
      width: 100%;
    }

    .contact-link {
      display: flex;
      flex-direction: column;
      align-items: center;
      text-decoration: none;
      padding: 1.5rem;
      background: rgba(255, 255, 255, 0.05);
      border-radius: 15px;
      transition: all 0.3s ease;
      border: 1px solid rgba(255, 255, 255, 0.1);
      position: relative;
      backdrop-filter: blur(5px); /* Subtle blur for modern look */
      -webkit-backdrop-filter: blur(5px); /* For Safari compatibility */
    }

    .icon-wrapper {
      width: 50px;
      height: 50px;
      background: rgba(75, 192, 217, 0.1);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 1rem;
      transition: all 0.3s ease;
    }

    .contact-link img {
      width: 24px;
      height: 24px;
      filter: brightness(0) invert(1);
      transition: transform 0.3s ease, filter 0.3s ease;
    }

    .contact-link span {
      color: white;
      font-size: 0.9rem;
      text-align: center;
      transition: color 0.3s ease;
      font-weight: 500; /* Slightly bolder for clarity */
    }

    .contact-link:hover {
      transform: translateY(-5px) scale(1.03); /* Subtle scale for elegance */
      background: rgba(255, 255, 255, 0.15); /* Semi-transparent white for clean look */
      border-color: #4bc0d9;
      box-shadow: 0 8px 25px rgba(75, 192, 217, 0.3); /* Cyan glow effect */
      backdrop-filter: blur(8px); /* Enhanced blur on hover */
      -webkit-backdrop-filter: blur(8px);
    }

    .contact-link:hover .icon-wrapper {
      background: rgba(75, 192, 217, 0.3); /* Slightly stronger cyan */
      transform: scale(1.1);
    }

    .contact-link:hover img {
      transform: scale(1.1);
      filter: brightness(0); /* Dark icons for contrast */
    }

    .contact-link:hover span {
      color: #1B2F5B; /* Dark navy for high contrast and readability */
      font-weight: 600; /* Bolder on hover for emphasis */
    }

    @media (max-width: 1024px) {
      .contact-section {
        flex-direction: column;
        gap: 2rem;
        margin: 1rem;
      }

      .contact-left, .contact-right {
        padding: 2rem;
      }

      .contact-left {
        text-align: center;
      }

      .contact-left h2::after {
        left: 50%;
        transform: translateX(-50%);
      }

      .contact-highlight {
        text-align: center;
        border-left: none;
        border-bottom: 4px solid #4bc0d9;
        border-radius: 10px 10px 0 0;
      }
    }

    @media (max-width: 640px) {
      .contact-grid {
        grid-template-columns: 1fr;
        gap: 1rem;
      }

      .contact-left h2 {
        font-size: 2rem;
      }

      .contact-link {
        padding: 1rem;
      }

      .icon-wrapper {
        width: 40px;
        height: 40px;
      }

      .contact-link img {
        width: 20px;
        height: 20px;
      }
    }

    .contact-container {
      max-width: 1200px;
      margin: 0 auto;
    }

    .contact-container h2 {
      color: white;
      margin-bottom: 1rem;
    }

    .contact-container p {
      color: #e0e0e0;
      font-size: 1rem;
      margin-bottom: 2rem;
    }

    .contact-list {
      list-style: none;
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 2rem;
      margin: 0 auto;
      padding: 0;
      flex-wrap: nowrap;
      max-width: 1200px;
    }

    .contact-item {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 1rem;
      background: rgba(255, 255, 255, 0.1);
      padding: 1.25rem;
      border-radius: 10px;
      box-shadow: 0 2px 5px rgba(0,0,0,0.2);
      transition: transform 0.3s, background 0.3s;
      text-align: center;
      min-width: 0;
    }

    .contact-item:hover {
      transform: translateY(-3px);
      background: rgba(255, 255, 255, 0.15);
    }

    .contact-item img {
      width: 40px;
      height: 40px;
      object-fit: contain;
      filter: brightness(0) invert(1);
    }

    .contact-item a {
      color: #ffffff;
      text-decoration: none;
      font-size: 1.1rem;
      transition: color 0.3s;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
    }

    .contact-item a:hover {
      color: #4bc0d9;
    }
    
    @media (max-width: 768px) {
      .contact-list {
        grid-template-columns: 1fr;
        max-width: 350px;
      }
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
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 2rem;
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 1rem;
    }

    .tech-category {
      background: rgba(255, 255, 255, 0.1);
      padding: 1.5rem;
      border-radius: 10px;
      transition: transform 0.3s, box-shadow 0.3s;
      text-align: center;
      min-height: 200px; /* Ensure consistent height */
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }

    @media (max-width: 1200px) {
      .tech-grid {
        grid-template-columns: repeat(2, 1fr);
      }
    }

    @media (max-width: 640px) {
      .tech-grid {
        grid-template-columns: 1fr;
      }
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
      align-items: center;
      gap: 1rem;
      flex-wrap: nowrap; /* Prevent wrapping to keep logos in a single line */
    }

    .cloud-computing .tech-icons {
      flex-wrap: nowrap; /* Ensure no wrapping for cloud computing */
    }

    .tech-item {
      display: flex;
      flex-direction: column;
      align-items: center;
      flex: 1; /* Ensure equal width for each tech-item */
      min-width: 0; /* Prevent overflow */
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
        align-items: center;
        padding: 0.5rem;
      }
      .logo-area {
        margin-bottom: 1rem;
      }
      .nav-links {
        flex-direction: column;
        width: 100%;
        text-align: center;
        padding: 0.5rem 0;
        gap: 1rem;
      }
      .nav-links li {
        width: 100%;
        padding: 0.5rem 0;
      }
      .highlight-section {
        flex-direction: column;
        margin: 1rem;
      }
      .highlight-image {
        width: 100%;
        height: 250px;
      }
      .highlight-content {
        padding: 2rem 1rem;
      }
      .contact-section {
        padding: 1rem;
        margin: 1rem;
      }
      .contact-list {
        flex-direction: column;
        gap: 1rem;
      }
      .contact-item {
        width: 100%;
        max-width: 300px;
        margin: 0 auto;
      }
      .contact-item a {
        font-size: 0.85rem;
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
        gap: 1.5rem;
        padding: 0 1rem;
      }
      .tech-category {
        width: 100%;
      }
      .cloud-computing .tech-icons {
        flex-wrap: nowrap; /* Keep logos in a single line */
        justify-content: center;
        gap: 1rem;
      }
      .tech-item {
        margin: 0.5rem;
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
    <button class="nav-toggle" aria-label="toggle navigation">
      <span class="hamburger"></span>
    </button>
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
      <p>Transform information and into intelligence with our AI and Computer Vision solutions. From automation to real-time image analysis, we build smart systems that drive business impact.</p>
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
    <div class="contact-left">
      <h2>Get in Touch</h2>
      <p>Reach out to us for inquiries or collaboration opportunities.</p>
      <div class="contact-highlight">
        <span>Let's Build Something Amazing Together!</span>
      </div>
    </div>
    <div class="contact-right">
      <div class="contact-grid">
        <a href="mailto:ahsan.malik1010@gmail.com" class="contact-link email">
          <div class="icon-wrapper">
            <img src="images/email.png" alt="Email">
          </div>
          <span>ahsan.malik1010@gmail.com</span>
        </a>
        
        <a href="https://www.linkedin.com/company/intraclouds" target="_blank" class="contact-link linkedin">
          <div class="icon-wrapper">
            <img src="images/linkdin.png" alt="LinkedIn">
          </div>
          <span>LinkedIn</span>
        </a>
        
        <a href="tel:+923143330888" class="contact-link phone">
          <div class="icon-wrapper">
            <img src="images/call.png" alt="Phone">
          </div>
          <span>+923143330888</span>
        </a>
        
        <a href="https://www.intraclouds.com" target="_blank" class="contact-link website">
          <div class="icon-wrapper">
            <img src="images/website.png" alt="Website">
          </div>
          <span>www.intraclouds.com</span>
        </a>
      </div>
    </div>
  </div>

  <!-- FOOTER -->
  <footer class="footer">
    <span>© 2025 INTRACLOUDS (SMC-PRIVATE) LIMITED</span>
    <div>
     <a href="{{ route('terms') }}">Terms of Use</a> | 
<a href="{{ route('privacy') }}">Privacy Policy</a>

    </div>
  </footer>

  <script>
    const navToggle = document.querySelector('.nav-toggle');
    const navLinks = document.querySelector('.nav-links');

    navToggle.addEventListener('click', () => {
      navToggle.classList.toggle('nav-open');
      navLinks.classList.toggle('nav-open');
    });

    // Close menu when a link is clicked
    document.querySelectorAll('.nav-links a').forEach(link => {
      link.addEventListener('click', () => {
        navToggle.classList.remove('nav-open');
        navLinks.classList.remove('nav-open');
      });
    });

    /*
    // Optional JavaScript for a fade-in animation on hover (not used in current implementation)
    document.querySelectorAll('.contact-link').forEach(link => {
      link.addEventListener('mouseenter', () => {
        link.style.transition = 'all 0.3s ease, opacity 0.3s ease';
        link.style.opacity = '0.8';
        setTimeout(() => {
          link.style.opacity = '1';
        }, 150);
      });
      link.addEventListener('mouseleave', () => {
        link.style.opacity = '1';
      });
    });
    */
  </script>
</body>
</html>