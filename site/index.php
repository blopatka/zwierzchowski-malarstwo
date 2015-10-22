<?php
$add_site = true;
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="description" content="Marian Zwierzchowski - Galeria malarstwa"/>
	<meta name="author" content="Bartłomiej Łopatka www.lopatka.info"/>
	<title>Marian Zwierzchowski - Malarstwo</title>
	<link href='https://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<link type="text/css" rel="stylesheet" href="css/lightgallery.min.css" /> 
    <link href="css/style.css" rel="stylesheet" type="text/css" />
	
	<!-- start of favicons - http://realfavicongenerator.net/ -->
	<link rel="apple-touch-icon" sizes="57x57" href="/images/favicon/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/images/favicon/apple-touch-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/images/favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/images/favicon/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/images/favicon/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/images/favicon/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/images/favicon/apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/images/favicon/apple-touch-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/images/favicon/apple-touch-icon-180x180.png">
	<link rel="icon" type="image/png" href="/images/favicon/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="/images/favicon/favicon-194x194.png" sizes="194x194">
	<link rel="icon" type="image/png" href="/images/favicon/favicon-96x96.png" sizes="96x96">
	<link rel="icon" type="image/png" href="/images/favicon/android-chrome-192x192.png" sizes="192x192">
	<link rel="icon" type="image/png" href="/images/favicon/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="/images/favicon/manifest.json">
	<link rel="shortcut icon" href="/images/favicon/favicon.ico">
	<meta name="apple-mobile-web-app-title" content="Marian Zwierzchowski - Malarstwo">
	<meta name="application-name" content="Marian Zwierzchowski - Malarstwo">
	<meta name="msapplication-TileColor" content="#4d4d4d">
	<meta name="msapplication-TileImage" content="/images/favicon/mstile-144x144.png">
	<meta name="msapplication-config" content="/images/favicon/browserconfig.xml">
	<meta name="theme-color" content="#4d4d4d">
	<!-- end of favicons -->
	
    <script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
    <script src="js/jquery.mousewheel.min.js" type="text/javascript"></script>
    <script src="js/jquery.imgCenter.minified.js" type="text/javascript"></script>
	<script src="js/gallery.js" type="text/javascript"></script>
    
	<?php include_once("analyticstracking.php") ?>
</head>

<body>
    <script src="js/lightgallery.min.js"></script>
    <script src="js/lg-thumbnail.min.js"></script>
    <script src="js/lg-fullscreen.min.js"></script>
<div id="top">
<?php
include "include/header.php";
include "include/menu.php";	
 
?>
<div id="tresc">
<?php
if (!isset($_GET['go'])) {
	$_GET['go'] = "";
}

if (!isset($_GET['dir'])) {
	$_GET['dir'] = "../page";
}


$dir = $_GET['dir'];
$go = $_GET['go'];


if(!empty($go)) {
	if(is_file("page/$dir/$go.php")) {
		include "page/$dir/$go.php";
	} else {
		include "page/404.php";
	}
} else {
	include "page/zyciorys.php";
}

include "include/bottom.php"
?>
</div>
</div>
</body>
</html>
