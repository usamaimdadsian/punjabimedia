<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @foreach ($videos as $video)
    <url>
        <loc>{{route('main.single',['name'=>$video->video_page_link,'video'=>$video->id])}}</loc>
        <lastmod>{{ $video->created_at->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.9</priority>
    </url>
    @endforeach
</urlset>