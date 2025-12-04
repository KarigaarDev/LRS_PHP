<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<?php $p = $project; ?>

<div class="row">
  <div class="col-md-8">
    <img src="<?= base_url('images/' . $p['image']) ?>" class="img-fluid mb-4" alt="<?= esc($p['title']) ?>">
    <h1><?= esc($p['title']) ?></h1>
    <p class="text-muted"><?= esc($p['category']) ?></p>
    <p><?= esc($p['content']) ?></p>
  </div>
  <div class="col-md-4">
    <div class="card p-3">
      <h5>Project Details</h5>
      <p><strong>Category:</strong> <?= esc($p['category']) ?></p>
      <p><strong>Services:</strong> Branding, Social Media, Mockups</p>
      <a href="<?= base_url('contact') ?>" class="btn btn-primary">Work With Us</a>
    </div>
  </div>
</div>

<?= $this->endSection() ?>
