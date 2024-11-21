<?php
if (isset($_GET['theme'])) {
    $theme = $_GET['theme'] === 'dark' ? 'dark' : 'light';
    setcookie('theme', $theme, time() + 3600 * 24 * 30, '/');  // Setze Cookie für 30 Tage
}
header("Location: " . $_SERVER['HTTP_REFERER']);
exit;
?>
