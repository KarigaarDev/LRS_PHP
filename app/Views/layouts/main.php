<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title><?= esc($title ?? 'My Agency') ?></title>

  <!-- Bootstrap CSS (CDN) -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />


  <!-- Custom CSS -->
  <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
  <div class="container">
    <a class="navbar-brand" href="<?= base_url('/') ?>">MyBrand</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navmenu">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="<?= base_url('/') ?>">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= base_url('portfolio') ?>">Portfolio</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= base_url('services') ?>">Services</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= base_url('about') ?>">About</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= base_url('contact') ?>">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>

<main class="py-5">
  <div class="container">
    <?= $this->renderSection('content') ?>
  </div>
</main>

<footer class="py-4 bg-dark text-white">
  <div class="container text-center">
    &copy; <?= date('Y') ?> MyBrand — Branding & Website Design
  </div>
</footer>

<!-- Bootstrap JS + Popper (CDN) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script src="<?= base_url('js/main.js') ?>"></script>
</body>
</html>
