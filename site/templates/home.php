<?php snippet('header') ?>


</head>
<body>

<?php snippet('menu') ?>


<main class="main" role="main">

  <div class="home_container">
    <div class="bg-container1" style="transform:translateX(-100%);"></div>
    <div class="bg-container2" style="transform:translateX(-100%);"></div>
    <div class="image-container" style="height: 100%; width: 100%;">
    </div>
    <div class="home-content">
      <div class="home-message">
        <h1 style="transform:translateX(-300%);">Where Magic Happens Everyday</h1>
        <!-- <p>Where magic happens!</p> -->
        <a id="mainButton" class="btn btn-light" href="#" style="transform:translateX(-120%)">View Portfolio</a> &nbsp;&nbsp; 
        <!-- <a class="btn btn-light" href="#">Contact Us</a> -->
      </div>
    </div>
  </div> 

</main>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="assets/js/particles/anime.min.js"></script>
<script src="assets/js/particles/particles.js"></script>
<script src="assets/js/app.js"></script>

<script type="text/javascript">
  $(document).ready(function() {
    
    // Initialize a new instance of Particles to disintegrate/integrate the button
    var bttn = document.querySelector('#mainButton');
    var jj = new Particles(bttn);

    bttn.addEventListener('click', () => {
      jj.disintegrate({
        duration: 350,
        complete: function() {
          // console.log('done');
          window.location.href='portfolio.html';
        }
      });
    });

    var heading = document.querySelector('h1');
    var kk = new Particles(heading, {
      color: 'white',
      canvasPadding: 90,
      duration: 500,
      direction: 'top',
    });
    


    var bg = document.querySelector('.bg-container1');
    var bg = new Particles(bg, {
      color: 'yellow',
      canvasPadding: 0,
      direction: 'left', 
      duration: 1000
    });
    

    var bg2 = document.querySelector('.bg-container2');
    var bg2 = new Particles(bg2, {
      color: 'yellow',
      canvasPadding: 0,
      direction: 'right', 
      duration: 1000,
    });


    setTimeout(function(){
      kk.integrate();
      bg.integrate();
      bg2.integrate();
    },500);

    setTimeout(function(){ jj.integrate({
      direction: 'bottom',
      color: 'lightblue',
      duration: 800
    }) }, 1500);

  });
</script>

</body>
</html>