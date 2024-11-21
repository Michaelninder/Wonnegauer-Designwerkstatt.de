<header>
    <nav>
        <ul>
            <li><a href="index.php"><?php echo $title['index']; ?></a></li>
            <li><a href="contact.php"><?php echo $title['contact']; ?></a></li>
            <li><a href="design.php"><?php echo $title['design']; ?></a></li>
            <li><a href="art.php"><?php echo $title['art']; ?></a></li>
            <li><a href="current.php"><?php echo $title['current']; ?></a></li>
            <li><a href="tours.php"><?php echo $title['tours']; ?></a></li>
            <li><a href="us.php"><?php echo $title['us']; ?></a></li>
        </ul>
        <div>
            <button onclick="toggleTheme()">Toggle Theme</button>
        </div>
    </nav>
</header>

<script>
    function toggleTheme() {
        let currentTheme = document.cookie.replace(/(?:(?:^|.*;\s*)theme\s*\=\s*([^;]*).*$)|^.*$/, "$1");
        let newTheme = currentTheme === 'dark' ? 'light' : 'dark';
        document.cookie = "theme=" + newTheme + "; path=/";
        location.reload();
    }
</script>
