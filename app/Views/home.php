<?= $this->extend('layouts/main'); ?>

<?= $this->section('content'); ?>

<!-- HERO SECTION -->
<div class="row align-items-center">
    <div class="col-md-6">
        <h1 class="display-4 fw-bold">We Build Brands That Stand Out</h1>
        <p class="lead">Social media branding, website design, and digital identity creation for modern businesses.</p>
        <a href="<?= base_url('portfolio') ?>" class="btn btn-dark btn-lg mt-3">View Portfolio</a>
        <a href="<?= base_url('contact') ?>" class="btn btn-outline-dark btn-lg mt-3 ms-2">Contact Us</a>
    </div>

    <div class="col-md-6 text-center">
        <img src="<?= base_url('images/hero-placeholder.JPG') ?>" class="img-fluid" alt="Branding Design">
    </div>
</div>

<!-- FEATURES / SERVICES SECTION -->
<section class="mt-5">
    <h2 class="text-center mb-4">Our Services</h2>

    <div class="row text-center">
        <div class="col-md-4 mb-4">
            <div class="p-4 border rounded shadow-sm">
                <h4>Brand Identity</h4>
                <p>Logo Design, Color palettes, Typography, Brand Kit.</p>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="p-4 border rounded shadow-sm">
                <h4>Social Media Branding</h4>
                <p>Posts, Templates, Reels, Thumbnails — consistent branding across platforms.</p>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="p-4 border rounded shadow-sm">
                <h4>Website Design</h4>
                <p>Portfolio, Business Websites, Landing pages, UI/UX design.</p>
            </div>
        </div>
    </div>
    <iframe width="478" height="849" 
    src="https://www.youtube.com/embed/hmNcmB-cnhA?autoplay=1&mute=1" 
    title="Living Room Storiez makes its mark in The Calcutta Times – Wedding Section, for La Fiesta Catering!" 
    frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
     referrerpolicy="strict-origin-when-cross-origin"  allowautoplay="true" allowfullscreen></iframe>
</section>

<?= $this->endSection(); ?>
