<?php require("config.php"); ?>
<!DOCTYPE html>
<html>
<head>
<title><?php echo SITE_NAME; ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- w3 template css -->
<link rel="stylesheet" type="text/css" href="<?php echo STYLES_PATH . "w3c.css"; ?>" />
<!-- awesome fonts css -->
<link rel="stylesheet" type="text/css" href="<?php echo STYLES_PATH . "font-awesome.min.css"; ?>" />
<!-- bootstrap 3.3.7 css -->
<link rel="stylesheet" href="<?php echo STYLES_PATH . 'bootstrap/bootstrap.min.css' ?>">
<!-- custom css -->
<link rel="stylesheet" type="text/css" href="<?php echo STYLES_PATH . "custom-main.css"; ?>" />
<!-- scroll arrow css -->
<link rel="stylesheet" type="text/css" href="<?php echo STYLES_PATH . "scroll-arrow.css"; ?>" />
<!-- meet the team css -->
<link rel="stylesheet" type="text/css" href="<?php echo STYLES_PATH . "meet-the-team-style.css"; ?>" />
<!-- jQuery -->
<script src="<?php echo JS_PATH . 'jquery.min.js'?>"></script>
</head>
<body>

<!-- Navbar -->
<?php include INC_PATH . 'bootstrap_navbar.php'; ?>

<!-- Page -->
<?php include INC_PATH . 'pages/' . $page . '.page.php'; ?>

<!-- Footer -->
<?php include INC_PATH . 'footer.php'; ?>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo JS_PATH . 'bootstrap.min.js' ?>"></script>

</body>
</html>
