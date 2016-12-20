<?php
// Error reporting
//error_reporting(0);	// off, no error reporting

// Start the session
session_start();

// Names
define("SITE_NAME", "Tata Steel Sailing Club");

// Paths
define("ROOT_PATH", "./");
//define("ROOT_PATH", "http://".$_SERVER['SERVER_NAME']);
//define("ROOT_PATH", realpath(dirname(__FILE__)) . '/');	// make sure files are readable by the server!
//var_dump(ROOT_PATH);die;
define("STYLES_PATH", ROOT_PATH . "res/css/");
define("JS_PATH", ROOT_PATH . "res/js/");
define("IMGS_PATH", ROOT_PATH . "res/imgs/");
define("GALLERY_PATH", ROOT_PATH . "res/imgs/gallery/");
define("INC_PATH", ROOT_PATH . "inc/");
define("SCRIPTS_PATH", ROOT_PATH . "res/php/");
define("RESULTS_PATH", INC_PATH . "results/");
define("PAGES_PATH", INC_PATH . "pages/");

// autoload classes
spl_autoload_register(function ($class) {
    $file = SCRIPTS_PATH . 'classes/' . $class . '.class.php';
    if (file_exists($file)) { require $file; }
});

// routing
$allPages = array_filter(scandir(PAGES_PATH), function($item) {
    return $item[0] !== '.';
});
foreach ($allPages as $key => $page) {
    $allPages[$key] = substr($page, 0, strpos($page, '.'));
}
if (!empty($_GET['page']) && in_array($_GET['page'], $allPages)) {
    $page = $_GET['page'];
} else {
    $page = 'home';
}
