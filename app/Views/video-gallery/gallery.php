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
    .swiper-slide-active iframe {
        transform: scale(1.05);
    }
</style>


<div class="swiper mySwiper">
    <div class="swiper-wrapper">

        <!-- Add as many slides as you want -->
        <div class="swiper-slide"><iframe class="yt-player" data-index="0"
            src="https://www.youtube.com/embed/LXyMDEM-sF8?enablejsapi=1&mute=1&playsinline=1"></iframe></div>

        <div class="swiper-slide"><iframe class="yt-player" data-index="1"
            src="https://www.youtube.com/embed/KIJF90PDuUk?enablejsapi=1&mute=1&playsinline=1"></iframe></div>

        <div class="swiper-slide"><iframe class="yt-player" data-index="2"
            src="https://www.youtube.com/embed/1sTW59ifJaE?enablejsapi=1&mute=1&playsinline=1"></iframe></div>

        <div class="swiper-slide"><iframe class="yt-player" data-index="3"
            src="https://www.youtube.com/embed/hmNcmB-cnhA?enablejsapi=1&mute=1&playsinline=1"></iframe></div>

        <div class="swiper-slide"><iframe class="yt-player" data-index="4"
            src="https://www.youtube.com/embed/zsMuG6SmQMk?enablejsapi=1&mute=1&playsinline=1"></iframe></div>

        <div class="swiper-slide"><iframe class="yt-player" data-index="5"
            src="https://www.youtube.com/embed/aDdsk7yRGgY?enablejsapi=1&mute=1&playsinline=1"></iframe></div>

        <div class="swiper-slide"><iframe class="yt-player" data-index="6"
            src="https://www.youtube.com/embed/7pj8fPQ5CUY?enablejsapi=1&mute=1&playsinline=1"></iframe></div>

        <div class="swiper-slide"><iframe class="yt-player" data-index="7"
            src="https://www.youtube.com/embed/iQYLGiH4N4c?enablejsapi=1&mute=1&playsinline=1"></iframe></div>

        <div class="swiper-slide"><iframe class="yt-player" data-index="8"
            src="https://www.youtube.com/embed/dlijJgk1Y-A?enablejsapi=1&mute=1&playsinline=1"></iframe></div>

        <div class="swiper-slide"><iframe class="yt-player" data-index="9"
            src="https://www.youtube.com/embed/-aKHKwDdATw?enablejsapi=1&mute=1&playsinline=1"></iframe></div>

    </div>

    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</div>


<script src="https://www.youtube.com/iframe_api"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


<script>
let players = {};


function onYouTubeIframeAPIReady() {
    document.querySelectorAll(".yt-player").forEach((iframe) => {
        let index = iframe.getAttribute("data-index");
        players[index] = new YT.Player(iframe);
    });
}

document.addEventListener("DOMContentLoaded", () => {
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 5,
        centeredSlides: true,
        loop: true,
        spaceBetween: 30,

        effect: "coverflow",
        coverflowEffect: {
            rotate: 0, stretch: 0, depth: 200, modifier: 2, slideShadows: false,
        },

        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },

        autoplay: {
            delay: 27000,
            disableOnInteraction: false,
        },
    });
// swiper.on("init", () => setTimeout(playCenterVideo, 500));
// swiper.init();
    function playCenterVideo() {
        // Pause ALL videos
       Object.values(players).forEach(p => {
    if (p && typeof p.pauseVideo === "function") {
        p.pauseVideo();
    }
});


        // Real index of the center slide (because loop clones slides)
        let realIndex = swiper.realIndex;

        // Play the correct one
        if (players[realIndex]) {
            console.log("PLAYING: " + realIndex);
            realIndex = realIndex -1; // adjust for zero-based index
            players[realIndex].playVideo();
        }
    }

    swiper.on("slideChangeTransitionEnd", playCenterVideo);

    // First load
    setTimeout(playCenterVideo, 1000);
});
</script>

<?= $this->endSection() ?>
