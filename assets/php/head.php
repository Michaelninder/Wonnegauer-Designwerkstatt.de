<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="windows-1252">
    <meta http-equiv="Content-Language" content="de">
    <meta name="keywords" content="Wonnegauer Designwerkstatt, Ternis, Designwerkstatt Ternis, Designwerkstatt, Brigitte Ternis, Wolfgang Ternis, Design Flörsheim-Dalsheim, Kunst Flörsheim-Dalsheim, Kultur Flörsheim-Dalsheim, Tourismus Flörsheim-Dalsheim, Gästeführung Flörsheim-Dalsheim, Gästeführungen Flörsheim-Dalsheim, Atelier, Atelier Flörsheim-Dalshei, Atelier Ternis, Kunst in Rheinhessen, Kunst im Wonnegau, Rheinhessen, Wonnegau, VG Monsheim, Rheinland-Pfalz, Gästeführungen Rheinhessen, Künstler Rheinhessen">
    <meta name="description" content="Design, Kunst, Kultur, Gästeführungen und Tourismus">
    <title><?php echo ${page.title}; ?></title>

    <?php
    // Prüfen, ob ein Theme-Modus im Cookie gespeichert ist; wenn nicht, wird 'light' als Standard verwendet.
    $theme_mode = $_COOKIE['theme_mode'] ?? 'light';
    $theme_stylesheet = ($theme_mode === 'dark') ? 'assets/css/dark/styles.css' : 'assets/css/light/styles.css';
    $navbar_stylesheet = ($theme_mode === 'dark') ? 'assets/css/dark/navbar.css' : 'assets/css/light/navbar.css';
    ?>

    <!-- Dynamische Einbindung der Stylesheets für den ausgewählten Modus -->
    <link rel="stylesheet" href="<?php echo $theme_stylesheet; ?>">
    <link rel="stylesheet" href="<?php echo $navbar_stylesheet; ?>">

    <style>
      /* Zusätzliche, spezifische Styles */
      a:hover { color: #CC0000; font-family: Consolas; }
    </style>
</head>
<body>

<?php include 'header.php'; ?>

<main>
  <h1><?php echo ${page.title}; ?></h1>
  <p><?php echo ${page.message}; ?></p>
</main>
