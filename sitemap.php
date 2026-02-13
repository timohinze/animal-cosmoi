<?php
require_once 'functions.php';

header("Content-Type: application/xml; charset=utf-8");

$seiten = [
    '',
    'atmen-ohne-pause/',
    'datenschutz/',
    'filamenta/',
    'fischschuppengarten/',
    'impressum/',
    'K49814/',
    'schattentheater/'
];

echo '<?xml version="1.0" encoding="UTF-8"?>';
?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
        xmlns:xhtml="http://www.w3.org/1999/xhtml">

<?php foreach ($seiten as $seite): ?>
    <url>
        <loc><?= ROOT . 'de/' . $seite ?></loc>
        <xhtml:link rel="alternate" hreflang="de" href="<?= ROOT . 'de/' . $seite ?>" />
        <xhtml:link rel="alternate" hreflang="en" href="<?= ROOT . 'en/' . $seite ?>" />
    </url>

    <url>
        <loc><?= ROOT . 'en/' . $seite ?></loc>
        <xhtml:link rel="alternate" hreflang="de" href="<?= ROOT . 'de/' . $seite ?>" />
        <xhtml:link rel="alternate" hreflang="en" href="<?= ROOT . 'en/' . $seite ?>" />
    </url>
<?php endforeach; ?>

</urlset>
