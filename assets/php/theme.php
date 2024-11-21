<?php
// Prüfen, ob der Modus per GET-Parameter übergeben wird (z. B. theme.php?mode=dark)
if (isset($_GET['mode'])) {
    $mode = $_GET['mode'];
    
    // Validieren und nur 'light' oder 'dark' akzeptieren
    if ($mode === 'light' || $mode === 'dark') {
        // Cookie setzen, das 30 Tage lang gültig ist
        setcookie('theme_mode', $mode, time() + (30 * 24 * 60 * 60), '/');
        $_COOKIE['theme_mode'] = $mode; // Direkt in der Sitzung speichern für sofortige Wirkung
    }
}

// Zurück zur vorherigen Seite oder zur Startseite weiterleiten
header('Location: ' . $_SERVER['HTTP_REFERER'] ?? 'index.php');
exit;
