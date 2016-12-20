<div class="container-fluid">
    <div class="row row-eq-height">

        <!-- Sidebar -->
        <div class="col-lg-3">
            <?php include INC_PATH . 'results_sidebar.php'; ?>
        </div>

        <!-- Table -->
        <div class="col-lg-9">
            <?php
                $fileFound = false;
                if (!empty($_GET['year']) && file_exists(RESULTS_PATH . $_GET['year'])) {
                    $results = array_values(array_reverse(array_diff(scandir(RESULTS_PATH . $_GET['year']), array('.', '..')), true));
                    foreach($results as $result) {
                        if ($result == $_GET['target']) {
                            $filteredResultName = ucwords(substr(str_replace('_', ' ', $result), 0, strrpos(str_replace('_', ' ', $result), "."))); // make it look pretty
                            include(RESULTS_PATH . $_GET['year'] . '/' . $result);
                            $fileFound = true;
                        }
                    }
                }

                // display sailing instructions page if no results found
                if (!$fileFound) {
                    include(PAGES_PATH . 'sailing_instructions.page.php');
                }
            ?>
        </div>

    </div>
</div>