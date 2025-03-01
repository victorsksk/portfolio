<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Victor Gabriel - Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.min.css">
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="shortcut icon" href="../assets/imagens/avatar.svg" type="image/x-icon">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/animacoes.css">
    <link rel="stylesheet" href="../assets/css/style_claro.css">
</head>

<body>
    <!-- Navbar com seletor de idioma -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">&lt;Victor Gabriel&gt;</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#skills">Skills</a></li>
                    <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    <li class="nav-item">
                        <button id="theme-toggle" class="btn btn-link nav-link">
                            <i class="bi bi-moon-fill"></i>
                        </button>
                    </li>
                    <!-- Dropdown para seleção de idioma -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="languageDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            🇺🇸
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="languageDropdown">
                            <li><a class="dropdown-item" href="../pt/index.php">🇧🇷 Português</a></li>
                            <li><a class="dropdown-item" href="index.php">🇺🇸 English</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <header class="header" id="home">
        <div class="container text-light">
            <div class="row align-items-center flex-column-reverse flex-md-row text-center text-md-start">
                <div class="col-md-6">
                    <h1>
                        <span id="typewriter" class="typewriter"></span>
                    </h1>
                    <p class="intro-text">Web developer – front-end, back-end and automation, turning ideas into functional and intuitive applications.</p>
                    <a href="#" class="btn btn-success">Get in Touch &gt;</a>
                </div>
                <div class="col-md-6 text-center mb-4 mb-md-0">
                    <img src="../assets/imagens/victor.png" alt="Victor Gabriel" class="profile-img img-fluid">
                </div>
            </div>
        </div>
    </header>

    <!-- Skills -->
    <section id="skills" class="habilidades">
        <div class="container text-light text-center">
            <h2 class="section-title">Skills</h2>
            <p class="section-description">Technologies I use for application development.</p>
            <div class="row justify-content-center">
                <div class="col-12 col-sm-6 col-md-3">
                    <img src="../assets/imagens/habilidades/html5.png" alt="HTML5" class="tech-icon">
                    <p>HTML5</p>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <img src="../assets/imagens/habilidades/css.svg" alt="CSS3" class="tech-icon">
                    <p>CSS3</p>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <img src="../assets/imagens/habilidades/javascript.png" alt="JavaScript" class="tech-icon">
                    <p>JavaScript</p>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <img src="../assets/imagens/habilidades/python.png" alt="Python" class="tech-icon">
                    <p>Python</p>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <img src="../assets/imagens/habilidades/php.png" alt="PHP" class="tech-icon">
                    <p>PHP</p>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <img src="../assets/imagens/habilidades/mysql.png" alt="MySQL" class="tech-icon">
                    <p>MySQL</p>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <img src="../assets/imagens/habilidades/wordpress.png" alt="WordPress" class="tech-icon">
                    <p>WordPress</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects -->
    <section id="projects" class="projetos">
        <div class="container text-light text-center">
            <h2 class="section-title">Projects</h2>
            <p class="section-description">Check out some of the projects I've developed.</p>
            <div class="row justify-content-center">
                <!-- Project 1: CRECI-CE -->
                <div class="col-md-6">
                    <div class="card projeto-card">
                        <img src="../assets/imagens/projetos/crecice.png" alt="CRECI-CE Project" class="projeto-img">
                        <div class="card-body">
                            <h5 class="card-title">Institutional Website - CRECI-CE</h5>
                            <p class="card-text">Development of an institutional website for CRECI-CE, ensuring modernity and functionality.</p>
                            <a href="https://www.creci-ce.gov.br/" class="btn btn-primary" target="_blank">View Project</a>
                        </div>
                    </div>
                </div>
                <!-- Project 2: Landing Page GitHub -->
                <div class="col-md-6">
                    <div class="card projeto-card">
                        <img src="../assets/imagens/projetos/github.png" alt="GitHub Landing Page" class="projeto-img">
                        <div class="card-body">
                            <h5 class="card-title">Landing Page</h5>
                            <p class="card-text">A project where I created landing pages to practice my web development skills.</p>
                            <a href="https://victorsksk.github.io/Projetos/" class="btn btn-primary" target="_blank">View Project</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact -->
    <section id="contact" class="contato">
        <div class="container text-light text-center">
            <h2 class="section-title">Contact</h2>
            <p class="section-description">Get in touch for projects, collaborations, or inquiries.</p>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form id="contact-form" action="../sendmail.php" method="POST">
                        <div class="mb-3 text-start">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                        </div>
                        <div class="mb-3 text-start">
                            <label class="form-label">Phone</label>
                            <div class="d-flex">
                                <div class="me-2" style="width: 90px;">
                                    <input type="text" class="form-control" id="country-code" name="country_code" placeholder="+1" required>
                                </div>
                                <div class="flex-grow-1">
                                    <input type="tel" class="form-control" id="phone" name="phone" placeholder="(XXX) XXX-XXXX" required>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 text-start">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" name="message" rows="4" placeholder="Type your message" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-success btn-submit">Send &gt;</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Feedback Modal -->
    <div class="modal fade" id="feedbackModal" tabindex="-1" aria-labelledby="feedbackModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content bg-dark text-light">
                <div class="modal-header">
                    <h5 class="modal-title" id="feedbackModalLabel">Message Sent</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Your message has been sent successfully!
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container text-center text-light">
            <p>Developed by Victor Gabriel &copy; 2025</p>
            <div class="social-icons">
                <a href="https://wa.me/5585986077136" target="_blank" class="social-link"><i
                        class="bi bi-whatsapp"></i></a>
                <a href="https://www.instagram.com/victorsksk/" target="_blank" class="social-link"><i
                        class="bi bi-instagram"></i></a>
                <a href="https://github.com/victorsksk" target="_blank" class="social-link"><i
                        class="bi bi-github"></i></a>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"></script>
    <script src="../assets/js/script.js"></script>
</body>

</html>