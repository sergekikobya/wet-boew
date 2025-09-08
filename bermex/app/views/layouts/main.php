<?php
// Basic responsive layout with Bootstrap 5
?><!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BERMEX</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css/app.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom">
  <div class="container">
    <a class="navbar-brand fw-bold text-primary" href="/">BERMEX</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav" aria-controls="nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="nav">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link" href="/qui-sommes-nous">Qui sommes-nous</a></li>
        <li class="nav-item"><a class="nav-link" href="/missions">Missions</a></li>
        <li class="nav-item"><a class="nav-link" href="/services">Services</a></li>
        <li class="nav-item"><a class="nav-link" href="/formations">Formations</a></li>
        <li class="nav-item"><a class="nav-link" href="/realisations">Réalisations</a></li>
        <li class="nav-item"><a class="nav-link" href="/actualites">Actualités</a></li>
        <li class="nav-item"><a class="nav-link" href="/boutique">Boutique</a></li>
        <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
      </ul>
      <div class="d-flex gap-2">
        <a class="btn btn-outline-primary btn-sm" href="/connexion">Se connecter</a>
        <a class="btn btn-primary btn-sm" href="/espace-client">Espace client</a>
      </div>
    </div>
  </div>
  </nav>

  <main class="py-4">
    <div class="container">
      <?php echo $content ?? ''; ?>
    </div>
  </main>

  <footer class="border-top py-4 small bg-light">
    <div class="container d-flex flex-wrap justify-content-between align-items-center">
      <span>&copy; <?php echo date('Y'); ?> BERMEX</span>
      <span>Contact: contact@bermex.local</span>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/js/app.js"></script>
</body>
</html>

