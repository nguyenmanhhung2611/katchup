<?= '<?xml version="1.0" encoding="UTF-8" ?>' ?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc><?= ITQ_BASE_URL;?></loc> 
        <priority>1.0</priority>
    </url>

    <!-- My code is looking quite different, but the principle is similar -->
    <?php foreach($data as $url) { ?>
    <url>
        <loc><?= ITQ_BASE_URL.$url ?></loc>
        <priority>0.5</priority>
    </url>
    <?php } ?>

</urlset>