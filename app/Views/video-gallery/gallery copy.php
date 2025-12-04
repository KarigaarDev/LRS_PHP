<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<h2 class="text-center mb-4 text-white">Video Gallery</h2>

<style>
    body { background: #000; }
    .swiper { width: 100%; height: 630px; padding: 60px 0; }
    .swiper-slide {
        width: 300px !important;
        height: 520px !important;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .swiper-slide iframe {
        width: 300px;
        height: 520px;
        border-radius: 18px;
        border: 0;
        box-shadow: 0 10px 30px rgba(0,0,0,.6);
    }
    /* navigation arrows style */
    .swiper-button-next, .swiper-button-prev {
        color: #fff;
        width: 56px;
        height: 56px;
        border-radius: 50%;
        background: rgba(0,0,0,.25);
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .swiper-button-next::after, .swiper-button-prev::after {
        font-size: 28px;
    }
    /* center slide larger visual (optional) */
    .swiper-slide-active iframe {
        transform: scale(1.05);
    }
</style>

<!-- Swiper container -->
<div class="swiper mySwiper" pagination="true" pagination-clickable="true" navigation="true" space-between="30"
    loop="true"  >
    <div class="swiper-wrapper">

        <!-- IMPORTANT: put the plain embed URL (without query params) into data-src -->
        <div class="swiper-slide">
            <iframe data-src="https://www.youtube.com/embed/LXyMDEM-sF8"
                src="https://www.youtube.com/embed/LXyMDEM-sF8?mute=1&playsinline=1&loop=0&enablejsapi=1"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        </div>

        <div class="swiper-slide">
            <iframe data-src="https://www.youtube.com/embed/KIJF90PDuUk"
                src="https://www.youtube.com/embed/KIJF90PDuUk?mute=1&playsinline=1&loop=0&enablejsapi=1"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        </div>

        <div class="swiper-slide">
            <iframe data-src="https://www.youtube.com/embed/1sTW59ifJaE"
                src="https://www.youtube.com/embed/1sTW59ifJaE?mute=1&playsinline=1&loop=0&enablejsapi=1"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        </div>

        <!-- duplicate / extra slides as needed -->
        <div class="swiper-slide">
            <iframe data-src="https://www.youtube.com/embed/hmNcmB-cnhA"
                src="https://www.youtube.com/embed/hmNcmB-cnhA?mute=1&playsinline=1&loop=0&enablejsapi=1"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        </div>

        <div class="swiper-slide">
            <iframe data-src="https://www.youtube.com/embed/zsMuG6SmQMk"
                src="https://www.youtube.com/embed/zsMuG6SmQMk?mute=1&playsinline=1&loop=0&enablejsapi=1"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        </div>
         <div class="swiper-slide">
            <iframe data-src="https://www.youtube.com/embed/aDdsk7yRGgY"
                src="https://www.youtube.com/embed/aDdsk7yRGgY?mute=1&playsinline=1&loop=0&enablejsapi=1"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        </div>
         <div class="swiper-slide">
            <iframe data-src="https://www.youtube.com/embed/7pj8fPQ5CUY"
                src="https://www.youtube.com/embed/7pj8fPQ5CUY?mute=1&playsinline=1&loop=0&enablejsapi=1"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        </div>
         <div class="swiper-slide">
            <iframe data-src="https://www.youtube.com/embed/iQYLGiH4N4c"
                src="https://www.youtube.com/embed/iQYLGiH4N4c?mute=1&playsinline=1&loop=0&enablejsapi=1"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        </div>
        <div class="swiper-slide">
            <iframe data-src="https://www.youtube.com/embed/dlijJgk1Y-A"
                src="https://www.youtube.com/embed/dlijJgk1Y-A?mute=1&playsinline=1&loop=0&enablejsapi=1"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        </div>
        <div class="swiper-slide">
            <iframe data-src="https://www.youtube.com/embed/-aKHKwDdATw"
                src="https://www.youtube.com/embed/-aKHKwDdATw?mute=1&playsinline=1&loop=0&enablejsapi=1"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        </div>

    </div>

    <!-- Navigation buttons -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</div>

<!-- Swiper CDN CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<!-- Swiper CDN JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
/*
  Behavior:
  - Each iframe stores its base embed URL in data-src (no query params).
  - On init & on each slide change, we set the centered/active slide iframe src
    to include autoplay=1&mute=1&playsinline=1&loop=0&enablejsapi=1.
  - All other slides get src with only mute=1&playsinline=1 (no autoplay).
*/

document.addEventListener('DOMContentLoaded', function () {

   var swiper = new Swiper(".mySwiper", {
    slidesPerView: 5,
    centeredSlides: true,
    spaceBetween: 30,
    loop: true,

    autoplay: {
        delay: 25000,
        disableOnInteraction: true,
    },
    effect: "coverflow",
    coverflowEffect: {
        rotate: 0,
        stretch: 0,
        depth: 200,
        modifier: 2,
        slideShadows: false,
    },

    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

// FUNCTION — autoplay only center video
function playActiveVideo() {
    // Pause all videos
    document.querySelectorAll(".swiper-slide iframe").forEach(iframe => {
        iframe.src = iframe.src.replace("&autoplay=1", "").replace("?autoplay=1", "");
    });

    // Get active slide iframe
    let active = document.querySelector(".swiper-slide-prev iframe");
    if (!active) return;

    // Add autoplay=1 to active slide
    let src = active.src;
    if (src.includes("?")) {
        active.src = src + "&autoplay=1";
    } else {
        active.src = src + "?autoplay=1";
    }
}

// When slide changes → autoplay center video
swiper.on("slideChangeTransitionEnd", function () {
    playActiveVideo();
});

// First load
playActiveVideo();

});
</script>

<?= $this->endSection() ?>
