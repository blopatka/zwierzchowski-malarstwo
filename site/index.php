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
	<link rel="apple-touch-icon" sizes="57x57" href="http://zwierzchowski.art.pl/images/favicon/apple-touch-icon-57x57.png?v=699GY03xWN">
	<link rel="apple-touch-icon" sizes="60x60" href="http://zwierzchowski.art.pl/images/favicon/apple-touch-icon-60x60.png?v=699GY03xWN">
	<link rel="apple-touch-icon" sizes="72x72" href="http://zwierzchowski.art.pl/images/favicon/apple-touch-icon-72x72.png?v=699GY03xWN">
	<link rel="apple-touch-icon" sizes="76x76" href="http://zwierzchowski.art.pl/images/favicon/apple-touch-icon-76x76.png?v=699GY03xWN">
	<link rel="apple-touch-icon" sizes="114x114" href="http://zwierzchowski.art.pl/images/favicon/apple-touch-icon-114x114.png?v=699GY03xWN">
	<link rel="apple-touch-icon" sizes="120x120" href="http://zwierzchowski.art.pl/images/favicon/apple-touch-icon-120x120.png?v=699GY03xWN">
	<link rel="apple-touch-icon" sizes="144x144" href="http://zwierzchowski.art.pl/images/favicon/apple-touch-icon-144x144.png?v=699GY03xWN">
	<link rel="icon" type="image/png" href="http://zwierzchowski.art.pl/images/favicon/favicon-32x32.png?v=699GY03xWN" sizes="32x32">
	<link rel="icon" type="image/png" href="http://zwierzchowski.art.pl/images/favicon/favicon-96x96.png?v=699GY03xWN" sizes="96x96">
	<link rel="icon" type="image/png" href="http://zwierzchowski.art.pl/images/favicon/favicon-16x16.png?v=699GY03xWN" sizes="16x16">
	<link rel="manifest" href="http://zwierzchowski.art.pl/images/favicon/manifest.json?v=699GY03xWN">
	<link rel="mask-icon" href="http://zwierzchowski.art.pl/images/favicon/safari-pinned-tab.svg?v=699GY03xWN" color="#4d4d4d">
	<link rel="shortcut icon" href="http://zwierzchowski.art.pl/images/favicon/favicon.ico?v=699GY03xWN">
	<meta name="apple-mobile-web-app-title" content="zwierzchowski.art.pl">
	<meta name="application-name" content="zwierzchowski.art.pl">
	<meta name="msapplication-TileColor" content="#4d4d4d">
	<meta name="msapplication-TileImage" content="http://zwierzchowski.art.pl/images/favicon/mstile-144x144.png?v=699GY03xWN">
	<meta name="msapplication-config" content="http://zwierzchowski.art.pl/images/favicon/browserconfig.xml?v=699GY03xWN">
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
