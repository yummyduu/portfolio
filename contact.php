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
      background: #f9f9f9;
      overflow-x: hidden; /* prevent horizontal scroll from animations */
    }
    .platform-card {
      background: white;
      border-radius: 12px;
      box-shadow: 0 0 15px rgba(0,0,0,0.07);
      padding: 18px;
      max-width: 280px;
      margin-bottom: 20px;
      text-align: center;
      display: flex;
      flex-direction: column;
      justify-content: space-between;

      /* Initial state for animation */
      opacity: 0;
      transform: translateY(40px);
      transition: opacity 0.6s ease, transform 0.6s ease;
    }
    /* When visible, slide to position */
    .platform-card.visible {
      opacity: 1;
      transform: translateY(0);
    }
    .platform-icon {
      font-size: 2.4rem;
      color: #0d6efd;
      margin-bottom: 12px;
    }
    .platform-title {
      font-size: 1.15rem;
      font-weight: 600;
      margin-bottom: 8px;
    }
    /* Highlighted description box */
    .platform-desc {
      font-size: 0.95rem;
      background: #e7f1ff; /* light blue highlight */
      border-radius: 8px;
      padding: 10px 14px;
      margin-bottom: 12px;
      min-height: 60px;
      color: #1a3d7c;
      box-shadow: inset 0 0 6px rgba(26, 61, 124, 0.15);
    }
    .platform-img {
      height: 110px;
      object-fit: contain;
      border-radius: 8px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
      margin-top: 10px;
    }
    .contact-info {
      font-weight: 600;
      color: #0d6efd;
      margin-bottom: 10px;
      font-size: 1rem;
      user-select: all;
    }
    /* Grid container for platforms */
    .platforms-container {
      display: flex;
      flex-wrap: wrap;
      gap: 18px;
      justify-content: center;
      margin-bottom: 50px;
    }
    /* Contact form styles */
    .contact-form {
      max-width: 600px;
      background: white;
      padding: 25px 30px;
      border-radius: 12px;
      box-shadow: 0 0 18px rgba(0,0,0,0.08);
      margin: 0 auto 60px;

      /* Animate form in with main */
      opacity: 0;
      transform: translateX(-40px);
      transition: opacity 0.5s ease, transform 0.5s ease;
    }
    /* Show form */
    .contact-form.visible {
      opacity: 1;
      transform: translateX(0);
    }
    .contact-form h2 {
      font-size: 1.6rem;
      margin-bottom: 24px;
      font-weight: 600;
      color: #222;
    }
    .form-label {
      font-size: 0.9rem;
      font-weight: 500;
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
    /* Confirmation modal tweaks */
    .modal-body pre {
      background: #f8f9fa;
      padding: 15px;
      border-radius: 6px;
      font-size: 0.95rem;
      white-space: pre-wrap;
      word-wrap: break-word;
      max-height: 180px;
      overflow-y: auto;
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
    /* Remove platform images for Phone and X */
    .platform-card.phone .platform-img,
    .platform-card.x .platform-img {
      display: none;
    }

    /* Slide up modal dialog animation */
    .modal.fade .modal-dialog {
      transform: translateY(100%);
      transition: transform 0.3s ease-out;
    }
    .modal.fade.show .modal-dialog {
      transform: translateY(0);
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">MyPortfolio</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
              aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto">
          <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
          <li class="nav-item"><a class="nav-link" href="projects.html">Projects</a></li>
          <li class="nav-item"><a class="nav-link active" aria-current="page" href="contact.php">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <main class="container my-5">
    <section class="platforms-container">
      <!-- Facebook -->
      <div class="platform-card">
        <div class="platform-icon">📘</div>
        <div class="platform-title">Facebook</div>
        <div class="platform-desc">Connect with me on Facebook for casual updates and messaging.</div>
        <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg" alt="Facebook Logo" class="platform-img" />
        <div class="contact-info">tristan teoxon</div>
        <a href="https://www.facebook.com/tristan.teoxon" target="_blank" rel="noopener" class="btn btn-outline-primary mt-2">Visit Facebook</a>
      </div>

      <!-- Phone -->
      <div class="platform-card phone">
        <div class="platform-icon">📞</div>
        <div class="platform-title">Phone</div>
        <div class="platform-desc">Call or text me anytime on my mobile number.</div>
        <!-- Image removed -->
        <div class="contact-info">09614729884</div>
        <a href="tel:+09614729884" class="btn btn-outline-primary mt-2">Call Now</a>
      </div>

      <!-- Email -->
      <div class="platform-card">
        <div class="platform-icon">✉️</div>
        <div class="platform-title">Email</div>
        <div class="platform-desc">Send me an email for professional inquiries or detailed messages.</div>
        <img src="https://upload.wikimedia.org/wikipedia/commons/4/4e/Mail_%28iOS%29.svg" alt="Email Icon" class="platform-img" />
        <div class="contact-info">teoxontristan26@gmail.com</div>
        <a href="mailto:teoxontristan26@gmail.com" class="btn btn-outline-primary mt-2">Send Email</a>
      </div>

      <!-- Instagram -->
      <div class="platform-card">
        <div class="platform-icon">📸</div>
        <div class="platform-title">Instagram</div>
        <div class="platform-desc">Follow me on Instagram for photos and stories.</div>
        <img src="https://upload.wikimedia.org/wikipedia/commons/e/e7/Instagram_logo_2016.svg" alt="Instagram Logo" class="platform-img" />
        <div class="contact-info">_.telol</div>
        <a href="https://www.instagram.com/_.telol" target="_blank" rel="noopener" class="btn btn-outline-primary mt-2">Visit Instagram</a>
      </div>

      <!-- GitHub -->
      <div class="platform-card">
        <div class="platform-icon">💻</div>
        <div class="platform-title">GitHub</div>
        <div class="platform-desc">Check out my coding projects and repositories on GitHub.</div>
        <img src="https://github.githubassets.com/images/modules/logos_page/GitHub-Mark.png" alt="GitHub Logo" class="platform-img" />
        <div class="contact-info">yummyduu</div>
        <a href="https://github.com/yummyduu" target="_blank" rel="noopener" class="btn btn-outline-primary mt-2">Visit GitHub</a>
      </div>

      <!-- X / Twitter -->
      <div class="platform-card x">
        <div class="platform-icon">🐦</div>
        <div class="platform-title">X (Twitter)</div>
        <div class="platform-desc">Follow me on X (formerly Twitter) for thoughts and quick updates.</div>
        <!-- Image removed -->
        <div class="contact-info">Yamiruuwthth2uu</div>
        <a href="https://twitter.com/Yamiruuwthth2uu" target="_blank" rel="noopener" class="btn btn-outline-primary mt-2">Visit X</a>
      </div>
    </section>

    <!-- Contact Form -->
    <section>
      <form id="contactForm" class="contact-form" novalidate>
        <h2>Leave a Message</h2>
        <div class="mb-3">
          <label for="nameInput" class="form-label">Your Name</label>
          <input type="text" id="nameInput" name="name" class="form-control" required autocomplete="name" placeholder="Enter your name" />
        </div>
        <div class="mb-3">
          <label for="emailInput" class="form-label">Your Email</label>
          <input type="email" id="emailInput" name="email" class="form-control" required autocomplete="email" placeholder="Enter your email" />
        </div>
        <div class="mb-3">
          <label for="messageInput" class="form-label">Message</label>
          <textarea id="messageInput" name="message" class="form-control" rows="5" required placeholder="Write your message here"></textarea>
        </div>
        <button type="submit" class="btn btn-primary btn-send">Send Message</button>
      </form>
    </section>
  </main>

  <!-- Confirmation Modal -->
  <div class="modal fade" id="confirmModal" tabindex="-1" aria-labelledby="confirmModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="confirmModalLabel">Confirm Your Message</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>Please review your message before sending:</p>
          <ul>
            <li><strong>Name:</strong> <span id="confirmName"></span></li>
            <li><strong>Email:</strong> <span id="confirmEmail"></span></li>
            <li><strong>Message:</strong></li>
          </ul>
          <pre id="confirmMessage" class="mb-0"></pre>
        </div>
        <div class="modal-footer">
          <button type="button" id="editBtn" class="btn btn-secondary" data-bs-dismiss="modal">Edit</button>
          <button type="button" id="sendBtn" class="btn btn-primary">Send</button>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    window.addEventListener('load', () => {
      // Animate main content form
      document.querySelector('.contact-form').classList.add('visible');

      // Animate platform cards with stagger
      const cards = document.querySelectorAll('.platform-card');
      cards.forEach((card, i) => {
        setTimeout(() => {
          card.classList.add('visible');
        }, i * 150); // 150ms delay per card
      });
    });

    // Modal confirmation functionality
    const form = document.getElementById('contactForm');
    const confirmModal = new bootstrap.Modal(document.getElementById('confirmModal'));
    const confirmName = document.getElementById('confirmName');
    const confirmEmail = document.getElementById('confirmEmail');
    const confirmMessage = document.getElementById('confirmMessage');
    const sendBtn = document.getElementById('sendBtn');

    form.addEventListener('submit', (e) => {
      e.preventDefault();

      // Populate modal fields
      confirmName.textContent = form.name.value.trim();
      confirmEmail.textContent = form.email.value.trim();
      confirmMessage.textContent = form.message.value.trim();

      // Show modal
      confirmModal.show();
    });

    sendBtn.addEventListener('click', () => {
      // Here you can do your form submission, e.g., AJAX or regular submit
      alert('Message sent! (Replace this with actual submission code)');

      // Close modal
      confirmModal.hide();

      // Reset form
      form.reset();
    });
  </script>
</body>
</html>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      font-size: 14.5px;
      background: #f0f4f8; /* soft light blue-gray */
      color: #2c3e50; /* dark navy text */
      overflow-x: hidden; /* prevent horizontal scroll from animations */
    }
    .platform-card {
      background: #ffffff;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(74, 144, 226, 0.15); /* subtle blue shadow */
      padding: 18px;
      max-width: 280px;
      margin-bottom: 20px;
      text-align: center;
      display: flex;
      flex-direction: column;
      justify-content: space-between;

      /* Initial state for animation */
      opacity: 0;
      transform: translateY(40px);
      transition: opacity 0.6s ease, transform 0.6s ease;
    }
    /* When visible, slide to position */
    .platform-card.visible {
      opacity: 1;
      transform: translateY(0);
    }
    .platform-icon {
      font-size: 2.4rem;
      color: #4a90e2; /* chill medium blue */
      margin-bottom: 12px;
    }
    .platform-title {
      font-size: 1.15rem;
      font-weight: 600;
      margin-bottom: 8px;
      color: #1c2a44; /* darker navy */
    }
    /* Highlighted description box */
    .platform-desc {
      font-size: 0.95rem;
      background: #d9e8ff; /* very light pastel blue */
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
    /* Grid container for platforms */
    .platforms-container {
      display: flex;
      flex-wrap: wrap;
      gap: 18px;
      justify-content: center;
      margin-bottom: 50px;
    }
    /* Contact form styles */
    .contact-form {
      max-width: 600px;
      background: #ffffff;
      padding: 25px 30px;
      border-radius: 12px;
      box-shadow: 0 6px 24px rgba(74, 144, 226, 0.12);
      margin: 0 auto 60px;

      /* Animate form in with main */
      opacity: 0;
      transform: translateX(-40px);
      transition: opacity 0.5s ease, transform 0.5s ease;
    }
    /* Show form */
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
      border: 1.5px solid #cbd6e2;
      transition: border-color 0.3s ease, box-shadow 0.3s ease;
      background-color: #f9fbfd;
      color: #2c3e50;
    }
    .form-control:focus {
      border-color: #4a90e2;
      box-shadow: 0 0 8px rgba(74, 144, 226, 0.3);
      background-color: #fff;
      outline: none;
    }
    .btn-send {
      font-size: 1rem;
      padding: 10px 20px;
      border-radius: 10px;
      margin-top: 15px;
      width: 100%;
      background-color: #4a90e2;
      border-color: #4a90e2;
      color: #fff;
      transition: background-color 0.3s ease, border-color 0.3s ease;
    }
    .btn-send:hover,
    .btn-send:focus {
      background-color: #357ABD;
      border-color: #357ABD;
      color: #fff;
      outline: none;
    }
    /* Confirmation modal tweaks */
    .modal-body pre {
      background: #f0f4f8;
      padding: 15px;
      border-radius: 6px;
      font-size: 0.95rem;
      white-space: pre-wrap;
      word-wrap: break-word;
      max-height: 180px;
      overflow-y: auto;
      color: #2c3e50;
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
    /* Remove platform images for Phone and X */
    .platform-card.phone .platform-img,
    .platform-card.x .platform-img {
      display: none;
    }

    /* Slide up modal dialog animation */
    .modal.fade .modal-dialog {
      transform: translateY(100%);
      transition: transform 0.3s ease-out;
    }
    .modal.fade.show .modal-dialog {
      transform: translateY(0);
    }
    /* Navbar colors */
    nav.navbar {
      background-color: #357ABD; /* medium blue */
      box-shadow: 0 4px 12px rgba(53, 122, 189, 0.3);
    }
    nav .navbar-brand,
    nav .nav-link {
      color: #f9fbfd !important;
      font-weight: 600;
      transition: color 0.3s ease;
    }
    nav .nav-link:hover,
    nav .nav-link.active {
      color: #d1e3ff !important;
    }
  </style>
</head>