<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>

<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <sitemap>
        <loc>{{route('sitemap.navigation')}}</loc>
    </sitemap>
    <sitemap>
        <loc>{{route('sitemap.videos')}}</loc>
    </sitemap>
    <sitemap>
        <loc>{{route('sitemap.actors')}}</loc>
    </sitemap>
    <sitemap>
        <loc>{{route('sitemap.years')}}</loc>
    </sitemap>
</sitemapindex>