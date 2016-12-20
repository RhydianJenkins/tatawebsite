<?php
    $carouselImages = scandir(IMGS_PATH . 'carousel');
    $carouselImages = array_values(preg_grep('/\.(jpg|jpeg|png|gif)(?:[\?\#].*)?$/i', $carouselImages));
?>
<!-- Full Page Image Background Carousel Header -->
<div id="myCarousel" class="carousel slide">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <?php foreach($carouselImages as $key => $carouselImage) : ?>
            <li data-target="#myCarousel" data-slide-to="<?= $key ?>" <?= ($key === 0) ? 'class="active"' : '' ; ?>></li>
        <?php endforeach ; ?>
    </ol>

    <!-- Wrapper for Slides -->
    <div class="carousel-inner">
        <?php foreach($carouselImages as $key => $carouselImage) : ?>
            <div class="item<?= ($key === 0) ? ' active' : '' ; ?>">
                <div class="fill-bottom" style="background-image:url('<?= IMGS_PATH . 'carousel/' . $carouselImage; ?>');"></div>
            </div>
        <?php endforeach ; ?>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="icon-prev"></span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="icon-next"></span>
    </a>

</div>