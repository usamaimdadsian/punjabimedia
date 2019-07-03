<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @foreach ($years as $year)
    <url>
        <loc>{{route('main.specified',['name'=>'year','value'=>$year])}}</loc>
        <lastmod>{{ date('Y-m-d H:i:s') }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.5</priority>
    </url>
    @endforeach
</urlset>