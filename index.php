<?php 
include 'assets/php/config.php'; 
include 'assets/php/cookies.php';

// Setzt Seiteneigenschaften
$page_name = "index";
$page_title = $title[$page_name];
$page_message = $message[$page_name];

// Kopfbereich einbinden
include 'assets/php/head.php'; 
?>

<div align="center">
    <table border="0" cellpadding="0" cellspacing="0" width="955">
        <tr>
            <td valign="top" style="padding-left: 4px" colspan="3">
                <h1><?php echo $page_title; ?></h1>
                <p><?php echo $page_message; ?></p>
                <p>Wir, Brigitte und Wolfgang Ternis, sind in den Bereichen Design, Kunst, Kultur und Tourismus in Rheinhessen tätig. Unser Ziel ist die Förderung von Kreativität, Lebensqualität und Wohlbefinden.</p>
            </td>
        </tr>
        <tr>
            <td valign="top">
                <img src="assets/img/img_index1.jpg" width="300" height="300" alt="Bild">
            </td>
            <td valign="top">
                <img src="assets/img/lyon.JPG" width="300" height="300" alt="Bild">
            </td>
        </tr>
        <tr>
            <td colspan="3" align="center">
                <p>Gästeführungen, Fahrradführungen, Radwanderungen</p>
            </td>
        </tr>
    </table>
</div>

<?php 
include 'assets/php/footer.php'; 
?>
