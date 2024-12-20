<html>
<head>
    <meta http-equiv="Content-Language" content="de">
    <meta name="keywords" content="Wonnegauer Designwerkstatt, Ternis, Designwerkstatt Ternis, Designwerkstatt, Brigitte Ternis, Wolfgang Ternis, Design Flörsheim-Dalsheim, Kunst Flörsheim-Dalsheim, Kultur Flörsheim-Dalsheim, Tourismus Flörsheim-Dalsheim, Gästeführung Flörsheim-Dalsheim, Gästeführungen Flörsheim-Dalsheim, Atelier, Atelier Flörsheim-Dalsheim, Atelier Ternis, Kunst in Rheinhessen, Kunst im Wonnegau, Rheinhessen, Wonnegau, VG Monsheim, Rheinland-Pfalz, Gästeführungen Rheinhessen, Künstler Rheinhessen">
    <meta name="description" content="Design, Kunst, Kultur, Gästeführungen und Tourismus">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title><?php echo $title[$page_name]; ?></title>

	<?php
	$theme = isset($_COOKIE['theme']) ? $_COOKIE['theme'] : 'light'; 
	?>
	<link rel="stylesheet" href="assets/css/styles.css">
	<link rel="stylesheet" href="assets/css/navbar.css">
	<link rel="stylesheet" href="assets/css/<?php echo $theme; ?>/styles.css">

    <style>
        a:hover {color: #CC0000; font-family: Consolas}
    </style>
</head>
<body>
<?php include 'assets/php/header.php'; ?>

<main>
    <h1><?php echo $title[$page_name]; ?></h1>
    <p><?php echo $message[$page_name]; ?></p>

