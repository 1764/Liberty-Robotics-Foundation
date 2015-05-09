    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide">
      <div class="carousel-inner">
        <?php

        $carouselArray = array(
            
		array(Title => "Thanks Blaine", IMG=>"image02.png", Caption => "Thank you to Team 1764 for this site.", URL => "/ourteam/sponsorlist/", btn=>"Our Sponsors"),
        array(Title => "Science Night", IMG => "image01.png", Caption => "Dallas interacts with youth at Liberty Oaks Elementary School on Science Night.", URL => "/media/galleries/index.php?gallery=sciencenight&amp;title=Science%20Night", btn => "More photos"),
        array(Title => "Our Team", IMG => "image03.png", Caption => "FIRST<sup>&reg;</sup> Team 1764 in all of its splendor and glory!", URL => "/ourteam/missionandvalues/", btn => "Find out more"),
        array(Title => "Highway Cleanup", IMG => "image04.png", Caption => "The team cleans up a stretch of highway adopted through MoDot's Adopt-a-Highway program.", URL => "/media/galleries/index.php?gallery=highway&amp;title=Highway%20Cleanup", btn => "More photos"),
        );

        $imgCounter = count($carouselArray);
  
        for($i=0; $i<$imgCounter; $i++)
        {
        ?>
        <div class="item <?php if($i==0){echo(active);}?>">
        <img src="/img/homepage/<?= $carouselArray[$i]["IMG"]; ?>" alt="" width="100%">
          <div class="container">
            <div class="carousel-caption">
              <h1><?= $carouselArray[$i]["Title"]; ?></h1>
              <p class="lead"><?= $carouselArray[$i]["Caption"]; ?></p>
              <a class="btn btn-primary" href="<?= $carouselArray[$i]["URL"]; ?>"><?= $carouselArray[$i]["btn"]; ?> &raquo;</a>
            </div>
          </div>
        </div>
        <?php
        }
        ?>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div><!-- /.carousel -->

<script>
  $('.carousel').carousel({
  interval: 2000
})
</script>
   </div>