<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content="Portfólio de Pedro Leandro — Desenvolvedor Full Stack PHP"/>
    <meta name="author" content="Pedro Leandro"/>
    <title><?= $title ?></title>
    <link rel="icon" type="image/x-icon" href="<?= assets('favicon.ico') ?>"/>
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
          rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet"/>
    <link href="<?= assets('css/styles.css') ?>" rel="stylesheet"/>
    <link href="<?= assets('css/pallete-override.css') ?>" rel="stylesheet"/>
</head>
<body class="d-flex flex-column min-vh-100">

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-white py-3 shadow-sm">
    <div class="container px-4 px-md-5">
        <a class="navbar-brand" href="<?= url('/') ?>">
            <span class="fw-bolder text-primary">Pedro Leandro</span>
        </a>
        <button class="navbar-toggler border-0" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Abrir menu de navegação">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                <li class="nav-item"><a class="nav-link" href="<?= url('/') ?>">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= url('/experiencias') ?>">Experiência</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= url('/projetos') ?>">Projetos</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= url('/contato') ?>">Contato</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Page Content -->
<main class="flex-grow-1">
    <?= $this->section('content') ?>
</main>

<!-- Footer -->
<footer class="bg-white py-4 border-top">
    <div class="container px-4 px-md-5">
        <div class="row align-items-center justify-content-between flex-column flex-sm-row gap-3">
            <div class="col-auto">
                <div class="small m-0 text-muted">
                    &copy; <?= date("Y") ?> · Pedro Leandro · Desenvolvedor Full Stack PHP
                </div>
            </div>
            <div class="col-auto d-flex gap-3 fs-5">
                <a class="text-gradient" href="https://wa.me/5599984228986" target="_blank" title="WhatsApp">
                    <i class="bi bi-whatsapp"></i>
                </a>
                <a class="text-gradient" href="https://github.com/pedroleandro" target="_blank" title="GitHub"
                   rel="noopener noreferrer">
                    <i class="bi bi-github"></i>
                </a>
                <a class="text-gradient" href="https://www.linkedin.com/in/pedro-leandro-gomes-da-silva-453268288"
                   target="_blank" title="LinkedIn" rel="noopener noreferrer">
                    <i class="bi bi-linkedin"></i>
                </a>
                <a class="text-gradient" href="mailto:pedroleandrogomesdasilva@outlook.com" title="E-mail">
                    <i class="bi bi-envelope-fill"></i>
                </a>
            </div>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?= assets('js/scripts.js') ?>"></script>
</body>
</html>