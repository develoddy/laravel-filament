<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Portfolio;
use App\Models\Blog;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PageRoutesTest extends TestCase
{
    /**
     * Test that all main pages return HTTP 200.
     */
    public function test_main_pages_are_accessible(): void
    {
        $routes = [
            '/',           // welcome
            '/about',      // about
            '/service',    // service
            '/contact',    // contact
            '/my-project', // my-project
            '/blog',       // blog
        ];

        foreach ($routes as $route) {
            $response = $this->get($route);
            $response->assertStatus(200);
        }
    }

    /**
     * Test portfolio detail page returns HTTP 200 if record exists.
     */
    public function test_portfolio_detail_page_is_accessible_when_record_exists(): void
    {
        $portfolio = Portfolio::first();

        if ($portfolio) {
            $response = $this->get(route('my-project.show', $portfolio->slug));
            $response->assertStatus(200);
        } else {
            $this->markTestSkipped('No Portfolio records exist in database');
        }
    }

    /**
     * Test blog detail page returns HTTP 200 if record exists.
     */
    public function test_blog_detail_page_is_accessible_when_record_exists(): void
    {
        $blog = Blog::first();

        if ($blog) {
            $response = $this->get(route('blog.show', $blog->slug));
            $response->assertStatus(200);
        } else {
            $this->markTestSkipped('No Blog records exist in database');
        }
    }
}
