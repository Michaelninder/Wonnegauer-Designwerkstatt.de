<?php
// Überprüfen, ob das Cookie bereits gesetzt ist
if (!isset($_COOKIE['cookie_consent'])) {
    // Wenn kein Cookie gesetzt ist, zeigen wir das Banner an.
    echo '
    <div id="cookie-banner" style="position: fixed; bottom: 0; width: 100%; background-color: #333; color: #fff; padding: 10px; text-align: center; z-index: 1000;">
        <p>Diese Website verwendet Cookies, um sicherzustellen, dass Sie die beste Erfahrung auf unserer Website machen. <a href="datenschutz.php" style="color: #FFD700;">Mehr erfahren</a>.</p>
        <button onclick="acceptCookies()" style="background-color: #FFD700; color: #333; padding: 5px 10px; border: none; cursor: pointer;">Akzeptieren</button>
    </div>
    <script>
        function acceptCookies() {
            // Cookie setzen, damit das Banner nicht erneut angezeigt wird
            document.cookie = "cookie_consent=1; path=/; max-age=" + 60*60*24*30 + ";"; // 30 Tage gültig
            document.getElementById("cookie-banner").style.display = "none";
        }
    </script>
    ';
}
?>
