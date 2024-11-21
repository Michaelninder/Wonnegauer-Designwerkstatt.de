<?php
// Cookie für den Theme-Modus setzen, falls nicht gesetzt
if (isset($_GET['theme'])) {
    $theme = $_GET['theme'] === 'dark' ? 'dark' : 'light';
    setcookie('theme', $theme, time() + 3600 * 24 * 30, '/');  
}
?>
