<?php snippet('header') ?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.3/css/swiper.min.css">
<style>
    .swiper-container {
      width: 100%;
      height: 100vh;
    }
    .swiper-slide{
      text-align: center;
      font-size: 18px;
      background: #111;
      /* Center slide text vertically */
      display: -webkit-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      -webkit-justify-content: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-align-items: center;
      align-items: center;
    }
    .swiper-slide img {
      max-width: 100%;
      max-height: 100%;
    }
  </style>

</head>
<body>
<?php snippet('menu') ?>

<div id="slider" class="project-page" role="main">

<!-- swiper -->
<div class="swiper-container">
  <div class="swiper-wrapper">
    <?php
    foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
      <div class="swiper-slide">
        <img src="<?= $image->url() ?>" alt="<?= $page->title()->html() ?>" />
      </div>
    <?php endforeach ?>
     
  </div>
  <!-- Add Pagination -->
  <div class="swiper-pagination"></div>
  <!-- Add Arrows -->
  <div class="swiper-button-next swiper-button-white"></div>
  <div class="swiper-button-prev swiper-button-white"></div>

</div>

  <div class="project-description">
    <?= $page->text()->kirbytext() ?>
  </div>

</div>

<?php snippet('footer') ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.3/js/swiper.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.swiper-container', {
      spaceBetween: 30,
      effect: 'fade',
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      keyboard: {
        enabled: true
      },
    });
  </script>

