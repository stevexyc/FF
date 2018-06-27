<?php snippet('header') ?>

<?= css('assets/css/distortion.css') ?>

</head>
<body>

<?php snippet('menu') ?>

<div class="portfolio">
	



</div>



<script src="assets/js/distortion/imagesloaded.pkgd.min.js"></script>
<script src="assets/js/distortion/three.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/TweenMax.min.js"></script>
<script src="assets/js/distortion/hover.js"></script>
<script src="assets/js/app.js"></script>

<script type="text/javascript">
	imagesLoaded( document.querySelectorAll('img'), () => {
  document.body.classList.remove('loading');
});

Array.from(document.querySelectorAll('.grid__item-img')).forEach((el) => {
  const imgs = Array.from(el.querySelectorAll('img'));
  new hoverEffect({
    parent: el,
    intensity: el.dataset.intensity || undefined,
    speedIn: el.dataset.speedin || undefined,
    speedOut: el.dataset.speedout || undefined,
    easing: el.dataset.easing || undefined,
    hover: el.dataset.hover || undefined,
    image1: imgs[0].getAttribute('src'),
    image2: imgs[1].getAttribute('src'),
    displacementImage: el.dataset.displacement
  });
});
</script>

</body>
</html>