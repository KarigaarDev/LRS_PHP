<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<h1>Portfolio</h1>

<div class="row">
<?php foreach($projects as $p): ?>
  <div class="col-md-4 mb-4">
    <div class="card h-100">
      <img src="<?= base_url('images/' . $p['image']) ?>" class="card-img-top" alt="<?= esc($p['title']) ?>">
      <div class="card-body">
        <h5 class="card-title"><?= esc($p['title']) ?></h5>
        <p class="card-text"><?= esc($p['short']) ?></p>
        <a href="<?= base_url('portfolio/' . $p['slug']) ?>" class="btn btn-outline-primary">View Project</a>
      </div>
    </div>
  </div>
<?php endforeach; ?>
</div>

<?= $this->endSection() ?>
