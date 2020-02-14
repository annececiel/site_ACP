<div class="container slider-wrapper">
  <h3>A beautiful carousel for example</h3>
  <!-- bouttons pour jouer le carousel et/ou le mettre en pause -->
  <button type="button" id="myBtn" class="btn btn-light"><span class="glyphicon glyphicon-play"></span> Slide through items (cycle)</button>
  <button type="button" id="myBtn2" class="btn btn-dark"><span class="glyphicon glyphicon-stop"></span> Stop slide (pause)</button>
  <span class="text-muted"><span class="glyphicon glyphicon-pause"></span> Le carousel est par défaut en pause et se fige lorsque la souris est positionnée dessus ;)</span><br><br>

  <div id="myCarousel" class="carousel slide" data-interval="3000">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item item1 active">
        <img src="https://i.picsum.photos/id/1064/4236/2819.jpg" alt="image1" style="width:100%;">
        <div class="carousel-caption">
          <h3>Image 1</h3>
          <p>Image 1 is always the first one!</p>
        </div>
      </div>

      <div class="item item2">
        <img src="https://i.picsum.photos/id/272/1920/1280.jpg" alt="image2" style="width:100%;">
        <div class="carousel-caption">
          <h3>Image 2</h3>
          <p>Thank you, second picture!</p>
        </div>
      </div>
    
      <div class="item item3">
        <img src="https://i.picsum.photos/id/1021/2048/1206.jpg" alt="image3" style="width:100%;">
        <div class="carousel-caption">
          <h3>Image 3</h3>
          <p>We all love the third one!</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<script>
    <?php include("script.js") ?>
</script>