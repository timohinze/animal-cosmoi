<?php
/* =========================
   KONFIGURATION
========================= */

define('ROOT', 'https://animalcosmoi.org/');


/* =========================
   SPRACHE ERMITTELN
========================= */

function get_sprache(): string
{
    $uri = $_SERVER['REQUEST_URI'];

    if (preg_match('#^/(en)/#', $uri)) {
        return 'en';
    }

    return 'de';
}

$sprache = get_sprache();



function get_base_url(): string
{
    global $sprache;

    return ROOT . $sprache . '/';
}

/* =========================
   TEXT HELPER
========================= */

function zeige_text(array $text)
{
    global $sprache;


    if ($sprache === 'en' && !empty($text['en'])) {
        echo $text['en'];
    }else{
	    
	    echo $text['de'] ?? '';
	  }
}


/* =========================
   BILD HELPER
========================= */

function bild(string $path, string $alt = '')
{
    // Wenn kein führender Slash → relativer Pfad zur aktuellen Datei
    if ($path[0] !== '/') {
        $path = dirname($_SERVER['SCRIPT_NAME']) . '/' . $path;
    }

    $docRoot = $_SERVER['DOCUMENT_ROOT'];
    $fullPath = $docRoot . $path;

    if (!file_exists($fullPath)) {
        echo "Bild nicht gefunden: " . $fullPath;
        return;
    }

    [$width, $height] = getimagesize($fullPath);

    echo '<img 
            src="' . $path . '" 
            width="' . $width . '" 
            height="' . $height . '" 
            loading="lazy"
            alt="' . htmlspecialchars($alt) . '">';
}


/* =========================
   HEADER FÜR UNTERSEITEN
   INDEX SIEHE index.php
========================= */

function zeige_header(string $titel = '', array $description = [])
{
    global $sprache;

    ?>
    <!DOCTYPE html>
    <html lang="<?= $sprache ?>">
    <head>
        <meta charset="UTF-8">
        <title>Animal Cosmoi – <?= htmlspecialchars($titel) ?></title>
        <meta name="description" content="<?= htmlspecialchars(zeige_text($description)) ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <?php seo_tags(); ?>
        
        <link rel="preload" as="image" href="<?php ROOT; ?>/bg.jpg" fetchpriority="high">


<link rel="preload" href="/style.css" as="style">
<link rel="stylesheet" href="/style.css">

<link rel="preload" href="/fonts/gfs-didot-v18-latin-regular.woff2" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="/fonts/inter-v20-latin-regular.woff2" as="font" type="font/woff2" crossorigin>

    <?php
}

/* =========================
   Top Bar
========================= */

function zeige_top_bar($farbe = null){
	global $base;
	global $sprache;
	?>
		<div class="header" style="background: <?php echo $farbe; ?>">
		
		
	<div class="pfeil">
		<a href="<?php echo get_base_url();?>" aria-label="To go home">
<?php echo	'<?xml version="1.0" encoding="utf-8"?>';?>
<svg version="1.1" id="Ebene_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="10.5px" height="8.9px" viewBox="0 0 10.5 8.9" style="enable-background:new 0 0 10.5 8.9;" xml:space="preserve">
<polygon points="2,3.8 0.7,4.3 1.8,4.9 8,8.3 8.5,7.5 2.5,4.3 9.6,1.5 10.1,0.6 "/>
</svg>
		</a>

	</div>
	</div>	

	
	<?php
}


/* =========================
   FOOTER
========================= */

function zeige_footer()
{
	global $sprache;
    $base = get_base_url();
    ?>
    <div class="footer">
	 	<?php  if ($sprache === 'en') { ?>
	        <a href="<?= $base ?>datenschutz/">Privacy</a> |
			<a href="<?= $base ?>impressum/">Imprint</a>
 	
	 	<?php }else { ?>
	        <a href="<?= $base ?>datenschutz/">Datenschutz</a> |
			<a href="<?= $base ?>impressum/">Impressum</a>
    
	    <?php } ?>
	    
    </div>
    </body>
    </html>
    <?php
}


/* =========================
   SPRACHWECHSLER
========================= */

function sprachwechsler()
{
    global $sprache;

    $currentPath = preg_replace('#^/(de|en)#', '', $_SERVER['REQUEST_URI']);
    $currentPath = rtrim($currentPath, '/') . '/';

    echo '<a href="' . ROOT . 'de' . $currentPath . '">DE</a> | ';
    echo '<a href="' . ROOT . 'en' . $currentPath . '">EN</a>';
}


/* =========================
   SEO
========================= */

function seo_tags()
{
    global $sprache;

/*
    $title       = $options['title'][$sprache] ?? 'Animal Cosmoi';
    $description = $options['description'][$sprache] ?? '';
*/

    $currentPath = preg_replace('#^/(de|en)#', '', $_SERVER['REQUEST_URI']);
    $currentPath = rtrim($currentPath, '/') . '/';

    $canonical = ROOT . $sprache . $currentPath;

    echo '<link rel="canonical" href="' . $canonical . '">' . PHP_EOL;
    echo '<link rel="alternate" hreflang="de" href="' . ROOT . 'de' . $currentPath . '">' . PHP_EOL;
    echo '<link rel="alternate" hreflang="en" href="' . ROOT . 'en' . $currentPath . '">' . PHP_EOL;
    echo '<link rel="alternate" hreflang="x-default" href="' . ROOT . 'de' . $currentPath . '">' . PHP_EOL;
}

