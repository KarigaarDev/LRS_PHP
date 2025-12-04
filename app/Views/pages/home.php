<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<div class="row align-items-center">
  <div class="col-md-6">
    <h1 class="display-5">We build brands & websites that convert</h1>
    <p class="lead">Social-first branding, memorable identities, and responsive websites for small businesses and creators.</p>
    <a href="<?= base_url('portfolio') ?>" class="btn btn-primary">See Our Work</a>
  </div>
  <div class="col-md-6 text-center">
    <img src="<?= base_url('images/hero-placeholder.png') ?>" alt="Hero" class="img-fluid">
  </div>
</div>

<hr class="my-5">

<h2 class="mb-4">Featured Work</h2>
<div class="row">
  <!-- small sample grid: using placeholder images; will be replaced by Portfolio controller when dynamic -->
  <div class="col-md-4 mb-4">
    <div class="card">
      <img src="<?= base_url('images/project1.jpg') ?>" class="card-img-top" alt="Project 1">
      <div class="card-body">
        <h5 class="card-title">Brand Identity — Cafe</h5>
        <p class="card-text">Logo, packaging and social templates.</p>
        <a href="<?= base_url('portfolio/project-1') ?>" class="stretched-link"></a>
      </div>
    </div>
  </div>
  <!-- copy other cards or leave as demo -->
</div>

<?= $this->endSection() ?>
