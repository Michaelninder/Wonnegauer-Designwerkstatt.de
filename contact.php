<?php 
include 'assets/php/config.php'; 
include 'assets/php/cookies.php';

$page_name = "contact";
$page_title = $title[$page_name];
$page_message = $message[$page_name];

include 'assets/php/head.php'; 
?>

<div align="center">
    <h1><?php echo $page_title; ?></h1>
    <p><?php echo $page_message; ?></p>
    <p>Sie können uns per E-Mail oder Telefon erreichen. Wir freuen uns auf Ihre Nachricht!</p>
</div>

<?php 
include 'assets/php/footer.php'; 
?>
