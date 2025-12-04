<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<h1>Contact Us</h1>

<?php if(session()->getFlashdata('success')): ?>
  <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
<?php endif; ?>

<form method="post" action="<?= base_url('contact') ?>">
  <div class="mb-3">
    <label class="form-label">Name</label>
    <input name="name" type="text" class="form-control" required>
  </div>
  <div class="mb-3">
    <label class="form-label">Email</label>
    <input name="email" type="email" class="form-control" required>
  </div>
  <div class="mb-3">
    <label class="form-label">Message</label>
    <textarea name="message" class="form-control" rows="5" required></textarea>
  </div>
  <button class="btn btn-primary">Send Message</button>
</form>

<?= $this->endSection() ?>
