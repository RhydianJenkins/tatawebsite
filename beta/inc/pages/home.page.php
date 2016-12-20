<!-- Blurred bg body -->
<div id="fullImageBackground"></div>

<!-- Welcome Header -->
<div id="welcome-div" class="w3-animate-opacity container-fluid text-center padding-0">
    <div id="header-text-wrapper">
        <h1 id="main-header">Tata Steel Sailing Club</h1>
        <p id="second-header">Margam</p>
		<a class="arrow-wrap smoothScroll" href="#anchor"><span class="arrow"></span></a>
    </div>
</div>

<!-- Page start anchor -->
<div id="anchor"></div>

<!-- Info -->
<div id="first-content" class="container-fluid border-top-3" style="background-color: rgba(255, 255, 255, 1); min-height: 400px">
	<?php include INC_PATH . 'front-page-info.php'; ?>
</div>

<!-- Carousel -->
<div class="container-fluid border-top-3" style="height: 800px; padding-left: 0; padding-right: 0;">
	<?php include INC_PATH . 'carousel.php'; ?>
</div>

<!-- News -->
<div id="first-content" class="container-fluid border-top-3" style="background-color: rgba(255, 255, 255, 1); min-height: 400px">
	<?php include INC_PATH . 'news.php'; ?>
</div>

<!-- Location -->
<div class="container-fluid border-top-3" style="height: 800px; padding-left: 0; padding-right: 0;">
	<?php include(INC_PATH . "map.html"); ?>
</div>

<!-- FAQ -->
<div class="container-fluid border-top-3" style="background-color: rgba(0, 0, 0, 0.6); min-height: 400px;">
	<?php include INC_PATH . 'faq.php'; ?>
</div>

<!-- Facebook feed -->
<div class="container-fluid border-top-3" style="background-color: rgb(255, 255, 255); min-height: 400px;">
	<?php include INC_PATH . 'facebook.php'; ?>
</div>

<!-- Smooth scrolling -->
<script src="<?= JS_PATH . 'smoothscroll.js'; ?>"></script>