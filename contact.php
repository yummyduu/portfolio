<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Contact Me</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      font-size: 14.5px;
      background: #f0f4f8;
      color: #2c3e50;
      overflow-x: hidden;
    }
    .platform-card {
      background: #ffffff;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(74, 144, 226, 0.15);
      padding: 18px;
      max-width: 280px;
      margin-bottom: 20px;
      text-align: center;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      opacity: 0;
      transform: translateY(40px);
      transition: opacity 0.6s ease, transform 0.6s ease;
    }
    .platform-card.visible {
      opacity: 1;
      transform: translateY(0);
    }
    .platform-icon {
      font-size: 2.4rem;
      color: #4a90e2;
      margin-bottom: 12px;
    }
    .platform-title {
      font-size: 1.15rem;
      font-weight: 600;
      margin-bottom: 8px;
      color: #1c2a44;
    }
    .platform-desc {
      font-size: 0.95rem;
      background: #d9e8ff;
      border-radius: 8px;
      padding: 10px 14px;
      margin-bottom: 12px;
      min-height: 60px;
      color: #2c3e50;
      box-shadow: inset 0 0 6px rgba(74, 144, 226, 0.15);
    }
    .platform-img {
      height: 110px;
      object-fit: contain;
      border-radius: 8px;
      box-shadow: 0 4px 12px rgba(74, 144, 226, 0.1);
      margin-top: 10px;
    }
    .contact-info {
      font-weight: 600;
      color: #4a90e2;
      margin-bottom: 10px;
      font-size: 1rem;
      user-select: all;
    }
    .platforms-container {
      display: flex;
      flex-wrap: wrap;
      gap: 18px;
      justify-content: center;
      margin-bottom: 50px;
    }
    .contact-form {
      max-width: 600px;
      background: #ffffff;
      padding: 25px 30px;
      border-radius: 12px;
      box-shadow: 0 6px 24px rgba(74, 144, 226, 0.12);
      margin: 0 auto 60px;
      opacity: 0;
      transform: translateX(-40px);
      transition: opacity 0.5s ease, transform 0.5s ease;
    }
    .contact-form.visible {
      opacity: 1;
      transform: translateX(0);
    }
    .contact-form h2 {
      font-size: 1.6rem;
      margin-bottom: 24px;
      font-weight: 600;
      color: #1c2a44;
    }
    .form-label {
      font-size: 0.9rem;
      font-weight: 500;
      color: #34495e;
    }
    .form-control {
      font-size: 0.9rem;
      padding: 10px 12px;
      border-radius: 8px;
      border: 1.5px solid #ced4da;
      transition: border-color 0.3s ease;
    }
    .form-control:focus {
      border-color: #0d6efd;
      box-shadow: 0 0 8px rgba(13,110,253,0.3);
    }
    .btn-send {
      font-size: 1rem;
      padding: 10px 20px;
      border-radius: 10px;
      margin-top: 15px;
      width: 100%;
    }
    @media (max-width: 767px) {
      .platform-card {
        max-width: 90vw;
      }
      .contact-form {
        padding: 20px 15px;
        width: 90vw;
      }
    }
    .platform-card.phone .platform-img,
    .platform-card.x .platform-img {
      display: none;
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">MyPortfolio</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto">
          <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
          <li class="nav-item"><a class="nav-link" href="projects.html">Projects</a></li>
          <li class="nav-item"><a class="nav-link active" aria-current="page" href="contact.html">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <main class="container my-5">
    <section class="platforms-container">
      <!-- Example cards below -->
      <div class="platform-card">
        <div class="platform-icon">📘</div>
        <div class="platform-title">Facebook</div>
        <div class="platform-desc">Connect with me on Facebook for casual updates and messaging.</div>
        <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg" class="platform-img" />
        <div class="contact-info">tristan teoxon</div>
        <a href="https://www.facebook.com/tristan.teoxon" target="_blank" class="btn btn-outline-primary mt-2">Visit Facebook</a>
      </div>

      <div class="platform-card phone">
        <div class="platform-icon">📞</div>
        <div class="platform-title">Phone</div>
        <div class="platform-desc">Call or text me anytime on my mobile number.</div>
        <div class="contact-info">09614729884</div>
        <a href="tel:+09614729884" class="btn btn-outline-primary mt-2">Call Now</a>
      </div>

      <div class="platform-card">
        <div class="platform-icon">✉️</div>
        <div class="platform-title">Email</div>
        <div class="platform-desc">Send me an email for professional inquiries or detailed messages.</div>
        <img src="https://upload.wikimedia.org/wikipedia/commons/4/4e/Mail_%28iOS%29.svg" class="platform-img" />
        <div class="contact-info">teoxontristan26@gmail.com</div>
        <a href="mailto:teoxontristan26@gmail.com" class="btn btn-outline-primary mt-2">Send Email</a>
      </div>

      <div class="platform-card">
        <div class="platform-icon">📸</div>
        <div class="platform-title">Instagram</div>
        <div class="platform-desc">Follow me on Instagram for photos and stories.</div>
        <img src="https://upload.wikimedia.org/wikipedia/commons/e/e7/Instagram_logo_2016.svg" class="platform-img" />
        <div class="contact-info">_.telol</div>
        <a href="https://www.instagram.com/_.telol" target="_blank" class="btn btn-outline-primary mt-2">Visit Instagram</a>
      </div>

      <div class="platform-card">
        <div class="platform-icon">💻</div>
        <div class="platform-title">GitHub</div>
        <div class="platform-desc">Check out my coding projects and repositories on GitHub.</div>
        <img src="https://github.githubassets.com/images/modules/logos_page/GitHub-Mark.png" class="platform-img" />
        <div class="contact-info">yummyduu</div>
        <a href="https://github.com/yummyduu" target="_blank" class="btn btn-outline-primary mt-2">Visit GitHub</a>
      </div>

      <div class="platform-card x">
        <div class="platform-icon">🐦</div>
        <div class="platform-title">X (Twitter)</div>
        <div class="platform-desc">Follow me on X for thoughts and updates.</div>
        <div class="contact-info">Yamiruuwthth2uu</div>
        <a href="https://twitter.com/Yamiruuwthth2uu" target="_blank" class="btn btn-outline-primary mt-2">Visit X</a>
      </div>
    </section>

    <!-- Contact form -->
    <section>
      <form id="contactForm" class="contact-form" novalidate>
        <h2>Leave a Message</h2>
        <div class="mb-3">
          <label for="nameInput" class="form-label">Your Name</label>
          <input type="text" id="nameInput" name="name" class="form-control" required placeholder="Enter your name" />
        </div>
        <div class="mb-3">
          <label for="emailInput" class="form-label">Your Email</label>
          <input type="email" id="emailInput" name="email" class="form-control" required placeholder="Enter your email" />
        </div>
        <div class="mb-3">
          <label for="messageInput" class="form-label">Message</label>
          <textarea id="messageInput" name="message" class="form-control" rows="5" required placeholder="Write your message here"></textarea>
        </div>
        <button type="submit" class="btn btn-primary btn-send">Send Message</button>
      </form>
    </section>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    window.addEventListener('load', () => {
      document.querySelector('.contact-form').classList.add('visible');
      const cards = document.querySelectorAll('.platform-card');
      cards.forEach((card, i) => {
        setTimeout(() => card.classList.add('visible'), i * 150);
      });
    });

    document.getElementById('contactForm').addEventListener('submit', function (e) {
      e.preventDefault();
      alert('Thanks for your message! (Form submission can be implemented later)');
      this.reset();
    });
  </script>
</body>
</html>
