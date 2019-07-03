<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @foreach ($actors as $actor)
    <url>
        <loc>{{route('main.specified',['name'=>'actor','value'=> $actor->name])}}</loc>
        <lastmod>{{ $actor->created_at->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.9</priority>
    </url>
    @endforeach
</urlset>