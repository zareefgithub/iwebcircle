<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Project;
use App\Models\Testimonial;

class HomeController extends Controller
{
    public function index()
    {
        $featuredProjects = Project::featured()->limit(3)->get();
        $featuredTestimonials = Testimonial::featured()->limit(3)->get();
        $latestPosts = Post::published()->limit(3)->get();

        return view('home', compact('featuredProjects', 'featuredTestimonials', 'latestPosts'));
    }
}
