<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc>{{route('main.index')}}</loc>
        <lastmod>{{date('Y-m-d H:i:s')}}</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.9</priority>
    </url>
    <url>
        <loc>{{route('main.atoz')}}</loc>
        <lastmod>{{date('Y-m-d H:i:s')}}</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>{{route('main.specified',['name'=>'mostWatched','value'=>'stageDramas'])}}</loc>
        <lastmod>{{date('Y-m-d H:i:s')}}</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>{{route('main.specified',['name'=>'topRated','value'=>'stageDramas'])}}</loc>
        <lastmod>{{date('Y-m-d H:i:s')}}</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>{{route('main.contact')}}</loc>
        <lastmod>{{date('Y-m-d H:i:s')}}</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
    </url>
</urlset>