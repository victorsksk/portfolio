<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Victor Gabriel - Portfólio</title>
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
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">&lt;Victor Gabriel&gt;</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#inicio">Início</a></li>
                    <li class="nav-item"><a class="nav-link" href="#habilidades">Habilidades</a></li>
                    <li class="nav-item"><a class="nav-link" href="#projetos">Projetos</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contato">Contato</a></li>
                    <li class="nav-item">
                        <button id="theme-toggle" class="btn btn-link nav-link">
                            <i class="bi bi-moon-fill"></i>
                        </button>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="languageDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            🇧🇷
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="languageDropdown">
                            <li><a class="dropdown-item" href="index.php">🇧🇷 Português</a></li>
                            <li><a class="dropdown-item" href="../en/index.php">🇺🇸 English</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <header class="header" id="inicio">
        <div class="container text-light">
            <div class="row align-items-center flex-column-reverse flex-md-row text-center text-md-start">
                <div class="col-md-6">
                    <h1>
                        <span id="typewriter" class="typewriter"></span>
                    </h1>
                    <p class="intro-text">Desenvolvedor web front-end, back-end, automações transformando ideias em
                        aplicações funcionais e intuitivas.</p>
                    <a href="#" class="btn btn-success">Entre em contato &gt;</a>
                </div>
                <div class="col-md-6 text-center mb-4 mb-md-0">
                    <img src="../assets/../assets/imagens/victor.png" alt="Victor Gabriel" class="profile-img img-fluid">
                </div>
            </div>
        </div>
    </header>

    <!-- Habilidades -->
    <section id="habilidades" class="habilidades">
        <div class="container text-light text-center">
            <h2 class="section-title">Habilidades</h2>
            <p class="section-description">Tecnologias que utilizo no desenvolvimento de aplicações.</p>
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

    <!-- Projetos -->
    <section id="projetos" class="projetos">
        <div class="container text-light text-center">
            <h2 class="section-title">Projetos</h2>
            <p class="section-description">Confira alguns dos projetos que desenvolvi.</p>

            <div class="row justify-content-center">
                <!-- Projeto 1: CRECI-CE -->
                <div class="col-md-6">
                    <div class="card projeto-card">
                        <img src="../assets/imagens/projetos/crecice.png" alt="Projeto CRECI-CE" class="projeto-img">
                        <div class="card-body">
                            <h5 class="card-title">Site Institucional - CRECI-CE</h5>
                            <p class="card-text">Desenvolvimento de um site institucional para o CRECI-CE, garantindo
                                modernidade e funcionalidade.</p>
                            <a href="https://www.creci-ce.gov.br/" class="btn btn-primary" target="_blank">Ver
                                Projeto</a>
                        </div>
                    </div>
                </div>

                <!-- Projeto 2: Landing Page GitHub -->
                <div class="col-md-6">
                    <div class="card projeto-card">
                        <img src="../assets/imagens/projetos/github.png" alt="Landing Page GitHub" class="projeto-img">
                        <div class="card-body">
                            <h5 class="card-title">Landing Page</h5>
                            <p class="card-text">Nesse projeto, fiz algumas landing pages para praticar meus
                                conhecimentos.</p>
                            <a href="https://victorsksk.github.io/Projetos/" class="btn btn-primary" target="_blank">Ver
                                Projeto</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Contato -->
    <section id="contato" class="contato">
        <div class="container text-light text-center">
            <h2 class="section-title">Contato</h2>
            <p class="section-description">Entre em contato comigo para projetos, parcerias ou dúvidas.</p>

            <div class="row justify-content-center">
                <div class="col-md-6">
                    <!-- O form envia para sendmail.php -->
                    <form id="contact-form" action="sendmail.php" method="POST">
                        <div class="mb-3 text-start">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="Digite seu email" required>
                        </div>
                        <div class="mb-3 text-start">
                            <label class="form-label">Celular</label>
                            <div class="d-flex">
                                <div class="me-2" style="width: 90px;">
                                    <!-- Código do país -->
                                    <input type="text" class="form-control" id="country-code" name="country_code"
                                        placeholder="+55" required>
                                </div>
                                <div class="flex-grow-1">
                                    <!-- Número local -->
                                    <input type="tel" class="form-control" id="phone" name="phone"
                                        placeholder="(XX) XXXXX-XXXX" required>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3 text-start">
                            <label for="message" class="form-label">Mensagem</label>
                            <textarea class="form-control" id="message" name="message" rows="4"
                                placeholder="Digite sua mensagem" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-success btn-submit">Enviar &gt;</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal de Feedback -->
    <div class="modal fade" id="feedbackModal" tabindex="-1" aria-labelledby="feedbackModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content bg-dark text-light">
                <div class="modal-header">
                    <h5 class="modal-title" id="feedbackModalLabel">Mensagem Enviada</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Fechar"></button>
                </div>
                <div class="modal-body">
                    Sua mensagem foi enviada com sucesso!
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Footer -->
    <footer class="footer">
        <div class="container text-center text-light">
            <p>Desenvolvido por Victor Gabriel &copy; 2025</p>
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