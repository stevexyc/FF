<?php snippet('header') ?>
<?= css('assets/css/distortion.css') ?>
</head>
<body>
<?php snippet('menu') ?>

<div class="portfolio">
  <!-- GRID -->
  <div class="grid">

    <!-- Intro Grid Item -->
    <div class="grid__item theme-1">
      <div class="grid__item-content" style="">

        <h2 class="grid__item-title grid__item-title" style="font-size: 5vw;margin-top:0;">Favreau Design</h2>
        <?= $page->text()->kirbytext() ?>
        <a class="grid__item-button" href="#">Contact Us</a>
      </div>
    </div><!-- End Intro grid item --> 

    <!-- Portfolio Item -->
    <?php
    $projects = page('portfolio')->children()->visible(); 
    foreach($projects as $project): 
    $postType = $project->custom();
    ?>

      <?php if ($postType == 'quotebox'): 
        // in quotebox template, the text() is the quote and the tagline() is the author
        ?>
        <div class="grid__item theme-22">
          <div class="grid__item-content">
            <h2 class="grid__item-title grid__item-title--small"><?= $project->text()->html() ?></h2>
            <p class="grid__item-text"><?= $project->tagline()->html() ?></i></p>
          </div>
        </div>
      <?php elseif ($postType == 'custom HTML'): ?> 
        custom html??
        
      <?php else: ?>

        <div class="grid__item grid__item--bg theme-2">
          <div class="grid__item-img" data-displacement="assets/images/displacement/9.jpg" data-intensity="-0.1" data-speedIn="0.8" data-speedOut="0.8" data-easing="power2.easeInOut">
            
              <?php $image1 = $project->image1()->toFile();
              $image2 = $project->image2()->toFile(); 
              if($image1 && $image2): 
                $thumb1 = $image1->crop(800,800);
                $thumb2 = $image2->crop(800,800);
              ?>
                <img src="<?= $thumb1->url() ?>" alt="Image"/>
                <img src="<?= $thumb2->url() ?>" alt="Image"/>
              <?php endif ?>
          </div>
          <div class="grid__item-content">
            <span class="grid__item-meta"><?= $project->type()->html() ?></span>
            <h2 class="grid__item-title"><?= $project->title()->html() ?></h2>
            <h3 class="grid__item-subtitle">
              <span><?= $project->tagline()->html() ?></span>
            </h3>
          </div>
        </div>

        
      <?php endif ?>
    <?php endforeach ?>

  </div> <!-- End Grid -->
</div> <!-- End Portfolio -->



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