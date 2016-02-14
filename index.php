<ul id="galerie">
<?php
/**
 * Created by PhpStorm.
 * User: Frank
 * Date: 14.02.2016
 * Time: 16:32
 */

// Ordnername
$ordner = "bilder";

$Bilder_Verzeichnis = scandir($ordner); // Sortierung A-Z

foreach ($Bilder_Verzeichnis as $bild) {
    $bildinfo = pathinfo($ordner."/".$bild);

    if ($bild != "." && $bild != ".."  && $bild != "_notes" && $bildinfo['basename'] != "Thumbs.db") {
        ?>
         <a href="<?php echo $bildinfo['dirname']."/".$bildinfo['basename'];?>">
         <img src="<?php echo $bildinfo['dirname']."/".$bildinfo['basename'];?>" width="100" alt="Vorschau" /></a>
         <?php
    };
};
?>
</ul>