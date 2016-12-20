<?php
// TODO: text wrap not perfect on long file names 

$years = array_diff(scandir(RESULTS_PATH), array('.', '..'));
foreach($years as $year) {
    $allFiles = scandir(RESULTS_PATH.'/'.$year);
    $filteredFiles = array_diff($allFiles, array('.', '..'));
    $filteredFiles = array_values($filteredFiles);
    $results[$year] = $filteredFiles;
}

$results = array_reverse($results, true);
?>
<nav class="text-center">
    <h1 class="page-header">Select to view</h1>
    <ul class="nav nav-list">
        <?php foreach($results as $year => $files) : ?>
            <li>
                <h4 id="results-year"><?= $year ?></h4>
                <ul class="nav nav-list">
                    <?php foreach($files as $file) : ?>
                        <?php $fileName = ucwords(substr(str_replace('_', ' ', $file), 0, strrpos(str_replace('_', ' ', $file), "."))); ?>
                        <li><a href="?page=results&year=<?= $year ?>&target=<?= $file ?>"><?= $fileName ?></a></li>
                    <?php endforeach ; ?>
                </ul>
            </li>
        <?php endforeach ; ?>

    </ul>
</nav>
<?php /*
<li id="back-to-top-divider" role="separator" class="divider"><hr /></li>
<li id="back-to-top" style="display: none;"><a href="#top">Back to top</a></li>
<!-- Hide the 'back to top' link if not scrolled -->
<script>
	$(window).on("resize scroll", function(e){
		if ($(this).scrollTop() > 0) {
			$('#back-to-top').fadeIn();
			$('#back-to-top-divider').fadeIn();
		} else {
			$('#back-to-top').fadeOut();
			$('#back-to-top-divider').fadeOut();
		}
	});
</script>*/ ?>