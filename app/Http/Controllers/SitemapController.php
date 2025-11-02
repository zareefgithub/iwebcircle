<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Project;
use Illuminate\Support\Facades\Response;

class SitemapController extends Controller
{
    public function index()
    {
        $posts = Post::published()->get();
        $projects = Project::orderBy('created_at', 'desc')->get();

        $sitemap = '<?xml version="1.0" encoding="UTF-8"?>';
        $sitemap .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

        // Static pages
        $staticPages = [
            ['url' => route('home'), 'priority' => '1.0', 'changefreq' => 'daily'],
            ['url' => route('about'), 'priority' => '0.8', 'changefreq' => 'monthly'],
            ['url' => route('services'), 'priority' => '0.9', 'changefreq' => 'monthly'],
            ['url' => route('products.index'), 'priority' => '0.8', 'changefreq' => 'weekly'],
            ['url' => route('blog.index'), 'priority' => '0.8', 'changefreq' => 'daily'],
            ['url' => route('contact'), 'priority' => '0.7', 'changefreq' => 'monthly'],
        ];

        foreach ($staticPages as $page) {
            $sitemap .= '<url>';
            $sitemap .= '<loc>' . $page['url'] . '</loc>';
            $sitemap .= '<changefreq>' . $page['changefreq'] . '</changefreq>';
            $sitemap .= '<priority>' . $page['priority'] . '</priority>';
            $sitemap .= '</url>';
        }

        // Blog posts
        foreach ($posts as $post) {
            $sitemap .= '<url>';
            $sitemap .= '<loc>' . route('blog.show', $post) . '</loc>';
            $sitemap .= '<lastmod>' . $post->updated_at->format('Y-m-d') . '</lastmod>';
            $sitemap .= '<changefreq>monthly</changefreq>';
            $sitemap .= '<priority>0.7</priority>';
            $sitemap .= '</url>';
        }

        // Products
        foreach ($projects as $project) {
            $sitemap .= '<url>';
            $sitemap .= '<loc>' . route('products.show', $project) . '</loc>';
            $sitemap .= '<lastmod>' . $project->updated_at->format('Y-m-d') . '</lastmod>';
            $sitemap .= '<changefreq>monthly</changefreq>';
            $sitemap .= '<priority>0.7</priority>';
            $sitemap .= '</url>';
        }

        $sitemap .= '</urlset>';

        return Response::make($sitemap, 200, [
            'Content-Type' => 'application/xml'
        ]);
    }
}

